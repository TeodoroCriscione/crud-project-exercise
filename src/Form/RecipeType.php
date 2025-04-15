<?php

namespace App\Form;

use App\Entity\Recipe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'attr' => ['class'=> 'form-control my-2', 'placeholder'=>'Recipe Name']
            ])
            ->add('ingredients',null, [
                'attr' => ['class'=> 'form-control my-2', 'placeholder'=>'Recipe Ingredients']
            ])
            ->add('instructions',null, [
                'attr' => ['class'=> 'form-control my-2', 'placeholder'=>'Recipe Instructions']
            ])
            ->add('imageURL',null, [
                'attr' => ['class'=> 'form-control my-2', 'placeholder'=>'Recipe ImageURL']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
        ]);
    }
}
