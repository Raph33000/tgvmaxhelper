<?php

namespace TrainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use TrainBundle\Entity\User;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('gender', ChoiceType::class, array('choices'   => array('M.' => 'M.', 'Mme' => 'Mme')))
                ->add('name')
                ->add('surname')
                ->add('trainline_password', PasswordType::class, ['label' => 'Mot de passe trainline'])
                ->add('birthdate', BirthdayType::class, array(
                    'format' => 'dd/MM/yyyy',
                ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()
    {
        return 'fos_user_profile_edit';
    }



}