<?php

/*Ciclo foreach para mostrar los resutados obetenidos de la BD */

	foreach ($cursos->result() as $curso){/*Los metodos que tiene el objeto query es return, cuando hicimos la consulta que es el result, los resultados que obtuvo de la BD, todo eso almacenado en la variable $cursos accedemos al metodo result y reiteramos entre cada uno de ellos con una variable  que vamos a llamar $curso */
 
 ?>
	
	<!--Se crea lista no ordenada, para colocar los nombre de los cursos-->	
		<ul>
			<li><?= $curso->NombreCurso;?></li> <!--Se agrega atributo NombreCurso(Nombre del campo de la BD)-->
		</ul> 
	<?php } 
  ?>
	</body>
</html>