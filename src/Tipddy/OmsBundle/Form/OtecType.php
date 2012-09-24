<?php

namespace Tipddy\OmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class OtecType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombreOtec')
            ->add('rut')
            ->add('razonSocial')
            ->add('repreLegal')
            ->add('repreRut')
            ->add('repreFono')
            ->add('giro')
            ->add('direccion')
            ->add('emailContacto')
            ->add('contacto')
            ->add('regionId')
            ->add('comunaId')
        ;
    }

    public function getName()
    {
        return 'tipddy_omsbundle_otectype';
    }
}
