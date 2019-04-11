<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {

	public function index()
	{
        $cookie = $this->input->cookie('logged');
        if(isset($cookie) || isset($_SESSION['successLogin'])){
            $this->loginPage();
        } else {
            $data['title'] = "Login";
            /*Load view header,Login and Footer from Landing folder.
                Header and Login have a parameter $data.
             */

            $this->load->view('admin/login/login', $data);
        }
    }

    public function loginPage() {
        
        /*
        1. CREATE COOKIE NAME LOGGED
        2. $data['image'] = ('replace this text to function getImage() in Model/User.php')
        3.LOAD VIEW LOGGEDIN AND USE PARAMETER $DATA */

        $cookie = $this->input->cookie('logged');
        $data['image'] = $this->User->getImage();
        $this->load->view('loggedin', $data);

    }

    public function Signin() {
        $user = $this->M_loginadmin->findUser();
        redirect('Admin/index');
        // if($user != null){
                $this->session->set_userdata('successLogin', $user[0]['Useradmin']);
                redirect('Admin');
        // } else {
        //     $this->session->set_flashdata('falselogin','nodata');
        //     redirect('Admin');
        // }
    }

    public function Logout() {
        /* Complete this function using $cookie.
            Condition 1  : if isset($cookie) then delete_cookie('logged')
            Condition 2  : else then session_destroy() 
                After u set all condition, redirect to Landing controller.
            */

        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
            delete_cookie('logged');
            redirect('Landing');
        } else {
            session_destroy();
            redirect('Landing');
        }
    }
}