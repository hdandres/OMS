<?php

namespace Tipddy\OmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class OrdenCompraType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('codigoInterno')
            ->add('valorParticipante')
            ->add('valorTotal')
            ->add('numOtic')
            ->add('numParticipante')
            ->add('codSence')
            ->add('formaPago')
            ->add('fecha')
            ->add('facturas')
        ;
    }

    public function getName()
    {
        return 'tipddy_omsbundle_ordencompratype';
    }
}
