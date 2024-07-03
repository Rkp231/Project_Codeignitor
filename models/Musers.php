<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Musers extends CI_Model {
		
		
		
		function __construct() {
			parent::__construct();
			
			$this->load->library('upload');
			$this->load->library('session');
		}
		
		
		
		/********************************
			Random ID Generator
		*********************************/
		public function randomiduniq() {
			/****** Random ID Generator ********/
			$d=date ("d"); $m=date ("m"); $y=date ("Y"); $t=time();
			$dmt=$d+$m+$y+$t;   $ran= rand(0,10000000);  $dmtran= $dmt+$ran; $un=  uniqid(); $dmtun = $dmt.$un;
			$mdun = md5($dmtran.$un);
			$sort=substr($mdun, 16); // if you want sort length code.
			return $sort;
			/****** Random ID Generator ********/
		}
		
		/********************************
			Multi Random ID Generator
		*********************************/
		public function multirandomiduniq() {
			/****** Random ID Generator ********/
			$d=date ("d"); $m=date ("m"); $y=date ("Y"); $t=time();
			$dmt=$d+$m+$y+$t;   $ran= rand(0,10000000);  $dmtran= $dmt+$ran; $un=  uniqid(); $dmtun = $dmt.$un;
			$mdun = md5($dmtran.$un);
			$sort=substr($mdun, 16); // if you want sort length code.
			return $sort;
			/****** Random ID Generator ********/
		}
		
		
		/********************************
			Random ID Generator
		*********************************/
		public function currentdatetime()
		{
			/***** CURRENT TIME ************/
			date_default_timezone_set('Asia/Calcutta');
			$dte  = date('Y-m-d h:i:s A');
			return $dte;
			/***** CURRENT TIME ************/
		}
		
		
		/********************************
			login
		*********************************/
		public function login() 
		{
			
			$emailid = $this->input->post('email');
			$password = md5($this->input->post('password'));
			
			$this->db->select('*');
			$this->db->from('usermang_mang');
			$this->db->where('emailid', $emailid);
			$this->db->where('password', $password);
			$this->db->where('acc_status', 1);
			$sql = $this->db->get();
			//return $sql->result();
			$row = $sql->num_rows();
			
			
			if($row>0) {
				
				foreach($sql->result() as $rowarray) 
				{
					$usertype = $rowarray->usertype;
					$profileid = $rowarray->profileid;
					$countryid = $rowarray->countryid;
				}
				
				
				if($usertype=='EBENEZERSUPERADMIN') 
				{
					setcookie('ebe_email', $emailid,time()+365*24*60*60);
					setcookie('ebe_usertype', 'EBENEZERUSER',time()+365*24*60*60);
					setcookie('ebe_profileid', $profileid,time()+365*24*60*60);
					
					//$this->session->set_userdata('ebe_email', $emailid);
					//$this->session->set_userdata('ebe_usertype', $usertype);
					//$this->session->set_userdata('ebe_profileid', $profileid);
					redirect('superadmin/dashboard');
					
				}
				
				elseif($usertype=='EBENEZERADMIN') 
				{
					setcookie('ebe_email', $emailid,time()+365*24*60*60);
					setcookie('ebe_usertype', 'EBENEZERUSER',time()+365*24*60*60);
					setcookie('ebe_profileid', $profileid,time()+365*24*60*60);
					setcookie('ebe_countryid', $countryid,time()+365*24*60*60);
					
					//$this->session->set_userdata('ebe_email', $emailid);
					//$this->session->set_userdata('ebe_usertype', $usertype);
					//$this->session->set_userdata('ebe_profileid', $profileid);
					//$this->session->set_userdata('ebe_countryid', $countryid);
					redirect('superadmin/dashboard');
					
				}
			}
			else {
				//session_start();
				//session_unset();
				//session_destroy();
				//$this->session->unset_userdata('ebe_email');
				//$this->session->unset_userdata('ebe_usertype');
				//$this->session->unset_userdata('ebe_profileid');
				setcookie('ebe_email','',time()-60);
				setcookie('ebe_usertype','',time()-60);
				setcookie('ebe_profileid','',time()-60);
				
				
				redirect('superadmin/index/mg98735');
			}
			
		}
		
		
		
		/********************************
			WEBSITE - Registration
		********************************/
		
		public function userregistration() {
			
			$randomiduniq = $this->randomiduniq();
			$currentdatetime = $this->currentdatetime();
			
			$sday=date('d');
			$smonth=date('m');
			$syear=date('Y');
			
			$fname        = $this->input->post('fname');
			$lname        = $this->input->post('lname');
			$name = $fname." ".$lname;
			
			$mobile        = $this->input->post('mobile');
			$emailid   = $this->input->post('email');
			//print_r($mobile);
			//print_r($emailid);exit;
			
			$password     = $this->input->post('password');
			$profileid     = 'USER'.$randomiduniq;
			//print_r($password);exit;
			//$date_of_birth = strftime("%F", strtotime($year."-".$month."-".$day));
			
			$this->db->select('*');
			$this->db->from('usermang_student');
			$this->db->where('emailid', $emailid);
			$sql_check = $this->db->get();
			//return $sql->result();
			$row = $sql_check->num_rows();
			//print_r($sql_check);exit;
			if($row>0) 
			{
				redirect('welcome/login/mgsomeoccc');
			} 
			else 
			{
				
				$data = array(
				'profileid'=>$profileid,
				'name'=>$name,
				'emailid'=>$emailid,
				'mobileno'=>$mobile,
				'profilepic'=>0,
				'password'=>MD5($password),
				'acc_status'=>0,
				'usertype'=>'EBENEZERUSER',
				'emailid_status'=>0,
				'emailid_verify'=>$randomiduniq,
				'subdatetime'=>$currentdatetime,
				'sday'=>$sday,
				'smonth'=>$smonth,
				'syear'=>$syear
				);
				$this->db->insert('usermang_student',$data);
				
				
				$appid = 'APPID'.$randomiduniq;
				$dataa = array(
				'applicationid'=>$appid,
				'name'=>$name,
				'emailid'=>$emailid,
				
				'profileid'=>$profileid,
				'status'=>0
				);
				
				$this->db->insert('application_form',$dataa);
				
				$attachid = 'ATTACH'.$randomiduniq;
				$data_img = array(
				'attachid'=>$attachid,
				'applicationid'=>$appid,
				'emailid'=>$emailid,
				'profileid'=>$profileid,
				);
				
				$this->db->insert('application_form_attach',$data_img);
				
				//print_r($this->db->affected_rows());exit;
				
				
				
				if($this->db->affected_rows() > 0) 
				{
					
					$fullname = $fname." ".$lname;
					//print_r($fullname);exit;
					//echo site_url('welcome/applynow/step2');exit;
					
					//TRigger Email
					$this->memail->userregisteremail($fullname,$emailid,$currentdatetime,$randomiduniq);
					//redirect('website/index/mga170ad38');
					setcookie('ebe_email', $emailid,time()+365*24*60*60);
					setcookie('ebe_usertype', 'EBENEZERUSER',time()+365*24*60*60);
					setcookie('ebe_profileid', $profileid,time()+365*24*60*60);
					//print_r($_COOKIE["ebe_profileid"]);exit;
					//$this->session->set_userdata('ebe_email', $emailid);
					//$this->session->set_userdata('ebe_usertype', 'EBENEZERUSER');
					//$this->session->set_userdata('ebe_profileid', $profileid);
					//print_r($this->session->('ebe_profileid'));exit;
					
					//$this->load->view('include/step2.php');
					//$this->load->view('include/step2');
					//redirect(site_url('welcome/applynow/step2'));
					//redirect ('welcome/applynow/step2',refresh);
					//redirect('include/step2');
					redirect ('welcome/applynow/step2');
					//header('location: https://ebenezercollege.edu.in/index.php/welcome/applynow/step2');
				?>
				<script>// window.location.assign('https://ebenezercollege.edu.in/index.php/welcome/applynow/step2');</script>
				<?php
				} 
				else 
				{
					redirect('welcome/login/mgfai');
				}
				
				
			}
			
		}
		
		
		
		
		
		/********************************
			USERS - findaccountactive
		********************************/
		public function findaccountactive($wl_profileid) {
			
			$this->db->select('*');
			$this->db->from('usermang_student');
			$this->db->where('profileid',$wl_profileid);
			$this->db->where('emailid_status',1);
			$sql = $this->db->get();
			//return $sql->result();
			return $sql->num_rows();
		}
		
		/********************************
			USERS - otpsend
		********************************/
		public function otpsend() 
		{
			
			$emailid   = $this->input->post('email');
			//print_r($emailid);exit;
			$this->db->select('*');
			$this->db->from('usermang_student');
			$this->db->where('emailid', $emailid);
			$sql = $this->db->get();
			//return $sql->result();
			$row = $sql->num_rows();
			//print_r($row);exit;
			if($row>0)
			{
				
				foreach($sql->result() as $rowarray) {
					$fullname = $rowarray->name;
				}
				
				$otp = rand(1111, 9999);
				
				/****************** MAIL TEMPLATE*************/
				$message = '<!DOCTYPE html><head>';
				$message .= '</head><body>';
				
				$message .= '<div><tr>
				<td>
				<div>
				<div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
				position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
				<table style="max-width:550px;border:1px solid #001b63;border-top:4px solid #001b63;border-bottom:4px solid #001b63;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
				<tbody>
				<tr>
				<td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
				</tr>
				<tr>
				<td style="padding:20px">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
				<tbody>
				
				<tr>
				<td><center><img src="'.base_url().'assets/img/footer-logo.png"/></center><br /><br /></td>
				</tr>
				<tr>
				<td style="font-size:14px;text-align:left;">Hi '.$fullname.'!...
				<br /><br />
				This is the OTP to Reset your Password.
				<br /><br /><br />
				
				
				<a style="text-decoration:none;font-size:18px;font-weight:bold;color:#ffffff;outline:none"  data-saferedirecturl=""><span style="color: #ffffff;
				background-color: #001b63;border-bottom: 3px solid #0887ae;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #26469b;  border-radius: 2px !important;  font-size: 17px;">'.$otp.'</span></a>
				<br /><br /><br />
				
				If you have any questions, Just reach us (+91 8050024004) to help out.
				
				<br /><br />
				
				</td>
				</tr>
				
				
				<tr>
				<td><a style="color:#9a9a9a">Cheers, <br/>Ebenezer Group of Institutions</a> <br/></td>
				</tr>
				
				
				
				<tr>
				<td>&nbsp;</td>
				</tr>
				
				
				
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				<p>&nbsp;</p>
				</div>
				</div>
				</td>
				</tr></div></body></html>';
				//$message="This is the OTP to Reset your Paasword.<br><br>";
				//$message.="OTP: ".$otp;
				$to=$emailid;
				$cc = '';
				//print_r($message);exit;
				
				$subject = 'OTP to Reset Password.';
				$this->load->library('email');
				$config = array (
				'mailtype' => 'html',
				'wordwrap' => 'TRUE',
				'charset' => 'iso-8859-1',
				'protocol' => 'smtp',
				'isHTML' => 'TRUE',
				
				
				'smtp_host' => 'webmail.vivartha.com',
				'smtp_port' => 587,
				'smtp_user' => 'developer@vivartha.com',
				'smtp_pass' => 'Developer@123'
				
				
				
				
				/*
					'smtp_crypto' => 'tls',
					'smtp_host' => 'smtp.office365.com',
					'smtp_port' => 587,
					'smtp_user' => 'chandrasekar.m@canopusgbs.com',
					'smtp_pass' => 'Chandru@1989',
					'newline' => '\r\n',
					'crlf' => '\r\n'
				*/
				
				
				
				);
				$this->email->initialize($config);
				$this->email->set_newline('\r\n');
				$this->email->from('support@ebenezercollege.edu.in', 'Ebenezer Group of Institutions');
				$this->email->to($to);
				//$this->email->to('chandru5452@gmail.com');
				$this->email->cc($cc);
				//$this->email->bcc('chandru5452@gmail.com');
				$this->email->subject($subject);
				$this->email->message($message);
				$this->email->send();
				$dataa = array(
				'otp_verify' => $otp
				);
				$this->db->where('emailid', $emailid);
				$this->db->update('usermang_student', $dataa);
				$data = array('email_id' => $emailid);
				
				$this->load->view('otp',$data);
				
			}
			else
			{
				$data = array('error' => "This Email is not registered.");
				
				$this->load->view('forgotpassword',$data);
				
			}
			//setcookie('email_entered_for', $emailid,time()+1*60*60);
			//setcookie('otp_sent', $otp,time()+1*60*60);			
			
			$data = array('email_id' => $emailid);
			
			$this->load->view('otp',$data);
			
		}
		
		
		
		/********************************
			USERS - verify
		********************************/
		public function verify() 
		{
			
			$data['email_id'] =$this->input->post('entered_email');
			$id_email=$this->input->post('entered_email');
			$otp_entered = $this->input->post('otp_entered');
			$otpsent = '';
			$otpmsg=array();
			$sql='';$row='';
			//print_r($this->input->post('otpsent'));exit;
			if($otp_entered!='') 
			{
				
				$this->db->select('*');
				$this->db->from('usermang_student');
				$this->db->where('emailid', $id_email);
				$sql = $this->db->get();
				//return $sql->result();
				$row = $sql->num_rows();
				if($row>0) 
				{
					
					foreach($sql->result() as $rowarray) 
					{
						$otpsent = $rowarray->otp_verify;
					}
					
					if($otp_entered==$otpsent)
					{
						//print_r('correct otp');exit;
						$this->load->view('setnewpassword',$data);
						
					}
					else 
					{
						$otpmsg = array(
						'otperror' => 'Wrong OTP entered.',
						'email_id' => $this->input->post('entered_email')
						
						);
						
						//$otpmsg['otperror'] ='Wrong OTP Entered.';
						//print_r($otpmsg);exit;
						
						$this->load->view('otp',$otpmsg);
						
					}
				}
			}
			else
			{
				$otpmsg = array(
				'otperror' => 'Enter OTP.',
				'email_id' => $this->input->post('entered_email')
				
				);
				//$otpmsg['otperror'] ='Enter OTP.';
				//print_r($otpmsg);exit;
				
				$this->load->view('otp',$otpmsg);
			}
			
		}
		
		public function passwordchanged() 
		{
			
			$emailid   = $this->input->post('entered_email');
			$newpassword   = $this->input->post('password');
			
			$dataa = array(
			'password' => MD5($newpassword)
			);
			
			$this->db->where('emailid', $emailid);
			$this->db->update('usermang_student', $dataa);
			//$data = array('email_id' => $emailid);
			redirect('welcome/login');
			//$this->load->view('otp',$data);
			//welcome/login
			
		}
		
		/********************************
			EMAIL VERIFICATION
		*********************************/
		public function verifyemail($otp) 
		{
			
			$profid = 'USER'.$otp;
			
			$this->db->select('*');
			$this->db->from('usermang_student');
			$this->db->where('profileid', $profid);
			$this->db->where('emailid_verify', $otp);
			$this->db->where('emailid_status', 0);
			$sql = $this->db->get();
			//return $sql->result();
			$row = $sql->num_rows();
			
			
			
			if($row>0) {
				
				foreach($sql->result() as $rowarray) {
					$usertype = $rowarray->usertype;
					$profileid = $rowarray->profileid;
					$emailid = $rowarray->emailid;
				}
				
				/* RANDOM ID GENERATOR */
				$randomiduniq = $this->randomiduniq();
				$currentdatetime = $this->currentdatetime();
				/* END RANDOM ID GENERATOR */
				
				$dataa = array(
				'acc_status' => 1,
				'emailid_status' => 1,
				'emailid_verify' => $randomiduniq
				);
				$this->db->where('profileid', $profid);
				//$this->db->where('email_uniqid', $email_uniqid);
				$this->db->update('usermang_student', $dataa);
				
				
				
				if($this->db->affected_rows() > 0) {
					
					//$_SESSION['email'] = $email;
					//$_SESSION['user_type'] = $user_type;
					setcookie('ebe_email', $emailid,time()+365*24*60*60);
					setcookie('ebe_usertype', 'EBENEZERUSER',time()+365*24*60*60);
					setcookie('ebe_profileid', $profileid,time()+365*24*60*60);
					
					//$this->session->set_userdata('ebe_email', $emailid);
					//$this->session->set_userdata('ebe_usertype', 'EBENEZERUSER');
					//$this->session->set_userdata('ebe_profileid', $profileid);
					redirect('welcome/applynow/step2');
					
					
					} else {
					redirect('welcome/login/mg53242');
				}
				} else {
				redirect('welcome/login/mg18342');
			}
		}
		
		
		
		/********************************
			userprofiledetail
		********************************/
		public function userprofiledetail($profileid) {
			
			$this->db->select('*');
			$this->db->from('usermang_student');
			$this->db->where('profileid', $profileid);
			$sql = $this->db->get();
			return $sql->result();
			
		}
		
		
		
		
		/********************************
			userlogin
		*********************************/
		public function userlogin() {
			
			$emailid = $this->input->post('email');
			$password = md5($this->input->post('password'));
			
			$this->db->select('*');
			$this->db->from('usermang_student');
			$this->db->where('emailid', $emailid);
			$this->db->where('password', $password);
			//$this->db->where('acc_status', 1);
			$sql = $this->db->get();
			//return $sql->result();
			$row = $sql->num_rows();
			
			
			
			$this->db->select('*');
			$this->db->from('application_form');
			$this->db->where('emailid', $emailid);
			//$this->db->where('password', $password);
			//$this->db->where('acc_status', 1);
			$sql_2 = $this->db->get();
			//return $sql->result();
			$row_2 = $sql_2->num_rows();
			if($row>0) 
			{
				foreach($sql_2->result() as $rowarray_2) 
				{
					
					$record_exist=$rowarray_2->fathersname;
				}
			}
			if($row>0) 
			{
				
				foreach($sql->result() as $rowarray) 
				{
					$usertype = $rowarray->usertype;
					$profileid = $rowarray->profileid;
					$countryid = $rowarray->countryid;
				}
				
				
				if($usertype=='EBENEZERUSER' && !empty($record_exist)) 
				{
					
					setcookie('ebe_email', $emailid,time()+365*24*60*60);
					setcookie('ebe_usertype', 'EBENEZERUSER',time()+365*24*60*60);
					setcookie('ebe_profileid', $profileid,time()+365*24*60*60);
					
					//$this->session->set_userdata('ebe_email', $emailid);
					//$this->session->set_userdata('ebe_usertype', $usertype);
					//$this->session->set_userdata('ebe_profileid', $profileid);
					redirect('welcome/index');	
				}
				else
				{
					setcookie('ebe_email', $emailid,time()+365*24*60*60);
					setcookie('ebe_usertype', 'EBENEZERUSER',time()+365*24*60*60);
					setcookie('ebe_profileid', $profileid,time()+365*24*60*60);
					
					//$this->session->set_userdata('ebe_email', $emailid);
					//$this->session->set_userdata('ebe_usertype', $usertype);
					//$this->session->set_userdata('ebe_profileid', $profileid);
					redirect('welcome/applynow/step2');
					
					
					}
				
				
			}
			else 
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
				redirect('welcome/applynow/step1');
			}
			
		}
		
		
		
		
		/********************************
			WEBSITE - applicationform
		********************************/
		
		public function applicationform() {
			
			$randomiduniq = $this->randomiduniq();
			$currentdatetime = $this->currentdatetime();
			
			//$ebe_email = $this->session->userdata('ebe_email');
			//$wl_profileid = $this->session->userdata('ebe_profileid');
			
			$ebe_email='';
			$wl_profileid='';
			if (isset($_COOKIE["ebe_email"]))
			{
				$ebe_email = $_COOKIE["ebe_email"];
			}
			if (isset($_COOKIE["ebe_profileid"]))
			{	
				$wl_profileid = $_COOKIE["ebe_profileid"];
			}
			
			
			//print_r($wl_profileid);exit; 
			$sday=date('d');
			$smonth=date('m');
			$syear=date('Y');
			
			$appid  	      		= $this->input->post('appid');
			//print_r($appid);exit;
			$program        		= $this->input->post('program');
			$addonprogram        		= $this->input->post('addoncheckbox');
			$logistic        		= $this->input->post('logistic');
			$aviation        		= $this->input->post('aviation');
			$iata        		= $this->input->post('iata');
			$it_pro        		= $this->input->post('it_pro');
			$advance_pro      = $this->input->post('advance_pro');
			//print_r($this->input->post());exit;
			$inter_intern      = $this->input->post('inter_intern');
			
			$salut    	    		= $this->input->post('salut');
			$name       	 			= $this->input->post('name');
			$gender       			= $this->input->post('gender');
			
			$dob		       			= $this->input->post('dob');
			$catagory		   			= $this->input->post('catagory');
			$nationality   			= $this->input->post('nationality');
			$religion   				= $this->input->post('religion');
			$bloodgroup           =    $this->input->post('bloodgroup');
			$fatheremail             =  $this->input->post('fatheremail');
			$motherremail          =     $this->input->post('motherremail');
			$guardiansname          =     $this->input->post('guardiansname');
			$guardiansoccupation          =     $this->input->post('guardiansoccupation');
			$guardiansaddress          =     $this->input->post('guardiansaddress');
			$studentmobileno   	= $this->input->post('studentmobileno');
			$studentemail   		= $this->input->post('studentemail');
			$fathersname    		= $this->input->post('fathersname');
			$fathersmobileno  	= $this->input->post('fathersmobileno');
			$fathersoccupation 	= $this->input->post('fathersoccupation');
			$fathersannualincome = $this->input->post('fathersannualincome');
			$mothersname    		= $this->input->post('mothersname');
			$mothersmobileno  	= $this->input->post('mothersmobileno');
			$mothersoccupation   	= $this->input->post('mothersoccupation');
			$mothersannualincome  = $this->input->post('mothersannualincome');
			$presentaddress    		= $this->input->post('presentaddress');
			$predistrict    	  	= $this->input->post('predistrict');
			$prezipcode    				= $this->input->post('prezipcode');
			$prestate    					= $this->input->post('prestate');
			$precountry    				= $this->input->post('precountry');
			$permenantaddress    	= $this->input->post('permenantaddress');
			$perdistrict    		  = $this->input->post('perdistrict');
			$perzipcode    	    	= $this->input->post('perzipcode');
			$perstate    		      = $this->input->post('perstate');
			$percountry    		    = $this->input->post('percountry');
			$sinstitutename  			= $this->input->post('sinstitutename');
			$sboard								= $this->input->post('sboard');
			$sregnum							= $this->input->post('sregnum');
			$syearpas							= $this->input->post('syearpas');
			$sclass								= $this->input->post('sclass');
			$smarkpercentage			= $this->input->post('smarkpercentage');
			$pinstitutename  			= $this->input->post('pinstitutename');
			$pboard								= $this->input->post('pboard');
			$pregnum							= $this->input->post('pregnum');
			$pyearpas							= $this->input->post('pyearpas');
			$pclass								= $this->input->post('pclass');
			$pmarkpercentage			= $this->input->post('pmarkpercentage');
			
			$ginstitutename  			= $this->input->post('ginstitutename');
			$gboard								= $this->input->post('gboard');
			$gregnum							= $this->input->post('gregnum');
			$gyearpas							= $this->input->post('gyearpas');
			$gclass								= $this->input->post('gclass');
			$gmarkpercentage			= $this->input->post('gmarkpercentage');
			
			
			$event								= $this->input->post('event');
			$state_international								= $this->input->post('state_international');
			$awardyear								= $this->input->post('awardyear');
			$achievment								= $this->input->post('achievment');
			$awards								= $this->input->post('awards');
			$sportsevent								= $this->input->post('sportsevent');
			$sportsstate_international								= $this->input->post('sportsstate_international');
			$sportsawardyear								= $this->input->post('sportsawardyear');
			$sportsachievment								= $this->input->post('sportsachievment');
			$sportsawards								= $this->input->post('sportsawards');
			$nccevent								= $this->input->post('nccevent');
			$nccstate_international								= $this->input->post('nccstate_international');
			$nccawardyear								= $this->input->post('nccawardyear');
			$nccachievment								= $this->input->post('nccachievment');
			$nccawards								= $this->input->post('nccawards');
			$scholarship								= $this->input->post('scholar');
			$speciallyabled								= $this->input->post('speciallyabled');
			$hostel								= $this->input->post('hostel');
			
			
			
			$data = array(
			'name'=>$name,
			'gender'=>$gender,
			'salut'=>$salut,
			'dob'=>$dob,
			'catagory'=>$catagory,
			'nationality'=>$nationality,
			'religion'=>$religion,
			'bloodgroup'=>$bloodgroup,
			
			'studentemail'=>$studentemail,
			'studentmobileno'=>$studentmobileno,
			'fathersname'=>$fathersname,
			'fathersmobileno'=>$fathersmobileno,
			'fathersoccupation'=>$fathersoccupation,
			'fathersannualincome'=>$fathersannualincome,
			'mothersname'=>$mothersname,
			'mothersmobileno'=>$mothersmobileno,
			'fatheremailid'=>$fatheremail,
			'motheremailid'=>$motherremail,
			'guardiansname'=>$guardiansname,
			'guardianoccupation'=>$guardiansoccupation,
			'guardiansaddress'=>$guardiansaddress,
			'mothersoccupation'=>$mothersoccupation,
			'mothersannualincome'=>$mothersannualincome,
			'presentaddress'=>$presentaddress,
			'predistrict'=>$predistrict,
			'prezipcode'=>$prezipcode,
			'prestate'=>$prestate,
			'precountry'=>$precountry,
			'permenantaddress'=>$permenantaddress,
			'perdistrict'=>$perdistrict,
			'perzipcode'=>$perzipcode,
			'perstate'=>$perstate,
			'percountry'=>$percountry,
			'sinstitutename'=>$sinstitutename,
			'sboard'=>$sboard,
			'sregnum'=>$sregnum,
			'syearpas'=>$syearpas,
			'sclass'=>$sclass,
			'smarkpercentage'=>$smarkpercentage,
			'pinstitutename'=>$pinstitutename,
			'pboard'=>$pboard,
			'pregnum'=>$pregnum,
			'pyearpas'=>$pyearpas,
			'pclass'=>$pclass,
			'pmarkpercentage'=>$pmarkpercentage,
			
			'ginstitutename'=>$ginstitutename,
			'gboard'=>$gboard,
			'gregnum'=>$gregnum,
			'gyearpas'=>$gyearpas,
			'gclass'=>$gclass,
			'gmarkpercentage'=>$gmarkpercentage,
			
			'program'=>$program,
			'add_on_program'=>$addonprogram,
			'add_on_logistic'=>$logistic,
			'add_on_aviation'=>$aviation,
			'add_on_iata'=>$$iata,
			'add_on_intern'=>$inter_intern,
			'add_on_advance'=>$advance_pro,
			'add_on_it'=>$it_pro,
			'status'=>1,
			'subdatetime'=>$currentdatetime,
			'sday'=>$sday,
			'smonth'=>$smonth,
			'syear'=>$syear,
			
			'extra_cu_event'=>$event,								
			'extra_cu_st_nat_inter'=>$state_international			,		
			'extra_cu_year'=>$awardyear						,		
			'extra_cu_achievement'=>$achievment						,		
			'extra_cu_awards'=>$awards	,
			'sports_event'=>$sportsevent		,						
			'sports_st_nat_inter'=>$sportsstate_international	,				
			'sports_year'=>$sportsawardyear			,				
			'sports_achievment'=>$sportsachievment			,				
			'sports_awards'=>$sportsawards				,				
			'ncc_event'=>$nccevent					,			
			'ncc_st_nat_inter'=>$nccstate_international		,						
			'ncc_year'=>$nccawardyear				,				
			'ncc_achievement'=>$nccachievment				,				
			'ncc_awards'=>$nccawards					,			
			'scholarship'=>$scholarship			,				
			'specially_abled'=>$speciallyabled			,				
			'hostel'=>$hostel											
			
			);
			$this->db->where('applicationid', $appid);
			$this->db->where('profileid', $wl_profileid);
			$this->db->update('application_form',$data);
			//'applicationid'=>$profileid,
			//print_r($this->db->affected_rows());exit;
			
			if($this->db->affected_rows() > 0) 
			{
				redirect('welcome/applynow/step3');
			} 
			else 
			{
				redirect('welcome/applynow/step2');
			}
			
			
			
			
		}
		
		
		
		
		/********************************
			listapplicationformbyprofid
		********************************/
		public function listapplicationformbyprofid($wl_profileid) {
			
			$this->db->select('*');
			$this->db->from('application_form');
			$this->db->where('profileid', $wl_profileid);
			$sql = $this->db->get();
			return $sql->result();
			
		}
		
		
		/********************************
			listattachformbyprofid
		********************************/
		public function listattachformbyprofid($wl_profileid) {
			
			$this->db->select('*');
			$this->db->from('application_form_attach');
			$this->db->where('profileid', $wl_profileid);
			$sql = $this->db->get();
			return $sql->result();
			
		}
		
		/********************************
			listattachformbyappid
		********************************/
		public function listattachformbyappid($appid) {
			
			$this->db->select('*');
			$this->db->from('application_form_attach');
			$this->db->where('applicationid', $appid);
			$sql = $this->db->get();
			return $sql->result();
			
		}
		
		
		
		/********************************
			applicationformattachment
		********************************/
		public function applicationformattachment() {
			
			$randomiduniq = $this->randomiduniq();
			$currentdatetime = $this->currentdatetime();
			
			//$ebe_email = $this->session->userdata('ebe_email');
			//$wl_profileid = $this->session->userdata('ebe_profileid');
			
			$ebe_email='';
			$wl_profileid='';
			if (isset($_COOKIE["ebe_email"]))
			{
				$ebe_email = $_COOKIE["ebe_email"];
			}
			if (isset($_COOKIE["ebe_profileid"]))
			{	
				$wl_profileid = $_COOKIE["ebe_profileid"];
			}
			//print_r($wl_profileid);exit;
			$appid  	      		= $this->input->post('appid');
			
			//print_r($appid);exit;
			/****Multiple FILE UPLOAD****/
			$new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '',$_FILES['bc_files']['name']);
			$config['upload_path'] = 'assets/pdf/birthcertificates/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['file_name'] = $new_image_name;
			$config['max_size']  = '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			$config['$min_width'] = '0';
			$config['min_height'] = '0';
			
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			$upload = $this->upload->do_upload('bc_files');
			/***** END Multiple FILE UPLOAD*************/
			
			
			$data_img = array(
			'birthcertificate'=>$new_image_name,
			//			'tenstd'=>$rsa_email,
			//			'twlstd'=>$new_image_name,
			//			'aadhrname'=>$sday,
			'emailid'=>$ebe_email,
			'profileid'=>$wl_profileid
			);
			
			$this->db->where('applicationid', $appid);
			$this->db->where('profileid', $wl_profileid);
			$this->db->update('application_form_attach',$data_img);
			
			
			if($this->db->affected_rows() > 0) {
				redirect('welcome/applynow/step3/mg3');
			} 
			else 
			{
				redirect('welcome/applynow/step3/mg4');
			}
			
			
			
			
		}
		
		
		
		
		
		/********************************
			applicationformattachment
		********************************/
		public function applicationformattachment_tenfiles() {
			
			$randomiduniq = $this->randomiduniq();
			$currentdatetime = $this->currentdatetime();
			
			//$ebe_email = $this->session->userdata('ebe_email');
			//$wl_profileid = $this->session->userdata('ebe_profileid');
			
			$ebe_email='';
			$wl_profileid='';
			if (isset($_COOKIE["ebe_email"]))
			{
				$ebe_email = $_COOKIE["ebe_email"];
			}
			if (isset($_COOKIE["ebe_profileid"]))
			{	
				$wl_profileid = $_COOKIE["ebe_profileid"];
			}
			
			$appid  	      		= $this->input->post('appid');
			
			
			/****Multiple FILE UPLOAD****/
			$new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '',$_FILES['ten_files']['name']);
			$config['upload_path'] = 'assets/pdf/tenstd/';
			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|pdf';
			$config['file_name'] = $new_image_name;
			$config['max_size']  = '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			$config['$min_width'] = '0';
			$config['min_height'] = '0';
			
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			$upload = $this->upload->do_upload('ten_files');
			/***** END Multiple FILE UPLOAD*************/
			
			
			$data_img = array(
			//				'birthcertificate'=>$new_image_name,
			'tenstd'=>$new_image_name,
			//				'twlstd'=>$new_image_name,
			//				'aadhrname'=>$new_image_name,
			'emailid'=>$ebe_email,
			'profileid'=>$wl_profileid
			);
			
			$this->db->where('applicationid', $appid);
			$this->db->where('profileid', $wl_profileid);
			$this->db->update('application_form_attach',$data_img);
			
			
			if($this->db->affected_rows() > 0) {
				redirect('welcome/applynow/step3/mg3');
				} else {
				redirect('welcome/applynow/step3/mg4');
			}
			
			
			
			
		}
		
		
		
		/********************************
			applicationformattachment_twelfiles
		********************************/
		public function applicationformattachment_twelfiles() {
			
			$randomiduniq = $this->randomiduniq();
			$currentdatetime = $this->currentdatetime();
			
			//$ebe_email = $this->session->userdata('ebe_email');
			//$wl_profileid = $this->session->userdata('ebe_profileid');
			
			$ebe_email='';
			$wl_profileid='';
			if (isset($_COOKIE["ebe_email"]))
			{
				$ebe_email = $_COOKIE["ebe_email"];
			}
			if (isset($_COOKIE["ebe_profileid"]))
			{	
				$wl_profileid = $_COOKIE["ebe_profileid"];
			}
			
			$appid  	      		= $this->input->post('appid');
			
			
			/****Multiple FILE UPLOAD****/
			$new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '',$_FILES['twel_files']['name']);
			$config['upload_path'] = 'assets/pdf/twelstd/';
			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|pdf';
			$config['file_name'] = $new_image_name;
			$config['max_size']  = '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			$config['$min_width'] = '0';
			$config['min_height'] = '0';
			
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			$upload = $this->upload->do_upload('twel_files');
			/***** END Multiple FILE UPLOAD*************/
			
			
			$data_img = array(
			//				'birthcertificate'=>$new_image_name,
			//				'tenstd'=>$new_image_name,
			'twlstd'=>$new_image_name,
			//				'aadhrname'=>$new_image_name,
			'emailid'=>$ebe_email,
			'profileid'=>$wl_profileid
			);
			
			$this->db->where('applicationid', $appid);
			$this->db->where('profileid', $wl_profileid);
			$this->db->update('application_form_attach',$data_img);
			
			
			if($this->db->affected_rows() > 0) {
				redirect('welcome/applynow/step3/mg3');
				} else {
				redirect('welcome/applynow/step3/mg4');
			}
			
			
			
			
		}
		
		
		
		/********************************
			applicationformattachment_aadher
		********************************/
		public function applicationformattachment_aadher() {
			
			$randomiduniq = $this->randomiduniq();
			$currentdatetime = $this->currentdatetime();
			
			//$ebe_email = $this->session->userdata('ebe_email');
			//$wl_profileid = $this->session->userdata('ebe_profileid');
			
			$ebe_email='';
			$wl_profileid='';
			if (isset($_COOKIE["ebe_email"]))
			{
				$ebe_email = $_COOKIE["ebe_email"];
			}
			if (isset($_COOKIE["ebe_profileid"]))
			{	
				$wl_profileid = $_COOKIE["ebe_profileid"];
			}
			
			$appid  	      		= $this->input->post('appid');
			
			
			/****Multiple FILE UPLOAD****/
			$new_image_name = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '',$_FILES['addhr_files']['name']);
			$config['upload_path'] = 'assets/pdf/aadher/';
			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|pdf';
			$config['file_name'] = $new_image_name;
			$config['max_size']  = '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			$config['$min_width'] = '0';
			$config['min_height'] = '0';
			
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			$upload = $this->upload->do_upload('addhr_files');
			/***** END Multiple FILE UPLOAD*************/
			
			
			$data_img = array(
			//				'birthcertificate'=>$new_image_name,
			//				'tenstd'=>$new_image_name,
			//			 'twlstd'=>$new_image_name,
			'aadhrname'=>$new_image_name,
			'emailid'=>$ebe_email,
			'profileid'=>$wl_profileid
			);
			
			$this->db->where('applicationid', $appid);
			$this->db->where('profileid', $wl_profileid);
			$this->db->update('application_form_attach',$data_img);
			
			
			if($this->db->affected_rows() > 0) {
				redirect('welcome/applynow/step3/mg3');
				} else {
				redirect('welcome/applynow/step3/mg3');
			}
			
			
			
			
		}
		
		
		
		/********************************
			WEBSITE - downloadbroucher
		********************************/
		
		public function downloadbroucher() {
			
			$randomiduniq = $this->randomiduniq();
			$currentdatetime = $this->currentdatetime();
			
			$sday=date('d');
			$smonth=date('m');
			$syear=date('Y');
			
			$name        = $this->input->post('fname');
			$mobile        = $this->input->post('mobile');
			$emailid   = $this->input->post('email');
			
			//$date_of_birth = strftime("%F", strtotime($year."-".$month."-".$day));
			
			
			$bid = 'BROUCHER'.$randomiduniq;
			
			$data = array(
			'bid'=>$bid,
			'name'=>$name,
			'emailid'=>$emailid,
			'mobileno'=>$mobile,
			'status'=>1,
			'emailid_status'=>0,
			'emailid_verify'=>$randomiduniq,
			'subdatetime'=>$currentdatetime,
			'sday'=>$sday,
			'smonth'=>$smonth,
			'syear'=>$syear
			);
			
			$this->db->insert('broucher_downloads',$data);
			
			
			
			if($this->db->affected_rows() > 0) {
				
				//assets/doc/Brochure_2021.pdf
				
				/*
					$file = "assets/doc/Brochure_2021.pdf";
					header('Content-Type: application/pdf');
					header('Content-Disposition: attachment; filename="Brochure_2021.pdf"');
					$imagpdf = file_put_contents($image, file_get_contents($file));
					echo $imagepdf;
					//redirect('welcome/index/mgfai');
				*/
				echo 1;
				
				} else {
				//redirect('welcome/index/mgfai');
				echo 0;
			}
			
			
			
			
		}
		
		
		
		
		/********************************
			WEBSITE - deleteattachment
		********************************/
		
		public function deleteattachment($filename,$appid) {
			
			
			$listattachformbyappid = $this->listattachformbyappid($appid);
			foreach($listattachformbyappid as $postpdfrow) {
				$birthcertificate = $postpdfrow->birthcertificate;
				$tenstd = $postpdfrow->tenstd;
				$twlstd = $postpdfrow->twlstd;
				$aadhrname = $postpdfrow->aadhrname;
			}
			
			if($filename=='birthcertificate') {
				$birthcertificate = 'assets/pdf/birthcertificates/'.$birthcertificate;
				unlink($birthcertificate);
				
				$data = array(
				'birthcertificate'=>''
				);
				
				$this->db->where('applicationid',$appid);
				$this->db->update('application_form_attach',$data);
				
				} else if($filename=='tenstd') {
				$tenstd = 'assets/pdf/tenstd/'.$tenstd;
				unlink($tenstd);
				$data = array(
				'tenstd'=>''
				);
				
				$this->db->where('applicationid',$appid);
				$this->db->update('application_form_attach',$data);
				
				} else if($filename=='twelstd') {
				$twlstd = 'assets/pdf/twelstd/'.$twlstd;
				unlink($twlstd);
				$data = array(
				'twlstd'=>''
				);
				
				$this->db->where('applicationid',$appid);
				$this->db->update('application_form_attach',$data);
				
				} else if($filename=='aadher') {
				$twlstd = 'assets/pdf/aadher/'.$twlstd;
				unlink($twlstd);
				$data = array(
				'aadhrname'=>''
				);
				
				$this->db->where('applicationid',$appid);
				$this->db->update('application_form_attach',$data);
				
			}
			
			
			
			if($this->db->affected_rows() > 0) {
				redirect('welcome/applynow/step3/mgc1619f66');
				} else {
				redirect('welcome/applynow/step3/mgcd1c3922');
			}
			
		}
		
		
		
		
		
		
		
	}
?>
