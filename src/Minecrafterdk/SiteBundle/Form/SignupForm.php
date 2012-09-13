<?php
namespace Minecrafterdk\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints;

class SignupForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mail', 'text');
        $builder->add('minecraft_nick', 'text');
        $builder->add('password', 'repeated', array(
            'type' => 'password',
        ));
        $builder->add('accept', 'checkbox', array(
            'mapped' => false,
            'constraints' => array(
                new Constraints\True(),
            ),
        ));
    }
    
    public function getName() 
    {
        return 'signup';
    }
}
