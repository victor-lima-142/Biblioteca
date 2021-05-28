<?php

class AluguelLivro extends \Phalcon\Mvc\Model
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
    public $idAluguel;

    /**
     *
     * @var integer
     */
    public $idLivro;

    /**
     * Initialize method for model.
     */
    // public function initialize()
    // {
    //     $this->setSchema("biblioteca");
    //     $this->setSource("AluguelLivro");
    //     $this->belongsTo('idAluguel', '\Aluguel', 'id', ['alias' => 'Aluguel']);
    //     $this->belongsTo('idLivro', '\Livro', 'id', ['alias' => 'Livro']);
    // }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AluguelLivro[]|AluguelLivro|\Phalcon\Mvc\Model\ResultSetInterface
     */
    // public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    // {
    //     return parent::find($parameters);
    // }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AluguelLivro|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
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
     * Get the value of idAluguel
     *
     * @return  integer
     */ 
    public function getIdAluguel()
    {
        return $this->idAluguel;
    }

    /**
     * Set the value of idAluguel
     *
     * @param  integer  $idAluguel
     *
     * @return  self
     */ 
    public function setIdAluguel($idAluguel)
    {
        $this->idAluguel = $idAluguel;

        return $this;
    }

    /**
     * Get the value of idLivro
     *
     * @return  integer
     */ 
    public function getIdLivro()
    {
        return $this->idLivro;
    }

    /**
     * Set the value of idLivro
     *
     * @param  integer  $idLivro
     *
     * @return  self
     */ 
    public function setIdLivro($idLivro)
    {
        $this->idLivro = $idLivro;

        return $this;
    }
}
