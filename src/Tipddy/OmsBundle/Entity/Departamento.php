<?php
namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="departamento")
 * @ORM\Entity
 */
class Departamento
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
     * @ORM\Column(name="etiqueta", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $etiqueta;
    
    /**
     * @ORM\ManyToOne(targetEntity="Otec")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="otec_id", referencedColumnName="id")
     * })
    */
    private $otecId;


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
     * Set etiqueta
     *
     * @param string $etiqueta
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
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
}