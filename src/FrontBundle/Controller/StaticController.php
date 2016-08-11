<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
    public function homepageAction()
    {
        return $this->render('FrontBundle:Static:homepage.html.twig');
    }
	
	public function voteAction()
    {
        return $this->render('FrontBundle:Static:vote.html.twig');
    }



}