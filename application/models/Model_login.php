<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_login extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_credentials($user) {

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $user);

        $query = $this->db->get();

        $result = $query->result_array();

        return isset($result[0]) ? $result[0] : FALSE;
    }

}

?>
