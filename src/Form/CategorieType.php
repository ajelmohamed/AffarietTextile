<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CategorieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nomCategorie', TextType::class, array('label' =>'Nom :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
        ->add('image', FileType::class, array('required' => false , 'attr' => array('class' => 'form-control', 'style' => 'display: none')))
        ->add('valider', SubmitType::class, array('label' => 'Valider' ,'attr' => array('class' => 'btn btn-success btn-block', 'style' => 'margin-button:25px; margin-top:15px;')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Categorie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'App_categorie';
    }


}
