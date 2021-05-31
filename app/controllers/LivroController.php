<?php
declare(strict_types=1);

class LivroController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        return $this->view->pick('livros/listar');
    }

}