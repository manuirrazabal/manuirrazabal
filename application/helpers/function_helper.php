<?php


//SETEA EL RUT, LE AGREGA PUNTOS Y GUION SEGUN CORRESPONDA
function seteaRut($rut){	
	$largo = strlen($rut);
	switch ($largo){
		case 9:
			$parte4 = substr($rut, -1); // seria solo el numero verificador 
			$parte3 = substr($rut, -4,3); // la cuenta va de derecha a izq  
			$parte2 = substr($rut, -7,3);  
			$parte1 = substr($rut, 0,-7); //de esta manera toma todos los caracteres desde el 8 hacia la izq 
		
			return $parte1.".".$parte2.".".$parte3."-".$parte4; 		
		break;
		
		case 8:
			$parte4 = substr($rut, -1); // seria solo el numero verificador 
			$parte3 = substr($rut, -4,3); // la cuenta va de derecha a izq  
			$parte2 = substr($rut, -7,3);  
			$parte1 = substr($rut, 0,-7); //de esta manera toma todos los caracteres desde el 8 hacia la izq 
		
			return $parte1.".".$parte2.".".$parte3."-".$parte4; 		
		break;
		
		case 7:
			$parte4 = substr($rut, -1); // seria solo el numero verificador 
			$parte3 = substr($rut, -2,3); // la cuenta va de derecha a izq  
			$parte2 = substr($rut, -5,3);  		
			return $parte2.".".$parte3."-".$parte4; 		
		break;
	}
}
	
	
//OBITIENE EL NOMBRE DEL MES DE ACUERDO AL NUMERO INGRESADO
function funcion_mes($fecha){
	switch($fecha){
		case 1:		$mes = "Enero";	break;
		case 2:		$mes = "Febrero"; break;
		case 3:		$mes = "Marzo";	break;	
		case 4:		$mes = "Abril"; break;	
		case 5:		$mes = "Mayo"; 	break;
		case 6:		$mes = "Junio"; break;
		case 7:		$mes = "Julio"; break;		
		case 8: 	$mes = "Agosto"; break;
		case 9: 	$mes = "Septiembre"; break;
		case 10: 	$mes = "Octubre";	break;
		case 11:	$mes = "Noviembre";	break;	
		case 12: 	$mes = "Diciembre";	break;	
	}
	return $mes;
}
	
//CONFIGURA LA FECHA PARA SER INGRESADA EN LA BASE DE DATOS
function returnDateBd($date){
	$val = substr($date, 8, 2).'-'.substr($date, 5, 2).'-'.substr($date, 0, 4);
	return $val;
}

//CONFIGURA LA FECHA PARA SER MOSTRADA EN LOS FORMULARIOS
function returnDateForm($date){
	$val = substr($date, 6, 4).'-'.substr($date, 3, 2).'-'.substr($date, 0, 2);
	return $val;
}


// QUITA LOS PUNTOS, COMAS, GUIONES Y ESPACIOS
function cleanString($string){
	$characters = array(".", ",", "-");
	
	$temp = trim($string);
	$temp = str_replace($characters, "", $temp);
	
	return $temp;
}

//retorna el formato de un numero
function numberFormat($val){
	$val = number_format($val, 0, '.', ',');
	return $val;
	
}



	
	/*******************************************
	****	TRAE INDICADORES ECONOMICOS		****
	********************************************/

	function getUf(){
		$JsonSource = "http://indicadoresdeldia.cl/webservice/indicadores.json";
		$json = json_decode(file_get_contents($JsonSource));
		$precio = str_replace(".", "", str_replace("$", "", $json->indicador->uf));
		return strip_tags($precio);
	}
	
	function getUtm(){
		$JsonSource = "http://indicadoresdeldia.cl/webservice/indicadores.json";
		$json = json_decode(file_get_contents($JsonSource));
		return strip_tags(str_replace("$", "", $json->indicador->utm));
	}
	
	function getIpc(){
		$JsonSource = "http://indicadoresdeldia.cl/webservice/indicadores.json";
		$json = json_decode(file_get_contents($JsonSource));
		return strip_tags(str_replace("$", "", $json->indicador->ipc));
	}
	
	function getDolar(){
		$JsonSource = "http://indicadoresdeldia.cl/webservice/indicadores.json";
		$json = json_decode(file_get_contents($JsonSource));
		return strip_tags(str_replace("$", "", $json->moneda->dolar));
	}
	
	function setValor($valor){
		$largo = strlen($valor);
		switch ($largo){
			case 4:				
				return "$ ".substr($valor, 0, 1).".".substr($valor, -3);
			break;
			
			case 5:
				return "$ ".substr($valor, 0, 2).".".substr($valor, -3);
			break;
			
			case 6:
				return "$ ".substr($valor, 0, 3).".".substr($valor, -3);
			break;
			
			case 7:
				return "$ ".substr($valor, 0, 1).".".substr($valor, 1, 3).".".substr($valor, -3);
			break;
			
			case 8:
				return "$ ".substr($valor, 0, 2).".".substr($valor, 2, 3).".".substr($valor, -3);
			break;
			
			case 9:
				return "$ ".substr($valor, 0, 3).".".substr($valor, 3, 3).".".substr($valor, -3);
			break;
		}
	}
	
	function setValorUf($valor){
		//Mientras tanto solo entrego
		return $valor." UF";
	}

?>