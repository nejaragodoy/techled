<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


	function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
        $this->load->helper('url');

        $this->views = new stdClass();
		$this->views->head = "includes/head";
        $this->views->footer = "includes/footer";

        $this->views->sideBar = "sideBar";
		$this->views->topNav = "topNav";
		$this->views->footContent = "footContent";

		$this->views->contentHome = "contentHome";
		$this->views->contentProducts = "contentProducts";
    }
    public function index()
	{
		echo "404";
	}
	
	public function main($section = null)
	{
		$data['userData']=$this->verify_session();
		
		$data['sideBar'] = $this->views->sideBar;
		$data['topNav'] = $this->views->topNav;
		$data['footContent'] = $this->views->footContent;

		echo $section."<br>dsad";

		if ($section!='' ) {
			$data['content'] = $this->views->{$section};
		}else{
			$data['content'] = $this->views->contentHome;
		}
		

        $this->load->view($this->views->head);
		$this->load->view('wrapper', $data);
		$this->load->view($this->views->footer);
	}


	//LOGIN STAGE
	public function login()
	{

		//$userData=$this->verify_session();
		//if ($userData['salespCode']!='') { redirect('main'); }


        $this->load->view('includes/head');
		$this->load->view('login');
		$this->load->view('includes/footer');
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

	public function do_login()
    {	
    	$this->load->model('model_login');
        $post = $this->input->post();
        $userData = $this->model_login->get_credentials($post['user']);

        
        if ($userData) {

            $passCheck = $userData['password'] === $post['pass'] ? TRUE : FALSE;

            if ($passCheck) {
                unset($userData['password']);

                $userData['salespCode'] = "Manuel";
                $userData['userType'] = "Garcia";

                $this->session->set_userdata("logged_in", true);
                $this->session->set_userdata("userdata", $userData);
                redirect('main');
            } else {
                echo "EL PASSWORD ES INCORRECTO";
            }
        } else {
            echo "EL USUARIO NO EXISTE";
        }
    }

    public function verify_session()
    {
		$status = $this->session->userdata('logged_in');

        if ($status) {

            $userData = $this->session->userdata('userdata');
            //print_r("status");

            if ($userData['salespCode']) {
                return $userData;
            } else {
                redirect('login');
            }
        } else {
            redirect('login');
        }
    }

    

   
}

