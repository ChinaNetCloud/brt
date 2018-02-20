<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Form\Type;

/**
 * Description of SrvrsServers
 *
 * @author cncuser
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class ServerType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
                $builder->add('frecuency', TextType::class, array('required' => false,
            'label' => 'Execution Frecuency: '))
                        ->add('measure_unit', ChoiceType::class,
                                array('choices' => 
                                    array('Day(s)' => 'd',
                                        'Hour(s)' => 'h',
                                        'Week(s)' => 'w'), 
                                'label' => 'Time unit: '))
                        ->add('save_submit', SubmitType::class, array('label' => 'Save'));
    }
}
