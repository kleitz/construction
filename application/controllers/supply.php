<?php
class Supply extends CI_Controller {

  function unused_material()
  {
    $this->load->view('template/header');
    $this->load->view('template/navigation2');
    $this->load->view('pages/unused_material');
    $this->load->view('template/footer.php');
  }
}
