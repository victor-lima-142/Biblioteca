<?php

class Livro extends \Phalcon\Mvc\Model
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
    public $titulo;

    /**
     *
     * @var string
     */
    public $autor;

    /**
     *
     * @var integer
     */
    public $paginas;

    /**
     *
     * @var string
     */
    public $editora;

    /**
     *
     * @var string
     */
    public $capa;

    /**
     *
     * @var string
     */
    public $genero;

    /**
     *
     * @var float
     */
    public $precoDia;

    /**
     *
     * @var integer
     */
    public $idEstante;

    /**
     * Initialize method for model.
     */
    // public function initialize()
    // {
    //     $this->setSchema("biblioteca");
    //     $this->setSource("Livro");
    //     $this->belongsTo('idEstante', '\Estante', 'id', ['alias' => 'Estante']);
    // }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Livro[]|Livro|\Phalcon\Mvc\Model\ResultSetInterface
     */
    // public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    // {
    //     return parent::find($parameters);
    // }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Livro|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
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
     * Get the value of titulo
     *
     * @return  string
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @param  string  $titulo
     *
     * @return  self
     */ 
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     *
     * @return  string
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @param  string  $autor
     *
     * @return  self
     */ 
    public function setAutor(string $autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of paginas
     *
     * @return  integer
     */ 
    public function getPaginas()
    {
        return $this->paginas;
    }

    /**
     * Set the value of paginas
     *
     * @param  integer  $paginas
     *
     * @return  self
     */ 
    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;

        return $this;
    }

    /**
     * Get the value of editora
     *
     * @return  string
     */ 
    public function getEditora()
    {
        return $this->editora;
    }

    /**
     * Set the value of editora
     *
     * @param  string  $editora
     *
     * @return  self
     */ 
    public function setEditora(string $editora)
    {
        $this->editora = $editora;

        return $this;
    }

    /**
     * Get the value of capa
     *
     * @return  string
     */ 
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * Set the value of capa
     *
     * @param  string  $capa
     *
     * @return  self
     */ 
    public function setCapa(string $capa)
    {
        $this->capa = $capa;

        return $this;
    }

    /**
     * Get the value of genero
     *
     * @return  string
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @param  string  $genero
     *
     * @return  self
     */ 
    public function setGenero(string $genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of precoDia
     *
     * @return  float
     */ 
    public function getPrecoDia()
    {
        return $this->precoDia;
    }

    /**
     * Set the value of precoDia
     *
     * @param  float  $precoDia
     *
     * @return  self
     */ 
    public function setPrecoDia(float $precoDia)
    {
        $this->precoDia = $precoDia;

        return $this;
    }

    /**
     * Get the value of idEstante
     *
     * @return  integer
     */ 
    public function getIdEstante()
    {
        return $this->idEstante;
    }

    /**
     * Set the value of idEstante
     *
     * @param  integer  $idEstante
     *
     * @return  self
     */ 
    public function setIdEstante($idEstante)
    {
        $this->idEstante = $idEstante;

        return $this;
    }
}
