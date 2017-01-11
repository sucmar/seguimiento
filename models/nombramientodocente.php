<?php

class nombramientodocente_model
{
    private $db;
    private $arDocentes;
    //private $arregloDocentesRoles;
    private $arregloMateria;
    private $arregloGrupo;
    private $arregloHorarioMateria;
    private $arregloCarrera;
    private $arregloDocente;
    private $arregloFacultad;
    private $arregloIdMateria;
    private $arregloDpto;
    private $arregloNombramiento;
    private $arregloHorasTotalSemana;
    private $arregloHorasTotalMes;


    public function __construct()
    {
        $this->db = db::conexion();
        $this->arDocentes = array();
        //$this->arregloDocentesRoles = array();

        $this->arregloMateria = array();
        $this->arregloGrupo = array();
        $this->arregloHorarioMateria = array();

        $this->arregloCarrera = array();

        $this->arregloDocente = array();
        $this->arregloFacultad = array();
        $this->arregloIdMateria = array();
        $this->arregloDpto;
        $this->arregloNombramiento;
        $this->arregloHorasTotalSemanas = array();
        $this->arregloHorasTotalMes = array();

    }


    public function get_docente()
    {
        function console_log($data)
        {
            echo '<script>';
            echo 'console.log(' . json_encode($data) . ')';
            echo '</script>';
        }

        ;
        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("select * from DOCENTE where ID_DOCENTE=" . $ID_DOCE);
        console_log($consulta);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arDocentes[] = $filas;
        }
        return $this->arDocentes;
    }

    public function get_idMateriaDocente()
    {
        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("select ID_MATERIA from DOC_MATERIA where ID_DOCENTE=" . $ID_DOCE);
        while ($filas = $consulta->fetch_assoc()) {
            $obj = $filas['ID_MATERIA'];
            console_log($obj);
            $this->arregloIdMateria[] = $obj;
            console_log($this->arregloIdMateria);
        }
        return $this->arregloIdMateria;
    }


    public function get_nombramiento()
    {
        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("select * from NOMBRAMIENTO where ID_DOCENTE=".$ID_DOCE);
        console_log($consulta);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloNombramiento[] = $filas;
        }
        return $this->arregloNombramiento;
    }

    public function get_horasTotalSemana()
    {

        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("select (HRSTEORIA+HRSPRACTICA)TOTALHORA from SEGUIMIENTO where ID_DOCENTE=" . $ID_DOCE);
        console_log($consulta);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloHorasTotalSemana[] = $filas;
        }
        return $this->arregloHorasTotalSemana;
    }

    public function get_horasTotalMes()
    {

        if (isset($_GET['ID_DOCENTE'])) {
            $ID_DOCE = $_GET['ID_DOCENTE'];
        }
        $consulta = $this->db->query("select ((HRSTEORIA+HRSPRACTICA)*4)TOTALHORA from SEGUIMIENTO where ID_DOCENTE=" . $ID_DOCE);
        console_log($consulta);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloHorasTotalMes[] = $filas;
        }
        return $this->arregloHorasTotalMes;
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
        $consulta = $this->db->query("select ID_MATERIA from DOC_MATERIA where ID_DOCENTE=" . $ID_DOCE);
        while ($filas = $consulta->fetch_assoc()) {
            $obj = $filas['ID_MATERIA'];
            //console_log($obj);
            $this->arregloIdMateria[] = $obj;
        }
        if ($this->arregloIdMateria != null) {
            //MATERIAS
            foreach ($this->arregloIdMateria as &$idMateria) {
                //  console_log($idMateria);
                $consulta = $this->db->query("select ID_CARRERA, NOMBRE_MATERIA, SIGLA_MATERIA from MATERIA where ID_MATERIA=" . $idMateria);
                while ($filas = $consulta->fetch_assoc()) {
                    $obj = $filas['ID_CARRERA'];
                    $this->arregloMateriass[] = $filas;
                    $this->arregloIdCarrera[] = $obj;
                    // console_log($obj);
                }
            }


            //CARRERA
            foreach ($this->arregloIdCarrera as &$idCarrera) {
                $consulta = $this->db->query("select ID_FACULTAD, ID_DPTO, NOMBRE_CARRERA from CARRERA where ID_CARRERA=" . $idCarrera);
                while ($filas = $consulta->fetch_assoc()) {
                    $obj = $filas['ID_FACULTAD'];
                    $obj2 = $filas['ID_DPTO'];
                    $this->arregloCarrerass[] = $filas;
                    $this->arregloFacultad[] = $obj;
                    $this->arregloDpto[] = $obj2;
                    console_log($obj);
                    console_log($obj2);
                }
            }

            //FACULTAD
            foreach ($this->arregloFacultad as &$idFacultad) {
                $consulta = $this->db->query("select NOMBRE_FACULTAD from FACULTAD where ID_FACULTAD=" . $idFacultad);
                while ($filas = $consulta->fetch_assoc()) {
                    $obj = $filas['NOMBRE_FACULTAD'];
                    $this->arregloFacultadess[] = $filas;
                    $this->arregloFacultadS[] = $obj;
                    console_log($obj);
                }

            }
            //DEPARTAMENTO
            foreach ($this->arregloDpto as &$idDpto) {
                $consulta = $this->db->query("select NOMBRE_DPTO from DEPARTAMENTO where ID_DPTO=" . $idDpto);
                while ($filas = $consulta->fetch_assoc()) {
                    $obj = $filas['NOMBRE_DPTO'];
                    $this->arregloDepartamentos[] = $filas;
                    $this->arregloNomDptos[] = $obj;
                    console_log($obj);
                }
            }

            $arr_length = count($this->arregloIdMateria);
            for ($i = 0; $i < $arr_length; $i++) {
                //

                $info = array('NOMBRE_FACULTAD' => $this->arregloFacultadS[$i], 'NOMBRE_DPTO' => $this->arregloNomDptos[$i], 'NOMBRE_CARRERA' => $this->arregloCarrerass[$i]['NOMBRE_CARRERA'], 'NOMBRE_MATERIA' => $this->arregloMateriass[$i]['NOMBRE_MATERIA'], 'SIGLA_MATERIA' => $this->arregloMateriass[$i]['SIGLA_MATERIA']);
                // $info = array('NOMBRE_DPTO' => $this->arregloNomDptos[$i]);
                $info = (object)$info;

                $nones = $info;
                console_log($nones);
                $this->arregloInfoDocentes[] = $info;
            }
        } else {
            $info = array('NOMBRE_FACULTAD' => '', 'NOMBRE_DPTO' => '', 'NOMBRE_CARRERA' => '', 'NOMBRE_MATERIA' => '', 'SIGLA_MATERIA' => '');
            $info = (object)$info;
            $nones = $info;
            $this->arregloInfoDocentes[] = $info;

        }
        return $this->arregloInfoDocentes;
    }


}

?>