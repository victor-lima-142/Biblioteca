<?php

class Aluguel extends \Phalcon\Mvc\Model
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
    public $idCliente;

    /**
     *
     * @var string
     */
    public $dataSaida;

    /**
     *
     * @var string
     */
    public $dataDevolucao;

    /**
     *
     * @var float
     */
    public $preco;

    /**
     * Initialize method for model.
     */
    // public function initialize()
    // {
    //     $this->setSchema("biblioteca");
    //     $this->setSource("Aluguel");
    //     $this->belongsTo('idCliente', '\Cliente', 'id', ['alias' => 'Cliente']);
    // }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Aluguel[]|Aluguel|\Phalcon\Mvc\Model\ResultSetInterface
     */
    // public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    // {
    //     return parent::find($parameters);
    // }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Aluguel|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
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
     * Get the value of idCliente
     *
     * @return  integer
     */ 
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     *
     * @param  integer  $idCliente
     *
     * @return  self
     */ 
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get the value of dataSaida
     *
     * @return  string
     */ 
    public function getDataSaida()
    {
        return $this->dataSaida;
    }

    /**
     * Set the value of dataSaida
     *
     * @param  string  $dataSaida
     *
     * @return  self
     */ 
    public function setDataSaida(string $dataSaida)
    {
        $this->dataSaida = $dataSaida;

        return $this;
    }

    /**
     * Get the value of dataDevolucao
     *
     * @return  string
     */ 
    public function getDataDevolucao()
    {
        return $this->dataDevolucao;
    }

    /**
     * Set the value of dataDevolucao
     *
     * @param  string  $dataDevolucao
     *
     * @return  self
     */ 
    public function setDataDevolucao(string $dataDevolucao)
    {
        $this->dataDevolucao = $dataDevolucao;

        return $this;
    }

    /**
     * Get the value of preco
     *
     * @return  float
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @param  float  $preco
     *
     * @return  self
     */ 
    public function setPreco(float $preco)
    {
        $this->preco = $preco;

        return $this;
    }
}
