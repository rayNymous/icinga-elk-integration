<?php

use Icinga\Web\Controller\ModuleActionController;

class Integration_GrafanaController extends ModuleActionController
{

    public function indexAction()
    {
	$this->getTabs()->activate('grafana');
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
		  
/*        $tabs->add(
	     'pnp4nagios',
 	     array(
	         'title' => 'Pnp4Nagios',
	         'url'   => 'pnp4nagios'
	          ));
		  
*/
        return $tabs;
    }
}