<?php

namespace Minecrafterdk\SiteBundle\Controller;

class ServerController extends Controller
{
    public function indexAction()
    {
        return $this->render('MinecrafterdkSiteBundle:Server:index.html.twig', array(
            'servers' => array(),
        ));
    }

    public function viewAction(int $serverId)
    {
        return $this->render('MinecrafterdkSiteBundle:Server:view.html.twig', array(
            'server' => new \stdClass,
        ));
    }
}
