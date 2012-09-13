<?php

namespace Minecrafterdk\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContext;

use Minecrafterdk\SiteBundle\Entity\User;

class ServerController extends Controller
{
    /**
     * @Route("servere")
     */
    function indexAction()
    {
        return $this->render('MinecrafterdkSiteBundle:Server:index.html.twig', array(
            'servers' => array(),
        ));
    }

    /**
     * @Route("server/{slug}")
     */
    function viewAction(int $serverId)
    {
        return $this->render('MinecrafterdkSiteBundle:Server:view.html.twig', array(
            'server' => new \stdClass,
        ));
    }
}
