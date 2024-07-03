<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msuperadmin extends CI_Model {



	function __construct() {
		parent::__construct();

 		//$this->load->library('upload');

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
 public function login() {

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

		 foreach($sql->result() as $rowarray) {
			 $usertype = $rowarray->usertype;
			 $profileid = $rowarray->profileid;
			 $countryid = $rowarray->countryid;
		 }


			if($usertype=='EBENEZERSUPERADMIN') {

			 $this->session->set_userdata('ebe_email', $emailid);
			 $this->session->set_userdata('ebe_usertype', $usertype);
			 $this->session->set_userdata('ebe_profileid', $profileid);
 			 redirect('superadmin/dashboard');

			}

			elseif($usertype=='EBENEZERADMIN') {

			 $this->session->set_userdata('ebe_email', $emailid);
			 $this->session->set_userdata('ebe_usertype', $usertype);
			 $this->session->set_userdata('ebe_profileid', $profileid);
			 //$this->session->set_userdata('ebe_countryid', $countryid);
			 redirect('superadmin/dashboard');

			}
	}
	else {
			session_start();
			session_unset();
			session_destroy();
		 $this->session->unset_userdata('ebe_email');
		 $this->session->unset_userdata('ebe_usertype');
		 $this->session->unset_userdata('ebe_profileid');
		 redirect('superadmin/index/mg98735');
	}

 }




 /********************************
 adminprofiledetail
 *********************************/
 public function adminprofiledetail($wl_profileid) {


		$this->db->select('*');
		$this->db->from('usermang_mang');
		$this->db->where('profileid', $wl_profileid);
		//$this->db->where('password', $password);
		//$this->db->where('acc_status', 1);
		$sql = $this->db->get();
		return $sql->result();

 }



	/********************************
  listapplicationformlist
  *********************************/
  public function listapplicationformlist() {


 		$this->db->select('*');
 		$this->db->from('application_form');
		$this->db->order_by('id', 'DESC');
 		//$this->db->where('profileid', $wl_profileid);
 		//$this->db->where('password', $password);
 		//$this->db->where('acc_status', 1);
 		$sql = $this->db->get();
 		return $sql->result();

  }

	/********************************
  count_listapplicationformlist
  *********************************/
  public function count_listapplicationformlist() {


 		$this->db->select('*');
 		$this->db->from('application_form');
		$this->db->order_by('id', 'DESC');
  		$sql = $this->db->get();
 		//return $sql->result();
		return $sql->num_rows();

  }

	/********************************
  listapplicationformlistbystatus
  *********************************/
  public function listapplicationformlistbystatus($status) {


 		$this->db->select('*');
 		$this->db->from('application_form');
		$this->db->where('status', $status);
		$this->db->order_by('id', 'DESC');
  		//$this->db->where('password', $password);
 		//$this->db->where('acc_status', 1);
 		$sql = $this->db->get();
 		return $sql->result();

  }

	/********************************
  count_listapplicationformlistbystatus
  *********************************/
  public function count_listapplicationformlistbystatus($status) {


 		$this->db->select('*');
 		$this->db->from('application_form');
		$this->db->where('status', $status);
		$this->db->order_by('id', 'DESC');
  		$sql = $this->db->get();
 		//return $sql->result();
		return $sql->num_rows();

  }


	/********************************
  listapplicationformlistbydate
  *********************************/
  public function listapplicationformlistbydate($sday,$smonth,$syear) {


 		$this->db->select('*');
 		$this->db->from('application_form');
		$this->db->where('sday', $sday);
		$this->db->where('smonth', $smonth);
 		$this->db->where('syear', $syear);
		$this->db->order_by('id', 'DESC');
 		//$this->db->where('profileid', $wl_profileid);
 		//$this->db->where('password', $password);
 		//$this->db->where('acc_status', 1);
 		$sql = $this->db->get();
 		return $sql->result();

  }

	/********************************
  count_listapplicationformlistbydate
  *********************************/
  public function count_listapplicationformlistbydate($sday,$smonth,$syear) {


 		$this->db->select('*');
 		$this->db->from('application_form');
		$this->db->where('sday', $sday);
		$this->db->where('smonth', $smonth);
 		$this->db->where('syear', $syear);
		$this->db->order_by('id', 'DESC');
  		$sql = $this->db->get();
 		//return $sql->result();
		return $sql->num_rows();

  }


	/********************************
  listapplicationformdetail
  *********************************/
  public function listapplicationformdetail($applicationid) {


 		$this->db->select('*');
 		$this->db->from('application_form');
 		$this->db->where('applicationid', $applicationid);
 		//$this->db->where('password', $password);
 		//$this->db->where('acc_status', 1);
 		$sql = $this->db->get();
 		return $sql->result();

  }



	/********************************
  listdownloadbroucherslist
  *********************************/
  public function listdownloadbroucherslist() {

  	$this->db->select('*');
 		$this->db->from('broucher_downloads');
		$this->db->order_by('id', 'DESC');
 		//$this->db->where('profileid', $wl_profileid);
 		//$this->db->where('password', $password);
 		//$this->db->where('acc_status', 1);
 		$sql = $this->db->get();
 		return $sql->result();

  }


	/********************************
  count_listapplicationformlist
  *********************************/
  public function count_listdownloadbroucherslist() {


 		$this->db->select('*');
 		$this->db->from('broucher_downloads');
		$this->db->order_by('id', 'DESC');
  		$sql = $this->db->get();
 		//return $sql->result();
		return $sql->num_rows();

  }

	/********************************
  listdownloadbroucherslistbystatus
  *********************************/
  public function listdownloadbroucherslistbystatus($status) {

  	$this->db->select('*');
 		$this->db->from('broucher_downloads');
		$this->db->order_by('id', 'DESC');
 		$this->db->where('status', $status);
 		//$this->db->where('password', $password);
 		//$this->db->where('acc_status', 1);
 		$sql = $this->db->get();
 		return $sql->result();

  }

	/********************************
	count_listdownloadbroucherslistbystatus
	*********************************/
	public function count_listdownloadbroucherslistbystatus($status) {


		$this->db->select('*');
		$this->db->from('broucher_downloads');
		$this->db->where('status', $status);
		$this->db->order_by('id', 'DESC');
			$sql = $this->db->get();
		//return $sql->result();
		return $sql->num_rows();

	}



	/********************************
  listdownloadbroucherslistbydate
  *********************************/
  public function listdownloadbroucherslistbydate($sday,$smonth,$syear) {

  	$this->db->select('*');
 		$this->db->from('broucher_downloads');
 		$this->db->where('sday', $sday);
		$this->db->where('smonth', $smonth);
 		$this->db->where('syear', $syear);
		$this->db->order_by('id', 'DESC');
 		//$this->db->where('password', $password);
 		//$this->db->where('acc_status', 1);
 		$sql = $this->db->get();
 		return $sql->result();

  }


	/********************************
  count_listdownloadbroucherslistbydate
  *********************************/
  public function count_listdownloadbroucherslistbydate($sday,$smonth,$syear) {


 		$this->db->select('*');
 		$this->db->from('broucher_downloads');
		$this->db->where('sday', $sday);
		$this->db->where('smonth', $smonth);
 		$this->db->where('syear', $syear);
		$this->db->order_by('id', 'DESC');
  	$sql = $this->db->get();
 		//return $sql->result();
		return $sql->num_rows();

  }




	/********************************
	WEBSITE - broucherdownloadsts
	********************************/

 public function broucherdownloadsts($bid,$status,$page) {



		$data = array(
						 'status'=>$status
 						 );
		 $this->db->where('bid', $bid);
 		 $this->db->update('broucher_downloads',$data);
		 //'applicationid'=>$profileid,


		 if($this->db->affected_rows() > 0) {
			 redirect('superadmin/broucherdownloads/'.$page.'');
		 } else {
			 redirect('superadmin/broucherdownloads/'.$page.'');
		 }
 }




 /********************************
 WEBSITE - applicationformsts
 ********************************/

public function applicationformsts($aid,$status,$page) {
 
	 $data = array(
						'status'=>$status
						);
		$this->db->where('applicationid', $aid);
		$this->db->update('application_form',$data);
		//'applicationid'=>$profileid,


		if($this->db->affected_rows() > 0) {
			redirect('superadmin/applicationform/'.$page.'');
		} else {
			redirect('superadmin/applicationform/'.$page.'');
		}
}





}
?>
