<?php
class Login extends CI_Controller
    {
        function  user()
          {

                $suc = '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
                $alerts = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';

                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($username == "") {
                       $this->session->set_flashdata('message', $alerts . 'Required Username.</div>');
                       redirect('/');
                }elseif ($password == "") {
                  $this->session->set_flashdata('message', $alerts . 'Required Password.</div>');
                  redirect('/');
                }else{
                  $this->session->set_userdata('username', $username);
                  redirect('/login-success');
                }
          }
          function logins()
          {
            $suc = '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
            $alerts = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';

              if ($this->session->userdata('username') != "") {
                $this->load->view('template/header');
                $this->load->view('template/navigation2');
                $this->load->view('pages/projectsite');
                $this->load->view('template/footer');
              }
              else{
                $this->session->set_flashdata('message', $alerts . 'Please Login First.</div>');
                redirect('/');
              }

          }
          function logout()
          {
            $this->session->unset_userdata('username');
            redirect('/');
          }

    }
?>
