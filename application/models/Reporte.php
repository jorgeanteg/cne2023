<?php
class Reporte extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function obtenerPresidente($dignidad_asp='Presidente'){

        $listadoAspirantes = $this->db
            ->where("dignidad_asp", $dignidad_asp)
            ->get("aspirantes");
        
        if ($listadoAspirantes->num_rows()> 0) {
            return $listadoAspirantes->result();
        } 
        return false;
        
    }


    function obtenerNacional($dignidad_asp='Asambleísta Nacional'){

        $listadoAspirantes = $this->db
            ->where("dignidad_asp", $dignidad_asp)
            ->get("aspirantes");
        
        if ($listadoAspirantes->num_rows()> 0) {
            return $listadoAspirantes->result();
        } 
        return false;
        
    }

    function obtenerProvincial($dignidad_asp='Asambleísta Provincial'){

        $listadoAspirantes = $this->db
            ->where("dignidad_asp", $dignidad_asp)
            ->get("aspirantes");
        
        if ($listadoAspirantes->num_rows()> 0) {
            return $listadoAspirantes->result();
        } 
        return false;
        
    }

    function obtenerIzquierda($tipo_asp='Izquierda'){

        $listadoAspirantes = $this->db
            ->where("tipo_asp", $tipo_asp)
            ->get("aspirantes");
        
        if ($listadoAspirantes->num_rows()> 0) {
            return $listadoAspirantes->result();
        } 
        return false;
        
    }

    function obtenerDerecha($tipo_asp='Derecha'){

        $listadoAspirantes = $this->db
            ->where("tipo_asp", $tipo_asp)
            ->get("aspirantes");
        
        if ($listadoAspirantes->num_rows()> 0) {
            return $listadoAspirantes->result();
        } 
        return false;
        
    }

} //cierre de la clase


?>