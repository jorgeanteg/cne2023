<?php 

    class Nosotros extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();

        }


        public function nosotros(){
            $this->load->view('header');
            $this->load->view('nosotros/nosotros');
            $this->load->view('footer');
        }

        
        
    }//Cierre d ela clase<

?>
