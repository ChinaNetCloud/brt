<?php

namespace NCbrtBundle\Form\Type;

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

/**
 * Description of SrvrsServers
 *
 * @author cncuser
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SrvrsServersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $date_start = date_sub(new \DateTime(), date_interval_create_from_date_string('30 days'));
        $builder
            ->add('name', TextType::class, array(
                'required' => false,
                'label' => 'Server: '))
            /* The method choices need to come from config probably, so it is extensible*/
            ->add('method', ChoiceType::class, array('choices' => array(
                'All' => '0',
                'nc-backup-py' => 'ncscript-py',
                'ncbackup' => 'ncbackup',
                'windows' => 'nc-win-backup',
                'rancid' => 'rancid',
                'other' => '-1'),
                'label' => 'Method: '))
            ->add('status', ChoiceType::class, array('choices' => array(
                'All' => '-1',
                'Success' => '0',
                'Fail' => '1',
                'Warning' => '3'),
                'multiple' => true,
                'label' => 'Status: '))
            ->add('comparer', ChoiceType::class, array('choices' => array(
                'Equal or greater' => '>=',
                'Smaller or equal' => '<=')))
            ->add('size', TextType::class, array(
                'required' => false,
                'label' => 'than (MB): '))
            ->add('date_start', DateTimeType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'MM/dd/y H:mm:ss',
                'data' => $date_start,
                'label' => 'From:'))
            ->add('date_end', DateTimeType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'MM/dd/y H:mm:ss',
                'data' => new \DateTime(),
                'label' => 'To:'))
            ->add('count', ChoiceType::class, array('choices' => array(
                '25' => '25',
                '10' => '10',
                '50' => '50',
                '100' => '100',
                '250' => '250'),
                'label' => 'Results count:'))
            ->add('active', CheckboxType::class, array(
                'label' => 'Production',
                'data' => true, 'required' => false))
            ->add('search', SubmitType::class, array('label' => 'Search'))
            ->setMethod('GET');
    }

    public function getName()
    {
        return 'server_search';
    }
}
//                ->add('status', ChoiceType::class,
//                        array('choices' => array('All' => '-1', 'Success' => '0', 'Fail' => '1'))
