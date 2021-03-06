<?php
namespace InmobiliariaPriego\InmueblesBundle\Entity;

class Inmueble
{
    protected $ref;
    protected $tipo;
    protected $descripcion;
    protected $zona;
    protected $planta;
    protected $calle;
    protected $poblacion;
    protected $provincia;
    protected $pais;
    protected $terraza;
    protected $metrosterraza;
    protected $jardin;
    protected $metrosjardin;
    protected $habitacionesdobles;
    protected $habitacionessimples;
    protected $banyos;
    protected $superficie;   
    protected $ascensor;
    protected $garaje;
    protected $trastero;
    protected $metrostrastero;
    protected $obranueva;
    protected $operacion;
    protected $precio;
    protected $img;
    protected $destacado;
    
    /**
     * Set ref
     *
     * @param integer $ref
     *
     * @return Inmueble
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return integer
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Inmueble
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Inmueble
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
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
     * Set zona
     *
     * @param string $zona
     *
     * @return Inmueble
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set planta
     *
     * @param string $planta
     *
     * @return Inmueble
     */
    public function setPlanta($planta)
    {
        $this->planta = $planta;

        return $this;
    }

    /**
     * Get planta
     *
     * @return string
     */
    public function getPlanta()
    {
        return $this->planta;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Inmueble
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     *
     * @return Inmueble
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Inmueble
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Inmueble
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set terraza
     *
     * @param boolean $terraza
     *
     * @return Inmueble
     */
    public function setTerraza($terraza)
    {
        $this->terraza = $terraza;

        return $this;
    }

    /**
     * Get terraza
     *
     * @return boolean
     */
    public function getTerraza()
    {
        return $this->terraza;
    }

    /**
     * Set metrosterraza
     *
     * @param string $metrosterraza
     *
     * @return Inmueble
     */
    public function setMetrosterraza($metrosterraza)
    {
        $this->metrosterraza = $metrosterraza;

        return $this;
    }

    /**
     * Get metrosterraza
     *
     * @return string
     */
    public function getMetrosterraza()
    {
        return $this->metrosterraza;
    }

    /**
     * Set jardin
     *
     * @param boolean $jardin
     *
     * @return Inmueble
     */
    public function setJardin($jardin)
    {
        $this->jardin = $jardin;

        return $this;
    }

    /**
     * Get jardin
     *
     * @return boolean
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set metrosjardin
     *
     * @param string $metrosjardin
     *
     * @return Inmueble
     */
    public function setMetrosjardin($metrosjardin)
    {
        $this->metrosjardin = $metrosjardin;

        return $this;
    }

    /**
     * Get metrosjardin
     *
     * @return string
     */
    public function getMetrosjardin()
    {
        return $this->metrosjardin;
    }

    /**
     * Set habitacionesdobles
     *
     * @param integer $habitacionesdobles
     *
     * @return Inmueble
     */
    public function setHabitacionesdobles($habitacionesdobles)
    {
        $this->habitacionesdobles = $habitacionesdobles;

        return $this;
    }

    /**
     * Get habitacionesdobles
     *
     * @return integer
     */
    public function getHabitacionesdobles()
    {
        return $this->habitacionesdobles;
    }

    /**
     * Set habitacionessimples
     *
     * @param integer $habitacionessimples
     *
     * @return Inmueble
     */
    public function setHabitacionessimples($habitacionessimples)
    {
        $this->habitacionessimples = $habitacionessimples;

        return $this;
    }

    /**
     * Get habitacionessimples
     *
     * @return integer
     */
    public function getHabitacionessimples()
    {
        return $this->habitacionessimples;
    }

    /**
     * Set banyos
     *
     * @param integer $banyos
     *
     * @return Inmueble
     */
    public function setBanyos($banyos)
    {
        $this->banyos = $banyos;

        return $this;
    }

    /**
     * Get banyos
     *
     * @return integer
     */
    public function getBanyos()
    {
        return $this->banyos;
    }

    /**
     * Set superficie
     *
     * @param string $superficie
     *
     * @return Inmueble
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return string
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set ascensor
     *
     * @param boolean $ascensor
     *
     * @return Inmueble
     */
    public function setAscensor($ascensor)
    {
        $this->ascensor = $ascensor;

        return $this;
    }

    /**
     * Get ascensor
     *
     * @return boolean
     */
    public function getAscensor()
    {
        return $this->ascensor;
    }

    /**
     * Set garaje
     *
     * @param boolean $garaje
     *
     * @return Inmueble
     */
    public function setGaraje($garaje)
    {
        $this->garaje = $garaje;

        return $this;
    }

    /**
     * Get garaje
     *
     * @return boolean
     */
    public function getGaraje()
    {
        return $this->garaje;
    }

    /**
     * Set trastero
     *
     * @param boolean $trastero
     *
     * @return Inmueble
     */
    public function setTrastero($trastero)
    {
        $this->trastero = $trastero;

        return $this;
    }

    /**
     * Get trastero
     *
     * @return boolean
     */
    public function getTrastero()
    {
        return $this->trastero;
    }

    /**
     * Set metrostrastero
     *
     * @param string $metrostrastero
     *
     * @return Inmueble
     */
    public function setMetrostrastero($metrostrastero)
    {
        $this->metrostrastero = $metrostrastero;

        return $this;
    }

    /**
     * Get metrostrastero
     *
     * @return string
     */
    public function getMetrostrastero()
    {
        return $this->metrostrastero;
    }

    /**
     * Set obranueva
     *
     * @param boolean $obranueva
     *
     * @return Inmueble
     */
    public function setObranueva($obranueva)
    {
        $this->obranueva = $obranueva;

        return $this;
    }

    /**
     * Get obranueva
     *
     * @return boolean
     */
    public function getObranueva()
    {
        return $this->obranueva;
    }

    /**
     * Set operacion
     *
     * @param string $operacion
     *
     * @return Inmueble
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return string
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Inmueble
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Inmueble
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set destacado
     *
     * @param boolean $destacado
     *
     * @return Inmueble
     */
    public function setDestacado($destacado)
    {
        $this->destacado = $destacado;

        return $this;
    }

    /**
     * Get destacado
     *
     * @return boolean
     */
    public function getDestacado()
    {
        return $this->destacado;
    }
    
    public function isValid()
    {
        return true;
    }
}
