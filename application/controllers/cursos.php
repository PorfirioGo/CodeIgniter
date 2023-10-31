<?php /*Este archivo codigofacilito esta en CodeIgniter/application/controllers/codigofacilito.php*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller { /*Lo primero que se tiene que tener dentro del la Class es un constructor*/


	/*Inicio del Constructor. En PHP5 el constructor se escribe con 2 guiones bajos __ seguido de construct()*/
	function __construct(){ /*Funcion Constructor*/

	/*Una de las cosas que se tienen que ejecutar siempre es el Constructor  PADRE, para que las cosas funcionen como deberian y no tener ningun problema ala hora de trabajar dentro del CONTROLADOR */

		/*Constructor Padre*/

		parent::__construct(); /*Constructor Padre*/
		
		$this->load->helper('mihelper');  /*Se carga el helper, llamado mihelper, debajo de la ejecución del CONSTRUCTOR PADRE*/ 
		
		$this->load->helper('form'); /*Se carga el helper (form_helper.php) ruta application/system/helpers, ese helper tiene las funciones que vamos a estar utilizando*/

		$this->load->model('codigofacilito_model'); /*Se carga el modelo('codigofacilito_model')*/ 
	}
	function index(){ /*Se crea la función index*/
		$data['cursos'] = $this->codigofacilito_model->obtenerCurso(); /*Creamos variable $data['cursos']*/
		$this->load->view('codigofacilito/headers');
		$this->load->view('cursos/cursos',$data); /*Se pasa el arreglo $data*/
	}
	function nuevo(){ /*Se crea una nueva función llamada (nuevo) */

		$this->load->view('codigofacilito/headers'); /*Primero se carga el encabezado, se carga la vista llamada headers */

		$this->load->view('cursos/formulario'); /*Se carga la vista creada en application/views/codigofacilito/formulario.php*/
	}
	function recibirDatos(){ /*Se crea la funcion recibirdatos del archivo formulario.php*/

		$data = array( /*Se crea arreglo asociativo, que va a mandar la información necesaria hacía el modelo */

		/*Se le da nombre alas propiedades, la forma en como se va acceder a los datos que el usuario envio al formulario va a ser atravez del objeto input*/

/*$data['nombre']*/ 'nombre' => $this->input->post('nombre'), /*post(Es el metodo por el cual los enviamos)*/
/*$data['videos']*/	'videos' => $this->input->post('videos')); /*Lo que se va a guardar va a ser la cantidad de videos que va a tener el usuario*/
					

		$this->codigofacilito_model->crearCurso($data); /*Usamos el codigofacilito_model para ejecutar la funcion(crearCurso) y le pasamos parametros los datos que creo el usuario en el formulario*/
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido'); /*Las vistas se cargan con el metodo view*/
	
	}

}

?>