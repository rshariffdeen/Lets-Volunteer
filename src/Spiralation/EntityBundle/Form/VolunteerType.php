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
            ->add('dateOfBirth','text',array(
           
            'label_attr' => array('class' => 'control-label'),
                 'label' =>'Date',
                  
                'attr'=>array(
                    'placeholder'=>'date',
                    'class' => 'input-large datepicker',
                    'data'  => \Date('today'),
                    )
            ))
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
        
        $builder
            ->add('skills', 'entity', array( 
            'label'  => 'Skills',
            'class' => 'SpiralationEntityBundle:Skills',
            'property' => 'skillname',
            'attr'  => array(
               'placeholder' =>'Skills' ,
               'multiple data-rel' =>"chosen"
            )
            ));
        $builder
            ->add('causes', 'entity', array( 
            'label'  => 'Interested Causes',
            'class' => 'SpiralationEntityBundle:Causes',
            'property' => 'cause_name',
            'attr'  => array(
               'placeholder' =>'Interested Causes' ,
               'multiple data-rel' =>"chosen"
            )
            ));
        
         $builder 
                ->add('submit','submit', array(
                'label' => 'Register'
                
                
            ));
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
