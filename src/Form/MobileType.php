<?php


namespace App\Form;


use App\Entity\OffreMobile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MobileType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OffreMobile::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $editMode = $builder->getData()->getId() !== null;

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
                "required" => !$editMode,
                'label'=>"Image : ",
            ])
            ->add('prix', NumberType::class,[
                "required" => true,
                'label'=>"Prix : ",
                'scale' => 2,

            ])
            ->add('operateur', TextType::class,[
                "required" => true,
                'label'=>"Opérateur : ",
            ])
            ->add('data', TextType::class,[
                "required" => true,
                'label'=>"Data : ",
            ])
            ->add('type', TextType::class,[
                "required" => true,
                'label'=>"Type d'offre : ",
            ])
            ->add('submit', SubmitType::class)
        ;
    }
}