<?php

class Cliente extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $nome;

    /**
     *
     * @var integer
     */
    public $cpf;

    /**
     *
     * @var string
     */
    public $nascimento;

    /**
     *
     * @var string
     */
    public $criado;

    /**
     * Initialize method for model.
     */
    // public function initialize()
    // {
    //     $this->setSchema("biblioteca");
    //     $this->setSource("Cliente");
    // }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cliente[]|Cliente|\Phalcon\Mvc\Model\ResultSetInterface
     */
    // public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    // {
    //     return parent::find($parameters);
    // }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cliente|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
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
     * Get the value of nome
     *
     * @return  string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param  string  $nome
     *
     * @return  self
     */ 
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     *
     * @return  integer
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @param  integer  $cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of nascimento
     *
     * @return  string
     */ 
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Set the value of nascimento
     *
     * @param  string  $nascimento
     *
     * @return  self
     */ 
    public function setNascimento(string $nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }

    /**
     * Get the value of criado
     *
     * @return  string
     */ 
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * Set the value of criado
     *
     * @param  string  $criado
     *
     * @return  self
     */ 
    public function setCriado(string $criado)
    {
        $this->criado = $criado;

        return $this;
    }
}
