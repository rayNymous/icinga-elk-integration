<?php

use Icinga\Web\Controller\ModuleActionController;

class HelloWorld_UniverseController extends ModuleActionController
{
    public function indexAction()
    {
        $this->getTabs()->activate('universe');
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
		'url'   => 'helloworld/universe'																	     ));

        return $tabs;
    }
}