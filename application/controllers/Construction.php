<?php

  /**
   *
   */
  class Construction extends CI_Controller
  {
      function failedmessage()
      {
        return '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
      }
      function succesmessage()
      {
        return '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
      }
      function projectsite()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('pages/projectsite');
        $this->load->view('template/footer.php');
      }
      function addmaterialproject($id)
      {
        $data['id']=$id;
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('pages/add_material',$data);
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
      function proposal_work($id)
      {
        $data['id']=$id;
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('reports/proposal_work',$data);
        $this->load->view('template/footer.php');
      }

      function add_scopework()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('reports/add_scopework');
        $this->load->view('template/footer.php');
      }
      function add_day()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('reports/man_project_report');
        $this->load->view('template/footer.php');
      }
      function evaluation()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('reports/evaluation');
        $this->load->view('template/footer.php');
      }
      function bago()
      {
        $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('reports/bago');
        $this->load->view('template/footer.php');
      }
      function insert_projectsite()
      {
        $config['upload_path']    = './assets/files/';
        $config['allowed_types']   = 'doc|docx|xlsx|pdf';
        $config['encrypt_name']    =  FALSE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('files'))
        {
          $this->session->set_flashdata('message', $this->succesmessage() . $this->upload->display_errors().'</div>' );
          $data=array('name'=>$this->input->post('name'),
                      'project_site'=>$this->input->post('project_site'),
                      'location'=>$this->input->post('location'),
                      'cdtc'=>$this->input->post('cdtc'),
                      'bid_price'=>$this->input->post('bid_price')
                    );
          $this->common->insert_projectsite($data);

        }
        else
        {
          $data=array('name'=>$this->input->post('name'),
                      'project_site'=>$this->input->post('project_site'),
                      'location'=>$this->input->post('location'),
                      'cdtc'=>$this->input->post('cdtc'),
                      'bid_price'=>$this->input->post('bid_price'),
                      'files' => $this->upload->data('file_name')
                    );
          $this->common->insert_projectsite($data);
        }

          //    $this->session->set_flashdata('message', $this->succesmessage() . 'Project Site Added</div>');
        redirect('/project-site');
      }
      function insert_add_material()
      {
        $data = array('scope_id'=>$this->input->post('hidden_id'),
                      'scope_of_work'=>$this->input->post('scopeofwork'),
                      'description'=>$this->input->post('description'),
                      'unit'=>$this->input->post('unit'),
                      'tquantity'=>$this->input->post('tquantity'),
                      'quantity'=>$this->input->post('quantity'),
                      'unit_cost'=>$this->input->post('unitcost'),
                      'days'=>$this->input->post('days'),
                      'project' => $this->input->post('hidden_id'),
                      'type' => $this->input->post('type')
                      );
                      $this->common->insert_add_material($data);
                      $this->session->set_flashdata('message', $this->succesmessage() . 'Succesfully Added</div>');
                      redirect('/add-material/'.$this->input->post('hidden_id'));
      }
      function insert_add_scopework()
      {
        $data=array('scopework'=>$this->input->post('scopework'));
        $this->common->insert_add_scopework($data);
        $this->session->set_flashdata('message', $this->succesmessage() . 'Scope Work Added Added</div>');
        redirect('/add_scopework');
      }
      function insert_visual_monitoring()
      {
        $data=array('project'=>$this->input->post('project'),
                    'scope_of_work'=>$this->input->post('scope_of_work'),
                    'days'=>$this->input->post('days'),
                    );
        $this->common->insert_visual_monitoring($data);
        $this->session->set_flashdata('message', $this->succesmessage() . 'Succesfully Added</div>');
        redirect('/bago');
      }
      function insert_independent_monitoring()
      {
        $data=array('project'=>$this->input->post('project'),
                    'scope_of_work'=>$this->input->post('scope_of_work'),
                    'duration_time'=>$this->input->post('duration_time'),
                    'possible_action'=>$this->input->post('possible_action'),
                    );
        $this->common->insert_independent_monitoring($data);
        $this->session->set_flashdata('message', $this->succesmessage() . 'Succesfully Added</div>');
        redirect('/bago');
      }
      function select_userpass()
      {
        $data=array('username'=>$this->input->post('username'),
                    'password'=>$this->input->post('password')
                    );
        $this->common->select_userpass($data);
        $this->session->set_flashdata('message', $this->succesmessage() . 'Username Password Not Match</div>');
        redirect('index');
      }
      function del_independent_monitoring($id)
        {
            $this->common->del_independent_monitoring($id);
            redirect('/bago');
        }
        function del_visual_monitoring($id)
          {
              $this->common->del_visual_monitoring($id);
              redirect('/bago');
          }

          function select_all_scope_of_work()
          {

          }
          function del_scope_work($id)
          {
            $this->common->del_scope_work($id);
            redirect('/add_scopework');
          }
          function del_project_site($id)
          {
            $this->common->del_project_site($id);
            redirect('/project-site');
          }
          function down_pert($id)
          {
              $this->load->helper('download');
              $this->load->library('encryption');
              $x = $this->common->get_file($id);
              $data = './assets/files/' . $x;
              $name = $x;
              force_download($name, $data);
          }
          function proj_sit($id)
          {
            $this->common->del_project_sites($id);
            redirect('/project-site');
          }
          function registration()
          {
            $this->load->view('template/header');
        $this->load->view('template/navigation2');
        $this->load->view('pages/registration');
        $this->load->view('template/footer.php');
          }
          function insert_account()
          {
if ($this->input->post('password') == $this->input->post('cpassword')){
   $data=array( 'name'=>$this->input->post('name'),
    'type'=>$this->input->post('type'),
                          'username'=>$this->input->post('username'),
                          'password'=>$this->input->post('password')

                    );
        $this->common->insert_account($data);
        $this->session->set_flashdata('message', $this->succesmessage() . 'Account Added</div>');
       
} else {
    $this->session->set_flashdata('message', $this->failedmessage() . 'Password not Match</div>');
      
}
 redirect('/registration');
}


                function del_account($id)
          {
            $this->common->del_account($id);
            redirect('/registration');
          }
          function del_projectsite($id)
          {

            $this->common->del_projectsite($id);
            redirect('/project-site');
          }
  }