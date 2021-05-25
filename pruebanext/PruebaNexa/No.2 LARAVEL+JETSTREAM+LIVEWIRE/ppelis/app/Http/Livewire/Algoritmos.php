<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Algoritmos extends Component
{
	public $matriz;
    public $elemento;
    public $numero;

    public $matriz2;

    public function render()
    {
    	////Algoritmo 1
    	$matriz  = $this->matriz;
    	$elemento = $this->elemento;
    	$resultado1 = '';
    	if ($elemento != '') {
    		$matrizConvert = explode(",", $matriz);
	    	for ($i=0; $i < count($matrizConvert) ; $i++) { 
	    		if ($elemento == $matrizConvert[$i]) {
	    			$resultado1 .= 'Posicion: '. $i.', ';
	    		}else{
	    			//$posicion = '';
	    		}
	    	}
    	}else{
    		$resultado1 = '';
    	}
    	//Algoritmo 1


    	//Algoritmo 2
    	$matriz2 = $this->matriz2;
    	$resultado2 = '';
    	if ($matriz2 != '') {
    		$matriz2Convert = explode(",", $matriz2);
    		/*for ($i=0; $i < count($matriz2Convert) ; $i++) { 
    			if (isset($matriz2Convert[$i+1])) {
    				if ($matriz2Convert[$i] != $matriz2Convert[$i+1]) {
	    				$resultado2 .= $matriz2Convert[$i].', ';
	    			}
    			}
    		}*/
    		$matrizSinRepetidos = array_unique($matriz2Convert);
    		$resultado2 = implode(',', $matrizSinRepetidos);
    	}else{
    		$resultado2 = '';
    	}



    	//Algoritmo 3

    	$numero = $this->numero;
    	if ($numero != '') {
    		if (is_numeric($numero)) {
	    		$resultado3 = 'VALIDO';
	    	}else{
	    		$resultado3 = 'NO VALIDO';
	    	}
    	}else{
    		$resultado3 = '';
    	}


    	//Algoritmo 4
    	$array = array();
    	$maxNum = 10;
    	$resultado4 = '';
    	$contador = 0;
    	$arrayFinal = array();

    	for ($i=0; $i < $maxNum ; $i++) { 
    		$numAleatorio = rand(1,100);
    		array_push($array, $numAleatorio);
    	}
    	
    	
    	$arrayStrin = implode(',', $array);
    	array_push($arrayFinal, $array);
    	$tamanioArray = count($array);


    	while ($contador <= $tamanioArray) {
    		$array = Algoritmos::sumarArreglo($array);
    		array_push($arrayFinal, $array);
    		$contador++;
    	}

    	
    	$resultados=[
    		'algo1' => $resultado1,
    		'algo2' => $resultado2,
    		'algo3' => $resultado3,
    		'arrayAleatorio' => $arrayStrin,
    	];

        return view('livewire.algoritmos')->with('resultados', $resultados)->with('arrayFinal', $arrayFinal);
    }
    public function sumarArreglo($arreglo){
    	$nuevoArreglo = array();
    	for ($i=0; $i < count($arreglo); $i++) { 
    		if (isset($arreglo[$i+1])) {
    				array_push($nuevoArreglo, $arreglo[$i] + $arreglo[$i+1]);
    		}
    	}
    	return $nuevoArreglo;
    }
}
