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
//docente
public function get_docente($ID_DOC)
{
    $consulta_sql = "select * from DOCENTE where ID_DOCENTE=".$ID_DOC;
    $consulta = $this->db->query($consulta_sql);
    while ($filas = $consulta->fetch_assoc()) {
        $this->arregloDocente[] = $filas;
    }
    return $this->arregloDocente;

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

////materia
//public function get_materia($ID_MATERIA)
//{
//    $consulta_sql = "select * from materia, docente where ID_DOCENTE=" . $ID_DOCENTE;
//    $consulta = $this->db->query($consulta_sql);
//    while ($filas = $consulta->fetch_assoc()) {
//        $this->arregloDocente[] = $filas;
//    }
//    return $this->arregloDocente;

}

?>
