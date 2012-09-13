<?php
namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="documento_legal")
 * @ORM\Entity
 */
class DocumentoLegal
{
    /**
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
    */
    private $id;

    /**
     * @var string $certificacionVigSociedad
     */
    private $certificacionVigSociedad;

    /**
     * @var string $escritura
     */
    private $escritura;

    /**
     * @var string $certificadoSocio
     */
    private $certificadoSocio;

    /**
     * @var string $certInscripBienRaiz
     */
    private $certInscripBienRaiz;

    /**
     * @var string $certObligacion
     */
    private $certObligacion;

    /**
     * @var string $constitucionSociedad
     */
    private $constitucionSociedad;

    /**
     * @ORM\ManyToOne(targetEntity="Otec")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="otec_id", referencedColumnName="id")
     * })
    */
    private $otecId;


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
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }
}