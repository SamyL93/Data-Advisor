<?php


namespace App\Form;


use App\Entity\Carte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarteType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Carte::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $editMode = $builder->getData()->getId() !== null;

        $builder
            ->add('jsonFile', FileType::class,[
                "required" => !$editMode,
                'label'=>"Carte json",
            ])
            ->add('identifier', TextType::class,[
                'required' => false,
                'label' => "Identifiant"
            ])
            ->add('submit', SubmitType::class)
        ;
    }
}