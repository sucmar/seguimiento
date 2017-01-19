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
    private $arregloDpto;
//    private $arregloHorasTotalSemana;
    private $arregloSeguimiento;

    private $arreglohrs;
    private $arreglohora;
    //nuevo
    private $arSeguimientosDocente;
    private $arHorarios;
    private $arDias;


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
        $this->arregloDpto;
//        $this->arregloHorasTotalSemana = array();
        $this->arreglohrs = array();
        $this->arregloSeguimiento = array();
        $this->arreglohora = array();
        //nuevo
        $this->arSeguimientosDocente = array();
        $this->arHorarios = array();
        $this->arDias = array();

    }

    public function get_docente()
    {

        function console_log($data)
        {
            echo '<script>';
            echo 'console.log(' . json_encode($data) . ')';
            echo '</script>';
        }

        //;
        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("select * from docente where ID_DOCENTE=" . $ID_DOCE);
        //console_log($consulta);
        if ($consulta->num_rows) {
            while($filas = $consulta->fetch_assoc()){
                $this->arDocentes[] = $filas;
            }
        }
        //print_r($filas);
        return $this->arDocentes;
    }

    public function get_idMateriaDocente()
    {
        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("select ID_MATERIA from doc_materia where ID_DOCENTE=" . $ID_DOCE);
        if ($consulta->num_rows) {

            while ($filas = $consulta->fetch_assoc()) {
                $obj = $filas['ID_MATERIA'];
                //console_log($obj);
                
		$this->arregloIdMateria[] = $obj;
                console_log($this->arregloIdMateria);
            }
        }
        print_r($filas);
        return $this->arregloIdMateria;
    }

    public function get_seguimiento()
    {

        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("select ASIS,ADJ,CAT,OTROCARGO,HRSPRODUCCION,
					                          HRSINVESTIGACION,HRSEXTENCION,HRSSERVICIO,HRSPRACTICA,
					                          RCF1,RCF2,RCF3,HRSPRODUCCION,HRSSERVICIOACADEMICO,HRSPRODUCACAD,HRSADMINACAD,
					                          RCF4,RCF5,RCF6,RCF7,HRSTRABSEMANA,HRSTRABMES,sum(HRSTEORIA),sum(HRSPRACTICA),
					                          (HRSTEORIA+HRSPRACTICA)TOTALSEM,((HRSTEORIA+HRSPRACTICA)*4)TOTALMES,
					                          HRSAUTORIZADAS,OBSERVACIONES,TIEMPOPARCIAL,DEDICACIONEXCLUSIVA  
		                              from seguimiento 
		                              where ID_DOCENTE='$ID_DOCE'
		                              GROUP BY ASIS,ADJ,CAT,OTROCARGO,HRSPRODUCCION,HRSINVESTIGACION,HRSEXTENCION,
							                  HRSSERVICIO,HRSPRACTICA,RCF1,RCF2,RCF3,HRSPRODUCCION,HRSSERVICIOACADEMICO,HRSPRODUCACAD,
							                  HRSADMINACAD,RCF4,RCF5,RCF6,RCF7,HRSTRABSEMANA,HRSTRABMES,HRSTEORIA,HRSPRACTICA,TOTALSEM,
							                  TOTALMES,HRSAUTORIZADAS,OBSERVACIONES,TIEMPOPARCIAL,DEDICACIONEXCLUSIVA ");
        // console_log("HOLAAAAA".$consulta->fetch_assoc());
        if ($consulta->num_rows) {
            while ($filas = $consulta->fetch_assoc()) {
                $this->arregloSeguimiento[] = $filas;
            }
        }
        return $this->arregloSeguimiento;

    }

    public function get_hora()
    {

        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("SELECT s.HRSTEORIA, s.HRSPRACTICA FROM seguimiento s JOIN docente d ON s.ID_DOCENTE=d.ID_DOCENTE WHERE d.ID_DOCENTE =" . $ID_DOCE);
        console_log($consulta);
        if ($consulta->num_rows) {
            while ($filas = $consulta->fetch_assoc()){
            $this->arreglohora[] = $filas;
            }
        }
        return $this->arreglohora;

    }

    public function get_facultadDocente()
    {
        function console_logg($data)
        {
            echo '<script>';
            echo 'console.log(' . json_encode($data) . ')';
            echo '</script>';
        }

        ;
        //console_log($arregloIdMateria[0]);
        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }


        $consulta = $this->db->query("select ID_MATERIA from doc_materia where ID_DOCENTE=" . $ID_DOCE);
        if ($consulta->num_rows) {
            while ($filas = $consulta->fetch_assoc()) {
                $obj = $filas['ID_MATERIA'];
                //console_log($obj);
                $this->arregloIdMateria[] = $obj;
            }
        }
        if ($this->arregloIdMateria != null) {

            //MATERIAS
            foreach ($this->arregloIdMateria as &$idMateria) {
                //  console_log($idMateria);
                $consulta = $this->db->query("select ID_CARRERA, NOMBRE_MATERIA, SIGLA_MATERIA from materia where ID_MATERIA=" . $idMateria);
                if ($consulta->num_rows) {
                    while ($filas = $consulta->fetch_assoc()){
                    $obj = $filas['ID_CARRERA'];
                    $this->arregloMateriass[] = $filas;
                    $this->arregloIdCarrera[] = $obj;
                    }
                    // console_log($obj);
                }
            }

            //CARRERA
            foreach ($this->arregloIdCarrera as &$idCarrera) {
                $consulta = $this->db->query("select ID_FACULTAD, ID_DPTO, NOMBRE_CARRERA from carrera where ID_CARRERA=" . $idCarrera);
                if ($consulta->num_rows) {
                    while ($filas = $consulta->fetch_assoc()){
                    $obj = $filas['ID_FACULTAD'];
                    $obj2 = $filas['ID_DPTO'];
                    $this->arregloCarrerass[] = $filas;
                    $this->arregloFacultad[] = $obj;
                    $this->arregloDpto[] = $obj2;
                    console_log($obj);
                    console_log($obj2);
                    }
                }
            }

            //FACULTAD
            foreach ($this->arregloFacultad as &$idFacultad) {
                $consulta = $this->db->query("select NOMBRE_FACULTAD from facultad where ID_FACULTAD=" . $idFacultad);
                if ($consulta->num_rows) {
                    while ($filas = $consulta->fetch_assoc()){
                    $obj = $filas['NOMBRE_FACULTAD'];
                    $this->arregloFacultadess[] = $filas;
                    $this->arregloFacultadS[] = $obj;
                    console_log($obj);
                    }
                }

            }
            //DEPARTAMENTO
            foreach ($this->arregloDpto as &$idDpto) {
                $consulta = $this->db->query("select NOMBRE_DPTO from departamento where ID_DPTO=" . $idDpto);
                if ($consulta->num_rows) {
                    while ($filas = $consulta->fetch_assoc()){
                    $obj = $filas['NOMBRE_DPTO'];
                    $this->arregloDepartamentos[] = $filas;
                    $this->arregloNomDptos[] = $obj;
                    console_log($obj);
                    }
                }
            }

            $arr_length = count($this->arregloIdMateria);
            for ($i = 0; $i < $arr_length; $i++) {
                //

//                print_r($this->arreglohrs);
                $info = array('NOMBRE_FACULTAD' => $this->arregloFacultadS[$i], 'NOMBRE_DPTO' => $this->arregloNomDptos[$i], 'NOMBRE_CARRERA' => $this->arregloCarrerass[$i]['NOMBRE_CARRERA'], 'NOMBRE_MATERIA' => $this->arregloMateriass[$i]['NOMBRE_MATERIA'], 'SIGLA_MATERIA' => $this->arregloMateriass[$i]['SIGLA_MATERIA']);
                // $info = array('NOMBRE_DPTO' => $this->arregloNomDptos[$i]);
//                , 'HRSTEORIA' => $this->arreglohrsT[$i]['HRSTEORIA'], 'HRSPRACTICA' => $this->arreglohrsT[$i]['HRSPRACTICA']
                $info = (object)$info;

                $nones = $info;
                console_log($nones);
                $this->arregloInfoDocentes[] = $info;
            }
        } else {
            $info = array('NOMBRE_FACULTAD' => '', 'NOMBRE_DPTO' => '', 'NOMBRE_CARRERA' => '', 'NOMBRE_MATERIA' => '', 'SIGLA_MATERIA' => '');
//            , 'HRSTEORIA' => '', 'HRSPRACTICA' => ''
            $info = (object)$info;
            $nones = $info;
            $this->arregloInfoDocentes[] = $info;

        }
        return $this->arregloInfoDocentes;
    }

    //nuevo
    public function cargar_horario_docente($IDDocente)
    {
        $consulta_sql = "SELECT
            m.sigla_materia,
            g.grupo,
            au.NOMBRE_AULA,
            di.nom_dia,
            INICIO_HORARIO,
            FIN_HORARIO,
            d.NOMBRE_DOC AS nombre_docente
FROM docente d
  JOIN doc_materia dm ON d.ID_DOCENTE = dm.ID_DOCENTE
  JOIN materia m ON m.id_materia=dm.id_materia
  JOIN grupos g ON dm.ID_DOCMATERIA = g.ID_DOCMATERIA
  JOIN dia di ON di.ID_GRUP = g.ID_GRUP
  JOIN horario h ON h.ID_HORARIO = di.ID_HORARIO
  JOIN aula au ON di.ID_AULA = au.ID_AULA
  JOIN hrs_academicas hr ON di.ID_DIA = hr.ID_DIA
WHERE d.ID_DOCENTE = " . $IDDocente . "  ORDER BY di.nom_dia, INICIO_HORARIO;";

        $consulta = $this->db->query($consulta_sql);

        if ($consulta->num_rows) {
            while ($filas = $consulta->fetch_assoc()) {
                $this->arSeguimientosDocente[] = $filas;
            }
        }
        return $this->arSeguimientosDocente;

    }

    public function get_horarios()
    {
        $consulta_sql = "select * from horario;";

        $consulta = $this->db->query($consulta_sql);

        if ($consulta->num_rows) {
            while ($filas = $consulta->fetch_assoc()) {
                $this->arHorarios[] = $filas;
            }


        }
        print_r($filas);
        return $this->arHorarios;
    }

    public function get_dias()
    {
        $consulta_sql = "select DISTINCT NOM_DIA from dia order BY NOM_DIA";
        $consulta = $this->db->query($consulta_sql);

        if ($consulta->num_rows) {
            while ($filas = $consulta->fetch_assoc()) {

                $this->arDias[] = $filas;
            }
        }
        return $this->arDias;
    }

}


//public function get_facultad()
//{
//    $consulta_sql = "select * from FACULTAD";
//    $consulta = $this->db->query($consulta_sql);
//    while ($filas = $consulta->fetch_assoc()){
//        $this->arregloFacultad[] = $filas;
//    }
//    return $this->arregloFacultad;
//}
/* public function cargar_horario_docente($IDDocente)
 {
     $consulta_sql = "SELECT
m.sigla_materia,
g.grupo,
au.NOMBRE_AULA,
di.nom_dia,
INICIO_HORARIO,
FIN_HORARIO,
d.NOMBRE_DOC AS nombre_docente
FROM docente d
JOIN doc_materia dm ON d.ID_DOCENTE = dm.ID_DOCENTE
JOIN materia m ON m.id_materia=dm.id_materia
JOIN grupos g ON dm.ID_DOCMATERIA = g.ID_DOCMATERIA
JOIN dia di ON di.ID_GRUP = g.ID_GRUP
JOIN horario h ON h.ID_HORARIO = di.ID_HORARIO
JOIN aula au ON di.ID_AULA = au.ID_AULA
JOIN hrs_academicas hr ON di.ID_DIA = hr.ID_DIA
WHERE d.ID_DOCENTE = " . $IDDocente . "  ORDER BY di.nom_dia, INICIO_HORARIO;";

     $consulta = $this->db->query($consulta_sql);
 }*/


?>
