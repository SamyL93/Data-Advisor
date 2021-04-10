<?php


namespace App\Form;


use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('heure_publi', DateTimeType::class, [
                'label' => 'Date publication',
                'widget' => 'single_text',
                'placeholder' => 'jj/mm/aaaa - hh:mm',
                'html5' => true,
                'required' => true
            ])
            ->add('titre', TextType::class, [
                'required' => true,
                'label'=>"Titre de article",
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'label'=> "Description courte",
            ])
            ->add('url', TextType::class, [
                'required' => true,
                'label'=>"Url de article",
            ])
            ->add('imageFichier', FileType::class,[
                "required" => true,
                'label'=>"Image article",
            ])
            ->add('submit', SubmitType::class)
        ;
    }
}