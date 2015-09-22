<?php
class Login extends CI_Controller
    {
        function  user()
          {

                $suc = '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
                $alerts = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';

                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($username == "")
                {
                   $this->session->set_flashdata('message', $alerts . 'Required Username.</div>');
                   redirect('/');
                }
                elseif ($password == "")
                {
                  $this->session->set_flashdata('message', $alerts . 'Required Password.</div>');
                  redirect('/');
                }
                else
                {
                  $x = $this->common->userpass($username,$password);
                  if ($x['id'] > 0) {
                  $this->session->set_userdata('type', $x['type']);
                  $this->session->set_userdata('id', $x['id']);
                  redirect('/login-success');                                   
                  } 
                  else 
                  {
                    redirect('/');
                  }
                }
          }
          function logins()
          {
            $suc = '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
            $alerts = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';

                $this->load->view('template/header');
                $this->load->view('template/navigation2');

                if ($this->session->userdata('type') == 1) {
                   $this->load->view('pages/projectsite');
                 } else {
                  $this->load->view('reports/material_report');
                 
                 }
                  
                
                $this->load->view('template/footer');
              //  $this->session->set_flashdata('message', $alerts . 'Please Login First.</div>');
              //  redirect('/');
             
          }
          function logout()
          {
            $this->session->unset_userdata('username');
            redirect('/');
          }

    }
?>
