<?php
    require_once './model/Pessoa.php';

    $oPessoaEu = new \app\model\Pessoa;
    $oPessoaEu->setNome("Alisson");
    $oPessoaEu->setSobreNome("Sommer");
    $oPessoaEu->setDataNascimento(new DateTime("1999-02-05"));

    $oPessoaEu->getTelefone()->setTipo(1);
    $oPessoaEu->getTelefone()->setNome("Tel Celular");
    $oPessoaEu->getTelefone()->setValor("(47) 99999-0000");

    $oPessoaEu->getEndereco()->setLogradouro("Rua Vitorio Ropelato");
    $oPessoaEu->getEndereco()->setBairro("Taboao");
    $oPessoaEu->getEndereco()->setCidade("Rio do Sul");
    $oPessoaEu->getEndereco()->setCEP("89160-362");
    $oPessoaEu->getEndereco()->setEstado("SC");

    $oPessoaEu->saveJson();

    $oPessoaPai = new \app\model\Pessoa;
    $oPessoaPai->setNome("Marcio");
    $oPessoaPai->setSobreNome("Massaneiro");
    $oPessoaPai->setDataNascimento(new DateTime("9999-01-01"));
    $oPessoaPai->getTelefone()->setTipo(1);
    $oPessoaPai->getTelefone()->setNome("Tel Celular");
    $oPessoaPai->getTelefone()->setValor("(47) 99999-0000");
    $oPessoaPai->getEndereco()->setLogradouro("Estrada Boa Esperança");
    $oPessoaPai->getEndereco()->setBairro("Fundo Canoas");
    $oPessoaPai->getEndereco()->setCidade("Rio do Sul");
    $oPessoaPai->getEndereco()->setCEP("89160-362");
    $oPessoaPai->getEndereco()->setEstado("SC");

    $oPessoaPai->saveJson();

    $oPessoaMae = new \app\model\Pessoa;
    $oPessoaMae->setNome("Ivonete");
    $oPessoaMae->setSobreNome("Sommer");
    $oPessoaMae->setDataNascimento(new DateTime("9999-01-01"));

    $oPessoaMae->getTelefone()->setTipo(1);
    $oPessoaMae->getTelefone()->setNome("Tel Celular");
    $oPessoaMae->getTelefone()->setValor("(47) 99999-0000");

    $oPessoaMae->getEndereco()->setLogradouro("Estrada Palmitos");
    $oPessoaMae->getEndereco()->setBairro("Barra do Trombudo");
    $oPessoaMae->getEndereco()->setCidade("Rio do Sul");
    $oPessoaMae->getEndereco()->setCEP("89160-362");
    $oPessoaMae->getEndereco()->setEstado("SC");

    $oPessoaMae->saveJson();

    $aMembroFamilia = [];
    $aMembroFamilia[] = $oPessoaEu;
    $aMembroFamilia[] = $oPessoaPai;
    $aMembroFamilia[] = $oPessoaMae;

    $sNomeFile = 'familia.txt';

    $sPadrao = '\'%s\';\'%s\';\'%s\';%s;\'%s\';\'%s\';\'%s\';\'%s\';\'%s\';\'%s\';\'%s\'%s';

    foreach($aMembroFamilia as $aMembro) {
      $sConteudo .= sprintf(
          $sPadrao
        , $aMembro->getNome()
        , $aMembro->getSobreNome()
        , $aMembro->getDataNascimento()->format('Y-m-d')
        , $aMembro->getTelefone()->getTipo()
        , $aMembro->getTelefone()->getNome()
        , $aMembro->getTelefone()->getValor()
        , $aMembro->getEndereco()->getLogradouro()
        , $aMembro->getEndereco()->getBairro()
        , $aMembro->getEndereco()->getCidade()
        , $aMembro->getEndereco()->getCEP()
        , $aMembro->getEndereco()->getEstado()
        , "\n"
      );
    }

    file_put_contents($sNomeFile, $sConteudo);
?>