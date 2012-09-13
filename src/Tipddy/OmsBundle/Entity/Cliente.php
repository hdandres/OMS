<?php
// src/Tipddy/OmsBundle/Entity/Cliente.php

namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
*
* @ORM\Table(name="cliente")
* @ORM\Entity
*/
class Cliente
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
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $apellido;
      
    /**
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $descripcion;
   
    /**
     * @ORM\Column(name="razon_social", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $razonSocial;
      
    /**
     * @ORM\Column(name="tipo", type="string", length=2, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $tipo;
     
    /**
     * @ORM\Column(name="fecha_fundacion", type="date", nullable=false)
     *
     * @Assert\Date
    */
     private $fechaFundacion;
   
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
    private $comuna;
      
    /**
     * @ORM\Column(name="fono_fijo", type="string", length=255, nullable=true)
     *
    */
     private $fonoFijo;
           
    /**
     * @ORM\Column(name="fono_movil", type="string", length=255, nullable=true)
     *
    */
     private $fonoMovil;
   
    /**
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $email;
      
    /**
     * @ORM\Column(name="sucursal", type="string", length=2, nullable=false)   
     *
     * @Assert\NotBlank()
    */
     private $sucursal;
          
    /**
     * @ORM\Column(name="nombre_encargado", type="string", length=255, nullable=true)
     *
    */
     private $nombreEncargado;
     
    /**
     * @ORM\Column(name="nombre_comercial", type="string", length=255, nullable=true)
     *
    */
     private $nombreComercial;
     
    /**
     * @ORM\Column(name="repre_legal", type="string", length=255, nullable=true)
     *
    */
     private $repreLegal;
   
    /**
     * @ORM\Column(name="repre_rut", type="string", length=255, nullable=true)
     *
    */
     private $repreRut;
     
    /**
     * @ORM\Column(name="repre_nombre", type="string", length=255, nullable=true)
     *
    */
     private $repreNombre;
      
    /**
     * @ORM\Column(name="repre_fono", type="string", length=255, nullable=true)
     *
    */
     private $repreFono;
      
    /**
     * @ORM\Column(name="repre_direccion", type="string", length=255, nullable=true)
     *
    */
     private $repreDireccion;
     
     private $repreRegion;
     
     private $repreComuna;
           

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
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
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
     * Set razonSocial
     *
     * @param string $razonSocial
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set fechaFundacion
     *
     * @param date $fechaFundacion
     */
    public function setFechaFundacion($fechaFundacion)
    {
        $this->fechaFundacion = $fechaFundacion;
    }

    /**
     * Get fechaFundacion
     *
     * @return date 
     */
    public function getFechaFundacion()
    {
        return $this->fechaFundacion;
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
     * Set sucursal
     *
     * @param string $sucursal
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;
    }

    /**
     * Get sucursal
     *
     * @return string 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set nombreEncargado
     *
     * @param string $nombreEncargado
     */
    public function setNombreEncargado($nombreEncargado)
    {
        $this->nombreEncargado = $nombreEncargado;
    }

    /**
     * Get nombreEncargado
     *
     * @return string 
     */
    public function getNombreEncargado()
    {
        return $this->nombreEncargado;
    }

    /**
     * Set nombreComercial
     *
     * @param string $nombreComercial
     */
    public function setNombreComercial($nombreComercial)
    {
        $this->nombreComercial = $nombreComercial;
    }

    /**
     * Get nombreComercial
     *
     * @return string 
     */
    public function getNombreComercial()
    {
        return $this->nombreComercial;
    }

    /**
     * Set repreLegal
     *
     * @param string $repreLegal
     */
    public function setRepreLegal($repreLegal)
    {
        $this->repreLegal = $repreLegal;
    }

    /**
     * Get repreLegal
     *
     * @return string 
     */
    public function getRepreLegal()
    {
        return $this->repreLegal;
    }

    /**
     * Set repreRut
     *
     * @param string $repreRut
     */
    public function setRepreRut($repreRut)
    {
        $this->repreRut = $repreRut;
    }

    /**
     * Get repreRut
     *
     * @return string 
     */
    public function getRepreRut()
    {
        return $this->repreRut;
    }

    /**
     * Set repreNombre
     *
     * @param string $repreNombre
     */
    public function setRepreNombre($repreNombre)
    {
        $this->repreNombre = $repreNombre;
    }

    /**
     * Get repreNombre
     *
     * @return string 
     */
    public function getRepreNombre()
    {
        return $this->repreNombre;
    }

    /**
     * Set repreFono
     *
     * @param string $repreFono
     */
    public function setRepreFono($repreFono)
    {
        $this->repreFono = $repreFono;
    }

    /**
     * Get repreFono
     *
     * @return string 
     */
    public function getRepreFono()
    {
        return $this->repreFono;
    }

    /**
     * Set repreDireccion
     *
     * @param string $repreDireccion
     */
    public function setRepreDireccion($repreDireccion)
    {
        $this->repreDireccion = $repreDireccion;
    }

    /**
     * Get repreDireccion
     *
     * @return string 
     */
    public function getRepreDireccion()
    {
        return $this->repreDireccion;
    }
    
    /**
     * Get repreRegion
     *
     * @return string 
     */
    public function getRepreRegion()
    {
        return $this->repreRegion;
    }

    /**
     * Get repreComuna
     *
     * @return string 
     */
    public function getRepreComuna()
    {
        return $this->repreComuna;
    }

     /**
     * Set repreRegion
     *
     * @param Tipddy\OmsBundle\Entity\Region $repreRegion
     */
    public function setRepreRegion($repreRegion)
    {
        $this->repreRegion = $repreRegion;
    }
   
     /**
     * Set repreComuna
     *
     * @param Tipddy\OmsBundle\Entity\Comuna $repreComuna
     */
    public function setRepreComuna($repreComuna)
    {
        $this->repreComuna = $repreComuna;
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
     * Set comuna
     *
     * @param Tipddy\OmsBundle\Entity\Comuna $comuna
     */
    public function setComuna(\Tipddy\OmsBundle\Entity\Comuna $comuna)
    {
        $this->comuna = $comuna;
    }

    /**
     * Get comuna
     *
     * @return Tipddy\OmsBundle\Entity\Comuna 
     */
    public function getComuna()
    {
        return $this->comuna;
    }
}