<?php
namespace Compropolis\Models;

class Usuario extends \Phalcon\Mvc\Model
{
    private static $source = "CMP_CAT_ADM_USUARIO";

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=32, nullable=false)
     */
    protected $ID_USUARIO;

    /**
     *
     * @var integer
     * @Column(type="integer", length=32, nullable=false)
     */
    protected $ID_ROL;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $NOMBRE_USUARIO;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $PASSWORD;

    /**
     *
     * @var integer
     * @Column(type="integer", length=32, nullable=true)
     */
    protected $ID_CLIENTE;

    /**
     *
     * @var integer
     * @Column(type="integer", length=32, nullable=true)
     */
    protected $ID_PROVEEDOR;

    /**
     *
     * @var integer
     * @Column(type="integer", length=32, nullable=true)
     */
    protected $ID_ADMINISTRADOR;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
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
     * Method to set the value of field ID_USUARIO
     *
     * @param integer $ID_USUARIO
     * @return $this
     */
    public function setIdUsuario($ID_USUARIO)
    {
        $this->ID_USUARIO = $ID_USUARIO;

        return $this;
    }

    /**
     * Method to set the value of field ID_ROL
     *
     * @param integer $ID_ROL
     * @return $this
     */
    public function setIdRol($ID_ROL)
    {
        $this->ID_ROL = $ID_ROL;

        return $this;
    }

    /**
     * Method to set the value of field NOMBRE_USUARIO
     *
     * @param string $NOMBRE_USUARIO
     * @return $this
     */
    public function setNombreUsuario($NOMBRE_USUARIO)
    {
        $this->NOMBRE_USUARIO = $NOMBRE_USUARIO;

        return $this;
    }

    /**
     * Method to set the value of field PASSWORD
     *
     * @param string $PASSWORD
     * @return $this
     */
    public function setPassword($PASSWORD)
    {
        $this->PASSWORD = $PASSWORD;

        return $this;
    }

    /**
     * Method to set the value of field ID_CLIENTE
     *
     * @param integer $ID_CLIENTE
     * @return $this
     */
    public function setIdCliente($ID_CLIENTE)
    {
        $this->ID_CLIENTE = $ID_CLIENTE;

        return $this;
    }

    /**
     * Method to set the value of field ID_PROVEEDOR
     *
     * @param integer $ID_PROVEEDOR
     * @return $this
     */
    public function setIdProveedor($ID_PROVEEDOR)
    {
        $this->ID_PROVEEDOR = $ID_PROVEEDOR;

        return $this;
    }

    /**
     * Method to set the value of field ID_ADMINISTRADOR
     *
     * @param integer $ID_ADMINISTRADOR
     * @return $this
     */
    public function setIdAdministrador($ID_ADMINISTRADOR)
    {
        $this->ID_ADMINISTRADOR = $ID_ADMINISTRADOR;

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
     * Returns the value of field ID_USUARIO
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->ID_USUARIO;
    }

    /**
     * Returns the value of field ID_ROL
     *
     * @return integer
     */
    public function getIdRol()
    {
        return $this->ID_ROL;
    }

    /**
     * Returns the value of field NOMBRE_USUARIO
     *
     * @return string
     */
    public function getNombreUsuario()
    {
        return $this->NOMBRE_USUARIO;
    }

    /**
     * Returns the value of field PASSWORD
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->PASSWORD;
    }

    /**
     * Returns the value of field ID_CLIENTE
     *
     * @return integer
     */
    public function getIdCliente()
    {
        return $this->ID_CLIENTE;
    }

    /**
     * Returns the value of field ID_PROVEEDOR
     *
     * @return integer
     */
    public function getIdProveedor()
    {
        return $this->ID_PROVEEDOR;
    }

    /**
     * Returns the value of field ID_ADMINISTRADOR
     *
     * @return integer
     */
    public function getIdAdministrador()
    {
        return $this->ID_ADMINISTRADOR;
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
        $this->setSource(Usuario::$source);
        
        $this->setSchema("public");
        $this->belongsTo('ID_PROVEEDOR', 'CMPCATPRVPROVEEDOR', 'ID_PROVEEDOR', ['alias' => 'CMPCATPRVPROVEEDOR']);
        $this->belongsTo('ID_ROL', 'CMPCATADMROL', 'ID_ROL', ['alias' => 'CMPCATADMROL']);
        $this->belongsTo('ID_ADMINISTRADOR', 'CMPCATADMADMINISTRADOR', 'ID_ADMINISTRADOR', ['alias' => 'CMPCATADMADMINISTRADOR']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return Usuario::$source;
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Usuario[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Usuario
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
