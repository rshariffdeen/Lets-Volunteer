<?php

namespace Spiralation\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganizationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('city')
            ->add('details')
            ->add('type')
            ->add('rating')
            ->add('followers')
            ->add('projects')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Spiralation\EntityBundle\Entity\Organization'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'spiralation_entitybundle_organization';
    }
}
