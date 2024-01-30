<!-- Utilizando a variável $arrayDeClientes de um echo no nome do segundo cliente. -->

<?php
  $nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
  $cliente1 = new stdClass();
  $cliente1->nome = $nomes[0];
  $cliente2 = new stdClass();
  $cliente2->nome = $nomes[1];
  $cliente3 = new stdClass();
  $cliente3->nome = $nomes[2];
  $arrayDeClientes = [$cliente1, $cliente2, $cliente3];
  echo ($arrayDeClientes[1]->nome)
?>

<!-- Utilize a estrutura de dados $arrayDeNascimento para adicionar na estrutura
$arrayDeClientes a data de nascimento de cada cliente. -->

<?php

    $nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
    $cliente1 = new stdClass();
    $cliente1->nome = $nomes[0];
    $cliente2 = new stdClass();
    $cliente2->nome = $nomes[1];
    $cliente3 = new stdClass();
    $cliente3->nome = $nomes[2];
    $arrayDeClientes = [$cliente1, $cliente2, $cliente3];

    $arrayDeNascimento = [
        'Francisco Souza' => '10-12-1996',
        'Arthur Golveia' => '14-01-2000',
        'Guilherme Rosa' => '26-05-1985',
        'Marcelo Planalto' => '26-05-1985'
    ];

    foreach($arrayDeClientes as $cliente){
      
        foreach($arrayDeNascimento as $nascimento => $valor){
                
            if($cliente -> nome == $nascimento){
                $cliente-> nascimento = $valor;
            };

        }

    }

    print_r ($arrayDeClientes)
?>

<!-- Faça a ordenação e impressão da estrutura $arrayDeClientes resultante do exercício
2 pela data de nascimento (pode ser ascendente ou descendente). -->


<?php

    $nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
    $cliente1 = new stdClass();
    $cliente1->nome = $nomes[0];
    $cliente2 = new stdClass();
    $cliente2->nome = $nomes[1];
    $cliente3 = new stdClass();
    $cliente3->nome = $nomes[2];
    $arrayDeClientes = [$cliente1, $cliente2, $cliente3];

    $arrayDeNascimento = [
        'Francisco Souza' => '10-12-1996',
        'Arthur Golveia' => '14-01-2000',
        'Guilherme Rosa' => '26-05-1985',
        'Marcelo Planalto' => '26-05-1985'
    ];

    foreach($arrayDeClientes as $cliente){
      
        foreach($arrayDeNascimento as $nascimento => $valor){
                
            if($cliente -> nome == $nascimento){
                $cliente-> nascimento = $valor;
            };

        }

    }

    $datas=array_values($arrayDeNascimento);

    foreach ($datas as $data) {
        $timestamps[] = strtotime($data);
    };

    sort($timestamps);

    foreach ($timestamps as $timestamp) {
        $dataOrdenada[] = date('d-m-Y', $timestamp); 
    }

    foreach($dataOrdenada as $valor){

        foreach($arrayDeClientes as $cliente){
            if($cliente->nascimento == $valor){
                echo  "$cliente->nome nascido em $cliente->nascimento </br>";
            }
        }
        
    };


?>