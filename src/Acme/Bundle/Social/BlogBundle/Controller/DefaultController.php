<?php

namespace Acme\Bundle\Social\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $age = 48;

        return $this->render('AcmeSocialBlogBundle:Default:index.html.twig', array('name' => $name, 'age' => $age));
    }
}
