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
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SrvrsServersType  extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', TextType::class, array('required' => false,
            'label' => 'Server: '))
        /* The method choices need to come from config probably, so it is extensible*/
                ->add('method', ChoiceType::class, 
                        array('choices' => 
                            array('All' => '0', 
                                    'nc-backup-py' => 'ncscript-py', 
                                    'ncbackup' => 'ncbackup',
                                    'other' => '-1'), 
                                'label' => 'Backup Method: '))
                ->add('status', ChoiceType::class, 
                        array('choices' => 
                            array('All' => '-1', 
                                    'Success' => '0', 
                                    'Fail' => '1',
                                    'Warning' => '3'), 
                                'label' => 'Status: '))
                ->add('comparer', ChoiceType::class, array('choices' => 
                    array('Greater or equal' => '>=',
                        'Smaller or equal' => '<=')))
                ->add('size', TextType::class, array('required' => false,
                    'label' => ' than (MB): '))
                ->add('search', SubmitType::class, array('label' => 'Search'));
    }
    public function getName() {
            return 'server_search'; 
    }
}
//                ->add('status', ChoiceType::class, 
//                        array('choices' => array('All' => '-1', 'Success' => '0', 'Fail' => '1'))