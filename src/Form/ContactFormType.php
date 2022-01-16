<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'First name',
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Last name',
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Phone number',
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
            ])
            /*->add('First name', TextType::class, [
                'label' => 'First name',
            ])*/
            ->add('Submit', SubmitType::class, [
                'label' => 'Submit',
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
        $resolver->setDefaults([
            'data-class' => Contact::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'contact_item',
        ]);
    }
}