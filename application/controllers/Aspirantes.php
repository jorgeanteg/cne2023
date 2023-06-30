<?php 

    class Aspirantes extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();

            //Cargar modelo
            $this->load->model('Aspirante');
        }

        public function listado(){

            //data es un nombre cualquiera
            $data['aspirantes']=$this->Aspirante->obtenerTodos();
            
            $this->load->view('header');
            // estamos pasando los datos a la vista 
            $this->load->view('aspirantes/listado', $data);
            $this->load->view('footer');

        } 
        public function nuevo(){
            $this->load->view('header');
            $this->load->view('aspirantes/nuevo');
            $this->load->view('footer');
        }
        
        public function guardar() {
            $datosNuevoAspirante=array(
                "dignidad_asp"=>$this->input->post('dignidad_asp'),
                "cedula_asp"=>$this->input->post('cedula_asp'),
                "apellidos_asp"=>$this->input->post('apellidos_asp'),
                "nombres_asp"=>$this->input->post('nombres_asp'),
                "titulo_asp"=>$this->input->post('titulo_asp'),
                "movimiento_asp"=>$this->input->post('movimiento_asp'),
                "tipo_asp"=>$this->input->post('tipo_asp'),
                "latitud_asp"=>$this->input->post('latitud_asp'),
                "longitud_asp"=>$this->input->post('longitud_asp'),
            );
            
            //llamamos a insertar

            if($this->Aspirante->insertar($datosNuevoAspirante)){
                redirect('aspirantes/listado');
                
            }else{
                
            }
            
        }

        public function eliminar($id_asp){
            if ($this->Aspirante->borrar($id_asp)) {
                
                redirect('aspirantes/listado');
                # code...
            } else {
                # code...
                
            }
            
        }

        //funcion rendirizar vista editar 
    public function editar($id_asp)
    {
        $data["aspiranteEditar"] = $this->Aspirante->obtenerPorId($id_asp);
        $this->load->view('header');
        $this->load->view('aspirantes/editar', $data);
        $this->load->view('footer');
    }



    //Proceso de actualizacion 

    public function procesarActualizacion()
    {

        $datosEditados = array(
            "dignidad_asp" => $this->input->post('dignidad_asp'),
            "cedula_asp" => $this->input->post('cedula_asp'),
            "apellidos_asp" => $this->input->post('apellidos_asp'),
            "nombres_asp" => $this->input->post('nombres_asp'),
            "titulo_asp" => $this->input->post('titulo_asp'),
            "movimiento_asp" => $this->input->post('movimiento_asp'),
            "tipo_asp" => $this->input->post('tipo_asp'),
        );

        $id_asp = $this->input->post('id_asp');

        if ($this->Aspirante->actualizar($id_asp, $datosEditados)) {
            redirect("aspirantes/listado");
            
        } else {
            
        }
        

    }
    }//Cierre d ela clase<

?>
