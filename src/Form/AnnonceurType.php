<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class AnnonceurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('username', TextType::class, array('label' =>'Username :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
            ->add('nomAnnonceur', TextType::class, array('required'   => false, 'label' =>'Nom :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
            ->add('prenomAnnonceur', TextType::class, array('required'   => false, 'label' =>'Prénom :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
            ->add('emailAnnonceur', EmailType::class, array('label' =>'Email :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
            ->add('numAnnonceur', IntegerType::class, array('label' =>'Téléphone :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
            ->add('password', RepeatedType::class, array('type' => PasswordType::class  ,'invalid_message' => 'Les mots de passes sont différents',
                'options' => array('attr' => array('class' => 'form-control' , 'style' => 'margin-button:15px ')),
                'required' => true,
                'first_options'  => array('label' => 'Mot de passe :'),
                'second_options' => array('label' => 'Confirmer Mot de passe :')))
            ->add('imageAnnonceur', FileType::class, array('required'   => false, 'label' =>'Image :', 'attr' => array('class' => 'form-control', 'style' => 'display: none')))
            ->add('créer', SubmitType::class, array('label' => 'Créer un compte' ,'attr' => array('class' => 'btn btn-success btn-block', 'style' => 'margin-button:25px; margin-top:15px;')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Annonceur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'App_annonceur';
    }


}
