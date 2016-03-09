<?php

use Icinga\Web\Controller\ModuleActionController;

class HelloWorld_IndexController extends ModuleActionController
{
    public function indexAction()
    {
        $this->getTabs()->activate('world');
    }

    public function getTabs()
    {
        $tabs = parent::getTabs();
        $tabs->add(
            'world',
             array(
                'title' => 'World',
                'url'   => 'helloworld'
		));
	$tabs->add(
	     'universe',
	     array(
	         'title' => 'Universe',
	         'url'   => 'helloworld/universe'
	          ));

        return $tabs;
    }
}