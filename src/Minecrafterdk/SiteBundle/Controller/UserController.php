<?php

namespace Minecrafterdk\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Minecrafterdk\SiteBundle\Entity\User;
use Minecrafterdk\SiteBundle\Form;

class UserController extends Controller
{
    public function newAction(Request $request)
    {
        $form = $this->createForm(new Form\SignupForm, new User());

        if ($request->isMethod('post') && $form->bind($request) && $form->isValid()) {
            // the form is valid otherwise it will show errors
        }

        return $this->render('MinecrafterdkSiteBundle:User:new.html.twig', array(
            'form' => $form,
        ));
    }
}
