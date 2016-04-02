<html>

<head>

	<title>awara</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,700italic,800' rel='stylesheet' type='text/css'>

	<?php 

		echo link_tag("assets/css/style.css");
		echo link_tag("assets/css/bootstrap.css");
		echo link_tag("assets/css/bootstrap.min.css");
    echo link_tag('assets/css/font-awesome.min.css');

	?>

</head>

<body>

	<?php $this->load->view('shared/header'); ?>

    <div class="way_to_access_form">
  
            <div >
                <img src="<?php echo base_url(); ?>assets/images/logo.jpg" class="logo_image"alt="image">
                <h1 class="logo_word">AWARA</h1>
                <h6 class="logo_word_sub">Its Just Not You</h6>
            </div>
            <div class="buttons_class">
                <center>
                <button type="button" class="btn btn-scucces btn_style"><small class="inner_text"><i class="fa fa-android font_awsym"></i> Get it for<br><strong class="inner_text_1">Android</Strong> </small> </button> 
                <button type="button" class="btn btn-scucces btn_style"><small class="inner_text"> <i class="fa fa-apple"></i> Get it for  <br><strong class="inner_text_1">IOS</strong></small></button> 
                </center>
            </div>
            <div>
                <CENTER>
                <button type="button" class="btn btn-succcess sign_up_btn"><strong class="sign_up_text">Sign Up Free!</strong></button>
                </CENTER>
            </div>

            <div class="sign_up_form hidden">
  
            <div class="sign_up_heading">
                <strong>New To</strong> <strong class="awara_text">AWARA</strong>
            </div>
            <hr class="horizontal_line">

        <div class="sign_up_text_2">or sign up with email?</div>

        <div id="wrapper">

        <form class="form-group">

          <div class="form-group div_details f_l_name">
            <input type="text" class="form-control fname " id="fname" placeholder="First Name">          
            <input type="text" class="form-control lname" id="lname" placeholder="Last Name">
          </div>

          <div class="form-group div_details">
            <input type="email" class="form-control email" id="email" placeholder="Email">
          </div>

          <div class="form-group div_details">
            <input type="email" class="form-control confirm_email" id="confirm_email" placeholder="Confirm Email">
          </div>

          <div class="form-group div_details">
            <input type="password" class="form-control password" id="password" placeholder="Password">
          </div>

          <div class=" form-group div_select_details">
            <select class="selectpicker form-control select_margin gender">
              <option>Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>

            <select class="selectpicker form-control select_margin month">
              <option >Month</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="Octomber">Octomber</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select>
          
            <select class="selectpicker form-control select_margin day">
              <option >Day</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          
            <select class="selectpicker form-control select_margin year">
              <option>Year</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
            </select>
          </div>

          <div class="form-group">
            <button type="button" class="sign_up_button">Sign Up Free !</button>
          </div>
        </form>

        </div>

    </div>

    


    </div>

</body>

    
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<?php

    echo script_tag('assets/js/jquery.js');
    echo script_tag('assets/js/jquery.backstretch.js');
    echo script_tag('assets/js/home/index.js');

?>


<script type="text/javascript">
     $(document).ready(function(){

         new AWARA.Index("<?php echo base_url(); ?>");      

    });
</script>

