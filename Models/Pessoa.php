<?php

class Pessoa Implements IPessoa
{

    public function Salvar()
    {
    }

    public function Obtpessoas($Pessoa)
    {
    }

    public function Atualizar($Pessoa)
    {
    }

    public function Excluir($Pessoa)
    {
    }

    public function Obttodos($Pessoa)
    {
    }


    public $id = 0;
    public $nome =  $_POST['NOME'];
    public $cep = $_POST['CEP'];
    public $email = $_POST['EMAIL'];
    public $celular = $_POST['CELULAR'];
    public $redes_sociais = $_POST['REDES_SOCIAIS'];    
    public $status = $_POST['STATUS'];
    
}
