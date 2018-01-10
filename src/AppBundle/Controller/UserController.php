<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User\UserService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\Email;

class UserController extends Controller
{

    /**
     * @Route("/register", name="register")
     * @Method({"GET", "POST"})
     */
    public function registerAction(Request $request)
    {

        $form = $this->_createRegisterForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $data = $request->request->get('form');
            $userCreator = new UserService($this->getDoctrine()->getManager());
            $userCreator->createUser($data);
            return $this->redirectToRoute('homepage');
        }

        return $this->render('seriesreminder/new-user.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    protected function _createRegisterForm()
    {
        return $this->createFormBuilder(new User())
            ->add('email', TextType::class, ['required' => true, 'constraints' => array(new Email())])
            ->add('password', RepeatedType::class, [
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
                'type' => PasswordType::class,
                'mapped' => false
            ])->add('confirm', SubmitType::class, ['label' => 'Create Account'])
            ->getForm();
    }

}
