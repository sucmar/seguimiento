<?php

class nombramientodocente_model
{
    private $arregloDocente;

    public function __construct()
    {
        $this->arregloDocente = array();
    }

    public function get_docente($ID_DOC)
    {
        $consulta_sql = "select * from DOCENTE where ID_DOCENTE=" . $ID_DOC;
        $consulta = $this->db->query($consulta_sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloDocente[] = $filas;
        }
        print_r($filas);
        return $this->arregloDocente;
    }
}

?>