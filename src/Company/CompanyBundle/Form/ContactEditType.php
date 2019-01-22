<?php

namespace Company\CompanyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('name')
            ->remove('mail')
            ->remove('content')
            ->add('checked')
        ;
    }

    public function getParent()
    {
        return ContactType::class;
    }
}
