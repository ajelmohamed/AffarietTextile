<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\SousCategorie;
use App\Entity\Region;
use App\Repository\CategorieRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\HttpFoundation\File\File;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, array( 'choices' => array('Offre' => 'Offre', 'Demande' => 'Demande'),'multiple'=>false,'expanded'=>true,'label' => 'Type d\'annonce :', 'label_attr' => array('id' => 'type')  ,'attr' => array('style' => 'margin-button:15px ')))
            ->add('nomprod', TextType::class, array('label' => 'Nom du Produit :', 'label_attr' => array('id' => 'nom')  ,'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
            ->add('categorie', EntityType::class, array('class' => Categorie::class, 'query_builder' => function (CategorieRepository $cr) {
                return $cr->createQueryBuilder('c')
                    ->orderBy('c.id', 'DESC');
            }  , 'choice_label' => 'nomCategorie' ,'label' => 'Catégorie :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
            ->add('prix', IntegerType::class, array('label' => 'Prix (DT) :','label_attr' => array('id' => 'prix')  ,'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px')))
            ->add('description', TextareaType::class, array('label' => 'Description :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px')))
            ->add('region', EntityType::class, array('class' => Region::class,  'choice_label' => 'nomRegion' ,'label' => 'Région :', 'attr' => array('class' => 'form-control', 'style' => 'margin-button:15px ')))
            ->add('images', FileType::class, array('multiple' => true ,'mapped' => false, 'required' => false ,'attr' => array('accept' => 'Image/*', 'onclick' => 'hiderr();' , 'style' => 'display: none')))
            ->add('valider', SubmitType::class, array('label' => 'Valider', 'attr' => array('class' => 'btn btn-primary', 'onclick' => 'return verif();' , 'style' => 'margin-button:15px; margin-top:40px; width: 80% ;')));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'App_produit';
    }


}
