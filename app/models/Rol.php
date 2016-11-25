<?php
namespace Compropolis\Models;

class Rol extends \Phalcon\Mvc\Model
{
    private static $source = "CMP_CAT_ADM_ROL";



    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=32, nullable=false)
     */
    protected $ID_ROL;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $DS_ROL;

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
     * Method to set the value of field DS_ROL
     *
     * @param string $DS_ROL
     * @return $this
     */
    public function setRol($DS_ROL)
    {
        $this->DS_ROL = $DS_ROL;

        return $this;
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
     * Returns the value of field DS_ROL
     *
     * @return string
     */
    public function getRol()
    {
        return $this->DS_ROL;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource(Rol::$source);
        
        $this->setSchema("public");
        $this->hasMany('ID_ROL', 'CMPCATADMMENU', 'ID_ROL', ['alias' => 'CMPCATADMMENU']);
        $this->hasMany('ID_ROL', 'CMPCATADMUSUARIO', 'ID_ROL', ['alias' => 'CMPCATADMUSUARIO']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return Rol::$source;
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Rol[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Rol
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
