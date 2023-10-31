<?php /*Este archivo codigofacilito esta en CodeIgniter/application/controllers/codigofacilito.php*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito extends CI_Controller { /*Lo primero que se tiene que tener dentro del la Class es un constructor*/

	/*Inicio del Constructor. En PHP5 el constructor se escribe con 2 guiones bajos __ seguido de construct()*/
	function __construct(){ /*Funcion Constructor*/

	/*Una de las cosas que se tienen que ejecutar siempre es el Constructor  PADRE, para que las cosas funcionen como deberian y no tener ningun problema ala hora de trabajar dentro del CONTROLADOR */

		/*Constructor Padre*/

		parent::__construct(); /*Constructor Padre*/
		
		$this->load->helper('mihelper'); /*Se carga el helper, llamado mihelper, debajo de la ejecución del CONSTRUCTOR PADRE*/ 
		
		$this->load->helper('form'); /*Se carga el helper (form_helper.php) ruta application/system/helpers, ese helper tiene las funciones que vamos a estar utilizando*/

		$this->load->model('codigofacilito_model'); /*Se carga el modelo('codigofacilito_model')*/ 
	}

	/*El CONTROLADOR es este y tiene una funcion que es index la que se llama por defecto cuando no se especifica una funcion, sin embargo podemos tener cualquier funcion*/
	function index(){ /*Otras de las funciones que se van a crear, es la index. Esta funcion index es la que se va a ejecutar cuando cargues el controlador codigofacilito */

							/*Menu de navegación*/	

		$this->load->library('menu',array('Inicio','Contacto','Cursos','Acerca de'));/*Cargamos la librería dentro de la funcion index y cargamos el nombre de la libreria 'menu' no es necesario cargar con minuscula, mandamos parametros ala libreria, estos parametros los va a recibir el constructor cuando se ejecute la carga de la libreria, es por eso que se coloca el $arr */  /*Vamos a pasar el arreglo como parametro, que van a ser las opciones que se van a colocar en la navegación ('Inicio','Contacto','Cursos')*/

							 /*Libreria menu*/

		$data['mi_menu'] = $this->menu->construirMenu();/*Es necesario que antes de ejecutar la funcion construirMenu, creamos una variable que vallamos a pasarle ala vista en este caso 'mi_menu' =$this->menu(Libreria)-> y la función construirMenu*/

		/*Se manda a llamar el metodo load, de la clase CI_Controller. Atraves de la palabra reservada $this haciendo referencia ala clase actual, el metodo load se inserta dentro de la clase codigofacilito cuando esta heredando de la clase CI_Controller*/


		/*Se cargan las vistas*/
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido',$data);/*Dentro de la variable $data tenemos almacenada el menu y se la pasamos ala vista($data)*/ /*Y en la vista bienvenido.php imprimimos el menu $mi_menu*/ 
		/*El CONTROLADOR es este y tiene una funcion que es index la que se llama por defecto cuando no se especifica una funcion, sin embargo podemos tener cualquier funcion*/
		

	/*Se crea nuevo folder "codigofacilito" dentro del folder de views y dentro de "codigofacilito" se crea nuevo file "bienvenido.php"*/
	}  
	function holamundo(){ /*Se crea funcion, holamundo*/

		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido'); /*Las vistas se cargan con el metodo view*/
	}
}
?>




