<?php

namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="personal_externo")
 * @ORM\Entity
 */
class PersonalExterno
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
     * @ORM\Column(name="profesion", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $profesion;
    
    /**
    * @ORM\Column(name="rut", type="string", length=255, nullable=false)
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
    * @ORM\Column(name="email", type="string", length=255, nullable=false)
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
     * @ORM\Column(type="boolean")
     *
     * @Assert\Type(type="bool")
    */
    private $estado;
    
    /**
     * @ORM\Column(name="institucion_estudios", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $institucionEstudios;    
 
    

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
     * Set profesion
     *
     * @param string $profesion
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;
    }

    /**
     * Get profesion
     *
     * @return string 
     */
    public function getProfesion()
    {
        return $this->profesion;
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
     * Set institucionEstudios
     *
     * @param string $institucionEstudios
     */
    public function setInstitucionEstudios($institucionEstudios)
    {
        $this->institucionEstudios = $institucionEstudios;
    }

    /**
     * Get institucionEstudios
     *
     * @return string 
     */
    public function getInstitucionEstudios()
    {
        return $this->institucionEstudios;
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