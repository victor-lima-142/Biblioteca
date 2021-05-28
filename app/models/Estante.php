<?php

class Estante extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $linha;

    /**
     *
     * @var integer
     */
    public $coluna;

    /**
     *
     * @var integer
     */
    public $setor;

    /**
     * Initialize method for model.
     */
    // public function initialize()
    // {
    //     $this->setSchema("biblioteca");
    //     $this->setSource("Estante");
    // }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Estante[]|Estante|\Phalcon\Mvc\Model\ResultSetInterface
     */
    // public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    // {
    //     return parent::find($parameters);
    // }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Estante|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    // public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    // {
    //     return parent::findFirst($parameters);
    // }


    /**
     * Get the value of id
     *
     * @return  integer
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  integer  $id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of linha
     *
     * @return  integer
     */ 
    public function getLinha()
    {
        return $this->linha;
    }

    /**
     * Set the value of linha
     *
     * @param  integer  $linha
     *
     * @return  self
     */ 
    public function setLinha($linha)
    {
        $this->linha = $linha;

        return $this;
    }

    /**
     * Get the value of coluna
     *
     * @return  integer
     */ 
    public function getColuna()
    {
        return $this->coluna;
    }

    /**
     * Set the value of coluna
     *
     * @param  integer  $coluna
     *
     * @return  self
     */ 
    public function setColuna($coluna)
    {
        $this->coluna = $coluna;

        return $this;
    }

    /**
     * Get the value of setor
     *
     * @return  integer
     */ 
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @param  integer  $setor
     *
     * @return  self
     */ 
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }
}
