<?php
namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="libro_clase")
 * @ORM\Entity
 */
class LibroClase
{
    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
    */
    private $id;
    
    /**
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $descripcion;

    /**
     * @ORM\OneToOne(targetEntity="Curso", mappedBy="libroId")
     *
    */    
    private $cursoId;    


    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set cursoId
     *
     * @param Tipddy\OmsBundle\Entity\Curso $cursoId
     */
    public function setCursoId(\Tipddy\OmsBundle\Entity\Curso $cursoId)
    {
        $this->cursoId = $cursoId;
    }

    /**
     * Get cursoId
     *
     * @return Tipddy\OmsBundle\Entity\Curso 
     */
    public function getCursoId()
    {
        return $this->cursoId;
    }
}