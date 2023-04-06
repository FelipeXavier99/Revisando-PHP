<?php
	$motor = filter_input(INPUT_POST,"motor");
	$modelo = filter_input(INPUT_POST,"modelo");
	$cor = filter_input(INPUT_POST,"cor");
	$marca = filter_input(INPUT_POST,"marca");
	$ano = filter_input(INPUT_POST,"ano");
	$cambio = filter_input(INPUT_POST,"cambio");

	$cilindro = filter_input(INPUT_POST,"cilindro");
	$potencia = filter_input(INPUT_POST,"potencia");
	$giroAtual = filter_input(INPUT_POST,"giroAtual");
	$combustivel = filter_input(INPUT_POST,"combustivel");



	include("../model/Carro.php");
	$objetoCarro = new Carro($motor, $modelo, $cor, $marca, $ano, $cambio);
	$objetoCarro->imprimir();


     include("../model/Motor.php");
      $objetoMotor = new Motor($cilindro, $potencia, $giroAtual, $combustivel);
	  $objetoMotor->imprimir();

?>