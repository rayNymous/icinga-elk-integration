<?php

$section = $this->menuSection('World', array(
    'icon' => 'globe'
));

$section->add('World', array(
    'url'       => 'helloworld',
        'priority'  => 100
));
	
$section->add('Universe', array(
    'url'       => 'helloworld/universe',
    'priority'  => 101
));