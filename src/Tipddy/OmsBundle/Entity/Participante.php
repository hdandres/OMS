<?php

namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="participante")
 * @ORM\Entity
 */
class Participante
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
      * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
     */
     private $nombre;
     
     /**
      * @ORM\ManyToMany(targetEntity="Curso", mappedBy="participantes")
     */     
     private $cursos;
     
     /**
      * @ORM\Column(name="apellido_pat", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
     */
     private $apellido_pat;
     
     /**
      * @ORM\Column(name="apellido_mat", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
     */
     private $apellido_mat;
     
     /**
      * @ORM\Column(name="rut", type="string", length=12, nullable=false)
      *
      * @Assert\NotBlank()
     */
     private $rut;
 
     /**
      * @ORM\Column(name="fecha_nacimiento", type="date", nullable=false)
      *
      * @Assert\NotBlank()
     */
     private $fechaNacimiento;
     
     /**
      * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
      *
      * @Assert\NotBlank()
     */
     private $direccion;

     /**
      * 
      * @ORM\ManyToOne(targetEntity="Region")
      * @ORM\JoinColumns({
      * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
      * })
     */     
     private $region;
     
     /**
      * 
      * @ORM\ManyToOne(targetEntity="Comuna")
      * @ORM\JoinColumns({
      * @ORM\JoinColumn(name="comuna_id", referencedColumnName="id")
      * })
     */
     private $comunaId;
     
    public function __construct()
    {
        $this->cursos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido_pat
     *
     * @param string $apellidoPat
     */
    public function setApellidoPat($apellidoPat)
    {
        $this->apellido_pat = $apellidoPat;
    }

    /**
     * Get apellido_pat
     *
     * @return string 
     */
    public function getApellidoPat()
    {
        return $this->apellido_pat;
    }

    /**
     * Set apellido_mat
     *
     * @param string $apellidoMat
     */
    public function setApellidoMat($apellidoMat)
    {
        $this->apellido_mat = $apellidoMat;
    }

    /**
     * Get apellido_mat
     *
     * @return string 
     */
    public function getApellidoMat()
    {
        return $this->apellido_mat;
    }

    /**
     * Set rut
     *
     * @param string $rut
     */
    public function setRut($rut)
    {
        $this->rut = $rut;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set fechaNacimiento
     *
     * @param date $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * Get fechaNacimiento
     *
     * @return date 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Add cursos
     *
     * @param Tipddy\OmsBundle\Entity\Curso $cursos
     */
    public function addCurso(\Tipddy\OmsBundle\Entity\Curso $cursos)
    {
        $this->cursos[] = $cursos;
    }

    /**
     * Get cursos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCursos()
    {
        return $this->cursos;
    }

    /**
     * Set region
     *
     * @param Tipddy\OmsBundle\Entity\Region $region
     */
    public function setRegion(\Tipddy\OmsBundle\Entity\Region $region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return Tipddy\OmsBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set comunaId
     *
     * @param Tipddy\OmsBundle\Entity\Comuna $comunaId
     */
    public function setComunaId(\Tipddy\OmsBundle\Entity\Comuna $comunaId)
    {
        $this->comunaId = $comunaId;
    }

    /**
     * Get comunaId
     *
     * @return Tipddy\OmsBundle\Entity\Comuna 
     */
    public function getComunaId()
    {
        return $this->comunaId;
    }
}