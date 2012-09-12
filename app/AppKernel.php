<?php

require __DIR__ . '/autoload.php';

use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends \Symfony\Component\HttpKernel\Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),

            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),

            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            new Minecrafterdk\SiteBundle\MinecrafterdkSiteBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
