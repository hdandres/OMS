<?php

namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="ordencompra")
 * @ORM\Entity
 */
class OrdenCompra 
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
     * @ORM\Column(name="codigo_interno", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $codigoInterno;
     
    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
     private $valorParticipante;
     
     /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
     private $valorTotal;
         
    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
     private $numOtic;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
     private $numParticipante;

    /**
     * @ORM\Column(name="cod_sence", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $codSence;
    
    /**
     * @ORM\Column(name="forma_pago", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $formaPago;
    
    /**
     * @ORM\Column(name="fecha", type="date", nullable=false)
     *
     * @Assert\Date
    */
     private $fecha;
     
    /**
     * @ORM\OneToMany(targetEntity="Curso", mappedBy="ordenCompraId")
     *
    */
     private $cursos;

    /**
     * @ORM\ManyToMany(targetEntity="Factura", inversedBy="ordenes")
     * @ORM\JoinTable(name="ordencompra_factura",
     * joinColumns={@ORM\JoinColumn(name="orden_compra_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="factura_id", referencedColumnName="id")}
     * )
    */     
     private $facturas;
     
    public function __construct()
    {
        $this->cursos = new \Doctrine\Common\Collections\ArrayCollection();
    $this->facturas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoInterno
     *
     * @param string $codigoInterno
     */
    public function setCodigoInterno($codigoInterno)
    {
        $this->codigoInterno = $codigoInterno;
    }

    /**
     * Get codigoInterno
     *
     * @return string 
     */
    public function getCodigoInterno()
    {
        return $this->codigoInterno;
    }

    /**
     * Set valorParticipante
     *
     * @param integer $valorParticipante
     */
    public function setValorParticipante($valorParticipante)
    {
        $this->valorParticipante = $valorParticipante;
    }

    /**
     * Get valorParticipante
     *
     * @return integer 
     */
    public function getValorParticipante()
    {
        return $this->valorParticipante;
    }

    /**
     * Set valorTotal
     *
     * @param integer $valorTotal
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }

    /**
     * Get valorTotal
     *
     * @return integer 
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set numOtic
     *
     * @param integer $numOtic
     */
    public function setNumOtic($numOtic)
    {
        $this->numOtic = $numOtic;
    }

    /**
     * Get numOtic
     *
     * @return integer 
     */
    public function getNumOtic()
    {
        return $this->numOtic;
    }

    /**
     * Set numParticipante
     *
     * @param integer $numParticipante
     */
    public function setNumParticipante($numParticipante)
    {
        $this->numParticipante = $numParticipante;
    }

    /**
     * Get numParticipante
     *
     * @return integer 
     */
    public function getNumParticipante()
    {
        return $this->numParticipante;
    }

    /**
     * Set codSence
     *
     * @param string $codSence
     */
    public function setCodSence($codSence)
    {
        $this->codSence = $codSence;
    }

    /**
     * Get codSence
     *
     * @return string 
     */
    public function getCodSence()
    {
        return $this->codSence;
    }

    /**
     * Set formaPago
     *
     * @param string $formaPago
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;
    }

    /**
     * Get formaPago
     *
     * @return string 
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->fecha;
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
     * Add facturas
     *
     * @param Tipddy\OmsBundle\Entity\Factura $facturas
     */
    public function addFactura(\Tipddy\OmsBundle\Entity\Factura $facturas)
    {
        $this->facturas[] = $facturas;
    }

    /**
     * Get facturas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFacturas()
    {
        return $this->facturas;
    }
}