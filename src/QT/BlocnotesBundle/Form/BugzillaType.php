<?php

namespace QT\BlocnotesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use QT\BlocnotesBundle\Form\Type\TopicType;

class BugzillaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('application', EntityType::class, array(
                        'class' => 'QTCartographieBundle:Application',
                        'choice_label' => 'nom',
            ))
            ->add('etat', ChoiceType::class, array(
                        'choices' => array(
                            'ouvert' => 'ouvert',
                            'resolu' => 'resolu',
                            'invalide' => 'invalide',
                        )
            ))
            ->add('categorie', ChoiceType::class, array(
                        'choices' => array(
                            'concept' => 'concept',
                            'bug' => 'bug',
                            'amelioration' => 'amelioration',
                        )
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QT\BlocnotesBundle\Entity\Bugzilla'
        ));
    }
}
