<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Memail extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		
		
		
		
		/********************************
			triggermail
		********************************/
		public function triggermail($to,$cc,$subject,$message) {
			
			
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
			//echo $this->email->print_debugger();
			
		}
		
		
		
		
		/********************************
			MESSAGES - REGISTER BY STUDENT
		********************************/
		public function userregisteremail($fullname,$email_addr,$currentdatetime,$randomiduniq) {
			
			
			//$username=explode('@',$email_addr);
			
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
			We are excited to have you get started. First, you need to confirm your account. Just press the button below.
			<br /><br /><br />
			
			
			<a style="text-decoration:none;font-size:18px;font-weight:bold;color:#ffffff;outline:none" href="'.site_url('welcome/verifyemail/'.$randomiduniq.'').'" target="_blank" data-saferedirecturl=""><span style="color: #ffffff;
			background-color: #001b63;border-bottom: 3px solid #0887ae;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #26469b;  border-radius: 2px !important;  font-size: 17px;">Confirm Account</span></a>
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
			$to = $email_addr;
			$cc = '';
			$subject = 'Activate your Ebenezer account';
			$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
		}
		
		
		
		/********************************
			MESSAGES - newchallengeinviteemail
		********************************/
		public function newchallengeinviteemail($challengeid,$wl_profileid) {
			
			$this->db->select('*');
			$this->db->from('challengeemails');
			//$this->db->where('status', $status);
			$this->db->where('profileid', $wl_profileid);
			$this->db->where('challengeid', $challengeid);
			$sql = $this->db->get();
			//return $sql->result();
			
			foreach($sql->result() as $resultArray) {
				$email_addr = $resultArray->emails;
				$emailsentcount = $resultArray->sentstatus;
				if(empty($emailsentcount)) { $emailsentcount=0; }
				
				$rname = $this->musers->findrnamebyprofileid($wl_profileid);
				
				
				$listmychallengebychallengeid = $this->musers->listmychallengebychallengeid($challengeid);
				foreach($listmychallengebychallengeid as $listmychallengebychallengeidArray) {
					$title = $listmychallengebychallengeidArray->title;
					$challengedesc = $listmychallengebychallengeidArray->challengedesc;
					$publishby = $listmychallengebychallengeidArray->publishby;
					$validthru = $listmychallengebychallengeidArray->validthru;
					$uniqueurlid = $listmychallengebychallengeidArray->uniqueurlid;
				}
				
				
				
				$username=explode('@',$email_addr);
				
				/****************** MAIL TEMPLATE*************/
				$message = '<!DOCTYPE html><head>';
				$message .= '</head><body>';
				
				$message .= '<div><tr>
				<td>
				<div>
				<div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
				position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
				<table style="max-width:550px;border:1px solid #247d81;border-top:4px solid #247d81;border-bottom:4px solid #247d81;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
				<tbody>
				<tr>
				<td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
				</tr>
				<tr>
				<td style="padding:20px">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
				<tbody>
				<tr>
				<td><center><a href="'.base_url().'"><img height="50" src="'.base_url().'assets/website/images/logo.png" /> </a></center> <br/></td>
				</tr>
				<tr>
				<td style="text-align:center;font-weight:bold;font-size:24px;color:#247d81"> WELCOME TO SUGGESTBACK <br/><br /></td>
				</tr>
				<tr>
				<td style="font-size:14px;text-align:left;">Dear '.$username[0].'
				<br/><br />
				Warm greetings from SuggestBack team.<br /><br />
				
				You where invited to this challenge by '.$rname.'.
				<br/>
				
				
				</td>
				</tr>
				
				<tr>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td style="font-size:14px;">Your login details are as follow:</td>
				</tr>
				<tr>
				<td>
				<ul style="font-size:14px;line-height:22px;">
				
				<li><b>Title : </b>'.$title.'</li>
				<li><b>Description : </b>'.$challengedesc.' </li>
				<li><b>Published by : </b>'.$publishby.' </li>
				<li><b>Valid Thru : </b>'.$validthru.' </li>
				</ul>
				</td>
				</tr>
				<tr>
				<td style="padding:5px;color:#000" align="center"><a style="text-decoration:none;font-size:18px;font-weight:bold;color:#fff;outline:none" href="'.site_url('users/challengedetail/'.$uniqueurlid.'/newestsuggestion').'" target="_blank" data-saferedirecturl=""><span style="padding-bottom:8px;padding-top:8px;padding-left:25px;padding-right:25px;display:inline-block;background-color:#1d7d82;border-radius:5px">Visit Challenge Page</span></a></td>
				</tr>
				
				<tr>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td style="font-size:14px;text-align:left;">
				
				</td>
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
				$to = $email_addr;
				$cc = '';
				$currentdatetime = $this->musers->currentdatetime();
				$subject = 'New Challenge from '.$rname.'- '.$currentdatetime.'';
				$this->triggermail($to,$cc,$subject,$message);
				
				$updatechallengesentemailstatus = $this->musers->updatechallengesentemailstatus($email_addr,$emailsentcount,$challengeid,$wl_profileid);
				/****************** MAIL TEMPLATE*************/
				
			}
			
			
		}
		
		
		
		
		/********************************
			MESSAGES - js_forgotpassword
		********************************/
		public function js_forgotpassword($fname, $email, $currentdatetime, $profileid, $randomiduniq) {
			
			
			/****************** MAIL TEMPLATE*************/
			$message = '<html><head>';
			$message .= '</head><body>';
			
			$message .= '<div><tr>
			<td>
			<div>
			<div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
			position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
			<table style="max-width:550px;border:1px solid #00d0bb;border-top:4px solid #00d0bb;border-bottom:4px solid #00d0bb;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
			<tbody>
			<tr>
			<td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
			</tr>
			<tr>
			<td style="padding:20px">
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tbody>
			
			<tr>
			<td>Hi '.$fname.',</td>
			</tr>
			<tr>
			<td style="font-size:14px;text-align:left;">
			<br /><br />
			We received a request to reset your password. Click the link below to choose a new one:<br /><br /><br />
			
			<a style="text-decoration:none;font-size:18px;font-weight:bold;color:#fff;outline:none" href="'.site_url('website/newpassword/'.$profileid.'/'.$randomiduniq.'').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
			background-color: #00d0bb;border-bottom: 3px solid #0887ae;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #247d81;  border-radius: 2px !important;  font-size: 17px;">Reset Password</span></a>
			<br /><br />
			
			If you did&#39;t mean to receive this email we humbly apologise. You can safely ignore it. Your password won&#39;t be changed.
			<br/><br />
			</td>
			</tr>
			
			<tr>
			<td><a style="color:#9a9a9a">Saynito</a> <br/></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
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
			$to = $email;
			$cc = '';
			$subject = 'Reset your Saynito password';
		  	$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
		}
		
		
		
		
		/********************************
			MESSAGES - js_forgotpassword_confirm
		********************************/
		public function js_forgotpassword_confirm($fname, $email, $currentdatetime, $profileid) {
			
			
			/****************** MAIL TEMPLATE*************/
			$message = '<html><head>';
			$message .= '</head><body>';
			
			$message .= '<div><tr>
			<td>
			<div>
			<div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
			position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
			<table style="max-width:550px;border:1px solid #00d0bb;border-top:4px solid #00d0bb;border-bottom:4px solid #00d0bb;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
			<tbody>
			<tr>
			<td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
			</tr>
			<tr>
			<td style="padding:20px">
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tbody>
			
			<tr>
			<td>Hi '.$fname.',</td>
			</tr>
			<tr>
			<td style="font-size:14px;text-align:left;">
			<br /><br />
			Your password on Saynito has just been changed. If this was you, you&#39;re all set. If not, please reply to contact us.<br /><br /><br />
			
			<a style="text-decoration:none;font-size:18px;font-weight:bold;color:#fff;outline:none" href="'.site_url('website/index').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
		    background-color: #00d0bb;border-bottom: 3px solid #0887ae;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #247d81;  border-radius: 2px !important;  font-size: 17px;">Go to Saynito</span></a>
			<br /><br />
			
			
			</td>
			</tr>
			
			<tr>
			<td><a style="color:#9a9a9a">Saynito</a> <br/></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
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
			$to = $email;
			$cc = '';
			$subject = 'Your password has been changed';
			$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
		}
		
		
		
		
		/********************************
			MESSAGES - js_challengeemailinvite
		********************************/
		public function js_challengeemailinvite($fname, $email, $currentdatetime,$uniqueurlid) {
			
			
			$listmychallengebyid = $this->musers->listmychallengebyid($uniqueurlid);
			foreach ($listmychallengebyid as $listmychallengebyidRow) {
				$title =    $listmychallengebyidRow->title;
                $challengedesc =    $listmychallengebyidRow->challengedesc;
			}
			
			
			/****************** MAIL TEMPLATE*************/
			$message = '<html><head>';
			$message .= '</head><body>';
			
			$message .= '<div><tr>
			<td>
			<div>
			<div style="width:97% !important; padding:10px 10px 10px 10px !important; float:left; text-align:left !important;
			position:relative; bottom:0px !important; font-weight:lighter;    font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px;">
			<table style="max-width:550px;border:1px solid #00d0bb;border-top:4px solid #00d0bb;border-bottom:4px solid #00d0bb;font-family:Arial,Helvetica,sans-serif" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
			<tbody>
			<tr>
			<td style="padding-top:15px" align="center"><a style="outline:none;border:0px" href=""><img style="display:block;max-width:217px" alt="" width="100%" align="absbottom" border="0" src="" class="CToWUd"></a></td>
			</tr>
			<tr>
			<td style="padding:20px">
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tbody>
			
			<tr>
			<td>Hi '.$fname.',</td>
			</tr>
			<tr>
			<td style="font-size:14px;text-align:left;">
			<br /><br />
			Can you help requester with her challenge<br /><br />
			You can provide suggestions or vote for suggestions submitted by other responders.<br /><br />
			This is an anonymouse survey. Your identity (email or real name) wont be shared with requester.
			<br /><br />
			<p style="color: #022a2c;font-weight: bold;font-size: 26px;">'.$title.'</p>
			<p style="font-size: 18px;color: #022a2c;">'.$challengedesc.'</p><br />
			
			
			<a style="text-decoration:none;font-size:18px;font-weight:bold;color:#fff;outline:none" href="'.site_url(''.$uniqueurlid.'').'" target="_blank" data-saferedirecturl=""><span style="color: #002a2c;
		    background-color: #00d0bb;border-bottom: 3px solid #0887ae;padding: 10px 34px;margin-top: 10px !important;border: 1px solid #247d81;  border-radius: 2px !important;  font-size: 17px;">Go to Saynito</span></a>
			<br /><br />
			
			
			</td>
			</tr>
			
			<tr>
			<td><a style="color:#9a9a9a">Saynito</a> <br/></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
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
			$to = $email;
			$cc = '';
			$subject = 'Saynito - Challenge Invitation';
			$this->triggermail($to,$cc,$subject,$message);
			/****************** MAIL TEMPLATE*************/
		}
		
		
		
		
		
		
		
		
		
		
	}
?>
