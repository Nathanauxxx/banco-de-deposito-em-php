<?php 

function sacar(array $conta,float $valorAsacar) :array {
    
    if($valorAsacar > $conta['saldo'] ){
      exibeMensagem(mensagem:"voce nao pode sacar este valor");
    }else{
      $conta  ['saldo'] -= $valorAsacar;
    }
    return $conta;
  }

  function exibeMensagem($mensagem){
    echo $mensagem . "<br>";
  }
  function depositar(array $conta, $valorADepositar){
   if($valorADepositar > 0){
    $conta['saldo'] += $valorADepositar;
   }else{
     exibeMensagem(mensagem:"depositos precisam ser positivos");
   }
   
    return $conta;
  }

  function titularComLetrasMaiusculas(array & $conta){
    
    $conta['titular'] = strtoupper($conta['titular']);

  }

  function exibeConta(array $conta){
        ['titular' => $titular, 'saldo'=> $saldo] = $conta;
        echo "<li>titular: $titular .  saldo:$saldo</li>";
  }