<?php
namespace Minecrafterdk\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SignupForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mail', 'text');
        $builder->add('minecraft_nick', 'text');
        $builder->add('password', 'repeated');
        $builder->add('accept', 'checkbox');
    }
    
    public function getName() 
    {
        return 'signup';
    }
}