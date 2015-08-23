<?php

  /**
   *
   */
  class Construction extends CI_Controller
  {
      function projectsite()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('pages/projectsite');
        $this->load->view('template/footer.php');
      }
      function addmaterialproject()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('pages/add_material');
        $this->load->view('template/footer.php');
      }
      function payroll()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('payroll/add_employee');
        $this->load->view('template/footer.php');

      }
      function reports()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('reports/material_report');
        $this->load->view('template/footer.php');
      }
      function proposal_work()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('reports/proposal_work');
        $this->load->view('template/footer.php');
      }

      function add_scopework()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('reports/add_scopework');
        $this->load->view('template/footer.php');
      }


  }
