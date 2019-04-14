<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_loginadmin extends CI_Model {

    public function findUser() {
            $data = array(
                "useradmin" => $this->input->post('useradmin'),
                "passadmin" => $this->input->post('passadmin')
            );

            $this->db->where($data);
            $result = $this->db->get('admin');
            return $result->result_array();

        //
    }
}