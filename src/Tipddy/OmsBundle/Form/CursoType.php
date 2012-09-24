<?php

namespace Tipddy\OmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CursoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombreCurso')
            ->add('categoria')
            ->add('modalidadCurso')
            ->add('tipoActividad')
            ->add('codigoSence')
            ->add('porcAsistencia')
            ->add('notaMinima')
            ->add('horaMinima')
            ->add('horaTotal')
            ->add('fundamentacionTec')
            ->add('poblacionObjetivo')
            ->add('objGenerales')
            ->add('numParticipante')
            ->add('metodoEnsenanza')
            ->add('evaluacion')
            ->add('infraestructura')
            ->add('otecId')
            ->add('libroId')
            ->add('participantes')
            ->add('ordenCompraId')
        ;
    }

    public function getName()
    {
        return 'tipddy_omsbundle_cursotype';
    }
}
