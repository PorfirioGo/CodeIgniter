
<!--Este archivo esta en CodeIgniter/application/views/codigofacilito/formulario.php-->

<?= form_open("/cursos/recibirdatos")  ?> <!-- Etiqueta que va abrir nuestro formulario, (form_open) creara el formulario de inicio, especificando la ruta que va a tener el acción.....crea la etiqueta de encabezado-->

<?php /*Comienza código PHP*/

	$nombre = array(  /*Arreglo array para nombre*/
	'name' => 'nombre', /*Características que va a tener el input nombre*/
	'placeholder' => 'Escribe tu nombre' /*Atributo placeholder */
	);

	$videos = array( /*Arreglo array para videos*/
	'name' => 'videos', /*Características que va a tener el input videos, esto es muy importante cuando lo recibamos en el metodo recibirdatos*/
	'placeholder' => 'Cantidad videos del curso' /*Atributo placeholder*/
	);

/*Termina código PHP*/
?> 


<!--Inicia HTML-->
<!--Se crean inputs para las cosas que se van a llenar en la BD -->
<?= form_label('Nombre: ', 'nombre') ?> <!--(form_label) genera un control label, como primer parametro se coloca el valor que va a tener la etiqueta('Nombre: ') y como segundo parametro le vamos a colocar el nombre del control al que va a pertener, en este caso al nombre, 'nombre') -->


<?= form_input($nombre) ?> <!--Metodo(form_input) que puede recibir serie de parametros. Se pasa el arraynombre como parametro($nombre)  -->

<br> <!-- Salto de linea --> 


<?= form_label('Número vídeos: ', 'videos') ?> <!--(form_label) genera un control label, como primer parametro se coloca el valor que va a tener la etiqueta('Número de vídeos: ') y como segundo parametro le vamos a colocar el nombre del control al que va a pertener, en este caso a videos, 'videos') -->

<?= form_input($videos) ?> <!--Metodo(form_input) que puede recibir serie de parametros. Se pasa el arrayvideos como parametro($videos)  -->

<br>

<?= form_submit('','Subir curso') ?> <!--Para redireccionar el formulario se usa el form_submit(hay un helper method que se llama form_submit. Como primer valor es un nombre para el contro('','Subir curso'))-->

<?= form_close() ?> <!--Etiqueta que cierra el formulario -->

</body> <!--Uno de los requerimientos es de que tenga el body cerrado </body> -->  
</html> <!--HTML finaliza </html>

