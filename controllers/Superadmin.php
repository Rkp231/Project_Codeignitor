<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('msuperadmin');
 		$this->load->model('musers');
		$this->load->model('messages');
		//$this->load->model('memail');

	}


  /********************************
	SUPER ADMIN LOGIN PAGE
	*********************************/
	public function index()
	{
		$this->load->view('superadmin/login');
	}


  /********************************
	dashboard
	*********************************/
	public function dashboard()
	{


    $user_type = $this->session->userdata('ebe_usertype');
    if($user_type=='EBENEZERSUPERADMIN' || $user_type=='EBENEZERADMIN') {
      $this->load->view('superadmin/dashboard');
    }
    else  {
      $this->logoutdenined();
    }
	}




  /********************************
	SUPER ADMIN - LOGOUT
	*********************************/
	public function logout()
	{
		session_start();
		session_unset();
		session_destroy();
	 	$this->session->unset_userdata('ebe_email');
	 	$this->session->unset_userdata('ebe_usertype');
	 	$this->session->unset_userdata('ebe_profileid');
	 	//$this->session->unset_userdata('rsa_countryid');
	 	redirect('superadmin/index/mgfae84c0a');
	}


  /********************************
	SUPER ADMIN - logoutdenined
	*********************************/
	public function logoutdenined()
	{
		session_start();
		session_unset();
		session_destroy();
	 	$this->session->unset_userdata('ebe_email');
	 	$this->session->unset_userdata('ebe_usertype');
	 	$this->session->unset_userdata('ebe_profileid');
	 	//$this->session->unset_userdata('rsa_countryid');
	 	redirect('superadmin/index/mgacsdnd');
	}




	/********************************
	applicationform
	*********************************/
	public function applicationform()
	{


    $user_type = $this->session->userdata('ebe_usertype');
    if($user_type=='EBENEZERSUPERADMIN' || $user_type=='EBENEZERADMIN') {
      $this->load->view('superadmin/applicationform/applicationformmang');
    }
    else  {
      $this->logoutdenined();
    }
	}



	/********************************
	broucherdownloads
	*********************************/
	public function broucherdownloads()
	{


    $user_type = $this->session->userdata('ebe_usertype');
    if($user_type=='EBENEZERSUPERADMIN' || $user_type=='EBENEZERADMIN') {
      $this->load->view('superadmin/broucherdownloads/broucherdownloadmang');
    }
    else  {
      $this->logoutdenined();
    }
	}






	public function login() { $this->msuperadmin->login(); }
  public function broucherdownloadsts($bid,$status,$page) { $this->msuperadmin->broucherdownloadsts($bid,$status,$page); }

	public function applicationformsts($aid,$status,$page) { $this->msuperadmin->applicationformsts($aid,$status,$page); }








}
