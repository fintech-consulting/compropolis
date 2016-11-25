<?php
namespace Compropolis\Models;


class Categoria extends \Phalcon\Mvc\Model
{
    private static $source = "CMP_CAT_PRD_CATEGORIA";
    /**
     *
     * @var double
     * @Primary
     * @Column(type="double", nullable=false)
     */
    protected $ID_CATEGORIA;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $DS_CATEGORIA;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    protected $ID_CATEGORIA_PADRE;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $PATH_IMAGEN;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $BN_ES_FINAL;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    protected $NIVEL;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $BN_ES_RECOMENDABLE_DESPUES_COMPRA;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    protected $ID_STATUS;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $BIT_CREACION_FECHA;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    protected $BIT_CREACION_ID_USUARIO;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $BIT_ACTUALIZACION_FECHA;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    protected $BIT_ACTUALIZACION_ID_USUARIO;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $BIT_BORRADO_FECHA;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    protected $BIT_BORRADO_ID_USUARIO;

    /**
     * Method to set the value of field ID_CATEGORIA
     *
     * @param double $ID_CATEGORIA
     * @return $this
     */
    public function setIdCategoria($ID_CATEGORIA)
    {
        $this->ID_CATEGORIA = $ID_CATEGORIA;

        return $this;
    }

    /**
     * Method to set the value of field DS_CATEGORIA
     *
     * @param string $DS_CATEGORIA
     * @return $this
     */
    public function setCategoria($DS_CATEGORIA)
    {
        $this->DS_CATEGORIA = $DS_CATEGORIA;

        return $this;
    }

    /**
     * Method to set the value of field ID_CATEGORIA_PADRE
     *
     * @param double $ID_CATEGORIA_PADRE
     * @return $this
     */
    public function setIdCategoriaPadre($ID_CATEGORIA_PADRE)
    {
        $this->ID_CATEGORIA_PADRE = $ID_CATEGORIA_PADRE;

        return $this;
    }

    /**
     * Method to set the value of field PATH_IMAGEN
     *
     * @param string $PATH_IMAGEN
     * @return $this
     */
    public function setPathImagen($PATH_IMAGEN)
    {
        $this->PATH_IMAGEN = $PATH_IMAGEN;

        return $this;
    }

    /**
     * Method to set the value of field BN_ES_FINAL
     *
     * @param string $BN_ES_FINAL
     * @return $this
     */
    public function setEsFinal($BN_ES_FINAL)
    {
        $this->BN_ES_FINAL = $BN_ES_FINAL;

        return $this;
    }

    /**
     * Method to set the value of field NIVEL
     *
     * @param double $NIVEL
     * @return $this
     */
    public function setNivel($NIVEL)
    {
        $this->NIVEL = $NIVEL;

        return $this;
    }

    /**
     * Method to set the value of field BN_ES_RECOMENDABLE_DESPUES_COMPRA
     *
     * @param string $BN_ES_RECOMENDABLE_DESPUES_COMPRA
     * @return $this
     */
    public function setEsRecomendableDespuesCompra($BN_ES_RECOMENDABLE_DESPUES_COMPRA)
    {
        $this->BN_ES_RECOMENDABLE_DESPUES_COMPRA = $BN_ES_RECOMENDABLE_DESPUES_COMPRA;

        return $this;
    }

    /**
     * Method to set the value of field ID_STATUS
     *
     * @param double $ID_STATUS
     * @return $this
     */
    public function setIdStatus($ID_STATUS)
    {
        $this->ID_STATUS = $ID_STATUS;

        return $this;
    }

    /**
     * Method to set the value of field BIT_CREACION_FECHA
     *
     * @param string $BIT_CREACION_FECHA
     * @return $this
     */
    public function setCreacionFecha($BIT_CREACION_FECHA)
    {
        $this->BIT_CREACION_FECHA = $BIT_CREACION_FECHA;

        return $this;
    }

    /**
     * Method to set the value of field BIT_CREACION_ID_USUARIO
     *
     * @param double $BIT_CREACION_ID_USUARIO
     * @return $this
     */
    public function setCreacionIdUsuario($BIT_CREACION_ID_USUARIO)
    {
        $this->BIT_CREACION_ID_USUARIO = $BIT_CREACION_ID_USUARIO;

        return $this;
    }

    /**
     * Method to set the value of field BIT_ACTUALIZACION_FECHA
     *
     * @param string $BIT_ACTUALIZACION_FECHA
     * @return $this
     */
    public function setActualizacionFecha($BIT_ACTUALIZACION_FECHA)
    {
        $this->BIT_ACTUALIZACION_FECHA = $BIT_ACTUALIZACION_FECHA;

        return $this;
    }

    /**
     * Method to set the value of field BIT_ACTUALIZACION_ID_USUARIO
     *
     * @param double $BIT_ACTUALIZACION_ID_USUARIO
     * @return $this
     */
    public function setActualizacionIdUsuario($BIT_ACTUALIZACION_ID_USUARIO)
    {
        $this->BIT_ACTUALIZACION_ID_USUARIO = $BIT_ACTUALIZACION_ID_USUARIO;

        return $this;
    }

    /**
     * Method to set the value of field BIT_BORRADO_FECHA
     *
     * @param string $BIT_BORRADO_FECHA
     * @return $this
     */
    public function setBorradoFecha($BIT_BORRADO_FECHA)
    {
        $this->BIT_BORRADO_FECHA = $BIT_BORRADO_FECHA;

        return $this;
    }

    /**
     * Method to set the value of field BIT_BORRADO_ID_USUARIO
     *
     * @param double $BIT_BORRADO_ID_USUARIO
     * @return $this
     */
    public function setBorradoIdUsuario($BIT_BORRADO_ID_USUARIO)
    {
        $this->BIT_BORRADO_ID_USUARIO = $BIT_BORRADO_ID_USUARIO;

        return $this;
    }

    
    
    
    

    /**
     * Returns the value of field ID_CATEGORIA
     *
     * @return double
     */
    public function getIdCategoria()
    {
        return $this->ID_CATEGORIA;
    }

    /**
     * Returns the value of field DS_CATEGORIA
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->DS_CATEGORIA;
    }

    /**
     * Returns the value of field ID_CATEGORIA_PADRE
     *
     * @return double
     */
    public function getIdCategoriaPadre()
    {
        return $this->ID_CATEGORIA_PADRE;
    }

    /**
     * Returns the value of field PATH_IMAGEN
     *
     * @return string
     */
    public function getPathImagen()
    {
        return $this->PATH_IMAGEN;
    }

    /**
     * Returns the value of field BN_ES_FINAL
     *
     * @return string
     */
    public function getEsFinal()
    {
        return $this->BN_ES_FINAL;
    }

    /**
     * Returns the value of field NIVEL
     *
     * @return double
     */
    public function getNivel()
    {
        return $this->NIVEL;
    }

    /**
     * Returns the value of field BN_ES_RECOMENDABLE_DESPUES_COMPRA
     *
     * @return string
     */
    public function getEsRecomendableDespuesCompra()
    {
        return $this->BN_ES_RECOMENDABLE_DESPUES_COMPRA;
    }

    /**
     * Returns the value of field ID_STATUS
     *
     * @return double
     */
    public function getIdStatus()
    {
        return $this->ID_STATUS;
    }

    /**
     * Returns the value of field BIT_CREACION_FECHA
     *
     * @return string
     */
    public function getCreacionFecha()
    {
        return $this->BIT_CREACION_FECHA;
    }

    /**
     * Returns the value of field BIT_CREACION_ID_USUARIO
     *
     * @return double
     */
    public function getCreacionIdUsuario()
    {
        return $this->BIT_CREACION_ID_USUARIO;
    }

    /**
     * Returns the value of field BIT_ACTUALIZACION_FECHA
     *
     * @return string
     */
    public function getActualizacionFecha()
    {
        return $this->BIT_ACTUALIZACION_FECHA;
    }

    /**
     * Returns the value of field BIT_ACTUALIZACION_ID_USUARIO
     *
     * @return double
     */
    public function getActualizacionIdUsuario()
    {
        return $this->BIT_ACTUALIZACION_ID_USUARIO;
    }

    /**
     * Returns the value of field BIT_BORRADO_FECHA
     *
     * @return string
     */
    public function getBorradoFecha()
    {
        return $this->BIT_BORRADO_FECHA;
    }

    /**
     * Returns the value of field BIT_BORRADO_ID_USUARIO
     *
     * @return double
     */
    public function getBorradoIdUsuario()
    {
        return $this->BIT_BORRADO_ID_USUARIO;
    }

    
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource(Categoria::$source);
        
        $this->setSchema("public");
        $this->hasMany('ID_CATEGORIA', 'CMPCATPRDCARACTERISTICA', 'id_categoria', ['alias' => 'CMPCATPRDCARACTERISTICA']);
        $this->hasMany('ID_CATEGORIA', 'CMPCATPRDPRODUCTO', 'id_categoria', ['alias' => 'CMPCATPRDPRODUCTO']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return Categoria::$source;
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CmpCatPrdCategoria[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CmpCatPrdCategoria
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
