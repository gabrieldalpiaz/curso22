<?php

class PessoaFisica Extends Pessoa
{

    public function Salvar($Pessoa)
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


    public $cpf = $_POST['CPF'];
    public $genero = $_POST['GENERO'];
    public $rg = $_POST['RG'];
    public $est_civil = $_POST['est_civil'];
    public $datanasc = $_POST['DATANASC'];
    public $naturalidade = $_POST['NATURALIDADE'];
    public $profissão = $_POST['profissão'];
    public $pis =  $_POST['PIS'];
    public $escolaridade = $_POST['ESCOLARIDADE'];

}
