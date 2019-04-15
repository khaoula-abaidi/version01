<?php

namespace App\Form;

use App\Entity\Contributor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ContributorConnexionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',TextType::class,[
                'label' => 'Adresse Email',
                'attr' =>['placeholder' => 'example@ccsd.cnrs.fr']
            ])
            ->add('password',PasswordType::class,[
                'label'=> 'Mot de passe',
                'attr' => ['placehoder'=> 'mot de passe']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contributor::class,
        ]);
    }
}
