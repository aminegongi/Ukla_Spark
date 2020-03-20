<?php

namespace PlatBundle\Form;

use PlatBundle\Entity\Ustensiles;
use ProjectBundle\Entity\Note;
use ProjectBundle\Entity\Specialite;
use ProjectBundle\Entity\Typeplat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('description')
                ->add('difficulte', ChoiceType::class, array('label' => 'Difficulté ',
                    'choices' => array('Facile' => 'facile',
                        'Intermédiaire' => 'intermediaire','Difficile' => 'difficiele'),
                    'required' => true, 'multiple' => false ,))
                ->add('tempsPrepa')
                ->add('tempsCuisson')
                ->add('hfr', ChoiceType::class, array('label' => 'Healthy food rate ',
                    'choices' => array('1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6'),
                    'required' => true, 'multiple' => false ,))
                ->add('meteo', ChoiceType::class, array('label' => 'Meteo ',
                    'choices' => array('hot' => 'hot',
                        'cold' => 'cold','all' => 'all'),
                    'required' => true, 'multiple' => false ,))
                ->add('humeur', ChoiceType::class, array('label' => 'Humeur ',
                    'choices' => array('happy' => 'happy','tired' => 'tired','motivated' => 'motivated','sad' => 'sad','calm' => 'calm'),
                    'required' => true, 'multiple' => false ,))
                ->add('preparation')
                ->add('aEviter')
                ->add('aReccomander')
                ->add('nbrPortion')
                ->add('nomPortion', ChoiceType::class, array('label' => 'Nom portion ',
                    'choices' => array('Personnes' => 'personnes',
                        'Litres' => 'litres','Pieces' => 'pieces'),
                    'required' => true, 'multiple' => false ,))
                ->add('ingredient')
                ->add('ustensiles',EntityType::class,array('class'=>Ustensiles::class, 'choice_label'=>'nom','choice_label'=>'nom','multiple'=>true))
                ->add('type',EntityType::class,array('class'=>\PlatBundle\Entity\Typeplat::class,'choice_label'=>'nom','multiple'=>false))
                ->add('specialite',EntityType::class,array('class'=>\PlatBundle\Entity\specialite::class,'choice_label'=>'nom','multiple'=>false))
                ->add('note',EntityType::class,array('class'=>\PlatBundle\Entity\Note::class,'choice_label'=>'nom','multiple'=>true));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlatBundle\Entity\Plat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'platbundle_plat';
    }


}
