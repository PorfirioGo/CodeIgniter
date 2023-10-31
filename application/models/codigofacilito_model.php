<?php /*Este archivo codigofacilito_model.php esta en CodeIgniter/application/models/codigofacilito_model.php*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model { /*El nombre de la clase debe de ser el nombre del modelo, con la primera letra en mayuscula y siempre debe de heredar la clase CI_Model*/

	function __construct(){ /*Se debe de tener el constructor, para preparar todas las habilidades que tiene la clase CI_Model*/
		parent::__construct(); /*Se ejecuta el constructor padre de la clase*/
		$this->load->database();/*Se carga la base de datos*/
	}
	function crearCurso($data){ /*Se crea funcion crearCurso.*/ 		
		
		$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'], 'videosCurso'=> $data['videos']));
		 /*Insertar el nuevo curso, el objeto db(contiene el ActiveRecord y los metodos necesarios para modificar la BD o trabajar con la BD), usamos el metodo insert para crear un nuevo registro dentro de la tabla Cursos que ya se creo, se manda otro array asociativo, lo primero que se hace es el primer valor del array asociativo que es('nombreCurso') del campo de la tabla que queremos afectar. Y vamos a recibir como parametro los datos => $data['nombre'](Es el valor), 'videosCurso' le damos como valor lo que venga en data con la clave videos =>$data ['videos']*/
	}
	function obtenerCurso(){ /*Se crea la funcion obtenerCurso*/
		
		$query = $this->db->get('cursos'); /*Hacemos un llamado con nuestra BD a todos los cursos que tenemos en nuestra BD y lo vamos almacenar en una variable query y el unico parametro que le vamos a mandar*/

		if($query->num_rows() > 0) return $query; /* Si el query que recibe lo que la BD halla obtenido al realizar la consulta, num_rows(numero de columnas) que nos devolvio sea mayor a 0 y se retorna el objeto $query */

		else return false; /*En caso de que no, indicamos falso para indicar que no hubo nada que devolver*/
	}
}
?> 