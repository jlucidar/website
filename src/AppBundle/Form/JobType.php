<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('department')
            ->add('text')
            ->add('order')
            ->add('browseBackOffice')
            ->add('editSelfInfos')
            ->add('readOtherInfos')
            ->add('manageProject')
            ->add('editFigures')
            ->add('editOtherInfos')
            ->add('editPublicTexts')
            ->add('managePositions')
            ->add('manageMembers')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Job'
        ));
    }
}
