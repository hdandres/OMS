<?php
namespace Tipddy\OmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="curso")
 * @ORM\Entity
 */
class Curso
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
     * @ORM\ManyToOne(targetEntity="Otec")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="otec_id", referencedColumnName="id")
     * })
    */
     private $otecId;

    /**
     * @ORM\Column(name="nombre_curso", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $nombreCurso;
     
    /**
     * @ORM\Column(name="categoria", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $categoria;
     
    /**
     * @ORM\Column(name="modalidad_curso", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $modalidadCurso;

    /**
     * @ORM\Column(name="tipo_actividad", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $tipoActividad;
  
    /**
     * @ORM\Column(name="codigo_sence", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $codigoSence;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
     private $porcAsistencia;
  
    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
     private $notaMinima;
     
    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
     private $horaMinima;
     
    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type(type="integer")
     * @Assert\Min(0)
    */
     private $horaTotal;

    /**
     * @ORM\Column(name="fundamentacion_tec", type="text", nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $fundamentacionTec;
 
    /**
     * @ORM\Column(name="poblacion_objetivo", type="text", nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $poblacionObjetivo;
     
    /**
     * @ORM\Column(name="obj_generales", type="text", nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $objGenerales;
     
    /**
     * @ORM\Column(name="num_participante", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $numParticipante;
     
    /**
     * @ORM\Column(name="metodo_ensenanza", type="text", nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $metodoEnsenanza;
     
    /**
     * @ORM\Column(name="evaluacion", type="text", nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $evaluacion;

    /**
     * @ORM\Column(name="infraestructura", type="text", nullable=false)
     *
     * @Assert\NotBlank()
    */
     private $infraestructura;
     
     /**
      * @ORM\OneToOne(targetEntity="LibroClase")
      * @ORM\JoinColumn(name="libro_id", referencedColumnName="id")
     */
     private $libroId;

     /**
      * @ORM\OneToMany(targetEntity="ContenidoCurso", mappedBy="cursoId", cascade={"persist","remove"}, orphanRemoval=true)
      *
     */
     private $contenidos;
     
     /**
      * @ORM\OneToMany(targetEntity="MaterialCurso", mappedBy="cursoId", cascade={"persist","remove"}, orphanRemoval=true)
      *
     */
     private $materiales;     

     /**
      * @ORM\ManyToMany(targetEntity="Participante", inversedBy="cursos")
      * @ORM\JoinTable(name="curso_participante",
      * joinColumns={@ORM\JoinColumn(name="curso_id", referencedColumnName="id")},
      * inverseJoinColumns={@ORM\JoinColumn(name="participante_id", referencedColumnName="id")}
      * )
     */     
     private $participantes;
     
     /**
      * @ORM\ManyToOne(targetEntity="OrdenCompra")
      * @ORM\JoinColumns({
      * @ORM\JoinColumn(name="orden_compra_id", referencedColumnName="id")
      * })
     */
     private $ordenCompraId;
     
 
    public function __construct()
    {
        $this->contenidos = new \Doctrine\Common\Collections\ArrayCollection();
    $this->materiales = new \Doctrine\Common\Collections\ArrayCollection();
    $this->participantes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreCurso
     *
     * @param string $nombreCurso
     */
    public function setNombreCurso($nombreCurso)
    {
        $this->nombreCurso = $nombreCurso;
    }

    /**
     * Get nombreCurso
     *
     * @return string 
     */
    public function getNombreCurso()
    {
        return $this->nombreCurso;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set modalidadCurso
     *
     * @param string $modalidadCurso
     */
    public function setModalidadCurso($modalidadCurso)
    {
        $this->modalidadCurso = $modalidadCurso;
    }

    /**
     * Get modalidadCurso
     *
     * @return string 
     */
    public function getModalidadCurso()
    {
        return $this->modalidadCurso;
    }

    /**
     * Set tipoActividad
     *
     * @param string $tipoActividad
     */
    public function setTipoActividad($tipoActividad)
    {
        $this->tipoActividad = $tipoActividad;
    }

    /**
     * Get tipoActividad
     *
     * @return string 
     */
    public function getTipoActividad()
    {
        return $this->tipoActividad;
    }

    /**
     * Set codigoSence
     *
     * @param string $codigoSence
     */
    public function setCodigoSence($codigoSence)
    {
        $this->codigoSence = $codigoSence;
    }

    /**
     * Get codigoSence
     *
     * @return string 
     */
    public function getCodigoSence()
    {
        return $this->codigoSence;
    }

    /**
     * Set porcAsistencia
     *
     * @param integer $porcAsistencia
     */
    public function setPorcAsistencia($porcAsistencia)
    {
        $this->porcAsistencia = $porcAsistencia;
    }

    /**
     * Get porcAsistencia
     *
     * @return integer 
     */
    public function getPorcAsistencia()
    {
        return $this->porcAsistencia;
    }

    /**
     * Set notaMinima
     *
     * @param integer $notaMinima
     */
    public function setNotaMinima($notaMinima)
    {
        $this->notaMinima = $notaMinima;
    }

    /**
     * Get notaMinima
     *
     * @return integer 
     */
    public function getNotaMinima()
    {
        return $this->notaMinima;
    }

    /**
     * Set horaMinima
     *
     * @param integer $horaMinima
     */
    public function setHoraMinima($horaMinima)
    {
        $this->horaMinima = $horaMinima;
    }

    /**
     * Get horaMinima
     *
     * @return integer 
     */
    public function getHoraMinima()
    {
        return $this->horaMinima;
    }

    /**
     * Set horaTotal
     *
     * @param integer $horaTotal
     */
    public function setHoraTotal($horaTotal)
    {
        $this->horaTotal = $horaTotal;
    }

    /**
     * Get horaTotal
     *
     * @return integer 
     */
    public function getHoraTotal()
    {
        return $this->horaTotal;
    }

    /**
     * Set fundamentacionTec
     *
     * @param text $fundamentacionTec
     */
    public function setFundamentacionTec($fundamentacionTec)
    {
        $this->fundamentacionTec = $fundamentacionTec;
    }

    /**
     * Get fundamentacionTec
     *
     * @return text 
     */
    public function getFundamentacionTec()
    {
        return $this->fundamentacionTec;
    }

    /**
     * Set poblacionObjetivo
     *
     * @param text $poblacionObjetivo
     */
    public function setPoblacionObjetivo($poblacionObjetivo)
    {
        $this->poblacionObjetivo = $poblacionObjetivo;
    }

    /**
     * Get poblacionObjetivo
     *
     * @return text 
     */
    public function getPoblacionObjetivo()
    {
        return $this->poblacionObjetivo;
    }

    /**
     * Set objGenerales
     *
     * @param text $objGenerales
     */
    public function setObjGenerales($objGenerales)
    {
        $this->objGenerales = $objGenerales;
    }

    /**
     * Get objGenerales
     *
     * @return text 
     */
    public function getObjGenerales()
    {
        return $this->objGenerales;
    }

    /**
     * Set numParticipante
     *
     * @param string $numParticipante
     */
    public function setNumParticipante($numParticipante)
    {
        $this->numParticipante = $numParticipante;
    }

    /**
     * Get numParticipante
     *
     * @return string 
     */
    public function getNumParticipante()
    {
        return $this->numParticipante;
    }

    /**
     * Set metodoEnsenanza
     *
     * @param text $metodoEnsenanza
     */
    public function setMetodoEnsenanza($metodoEnsenanza)
    {
        $this->metodoEnsenanza = $metodoEnsenanza;
    }

    /**
     * Get metodoEnsenanza
     *
     * @return text 
     */
    public function getMetodoEnsenanza()
    {
        return $this->metodoEnsenanza;
    }

    /**
     * Set evaluacion
     *
     * @param text $evaluacion
     */
    public function setEvaluacion($evaluacion)
    {
        $this->evaluacion = $evaluacion;
    }

    /**
     * Get evaluacion
     *
     * @return text 
     */
    public function getEvaluacion()
    {
        return $this->evaluacion;
    }

    /**
     * Set infraestructura
     *
     * @param text $infraestructura
     */
    public function setInfraestructura($infraestructura)
    {
        $this->infraestructura = $infraestructura;
    }

    /**
     * Get infraestructura
     *
     * @return text 
     */
    public function getInfraestructura()
    {
        return $this->infraestructura;
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
     * Set libroId
     *
     * @param Tipddy\OmsBundle\Entity\LibroClase $libroId
     */
    public function setLibroId(\Tipddy\OmsBundle\Entity\LibroClase $libroId)
    {
        $this->libroId = $libroId;
    }

    /**
     * Get libroId
     *
     * @return Tipddy\OmsBundle\Entity\LibroClase 
     */
    public function getLibroId()
    {
        return $this->libroId;
    }

    /**
     * Add contenidos
     *
     * @param Tipddy\OmsBundle\Entity\ContenidoCurso $contenidos
     */
    public function addContenidoCurso(\Tipddy\OmsBundle\Entity\ContenidoCurso $contenidos)
    {
        $this->contenidos[] = $contenidos;
    }

    /**
     * Get contenidos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getContenidos()
    {
        return $this->contenidos;
    }

    /**
     * Add materiales
     *
     * @param Tipddy\OmsBundle\Entity\MaterialCurso $materiales
     */
    public function addMaterialCurso(\Tipddy\OmsBundle\Entity\MaterialCurso $materiales)
    {
        $this->materiales[] = $materiales;
    }

    /**
     * Get materiales
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMateriales()
    {
        return $this->materiales;
    }

    /**
     * Add participantes
     *
     * @param Tipddy\OmsBundle\Entity\Participante $participantes
     */
    public function addParticipante(\Tipddy\OmsBundle\Entity\Participante $participantes)
    {
        $this->participantes[] = $participantes;
    }

    /**
     * Get participantes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getParticipantes()
    {
        return $this->participantes;
    }

    /**
     * Set ordenCompraId
     *
     * @param Tipddy\OmsBundle\Entity\OrdenCompra $ordenCompraId
     */
    public function setOrdenCompraId(\Tipddy\OmsBundle\Entity\OrdenCompra $ordenCompraId)
    {
        $this->ordenCompraId = $ordenCompraId;
    }

    /**
     * Get ordenCompraId
     *
     * @return Tipddy\OmsBundle\Entity\OrdenCompra 
     */
    public function getOrdenCompraId()
    {
        return $this->ordenCompraId;
    }
}