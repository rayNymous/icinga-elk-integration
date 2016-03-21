<?php

$section = $this->menuSection('Graphing', array(
    'icon' => 'globe'
));

$section->add('Graphana', array(
        'url'       => 'integration/grafana',
        'priority'  => 100
));
	
/*
$section->add('Pnp4Nagios', array(
    'url'       => 'pnp4nagios',
    'priority'  => 101
));
*/


$section->add('Kibana', array(
    'url'       => 'integration/kibana',
    'priority'  => 102
));

