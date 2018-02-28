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


use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DateSearchType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $date_start = date_sub(new \DateTime(), date_interval_create_from_date_string('7 days'));
        $builder->add('date_start', DateTimeType::class, 
                array('data' => $date_start))
                ->add('date_end', DateTimeType::class, 
                array('data' => new \DateTime()))
                ->add('report', SubmitType::class,
                        array('label' => 'Generate Report'));
    }
    public function getName() {
            return 'datetime_limit'; 
    }
}
