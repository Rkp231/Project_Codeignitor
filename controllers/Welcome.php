<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Welcome extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('msuperadmin');
			$this->load->model('musers');
			$this->load->model('messages');
			$this->load->model('memail');
			$this->load->library('session');
		}
		
		
		public function index()
		{
			$this->load->view('home');
		}
		
		
		/********************************
			SUPER ADMIN - LOGOUT
		*********************************/
		public function logout()
		{
			//session_start();
			//session_unset();
			//session_destroy();
			setcookie('ebe_email','',time()-60);
			setcookie('ebe_usertype','',time()-60);
			setcookie('ebe_profileid','',time()-60);
			
			//$this->session->unset_userdata('ebe_email');
			//$this->session->unset_userdata('ebe_usertype');
			//$this->session->unset_userdata('ebe_profileid');
			redirect('welcome/login/mg75ebec60');
		}
		
		
		
		
		public function about()
		{
			$this->load->view('about');
		}
		public function courses()
		{
			$this->load->view('courses');
		}
		public function studentcorner()
		{
			$this->load->view('studentcorner');
		}
		public function trainingandplacement()
		{
			$this->load->view('tp');
		}
		public function contact()
		{
			$this->load->view('contact');
		}
		Public function coursedetail()
		{
			$this->load->view('coursedetailmang');
		}
		Public function nursingcollege()
		{
			$this->load->view('include/nursingdetails');
		}
		Public function facilities()
		{
			$this->load->view('facilities');
		}
		Public function clubandassociation()
		{
			$this->load->view('clubandassociation');
		}
		Public function gallerys()
		{
			$this->load->view('include/gallery');
		}
		Public function gallery()
		{
			$this->load->view('gallery');
		}
		Public function addoncourse()
		{
			$this->load->view('addoncourse');
		}
		public function college()
		{
			$this->load->view('college');
		}
		public function schoolandcollegeofnursing()
		{
			$this->load->view('schoolandcollegeofnursing');
		}
		public function degreecollege()
		{
			$this->load->view('degreecollege');
		}
		public function paramedicalcourse()
		{
			$this->load->view('include/paramedicoursedetails');
		}
		public function pharmacycourse()
		{
			$this->load->view('include/pharmacycoursedetails');
		}
		public function pmedical()
		{
			$this->load->view('pmedical');
		}
		public function pharmacy()
		{
			$this->load->view('pharmacy');
		}
		public function admission()
		{
			$this->load->view('admission');
		}
		public function applynow()
		{
			
			$this->load->view('applynow');
		}
		public function forgotpass()
		{
			
			$this->load->view('forgotpassword.php');
		}
		public function library()
		{
			$this->load->view('library');
		}
		public function placements()
		{
			$this->load->view('placements');
		}
		public function addonlp()
		{
			$this->load->view('include/addonlogistics');
		}
		public function addonaam()
		{
			$this->load->view('include/addonaviation');
		}
		public function addonccai()
		{
			$this->load->view('include/addonai');
		}
		public function addonap()
		{
			$this->load->view('include/addonadvprogram');
		}
		public function popularcourses()
		{
			$this->load->view('include/popularcourses');
		}
		public function login()
		{
			$this->load->view('login');
		}
		public function bankdetails()
		{
			$this->load->view('bankdetails');
		}
		
		
		
		
		public function userregistration() { 	 $this->musers->userregistration();  }
		public function verifyemail($id) { 	 $this->musers->verifyemail($id);  }
		public function userlogin() { 	 $this->musers->userlogin();  }
		public function otpsend() { 	 $this->musers->otpsend();  }
		public function verify() { 	 $this->musers->verify();  }
		public function passwordchanged() { 	 $this->musers->passwordchanged();  }
		
		public function applicationform() { 	 $this->musers->applicationform();  }
		public function applicationformattachment() { 	 $this->musers->applicationformattachment();  }
		public function applicationformattachment_tenfiles() { 	 $this->musers->applicationformattachment_tenfiles();  }
		public function applicationformattachment_twelfiles() { 	 $this->musers->applicationformattachment_twelfiles();  }
		public function applicationformattachment_aadher() { 	 $this->musers->applicationformattachment_aadher();  }
		
		public function downloadbroucher() { 	 $this->musers->downloadbroucher();  }
		public function deleteattachment($filename,$appid) { 	 $this->musers->deleteattachment($filename,$appid);  }
		
		
		
		
		
		
		
		
		
		
		
		
		
	}
