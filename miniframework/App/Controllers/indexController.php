<?php
namespace App\Controllers;
use MF\Controller\Action;

class IndexController extends Action {

    public function index(){
        $this->view->dados = array('sofa','casa','cadeado');
        $this->render('index', 'layout1');
    }
    public function sobreNos(){
        $this->view->dados = array('note','mouse','cadeado');
        $this->render('sobreNos', 'layout2');
    }
}

?>