<?php

namespace AppBundle\Controller;

//use AppBundle\Entity\User\UserService;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use AppBundle\Service\UserService;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class UserController extends Controller
{

    /**
     * @Route("/register", name="register")
     * @Method({"GET", "POST"})
     */
    public function registerAction(Request $request, UserService $userService)
    {
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $data = $request->request->get('user');
            try{
                $userService->createUser($data);
            }catch (Exception $e){
                $this->render('seriesreminder/new-user.html.twig', [
                    'form' => $form->createView(),
                    'error' => $e->getMessage(),
                ]);
            }
            return $this->redirectToRoute('homepage');
        }

        return $this->render('seriesreminder/new-user.html.twig', [
            'form' => $form->createView(),
            'error' => false,
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $errors = $authenticationUtils->getLastAuthenticationError();
        $username = $authenticationUtils->getLastUsername();

        return $this->render('seriesreminder/login.html.twig', [
            'errors' => $errors,
            'username' => $username
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {

    }




    protected function _createRegisterForm()
    {
        return $this->createFormBuilder(new User())
            ->add('email', TextType::class)
            ->add('password', RepeatedType::class, [
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
                'type' => PasswordType::class,
                'mapped' => false
            ])->add('confirm', SubmitType::class, ['label' => 'Create Account'])
            ->getForm();
    }


}
