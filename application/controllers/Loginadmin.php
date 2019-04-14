<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {

	public function index()
	{
        $cookie = $this->input->cookie('logged');
        if(isset($cookie) || isset($_SESSION['successLogin'])){
            $cookie = $this->input->cookie('logged');
            $data['title'] = "Login";
            $this->load->view('admin/page_header');
			$this->load->view('admin/page_index');
        } else {
            $data['title'] = "Login";

            $this->load->view('admin/login/login', $data);
        }
    }

    public function Signin() {
        $user = $this->M_loginadmin->findUser();
        if($user != null){
                set_cookie('logged', $user[0]['useradmin'], '3600');
                $this->session->set_userdata('successLogin', $user[0]['useradmin']);
                redirect('Admin/index');
        } else {
            $this->session->set_flashdata('falselogin','nodata');
            redirect('Admin/index');
        }
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