<html>
<head>
<title>
Registration
</title>
</head>
<body>

Ambot lang
<?php $this->load->view('nonusermenu.php');  ?>

<?php echo form_open('register'); ?>
<?php
  $lbluname = array('class'=>'lbluname','style'=>'color:#000;');
	echo form_label('Username:','lbluname',$lbluname);
	$txtuname = array('name'=>'txtuname','value'=>'','maxlength'=>30,'size'=>20,'id'=>'txtuname','class'=>'txtuname');
	echo form_input($txtuname);
	echo br(1);
	$lblpassword = array('class'=>'lblpassword','style'=>'color:#000;');
	echo form_label('Password:','lblpassword',$lblpassword);
	$txtpassword = array('name'=>'txtpassword','value'=>'','maxlength'=>30,'size'=>20,'id'=>'txtuname','class'=>'txtuname');
	echo form_password($txtpassword);
	echo br(1);
	$lblcpassword = array('class'=>'lblcpassword','style'=>'color:#000;');
	echo form_label('Confirm password:','lblcpassword',$lblcpassword);
	$txtcpassword = array('name'=>'txtcpassword','value'=>'','maxlength'=>20,'size'=>20,'id'=>'txtcpassword','class'=>'txtcpassword');
	echo form_password($txtcpassword);
	echo br(1);
	$lblemail = array('class'=>'lblemail','style'=>'color:#000;');
	echo form_label('Email:','lblemail',$lblemail);
	$txtemail  = array('name'=>'txtemail','value'=>'','maxlength'=>20,'size'=>20,'id'=>'txtemail','class'=>'txtemail');
	echo form_input($txtemail);
	echo br(1);
	$btnRegister = array('name'=>'btnRegister','value'=>'Register');
	echo form_submit($btnRegister);

	
	
	
	

?>
<?php echo form_close(); ?>
</body>
</html>
