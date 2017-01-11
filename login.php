<?php session_start();
//require 'funciones.php';
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
};

if (isset($_SESSION['usuario'])){
    $user = $_SESSION['usuario'];
    console_log($user);
    if($user == 'admin') {
        header ('Location: registroSecretaria.php');
    } else {
        header ('Location: espacioSecretaria.php');
    }
}
$errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    // echo "$usuario - $password";
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=bd_seguimiento','seg_user','seg_pass');
    } catch(PDOException $e) {
        echo "ERROR:". $e->getMessage();;
    }
    $statement = $conexion->prepare('SELECT * FROM usuario WHERE CUENTA = :usuario AND CONTRASENIA= :password');
    $statement->execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));
    $resultado = $statement->fetch();
    //var_dump($resultado);
    if ($resultado != false){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['privilegio'] = $resultado['TIPO_ROL'];
        if($usuario === 'admin') {
            header ('Location: registroSecretaria.php');
        } else {
            header ('Location: espacioSecretaria.php');
        }
    } else {
        echo '<script type="text/javascript">',
        'alert("Username and/or Password incorrect.\\nTry again.");',
        '</script>';
        console_log($resultado);
    }
}
require 'views/login.view.php';
