<?php

namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Table(name="otec")
* @ORM\Entity
*/
class Otec
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
     * @ORM\Column(name="nombre_otec", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $nombreOtec;

    /**
     * @ORM\Column(name="rut", type="string", length=12, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $rut;   

    /**
     * @ORM\Column(name="razon_social", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $razonSocial;

    /**
     * @ORM\Column(name="repre_legal", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $repreLegal;   

    /**
     * @ORM\Column(name="repre_rut", type="string", length=12, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $repreRut;
     
    /**
     * @ORM\Column(name="repre_fono", type="string", length=30, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $repreFono;
     
    /**
    * @ORM\Column(name="giro", type="string", length=255, nullable=true)
    *
    */
     private $giro;

    /**
     * @ORM\Column(name="direccion", type="string", length=255, nullable=true)
     *
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
     * @ORM\OneToMany(targetEntity="Curso", mappedBy="otecId", cascade={"persist","remove"}, orphanRemoval=true)
     *
    */
     private $cursos;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Comuna")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="comuna_id", referencedColumnName="id")
     * })
    */
     private $comunaId;

    /**
     * @ORM\Column(name="email_contacto", type="string", length=100, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $emailContacto;

    /**
     * @ORM\Column(name="contacto", type="string", length=255, nullable=true)
     *
    */
     private $contacto;
      
    /**
     * @ORM\OneToMany(targetEntity="Departamento", mappedBy="otecId", cascade={"persist","remove"}, orphanRemoval=true)
     *
    */
     private $departamentos;
    
    /**
     * @ORM\OneToMany(targetEntity="DocumentoLegal", mappedBy="otecId", cascade={"persist","remove"}, orphanRemoval=true)
     *
    */
     private $documentos;
     
    /**
     * @ORM\OneToMany(targetEntity="PersonalExterno", mappedBy="otecId", cascade={"persist","remove"}, orphanRemoval=true)
     *
    */
     private $externos;     
     
    /**
     * @ORM\OneToMany(targetEntity="PersonalOtec", mappedBy="otecId", cascade={"persist","remove"}, orphanRemoval=true)
     *
    */
     private $empleados;          
    
    public function __toString() {
        return $this->getNombreOtec();
    }
    public function __construct()
    {
        $this->cursos = new \Doctrine\Common\Collections\ArrayCollection();
    $this->departamentos = new \Doctrine\Common\Collections\ArrayCollection();
    $this->documentos = new \Doctrine\Common\Collections\ArrayCollection();
    $this->externos = new \Doctrine\Common\Collections\ArrayCollection();
    $this->empleados = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreOtec
     *
     * @param string $nombreOtec
     */
    public function setNombreOtec($nombreOtec)
    {
        $this->nombreOtec = $nombreOtec;
    }

    /**
     * Get nombreOtec
     *
     * @return string 
     */
    public function getNombreOtec()
    {
        return $this->nombreOtec;
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
     * Set giro
     *
     * @param string $giro
     */
    public function setGiro($giro)
    {
        $this->giro = $giro;
    }

    /**
     * Get giro
     *
     * @return string 
     */
    public function getGiro()
    {
        return $this->giro;
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
     * Set emailContacto
     *
     * @param string $emailContacto
     */
    public function setEmailContacto($emailContacto)
    {
        $this->emailContacto = $emailContacto;
    }

    /**
     * Get emailContacto
     *
     * @return string 
     */
    public function getEmailContacto()
    {
        return $this->emailContacto;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
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

    /**
     * Add departamentos
     *
     * @param Tipddy\OmsBundle\Entity\Departamento $departamentos
     */
    public function addDepartamento(\Tipddy\OmsBundle\Entity\Departamento $departamentos)
    {
        $this->departamentos[] = $departamentos;
    }

    /**
     * Get departamentos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getDepartamentos()
    {
        return $this->departamentos;
    }

    /**
     * Add documentos
     *
     * @param Tipddy\OmsBundle\Entity\DocumentoLegal $documentos
     */
    public function addDocumentoLegal(\Tipddy\OmsBundle\Entity\DocumentoLegal $documentos)
    {
        $this->documentos[] = $documentos;
    }

    /**
     * Get documentos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getDocumentos()
    {
        return $this->documentos;
    }

    /**
     * Add externos
     *
     * @param Tipddy\OmsBundle\Entity\PersonalExterno $externos
     */
    public function addPersonalExterno(\Tipddy\OmsBundle\Entity\PersonalExterno $externos)
    {
        $this->externos[] = $externos;
    }

    /**
     * Get externos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getExternos()
    {
        return $this->externos;
    }

    /**
     * Add empleados
     *
     * @param Tipddy\OmsBundle\Entity\PersonalOtec $empleados
     */
    public function addPersonalOtec(\Tipddy\OmsBundle\Entity\PersonalOtec $empleados)
    {
        $this->empleados[] = $empleados;
    }

    /**
     * Get empleados
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEmpleados()
    {
        return $this->empleados;
    }
}