<?php

$this->load->helper('html');

$attributes = array(
                    'class' => 'boldlist',
                    'id'    => 'mylist'
                    );

$list = array(
            'Announcements' => array('View Announcements','Add Announcements'));
                      
echo ul($list, $attributes);

?>
