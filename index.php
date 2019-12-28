<?php
	// Creamos una variable fichero donde abrires el fichero dependiendo de la ruta
	$fichero = fopen('C:\Users\Ismael\Git\elQuijote.txt', 'r');

	// Nos guardamos la palabra en un string
	$palabra = "molino";

	// Creamos un contador para contar las veces que sale la palabra buscada
	$cont = 0;

	// Recorremos el fichero linea a linea y comprobamos si en cada linea existe la palabra, si existe, aumentamos el contador
	while(($contenido = fgets($fichero)) !== false){
		if(strstr($contenido, $palabra)){
			$cont++;
		}
	}

	// Imprimimos el resultado de la variable cont
	echo "La palabra " .$palabra. " se ha encontrado " .$cont. " veces";
?>