<?php

$this->load->helper('html');
$nonuser = array('Home','About Us','Announcements','Sign Up');
$nonuserstyle = array('class'=>'mnunonuser','id'=>'nonunser','style'=>'color:blue;');
echo ul($nonuser,$nonuserstyle);


?>
