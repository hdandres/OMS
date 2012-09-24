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
      * @ORM\OneToOne(targetEntity="Curso")
      * @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     */
     private $curso;

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
     * Set curso
     *
     * @param Tipddy\OmsBundle\Entity\Curso $curso
     */
    public function setCurso(\Tipddy\OmsBundle\Entity\Curso $curso)
    {
        $this->curso = $curso;
    }

    /**
     * Get curso
     *
     * @return Tipddy\OmsBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }
}