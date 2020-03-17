<?php

namespace ProjectBundle\Form;
use ProjectBundle\Entity\Typeplat;
use ProjectBundle\Entity\Specialite;
use ProjectBundle\Entity\Note;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use ProjectBundle\Entity\Ustensilles;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
            ->add('type',EntityType::class,array('class'=>Typeplat::class,'choice_label'=>'nom','multiple'=>false))
            ->add('hfr', ChoiceType::class, array('label' => 'Healthy food rate ',
                'choices' => array('1' => '1','2' => '2','3' => '3','4' => '4'),
                'required' => true, 'multiple' => false ,))
            ->add('specialite',EntityType::class,array('class'=>Specialite::class,'choice_label'=>'nom','multiple'=>false))
            ->add('meteo', ChoiceType::class, array('label' => 'Meteo ',
                'choices' => array('Chaud' => 'hot',
                    'Froid' => 'cold','Tout' => 'all'),
                'required' => true, 'multiple' => false ,))

            ->add('humeur')
            ->add('preparation')
            ->add('aEviter')
            ->add('aReccomander')
            ->add('ingredients')
            ->add('nbrPortion')
            ->add('nomPortion')
            ->add('nomPortion', ChoiceType::class, array('label' => 'Nom portion ',
                'choices' => array('Personnes' => 'personnes',
                    'Litres' => 'litres','Pieces' => 'pieces'),
                'required' => true, 'multiple' => false ,))
            ->add('ustensilles',EntityType::class,array('class'=>Ustensilles::class,'choice_label'=>'nomUst','multiple'=>true))
            ->add('note',EntityType::class,array('class'=>Note::class,'choice_label'=>'nom','multiple'=>true))
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Plat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_plat';
    }


}
