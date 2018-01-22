<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Game controller.
 *
 * @Route("admin")
 */
class AdminController extends Controller
{

    /**
     * @Route("/", name="admin")
     */
    public function indexAction()
    {
        return $this->render('seriesreminder/admin/dashboard.html.twig');
    }



}
