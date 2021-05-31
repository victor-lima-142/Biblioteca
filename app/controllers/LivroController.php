<?php
declare(strict_types=1);

class LivroController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $livros = Livro::find();
        $this->view->setVar('livros', $livros);
        $this->view->pick('livros/listar');
    }

}