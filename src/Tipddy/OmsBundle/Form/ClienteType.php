<?php

namespace Tipddy\OmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('descripcion')
            ->add('razonSocial')
            ->add('tipo')
            ->add('fechaFundacion', null, array("years" => range(1990,2012)))
            ->add('direccion')
            ->add('fonoFijo')
            ->add('fonoMovil')
            ->add('email')
            ->add('sucursal')
            ->add('nombreEncargado')
            ->add('nombreComercial')
            ->add('repreLegal')
            ->add('repreRut')
            ->add('repreNombre')
            ->add('repreFono')
            ->add('repreDireccion')
            ->add('region')
            ->add('comuna')
            ->add('repreRegion')
            ->add('repreComuna')
        ;
    }

    public function getName()
    {
        return 'tipddy_omsbundle_clientetype';
    }
}
