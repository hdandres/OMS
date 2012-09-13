<?php

namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="personal_otec")
 * @ORM\Entity
 */
class PersonalOtec
{
    /**
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
    */
     private $id;
     
    /**
     * @ORM\ManyToOne(targetEntity="Otec")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="otec_id", referencedColumnName="id")
     * })
    */
    private $otecId;
    
    /**
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $nombre;
    
    /**
     * @ORM\Column(name="apellido_pat", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $apellidoPat;
    
    /**
     * @ORM\Column(name="apellido_mat", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $apellidoMat;

    /**
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $email;

    /**
     * @ORM\Column(name="fono_fijo", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
    */
     private $fonoFijo;
    
    /**
     * @ORM\Column(name="fono_movil", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
    */
     private $fonoMovil;    
    
    /**
     * @ORM\Column(name="cargo", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $cargo;
    
    /**
     * @ORM\Column(name="departamento_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
    */
     private $departamentoId;
    
    /**
     * @ORM\Column(type="boolean")
     *
     * @Assert\Type(type="bool")
    */
     private $estado;
    
    /**
     * @ORM\Column(name="jefe_directo", type="string", length=255, nullable=true)
     *
    */
     private $jefeDirecto;
    
    /**
     * @ORM\Column(name="rut", type="string", length=12, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $rut;    
    
    /**
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=false)
     *
     * @Assert\Date
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
     private $regionId;

     /**
      * 
      * @ORM\ManyToOne(targetEntity="Comuna")
      * @ORM\JoinColumns({
      * @ORM\JoinColumn(name="comuna_id", referencedColumnName="id")
      * })
     */     
     private $comunaId;
    
        

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
     * Set apellidoPat
     *
     * @param string $apellidoPat
     */
    public function setApellidoPat($apellidoPat)
    {
        $this->apellidoPat = $apellidoPat;
    }

    /**
     * Get apellidoPat
     *
     * @return string 
     */
    public function getApellidoPat()
    {
        return $this->apellidoPat;
    }

    /**
     * Set apellidoMat
     *
     * @param string $apellidoMat
     */
    public function setApellidoMat($apellidoMat)
    {
        $this->apellidoMat = $apellidoMat;
    }

    /**
     * Get apellidoMat
     *
     * @return string 
     */
    public function getApellidoMat()
    {
        return $this->apellidoMat;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fonoFijo
     *
     * @param string $fonoFijo
     */
    public function setFonoFijo($fonoFijo)
    {
        $this->fonoFijo = $fonoFijo;
    }

    /**
     * Get fonoFijo
     *
     * @return string 
     */
    public function getFonoFijo()
    {
        return $this->fonoFijo;
    }

    /**
     * Set fonoMovil
     *
     * @param string $fonoMovil
     */
    public function setFonoMovil($fonoMovil)
    {
        $this->fonoMovil = $fonoMovil;
    }

    /**
     * Get fonoMovil
     *
     * @return string 
     */
    public function getFonoMovil()
    {
        return $this->fonoMovil;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Get departamentoId
     *
     * @return bigint 
     */
    public function getDepartamentoId()
    {
        return $this->departamentoId;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set jefeDirecto
     *
     * @param string $jefeDirecto
     */
    public function setJefeDirecto($jefeDirecto)
    {
        $this->jefeDirecto = $jefeDirecto;
    }

    /**
     * Get jefeDirecto
     *
     * @return string 
     */
    public function getJefeDirecto()
    {
        return $this->jefeDirecto;
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
     * Set otecId
     *
     * @param Tipddy\OmsBundle\Entity\Otec $otecId
     */
    public function setOtecId(\Tipddy\OmsBundle\Entity\Otec $otecId)
    {
        $this->otecId = $otecId;
    }

    /**
     * Get otecId
     *
     * @return Tipddy\OmsBundle\Entity\Otec 
     */
    public function getOtecId()
    {
        return $this->otecId;
    }

    /**
     * Set regionId
     *
     * @param Tipddy\OmsBundle\Entity\Region $regionId
     */
    public function setRegionId(\Tipddy\OmsBundle\Entity\Region $regionId)
    {
        $this->regionId = $regionId;
    }

    /**
     * Get regionId
     *
     * @return Tipddy\OmsBundle\Entity\Region 
     */
    public function getRegionId()
    {
        return $this->regionId;
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