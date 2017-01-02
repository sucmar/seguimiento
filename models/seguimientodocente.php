<?php

class seguimientodocente_model
{
private $db;
private $arDocentes;
private $arregloDocentesRoles;
private $arregloMateria;
private $arregloGrupo;
private $arregloHorarioMateria;
private $arregloCarrera;
private $arregloDocente;
private $arregloFacultad;
private $arregloIdMateria;

public function __construct()
{
    $this->db = db::conexion();
    $this->arDocentes = array();
    $this->arregloDocentesRoles = array();

    $this->arregloMateria = array();
    $this->arregloGrupo = array();
    $this->arregloHorarioMateria = array();

    $this->arregloCarrera = array();

    $this->arregloDocente = array();
    $this->arregloFacultad = array();
    $this->arregloIdMateria = array();
}

public function get_docentes()
{
    $consulta = $this->db->query("select * from docente;");
    while ($filas = $consulta->fetch_assoc()) {
        $this->arDocentes[] = $filas;
    }
    return $this->arDocentes;
}

public function get_docente_rol()
{
    $consulta_sql = "select * from docente d join rol r on d.ID_ROL=r.ID_ROL";
    $consulta = $this->db->query($consulta_sql);
    while ($filas = $consulta->fetch_assoc()) {
        $this->arregloDocentesRoles[] = $filas;
    }
    return $this->arregloDocentesRoles;
}

public function get_materia()
{
    $consulta = $this->db->query("select * from MATERIA;");
    while ($filas = $consulta->fetch_assoc()) {
        $this->arregloMateria[] = $filas;
    }
    return $this->arregloMateria;
}

public function get_docente() 
{
         function console_log( $data ){
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
        };
    if (isset($_GET['ID_DOCENTE']))  {
        $ID_DOCE = $_GET['ID_DOCENTE'];
    }
    $consulta = $this->db->query("select * from DOCENTE where ID_DOCENTE=".$ID_DOCE);
    console_log($consulta);
    while ($filas = $consulta->fetch_assoc()) {
        $this->arDocentes[] = $filas;
    }
    return $this->arDocentes;   
}
public function get_idMateriaDocente() {
    if (isset($_GET['ID_DOCENTE']))  {
        $ID_DOCE = $_GET['ID_DOCENTE'];
    }
    $consulta = $this->db->query("select ID_MATERIA from DOC_MATERIA where ID_DOCENTE=".$ID_DOCE);
    while ($filas = $consulta->fetch_assoc()) {
        $obj = $filas['ID_MATERIA'];
        console_log($obj);
        $this->arregloIdMateria[] = $obj;
        console_log($this->arregloIdMateria);
    }
   return $this->arregloIdMateria;   
}

public function get_facultadDocente() {
            function console_logg( $data ){
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
        };
       //console_log($arregloIdMateria[0]);
    if (isset($_GET['ID_DOCENTE']))  {
        $ID_DOCE = $_GET['ID_DOCENTE'];
    }
   $consulta = $this->db->query("select ID_MATERIA from DOC_MATERIA where ID_DOCENTE=".$ID_DOCE);
    while ($filas = $consulta->fetch_assoc()) {
        $obj = $filas['ID_MATERIA'];
        //console_log($obj);
        $this->arregloIdMateria[] = $obj;
    }
    if($this->arregloIdMateria != null) {
        //MATERIAS
        foreach ($this->arregloIdMateria as &$idMateria) {
          //  console_log($idMateria);
            $consulta = $this->db->query("select ID_CARRERA, NOMBRE_MATERIA, SIGLA_MATERIA from MATERIA where ID_MATERIA=".$idMateria);
            while ($filas = $consulta->fetch_assoc()) {
                $obj = $filas['ID_CARRERA'];
                $this->arregloMateriass[] = $filas;
                $this->arregloIdCarrera[] = $obj;
               // console_log($obj);
            }
        }

        //CARRERA
        foreach ($this->arregloIdCarrera as &$idCarrera) {
            $consulta = $this->db->query("select ID_FACULTAD, NOMBRE_CARRERA from CARRERA where ID_CARRERA=".$idCarrera);
            while ($filas = $consulta->fetch_assoc()) {
                $obj = $filas['ID_FACULTAD'];
                $this->arregloCarrerass[] = $filas;
                $this->arregloFacultad[] = $obj;
                console_log($obj);
            }       
        }

       //FACULTAD    
       foreach ($this->arregloFacultad as &$idFacultad) {
        $consulta = $this->db->query("select NOMBRE_FACULTAD from FACULTAD where ID_FACULTAD=".$idFacultad);
        while ($filas = $consulta->fetch_assoc()) {
            $obj = $filas['NOMBRE_FACULTAD'];
            $this->arregloFacultadess[] = $filas;
            $this->arregloFacultadS[] = $obj;
            console_log($obj);
        } 

        }
        //DEPARTAMENTO
        foreach ($this->arregloIdCarrera as &$idCarrera) {
            $consulta = $this->db->query("select NOMBRE_DPTO from DEPARTAMENTO where ID_CARRERA=".$idCarrera);
            while ($filas = $consulta->fetch_assoc()) {
                $obj = $filas['NOMBRE_DPTO'];
                $this->arregloDepartamentos[] = $filas;
                $this->arregloNomDptos[] = $obj;
                console_log($obj);
            }       
        }
        $arr_length = count($this->arregloIdMateria); 
        for ($i=0; $i < $arr_length ; $i++) { 
            //

            $info = array('NOMBRE_FACULTAD' => $this->arregloFacultadS[$i], 'NOMBRE_DPTO' => $this->arregloNomDptos[$i], 'NOMBRE_CARRERA' => $this->arregloCarrerass[$i]['NOMBRE_CARRERA'], 'NOMBRE_MATERIA' => $this->arregloMateriass[$i]['NOMBRE_MATERIA'], 'SIGLA_MATERIA' => $this->arregloMateriass[$i]['SIGLA_MATERIA']);
           // $info = array('NOMBRE_DPTO' => $this->arregloNomDptos[$i]);
            $info = (object)$info;

            $nones = $info;
            console_log($nones);
            $this->arregloInfoDocentes[] = $info;
        }
    } else {
         $info = array('NOMBRE_FACULTAD' =>'', 'NOMBRE_DPTO' => '', 'NOMBRE_CARRERA' => '', 'NOMBRE_MATERIA' => '', 'SIGLA_MATERIA' => '');
            $info = (object)$info;
            $nones = $info;
            $this->arregloInfoDocentes[] = $info;

    }
   return $this->arregloInfoDocentes;   
}
     
public function get_facultad()
{
    $consulta_sql = "select * from FACULTAD";
    $consulta = $this->db->query($consulta_sql);
    while ($filas = $consulta->fetch_assoc()){
        $this->arregloFacultad[] = $filas;
    }
    return $this->arregloFacultad;
}


}

?>
