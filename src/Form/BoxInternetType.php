<?php


namespace App\Form;


use App\Entity\OffreBoxInternet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BoxInternetType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OffreBoxInternet::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'required' => true,
                'label'=>"Titre : ",
            ])
            ->add('url', TextType::class, [
                'required' => true,
                'label'=>"Url : ",
            ])
            ->add('imageFichier', FileType::class,[
                "required" => true,
                'label'=>"Image : ",
            ])
            ->add('prix', NumberType::class,[
                "required" => true,
                'label'=>"Prix : ",
                'scale' => 2,

            ])
            ->add('submit', SubmitType::class)
        ;
    }
}