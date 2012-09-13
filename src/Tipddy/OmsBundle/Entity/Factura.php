<?php
namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="factura")
 * @ORM\Entity
 */
class Factura
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
     * @ORM\Column(name="documento", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $documento;
    
    /**
     * @ORM\ManyToMany(targetEntity="OrdenCompra", mappedBy="facturas")
    */
    private $ordenes;
 
    public function __construct()
    {
        $this->ordenes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set documento
     *
     * @param string $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Add ordenes
     *
     * @param Tipddy\OmsBundle\Entity\OrdenCompra $ordenes
     */
    public function addOrdenCompra(\Tipddy\OmsBundle\Entity\OrdenCompra $ordenes)
    {
        $this->ordenes[] = $ordenes;
    }

    /**
     * Get ordenes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOrdenes()
    {
        return $this->ordenes;
    }
}