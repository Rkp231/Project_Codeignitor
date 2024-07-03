<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class messages extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	/********************************
	MESSAGES
	********************************/
	public function msg_text($mssg) {


		  $mg98735 = array('Invalid Password.. Please Try again!', '0');
			$mgacsdnd = array('Access Denied!', '0');
			$mg2 = array('An email has been sent to your email address with new password. Please check and login.', '1');
			$mg3 = array('Updated Successfully', '1');
			$mg4 = array('Sorry!! Not Updated. Please try again', '0');
			$mg53242 = array('Sorry!!. Please try again', '0');
			$mg6 = array('Your account changes has been done successfully', '1');
			$mg72342 = array('Already an account has been Registered using this Email ID! Please click Forgot your password?', '0');
			$mg8 = array('Data Added successfully.', '1');
			$mg9 = array('Data Not Added. Please try again', '0');
			$mg10 = array('Data Deleted successfully.', '1');
			$mg11 = array('Data Not Deleted. Please try again', '0');
			$mg12 = array('Already an account has been Registered using this Email ID!', '0');
			$mg13 = array('Sorry!!. Barcode already exists', '0');
 			$mg82372 = array('Your account created successfully, Verification link sent to your email', '1');
			$mg15 = array('Order Placed Successfully', '1');
			$mg16 = array('Sorry, This Coupon code has been used already', '0');
			$mg17 = array('Product added successfully', '1');
			$mg18342 = array('Sorry, invalid link', '0');
			$mg19 = array('Stock not available', '0');
			$mg20 = array('Your account has been verified successfully', '1');
			$mg21 = array('We regret that the transaction was not successful due to the following possible reasons:', '0');
			$mg22 = array('Invalid Transaction. Please try again', '0');
			$mg23 = array('Your Order status is ', '0');
			$mg24 = array('Mail Sent successfully', '1');
			$mg25 = array('Sorry!! We regret that the transaction was not successful, Please contact Kika Tableware (Mobile No: +91 80 22354396) to place Booking. Please try again!!', '0');
			$mg26 = array('Your account password has been changes successfully', '1');
			$mg27 = array('Sorry!! This coupon code added already', '0');
			$mgfae84c0a = array('Your have loggedout successfully', '1');
			$mg896565 = array('Please complete your profile 100% to find jobs', '0');
			$mgqqcvrfxdvb = array('Please complete your profile 100% to post jobs', '0');
			$mgfae84c0a = array('Your have loggedout successfully', '1');
			$mgliaoibls = array('New Password Sent to your email', '1');
			$mgsomeoccc = array('You have an account already, Please go to login', '1');

			//$mssg = $this->uri->segment(3);

			switch ($mssg) {
				case 'mg98735':
					return $mg98735;
					break;

					case 'mg896565':
						return $mg896565;
						break;

				case 'mg82372':
					return $mg82372;
						break;
				case 'mgfae84c0a':
						return $mgfae84c0a;
						break;



				case 'mg2':
					return $mg2;
					break;
				case 'mg3':
					return $mg3;
					break;
				case 'mg4':
					return $mg4;
					break;
				case 'mg53242':
					return $mg53242;
					break;
				case 'mg6':
					return $mg6;
					break;
				case 'mg72342':
					return $mg72342;
					break;
				case 'mg8':
					return $mg8;
					break;
				case 'mg9':
					return $mg9;
					break;
				case 'mg10':
					return $mg10;
					break;
				case 'mg11':
					return $mg11;
					break;
				case 'mg12':
					return $mg12;
					break;
				case 'mg13':
					return $mg13;
					break;

				case 'mg15':
					return $mg15;
					break;
				case 'mg16':
					return $mg16;
					break;
				case 'mg17':
					return $mg17;
					break;
				case 'mg18342':
					return $mg18342;
					break;
				case 'mg19':
					return $mg19;
					break;
				case 'mg20':
					return $mg20;
					break;
				case 'mg21':
					return $mg21;
					break;
				case 'mg22':
					return $mg22;
					break;
				case 'mg23':
					return $mg23;
					break;
				case 'mg24':
					return $mg24;
					break;
				case 'mg25':
					return $mg25;
					break;
				case 'mg26':
					return $mg26;
					break;
				case 'mg27':
					return $mg27;
					break;
				case 'mgqqcvrfxdvb':
					return $mgqqcvrfxdvb;
					break;

				case 'mgliaoibls':
					return $mgliaoibls;
					break;


				case 'mgacsdnd':
 				 return $mgacsdnd;
 				 break;


				 case 'mgsomeoccc':
  				 return $mgsomeoccc;
  				 break;







			}
	}




}
?>
