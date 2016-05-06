 <?php
        session_start();
        $valor1 = rand(1, 9);
        $valor2 = rand(1, 9);
        $_SESSION['resultado'] = $valor1 + $valor2;
        ?>
<h2>Check Disponibilidad</h2>
        <div id="message-booking"></div>
		<form method="post" action="assets/booking.php" id="myform">
			<fieldset class="col_f_1">
				<label>Check in</label><input name="checkin" id="checkin" type="date" class="calendar">
			</fieldset>
			<fieldset class="col_f_2">
				<label>Check out</label><input name="checkout" id="checkout" type="date" class="calendar">
			</fieldset>
			<br class="clear">
			<fieldset class="col_f_1">
				<label>N° de Pasajeros</label>
				<select name="guest" id="guest">
					<option value="">- Seleccione -</option>
					<option>Uno</option>
					<option>Dos</option>
					<option>Tres</option>
					<option>Cuatro</option>
				</select>
			</fieldset>
			<fieldset class="col_f_2">
				<label>Niños</label>
				<select name="child" id="child">
					<option value="">- Seleccione -</option>
                    <option>Ninguno</option>
					<option>Uno</option>
					<option>Dos</option>
					<option>Tres</option>
				</select>
			</fieldset>
			<br class="clear "/>
            <fieldset >
				<label>Tipo de Dormitorio</label>
				<select name="rooms" id="rooms" style="width:98%;">
					<option value="">- Seleccione -</option>
					<option>Single room</option>
					<option>Double Room</option>
					<option>Suite</option>
				</select>
			</fieldset>
			<fieldset>
				<label>Tu Nombre</label><input type="text" name="name" id="name" class="long"/>
				<label>Tu Email</label><input type="text" name="email" id="email" class="long">
                <label>Tu Número de teléfono</label><input type="text" name="phone" id="phone" class="long">
                <label><?php echo $valor1. "+" .$valor2; ?></label><input type="text" id="verify_booking">
			</fieldset>
			<button type="submit" id="submit-booking">Check</button>
		</form>
		<hr>
		<h4>Reserva por teléfono</h4>
		<p>
			Además de utilizar nuestra página web para hacer tus reservas, puedes llamarnos a los siguientes teléfonos.
		</p>
		<p>
			<strong>+56 032 3175916 / +56 9 6320 6072 </strong><br>
			Lunes a Viernes 9.00am - 19.30pm
		</p>