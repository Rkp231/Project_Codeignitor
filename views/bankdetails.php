<?php

$this->load->view('include/html-top');
$this->load->view('include/inline-header');
$this->load->view('include/header-top');
 $this->load->view('include/header');
 $this->load->view('include/rightnav');

?>
<!--========================================================
                        BREADCRUMB
=========================================================-->
<section class="breadcrumb breadcrumb-img">
<div class="breadcrumb-background">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Bank Details</h1>
        <ul>
          <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/courses'); ?>">Courses</a></li>
          <li class="last_breadcrumb"><a href="<?php echo site_url('welcome/bankdetails'); ?>">Bank Details</a></li>

        </ul>
      </div>
    </div>
  </div>
  </div>
</section>

<style>
.bank-details-tbl-div{padding-bottom: 50px;}
	#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999999; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 400px;
  max-width: 90%;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

<section class="news mtb80">
    <div class="container">
	  <div class="row">
	  <div class="col-md-12">
	  <div class="bank-details-tbl-div">
	  <h1>Bank Account Details</h1>
	  <table border="1">
	  <tr>
	  <td>Account Name</td>
	   <td>Ebenezer Group of Institution </td>
	  </tr>
	  <tr>
	  <td>Account Number</td>
	   <td>50200056443867</td>
	  </tr>
	  <tr>
	  <td>Bank Name</td>
	   <td>HDFC Bank</td>
	  </tr>
	  <tr>
	  <td>Branch</td>
	   <td>Kothanur, Bangalore</td>
	  </tr>
	  <tr>
	  <td>IFSC Code</td>
	   <td>HDFC00056662</td>
	  </tr>
	  </table>
	  <img id="myImg" class="QR-code-desktop" src="https://ebenezercollege.edu.in/assets/img/QR-code-desktop.png" alt="">
	   <img id="myImg1" class="QR-code-mobile" src="https://ebenezercollege.edu.in/assets/img/QR-code-mobile.png" alt="">
	  </div>
	  </div>
	  </div>
  </div>
</section>

<div id="myModal" class="modal">
  <span class="close" id="popclose">&times;</span>
  <img class="modal-content" id="img01">
  <!--div id="caption"></div-->
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var img1 = document.getElementById("myImg1");
var modalImg = document.getElementById("img01");
//var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = 'https://ebenezercollege.edu.in/assets/img/QR Code.png';
  //captionText.innerHTML = this.alt;
}
img1.onclick = function(){
  modal.style.display = "block";
  modalImg.src = 'https://ebenezercollege.edu.in/assets/img/QR Code.png';
  //captionText.innerHTML = this.alt;
}



$("#popclose").click(function(){
$('#myModal').hide();
});
</script>


<?php
/*
$this->load->view('include/html-bottom');
$this->load->view('include/footer');
*/
?>
