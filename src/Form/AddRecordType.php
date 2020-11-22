<?php

namespace App\Form;

use App\Entity\Record;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddRecordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['attr'=>[
//                'placeholder'=>'name'
            ]])
            ->add('email', EmailType::class, ['attr'=>[
//                'placeholder'=>'email'
            ]])
            ->add('content', TextType::class, ['attr'=>[
//                'placeholder'=>'content'
            ]])
            ->add('submit',SubmitType::class, ['attr'=>[
                'value'=>'add' // doesn't work
            ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Record::class,
        ]);
    }
}
