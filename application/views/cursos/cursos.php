<?php

	if($cursos){/*isset devuelve el valor cuando la varible contiene algo, siempre cuando no sea nulo. Se cerifica que la variable $cursos no sea falsa */

/*Ciclo foreach para mostrar los resutados obetenidos de la BD */

	foreach ($cursos->result() as $curso) { ?> <!--Los metodos que tiene el objeto query es return, cuando hicimos la consulta que es el result, los resultados que obtuvo de la BD, todo eso almacenado en la variable $cursos accedemos al metodo result y reiteramos entre cada uno de ellos con una variable  que vamos a llamar $curso-->

	<!--Se crea lista no ordenada, para colocar los nombre de los cursos-->	
		<ul>	<!--Se agrega un link para poder ir navegando entre cada uno de los cursos, 	-->		
			<li><a href="<?= $curso->idCurso; ?>"><?= $curso->NombreCurso; ?></a></li> <!--Se agrega atributo NombreCurso(Nombre del campo de la BD)-->
		</ul> 
	<?php }

	}else{/**Se coloca un condicional else */
		echo "<p>Error en la aplicación</p>";/*Se coloca una alerta */
	
	}

  ?>
	</body>
</html>