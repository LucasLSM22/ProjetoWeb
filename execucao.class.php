<?php
    //importacao
    require_once("pessoa.class.php");
    //nome da classe
    class Execucao {
        //objeto pessoa com visibilidade privada
        private $pessoa;

        public function __construct (){
            //objeto chamado pessoa que recebe a classe pessoa
            $pessoa = new Pessoa();
            //passar um valor para o metodo setnome 
            $pessoa ->setNome("Lucas Marçal");
            //imprimir o valor do metodo getnome
            echo $pessoa->getNome();
        }
        //Instancia
    }new Execucao()
?>