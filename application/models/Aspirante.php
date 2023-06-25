<?php
class Aspirante extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    //funcion insertar un instructor
    function insertar($datos){
        //ACTIVE RECORD -> CODEiGNITER
        return $this->db->insert("aspirantes",$datos);
    }

    //FUncion para consultar Instructores 
    function obtenerTodos(){
        $listadoIAspirantes=$this->db->get("aspirantes");//esto devuelve un array
        if($listadoIAspirantes->num_rows()>0) { //si hay datos
            return $listadoIAspirantes->result();
        }else{ //si no hay datos
            return false;
        }
    }

    //Borrar INstructor
    function borrar($id_asp){
        //"id_ins"-> es el campo de la base de datos  y la $id_ins es la variable que creamos puede tener otro nombre
        $this->db->where("id_asp",$id_asp);

        //instructor tabla de base de datos
        if ($this->db->delete("aspirantes")) {
            return true;
        } else {
            return false;
        }
        
        //El codigo de arriba en una solo linea
        // return $this->db->delete("instructor");
    }

    


} //cierre de la clase


?>