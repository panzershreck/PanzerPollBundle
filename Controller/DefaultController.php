<?php

namespace Panzer\Bundle\PollBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $name = 'panzer' . $name;

        return $this->render('PanzerPollBundle:Default:index.html.twig', array('name' => $name));
    }
}
