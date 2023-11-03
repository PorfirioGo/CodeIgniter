<?php 

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

}

?>
</body>
<label>
	<p>AQUI SE AGREGA COMO EJEMPLO EL SIGUIENTE TEXTO EN VISUAL STUDIO CODE</p> <!--SE AGREGA EL SIGUIENTE TEXTO COMO EJMPLO DENTRO DE VISUAL STUDIO CODE-->
</label>

<footer>  <!--AQUI SE REALIZA LA RAMA FOOTER EN GIT-->
	<p>ESTE TEXTO ES COMO EJEMPLO PARA LA RAMA FOOTER</p>
</footer>
</html>