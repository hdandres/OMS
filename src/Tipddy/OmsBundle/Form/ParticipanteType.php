<?php

namespace Tipddy\OmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ParticipanteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido_pat')
            ->add('apellido_mat')
            ->add('rut')
            ->add('fechaNacimiento')
            ->add('direccion')
            ->add('cursos')
            ->add('region')
            ->add('comunaId')
        ;
    }

    public function getName()
    {
        return 'tipddy_omsbundle_participantetype';
    }
}
