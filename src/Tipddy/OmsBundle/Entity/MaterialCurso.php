<?php
namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="material_curso")
 * @ORM\Entity
 */
class MaterialCurso
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
     * 
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     * })
    */
    private $cursoId;
    
    /**
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $descripcion;
    
    /**
     * @ORM\Column(name="cantidad", type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
    private $cantidad;    
    
    /**
     * @ORM\Column(name="tipo_materia", type="string", length=1, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $tipoMaterial;    
   


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
     * Set cantidad
     *
     * @param integer $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set tipoMaterial
     *
     * @param string $tipoMaterial
     */
    public function setTipoMaterial($tipoMaterial)
    {
        $this->tipoMaterial = $tipoMaterial;
    }

    /**
     * Get tipoMaterial
     *
     * @return string 
     */
    public function getTipoMaterial()
    {
        return $this->tipoMaterial;
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