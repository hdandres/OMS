<?php

namespace Tipddy\OmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PersonalExternoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidoPat')
            ->add('apellidoMat')
            ->add('profesion')
            ->add('rut')
            ->add('fechaNacimiento')
            ->add('email')
            ->add('fonoFijo')
            ->add('fonoMovil')
            ->add('direccion')
            ->add('estado')
            ->add('institucionEstudios')
            ->add('otecId')
            ->add('regionId')
            ->add('comunaId')
        ;
    }

    public function getName()
    {
        return 'tipddy_omsbundle_personalexternotype';
    }
}
