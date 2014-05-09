<?php

namespace Spiralation\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VolunteerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('password')
            ->add('firstName')
            ->add('lastName')
            ->add('dateOfBirth')
            ->add('city')
            ->add('contactNumber')
            ->add('profession')
            ->add('organization')
            ->add('skills')
            ->add('causes')
            ->add('feedbacks')
            ->add('project')
            ->add('followingOrganizations')
            ->add('rating')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Spiralation\EntityBundle\Entity\Volunteer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'spiralation_entitybundle_volunteer';
    }
}
