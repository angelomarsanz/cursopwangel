<form action="modificar_usuario.php" name="modificar" method="post">

	<h1>Modificar datos:</h1>

	<p class="etiqueta">Usuario:*</p>
				<p class="campo"><input type="text" value="<?php echo $row['usuario']; ?>" name="usuario" size="10" maxlenght="10" readonly></p> 
			
				<p class="etiqueta">Clave:*</p>				
				<p class="campo"><input type="password" value="<?php echo $row['clave']; ?>" name="clave" id="miclave" size="10" maxlenght="10" 

<?php

		/* Si la variable "modificar" existe y tiene algún valor, procedemos 
			mostrar por pantalla el valor del usuario */
		
		if (isset($_REQUEST['modificar']))
			print ("value='$clave'></p>");

		// De lo contrario, mostramos el campo "clave" en blanco 

		else 
			print ("></p>");
	
		/* Si en la variable "$errores" en la posición "clave" existe un valor diferente a "blanco",
			Entonces mostramos por pantalla el mensaje de "error de usuario" */ 
	
		if ($errores["clave"] != "")
			print "<p>Error {$errores['clave']}</p>";
?>					
								
				<p class="etiqueta">Correo:*</p>
				<p class="campo"><input type="email" value="<?php echo $row['correo']; ?>" name="correo" id="micorreo"
<?php
				
		/* Si la variable "insertar" existe y tiene algún valor, procedemos 
			mostrar por pantalla el valor del usuario */
		
		if (isset($_REQUEST['modificar']))
			print ("value='$correo'></p>");

		// De lo contrario, mostramos el campo "correo" en blanco 

		else
			print ("></p>");

		/* Si en la variable "$errores" en la posición "clave" existe un valor diferente a "blanco",
			Entonces mostramos por pantalla el mensaje de "error de usuario" */ 

		if ($errores["correo"] != "")
			print "<p>Error {$errores['correo']}</p>";
				
?>				
				<p class="etiqueta">Cédula, RIF o pasaporte:
				<p class="campo">
					<select name="tipocliente">
						<option value="<?php echo $row['tipo_cliente']; ?>" select><?php echo $row['tipo_cliente']; ?>
						<option value="">&nbsp
						<option value="V">V
						<option value="E">E
						<option value="P">P
						<option value="J">J
						<option value="G">G
					</select>
					<input type="text" value="<?php echo $row['cedula_rif']; ?>" name="cedularif" id="micedularif" size="12" maxlenght="12"></p>
					
				<p class="etiqueta">Nombre(s):</p>
				<p class="campo"><input type="text" value="<?php echo $row['nombres']; ?>" name="nombres" id="misnombres" size="20" maxlenght="100"></p>
											
				<p class="etiqueta">Apellido(s):</p>
				<p class="campo"><input type="text" value="<?php echo $row['apellidos']; ?>" name="apellidos" id="misapellidos" size="20" maxlenght="100"></p>

				<p class="etiqueta">Dirección:</p>
				<p class="campo"><input type="input" value="<?php echo $row['direccion']; ?>" name="direccion" id="midireccion"></p>

				<p class="etiqueta">Teléfono:</p>
				<p class="campo"><input type="tel" value="<?php echo $row['telefono']; ?>" name="telefono" id="mitelefono"></p>

				<p class="campo"><input type="submit" name="modificar" value="Modificar"></p>
			</form>
				<p class="campo">Nota: Los datos marcados con (*) deben ser rellenados obligatoriamente.</p>
				<p class="campo"><a href="index.php">Volver al inicio</a></p>		
