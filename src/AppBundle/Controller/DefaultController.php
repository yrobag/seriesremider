<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $loginForm = $this->_createLoginForm();


        return $this->render('seriesreminder/index.html.twig', [
            'form' => $loginForm->createView(),
        ]);
    }


    protected function _createLoginForm()
    {
        return $this->createFormBuilder()
            ->add('email', TextType::class)
            ->add('password', PasswordType::class)
            ->add('confirm', SubmitType::class, ['label' => 'Login'])
            ->setAction('/login')
            ->getForm();
    }
}
