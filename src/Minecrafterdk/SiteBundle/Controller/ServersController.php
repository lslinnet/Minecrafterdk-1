<?php

namespace Minecrafterdk\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContext;

use Minecrafterdk\SiteBundle\Entity\User;

class serversController extends Controller
{
	/**
   * @Route("servere")
   */
	function listAction()
	{
		// Fetch a list of servers from the database
		$servers = array();
		return $this->render('MinecrafterdkSiteBundle:Servers:list.html.twig', array('servers' => $servers));
	}

	/**
   * @Route("server/{slug}")
   */
	function viewAction(int $serverId)
	{
		// Fetch a single serer from the database
		$server = (object) array();
		return $this->render('MinecrafterdkSiteBundle:Servers:view.html.twig', array('server' => $server));
	}
}