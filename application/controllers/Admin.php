<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $get['title'] = "Admin Login | Hirbox";
        if ($this->session->userdata('admin_id')) {
            redirect(base_url('admin_Dashboard'));
        } else {
            $this->load->view('admin/login', $get);
        }
    }

    public function adminlogin()
    {
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
        if ($this->form_validation->run()) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data =  $this->CommonModal->getRowById('tbl_admin', 'username', $username);
            if ($data) {

                $id = $data[0]['admin_id'];
                $f_username = $data[0]['username'];
                $f_password = $data[0]['password'];

                if ($password != $f_password) {
                    flashData('login_error', 'Enter a valid Password.');
                } else {
                    $this->session->set_userdata(array('admin_id' => $id, 'username' => $username));
                    redirect('Admin_Dashboard');
                }
            } else {
                flashData('login_error', 'Enter a valid Username ');
            }
        }
        $this->load->view('admin/login');
    }

    public function logout()
    {
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata('admin_id');
        redirect(base_url('admin'));
    }


    public function candidate_registration()
    {
        $data['title'] = "Candidate Register | Hirbox";
        if (count($_POST) > 0) {

            $count_mobile = $this->CommonModal->getNumRows('candidate_registration', array('number' => $this->input->post('number')));
            $count_email = $this->CommonModal->getNumRows('candidate_registration', array('email' => $this->input->post('email')));
            if ($count_mobile > 0 || $count_email > 0) {
                $this->session->set_userdata('msg', '<h6 class="alert alert-danger">You have already registered with this email id or contact no.</h6>');
                redirect(base_url('Company/register'));
            } else {
                $post = $this->input->post();

                $lastid = $this->CommonModal->insertRowReturnId('candidate_registration', $post);
                $data = $this->CommonModal->getRowById('candidate_registration', 'candidate_id', $lastid);

                $this->session->set_userdata(array('candidate_id' => $data[0]['candidate_id'], 'cname' => $data[0]['name'], 'number' => $data[0]['number'], 'cemail' => $data[0]['email']));
                redirect('candidate/profile');
            }
        }

        $data['country_code'] = $this->CommonModal->getAllRowsInOrder('country', 'name', 'asc');
        $this->load->view('candidate/register', $data);
    }


    public function candidate_login()
    {
        $get['title'] = "Candidate Login";

        if ($this->session->userdata('candidate_id')) {
            redirect(base_url('candidate'));
        } else {
            $this->load->view('candidate/login', $get);
        }
    }


    public function candidatelogin()
    {
        $this->form_validation->set_rules('email', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
        if ($this->form_validation->run()) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data =  $this->CommonModal->getRowById('tbl_candidate_registration', 'email', $email);
            if ($data) {

                $this->session->set_userdata(array('candidate_id' => $data[0]['candidate_id'], 'cname' => $data[0]['name'], 'number' => $data[0]['number'], 'cemail' => $data[0]['email']));

                if ($data[0]['cstatus'] != '1') {

                    $id = $data[0]['candidate_id'];
                    $f_username = $data[0]['email'];
                    $f_password = $data[0]['password'];

                    if ($password != $f_password) {
                        flashData('login_error', 'Enter a valid Password.');
                    } else {
                        $this->session->set_userdata(array('candidate_id' => $id, 'number' => $number));
                        redirect('candidate');
                    }
                } else {
                    flashData('login_error', 'There is no longer any activity on your account');
                }
            } else {
                flashData('login_error', 'Enter a valid number ');
            }
        }
        redirect(base_url('candidate/login'));
    }

    public function clogout()
    {
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata('candidate_id');
        redirect(base_url('candidate/login'));
    }
}
