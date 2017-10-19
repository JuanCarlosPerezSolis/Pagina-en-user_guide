<div id="contenido">
	<h2><?php echo $title;?></h2>
	<p>Para ser el mejor futbolista el talento dependera de la inspiración, pero el esfuerzo depende de cada uno.</p>
	<p>Disfruta del deporte mas maravilloso del mundo y has de ti un gran futbolista</p>
<hr>
<section>
<fieldset>
<legend><?php echo $titulo1;?></legend>
<form method ="post" action="guardar.php">
	<label>Nombre: &nbsp</label>
	<input type="text" name="Nombre" required placeholder="Nombre del equipo">
	<br>
	<br>
	<label>Procedencia &nbsp</label>
	<input type="text" name="nombre" required placeholder="Procedencia">
	<br>
	<br>
	<label>Comentarios: &nbsp</label>
	<textarea></textarea>
	<br>
	<br>
<legend>Elige el color de tu camiseta</legend>
	
		<label>Colores disponibles</label>
		<input type="color">
		<br>
		<input type="submit" value="Buscar color">
		<br>
		<br>
	<input id="enviar" type="submit" value="enviar">
	<input id="cancelar" type="reset" value="cancelar">


</form>
</fieldset>
</section>