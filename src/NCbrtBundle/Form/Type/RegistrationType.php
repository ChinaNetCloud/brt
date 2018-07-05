<?php
// src/AppBundle/Form/RegistrationType.php

namespace NCbrtBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
            ->add('roles', ChoiceType::class, array('choices' => array(
                'Admin' => 'ROLE_ADMIN',
                'User' => 'ROLE_USER',),
                'expanded' => true,
                'multiple' => true,
            ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
