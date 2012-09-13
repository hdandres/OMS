<?php
namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="contenido_curso")
 * @ORM\Entity
 */
class ContenidoCurso
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
     * @ORM\Column(name="actividad", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $actividad;

    /**
     * @ORM\Column(name="contenido", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
    private $contenido;
    
    /**
     * @ORM\Column(name="horas_teorico", type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
    private $horasTeorico;
    
    /**
     * @ORM\Column(name="horas_practico", type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
    private $horasPractico;
 
    /**
     * @ORM\Column(name="horas_elearning", type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
    private $horasElearning;  
    


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
     * Set actividad
     *
     * @param string $actividad
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set horasTeorico
     *
     * @param integer $horasTeorico
     */
    public function setHorasTeorico($horasTeorico)
    {
        $this->horasTeorico = $horasTeorico;
    }

    /**
     * Get horasTeorico
     *
     * @return integer 
     */
    public function getHorasTeorico()
    {
        return $this->horasTeorico;
    }

    /**
     * Set horasPractico
     *
     * @param integer $horasPractico
     */
    public function setHorasPractico($horasPractico)
    {
        $this->horasPractico = $horasPractico;
    }

    /**
     * Get horasPractico
     *
     * @return integer 
     */
    public function getHorasPractico()
    {
        return $this->horasPractico;
    }

    /**
     * Set horasElearning
     *
     * @param integer $horasElearning
     */
    public function setHorasElearning($horasElearning)
    {
        $this->horasElearning = $horasElearning;
    }

    /**
     * Get horasElearning
     *
     * @return integer 
     */
    public function getHorasElearning()
    {
        return $this->horasElearning;
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