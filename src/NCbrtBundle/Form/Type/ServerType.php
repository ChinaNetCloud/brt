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
use NCbrtBundle\Tools\TimeConverter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ServerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('frequency', TextType::class, array(
            'required' => false,
            'label' => 'Execution frequency: '))
            ->add('save_submit', SubmitType::class, array(
                'label' => 'Save'));
        $builder->get('frequency')->addModelTransformer(new CallbackTransformer(function ($hashToReadableString) {
            // make readable string from hash
            $readableString = TimeConverter::ConvertFromSeconds($hashToReadableString);
            return $readableString;
        }, function ($readableStringToHash) {
            // transform the readable string back to a hash string
            $hashString = TimeConverter::ConvertToSeconds($readableStringToHash);
            return $hashString;
        }
        ));
    }
    public function getName()
    {
        return 'server_edit';
    }
}
