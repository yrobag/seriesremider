<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\UserService;


/**
 * Game controller.
 *
 * @Route("admin")
 */

class AdminController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('seriesreminder/admin/dashboard.html.twig');
    }



}
