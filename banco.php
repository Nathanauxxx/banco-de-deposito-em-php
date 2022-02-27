<?php
 require_once ('funcoes.php');
 require_once ('funcoes.php');
 
 $contaCorrentes = [


    '123.456-67' =>  [
      'titular' => 'vinicius',
      'saldo' => 10000
  ],
    '123.123-12' => [
      'titular' => 'maria',
      'saldo' => 10000
  ],
    '123.124-12' =>  [
      'titular' => 'alberto',
      'saldo' => 300
    ]
      ];

  $contaCorrentes['123.124-123'] = [
      'titular' => 'alessandro',
      'saldo' => 300
      
  ];

  
  $contaCorrentes ['123.123-12']= sacar($contaCorrentes ['123.123-12'], valorAsacar:500);
  $contaCorrentes ['123.124-123']= sacar($contaCorrentes ['123.124-123'], valorAsacar:500);
  
  $contaCorrentes ['123.124-123'] =  depositar(
    $contaCorrentes ['123.124-123'],
    valorADepositar:-300
  );
  unset ($contaCorrentes ['123.456-67']); 
  titularComLetrasMaiusculas($contaCorrentes ['123.124-123']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contaCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?php echo $conta['titular']; ?> - <?php echo $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?php echo $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
  