<?php

class Reportes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        //Cargar modelo
        $this->load->model('Reporte');
    }


    public function presidentes()
    {
        $data["ubiPresidentes"] = $this->Reporte->obtenerPresidente();

        $this->load->view('header');
        $this->load->view('reportes/presidentes', $data);
        $this->load->view('footer');
    }

    public function nacionales()
    {
        $data["ubiNacionales"] = $this->Reporte->obtenerNacional();

        $this->load->view('header');
        $this->load->view('reportes/nacionales', $data);
        $this->load->view('footer');
    }

    public function provinciales()
    {
        $data["ubiProvinciales"] = $this->Reporte->obtenerProvincial();

        $this->load->view('header');
        $this->load->view('reportes/provinciales', $data);
        $this->load->view('footer');
    }

    public function general()
    {
        $data["ubiPresidentes"] = $this->Reporte->obtenerPresidente();
        $data["ubiNacionales"] = $this->Reporte->obtenerNacional();
        $data["ubiProvinciales"] = $this->Reporte->obtenerProvincial();

        $this->load->view('header');
        $this->load->view('reportes/general', $data);
        $this->load->view('footer');
    }


    public function ideologia()
    {
        $data["izquierda"] = $this->Reporte->obtenerIzquierda();
        $data["derecha"] = $this->Reporte->obtenerDerecha();

        $this->load->view('header');
        $this->load->view('reportes/ideologia', $data);
        $this->load->view('footer');
    }


} //Cierre d ela clase<

?>