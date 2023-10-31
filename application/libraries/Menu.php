
<?php

/*CONSTRUCCIÓN DE NUESTRA LIBRERÍA

PARA PODER CARGARLA EN EL ARCHIVO codigofacilito.php

*/

defined('BASEPATH') OR exit('No direct script access allowed'); /*Las Librerias tiene una estructura facil*/
	class Menu{ /*Todas las librerias son clases y seben de coincidir el nombre de la clase Menu con el nombre del archivo, en este caso Menu.php pero sin el php*/

		/*Dentro de la clase se va a colocar todos los metodos que vamos a construir*/

		private $arr_menu; /*Se declara variable dentro de la clase que se va a llamar $arr_menu*/

		public function __construct($arr){; /*Creamos el constructor y le pasamos como parametro el array ($arr_menu)*/

			$this->arr_menu = $arr; /*Se carga el array que vamos a recibir en el Constructor y cargarselo a la variable  arr_menu */	

		}
		function construirMenu(){ /*Creamos la función que va a ser la que va a construir, Este construirMenu al final es el que va a retornar la cadena con el menu ya formal */

			$ret_menu = "<nav><ul>";/*Iniciamos nuestra cadena, return_menu que es la que vamos a regresar es = inciamos nuestra navegación con la etiqueta <nav><ul>*/

			foreach($this->arr_menu as $opcion){/*Vamos a recorrer con un ciclo foreach el arreglo arr_menu que recibimos como parametro (as $opcion)*/

				$ret_menu .= "<li>".$opcion."</li>";/*Concatenamos para construir el menu y se colocan las opciones*/
			}
			$ret_menu .= "</ul></nav>";/*Posteriormente cerramos nuestra navegación*/
			return $ret_menu;/*Retornamos la cadena ret_menu que va a contener la navegación*/
		}
	}

?>