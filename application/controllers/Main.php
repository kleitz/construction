<?php

class Main extends CI_Controller
{

  function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/navigation');
    $this->load->view('pages/login');
    $this->load->view('template/footer');
  }

}
