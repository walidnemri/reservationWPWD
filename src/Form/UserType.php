<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Role;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('firstname')
            ->add('lastname')
            ->add('email',EmailType::class,[
                'label' => 'Votre email:',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('langue', ChoiceType::class, [
                'choices'=>[
                    '' => null,
                    'Français' => 'fr',
                    'Anglais' => 'en',
                ]
            ])
            ->add('user_roles', EntityType::class, [
               'class'=> Role::class,
               'choice_label' => 'Role',
               'mapped' => false
            ])
            ->add('password',PasswordType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
