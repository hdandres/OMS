<?php

namespace Tipddy\OmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LibroClaseType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('curso')
        ;
    }

    public function getName()
    {
        return 'tipddy_omsbundle_libroclasetype';
    }
}
