<?php

use Icinga\Web\Controller\ModuleActionController;

class Integration_IndexController extends ModuleActionController
{

    public function indexAction()
    {
        $this->getTabs()->activate('graphing');
    }
		  

    public function getTabs()
    {
        $tabs = parent::getTabs();
	
        $tabs->add(
            'grafana',
             array(
                'title' => 'Grafana',
                'url'   => 'grafana'
		));
		
	$tabs->add(
	     'kibana',
	     array(
	         'title' => 'Kibana',
	         'url'   => 'kibana'
	          ));
		  
        $tabs->add(
	     'pnp4nagios',
 	     array(
	         'title' => 'Pnp4Nagios',
	         'url'   => 'pnp4nagios'
	          ));
		  

        return $tabs;
    }
}