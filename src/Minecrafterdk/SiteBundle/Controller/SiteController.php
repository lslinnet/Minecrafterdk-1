<?php

namespace Minecrafterdk\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContext;

use Minecrafterdk\SiteBundle\Entity\User;
use Minecrafterdk\SiteBundle\Form;

class SiteController extends Controller
{   
    /**
     * @Route("")
     */
    public function homeAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:home.html.twig', array());
    }
    
    /**
     * @Route("opret_bruger")
     */
    public function signupAction()
    {          
        $signupForm = $this->createForm(new Form\SignupForm, new User());
        
        return $this->render('MinecrafterdkSiteBundle:Site:signup.html.twig', array(
            'signupForm' => $signupForm->createView()
        ));
    }
    
    /**
     * @Route("youtube_kanaler")
     */
    public function youtubeAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:youtube.html.twig', array());
    }
    
    /**
     * @Route("guider")
     */
    public function guidesAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:guides.html.twig', array());
    }
    
    /**
     * @Route("servere")
     */
    public function serversAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:servers.html.twig', array());
    }
    
    /**
     * @Route("wiki")
     */
    public function wikiAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:wiki.html.twig', array());
    }
    
    /**
     * @Route("billeder")
     */
    public function picturesAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:pictures.html.twig', array());
    }
    
    /**
     * @Route("mods")
     */
    public function modsAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:mods.html.twig', array());
    }
    
    /**
     * @Route("skins")
     */
    public function skinsAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:skins.html.twig', array());
    }
    
    /**
     * @Route("sandkassen")
     */
    public function sandkassenAction()
    {          
        return $this->render('MinecrafterdkSiteBundle:Site:sandkassen.html.twig', array());
    }
    
    
}
