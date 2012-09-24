<?php

namespace Tipddy\OmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MaterialCursoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('cantidad')
            ->add('tipoMaterial')
            ->add('cursoId')
        ;
    }

    public function getName()
    {
        return 'tipddy_omsbundle_materialcursotype';
    }
}
