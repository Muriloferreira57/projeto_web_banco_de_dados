<?php 
require_once 'model/pessoa.php';

class pessoaController{
    private $pessoa;

    public function __construct(){
        $this->pessoa = new pessoa();
    }

    public function inserir(){
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['Cep']);
        $this->pessoa->setCidade($_POST['Cidade']);
        $this->pessoa->setEstado($_POST['Estado']);
        $this->pessoa->setTelefone($_POST['Telefone']);
        $this->pessoa->setCelular($_POST['Celular']);

    } 

}