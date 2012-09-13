<?php

namespace Minecrafterdk\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Minecrafterdk\SiteBundle\Form\UserForm;

class UserController extends Controller
{
    public function newAction(Request $request)
    {
        $form = $this->createForm(new UserForm);

        if ($request->isMethod('post') && $form->bind($request) && $form->isValid()) {
            // the form is valid otherwise it will show errors
        }

        return $this->render('MinecrafterdkSiteBundle:User:new.html.twig', array(
            'form' => $form,
        ));
    }
}
