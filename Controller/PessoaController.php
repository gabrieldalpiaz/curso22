<?php

// {
//    $pessoaFisica = new PessoaFisica();
   
//    $pessoaFisica->cpf = $_POST['CPF'];
//    $pessoaFisica->genero = $_POST['GENERO'];
//    $pessoaFisica->rg = $_POST['RG'];
//    $pessoaFisica->est_civil = $_POST['RG'];
//    $pessoaFisica->datanasc = $_POST['DATANASC'];
//    $pessoaFisica->naturalidade = $_POST['NATURALIDADE'];
//    $pessoaFisica->profissão = $_POST['profissão'];     
//    $pessoaFisica->pis =  $_POST['PIS'];
//    $pessoaFisica->escolaridade = $_POST['ESCOLARIDADE'];
   
//    $pessoaFisica->Salvar();
// }
// {
//    $PessoaJuridica = new PessoaJuridica();
   
//    $pessoaFisica->cnpj = $_POST['CNPJ'];
//    $pessoaFisica->datafund = $_POST['DATAFUND'];
//    $pessoaFisica->nacionalidade = $_POST['NACIONALIDADE'];
//    $pessoaFisica->cnae = $_POST['CNAE'];
   
//    $pessoaFisica->Salvar();
// }
// {
//    $Pessoa = new Pessoa();
   
//    $pessoaFisica->id =  $_POST['id'];
//    $pessoaFisica->nome =  $_POST['nome'];
//    $pessoaFisica->cep = $_POST['CEP'];
//    $pessoaFisica->email = $_POST['EMAIL'];
//    $pessoaFisica->celular = $_POST['CELULAR'];
//    $pessoaFisica->redes_sociais = $_POST['REDES_SOCIAIS'];
//    $pessoaFisica->status = $_POST['STATUS'];
   
//    $pessoaFisica->Salvar();
// }

$pessoa = [];

   $idPessoa = $_REQUEST['id'] ?? 0;

      $dadosPessoa = 
      [
         [
            "id" => 5,
            "nome" => "perfiladeira",
            "status" => "Ativo",
            "email" => "aasfrhada@curso.com",
            "phone" => "54 99298341",
            "gender" => "F",
            "type" => "CPF",
            "cep" => "95707284",
         ],
         [
            "id" => 10,
            "nome" => "Aviaozada",
            "status" => "Ativo",
            "email" => "aviaozada@curso.com",
            "phone" => "54 992948541",
            "gender" => "M",
            "type" => "CPF",
            "cep" => "95707284",
         ]
      ];

      $tamanhoarray = count($dadosPessoa);

      for ($i = 0; $i < $tamanhoarray; $i++) {

         $id = $dadosPessoa[$i]["id"] ?? 0;
 
         if ($id == $idPessoa) {
            $pessoa[] = $dadosPessoa[$i];
            break;
         }
     }
      

      header('Content-Type: application/json; charset=utg-8');
      echo json_encode($pessoa);
      exit();