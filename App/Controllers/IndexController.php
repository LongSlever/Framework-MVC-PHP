<?php
namespace App\Controllers;
use MF\Model\Container;
use App\Models\Product;
use App\Models\Info;
use MF\Controller\Action;

    class IndexController extends Action{

        public function index() {
            //instancia do produto
            $produtos = Container::getModel('Produto');
            //action
            $this->render('index', 'layout1');
            //pegando as informações do classe Produtos
            $produtos->getProdutos();
            $this->view->dados = $produtos;
        }

        public function sobreNos() {
            //action
            $this->render('sobreNos', 'layout2');
            //instanciando a classe 
            $infos = Container::getModel('Info');
            //pegando as informações do classe Info
            $informacoes = $infos->getInfo();
            $this->view->dados = $informacoes;
            
        }


       
    }
?>