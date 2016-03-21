<?php

use Icinga\Web\Controller\ModuleActionController;

class Integration_KibanaController extends ModuleActionController
{

    public function indexAction()
    {
	$this->getTabs()->activate('kibana');
    }

    public function getTabs()
    {
        $tabs = parent::getTabs();
	
        $tabs->add(
            'grafana',
             array(
                'title' => 'Grafana',
                'url'   => 'integration/grafana'
		));
		
	$tabs->add(
	     'kibana',
	     array(
	         'title' => 'Kibana',
	         'url'   => 'integration/kibana'
	          ));
		  
        return $tabs;
    }
}