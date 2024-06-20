<?php
namespace App\Controllers;

use MF\Controller\Action;

    class IndexController extends Action{

        public function index() {
            //objeto
            $this->view->dados = array('Notebook, "Smartphone');

            //action
            $this->render('index', 'layout1');
        }

        public function sobreNos() {
            //action
            $this->render('sobreNos', 'layout2');
        }


       
    }
?>