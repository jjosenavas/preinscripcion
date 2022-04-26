







$(document).ready(function () {

	
	$("#btn_save").on("click", function (event) {
		event.preventDefault();
		let cedula = $("#cedula").val();
		let p_nombre = $("#p_nombre").val();
		let p_apellido = $("#p_apellido").val();
		let fecha_nac = $("#fecha_nac").val();
		let lug_nac = $("#lug_nac").val();
		let sexo = $("#sexo").val();
		let estado_civil = $("#estado_civil").val();
		let direccion = $("#direccion").val();
		let telefono = $("#telefono").val();
		let plantel = $("#plantel").val();
		let ano_egre = $("#ano_egre").val();
		let rusnie = $("#rusnie").val();
		let serial = $("#serial").val();

		let send = 0;

		if (cedula.length <7 || cedula.length >8) {
			send--;
			$("#cedula").css("border-color", "#FF0000");
			$("#cedula_message").text("la cédula debe ser de 8 dígitos.");
		} else {
			send++;
			$("#cedula").css("border-color", "#228B22");
			$("#cedula_message").text("");
		}

		if (p_nombre.length < 3 || p_nombre.length > 45) {
			send--;
			$("#p_nombre").css("border-color", "#FF0000");
			$("#p_nombre_message").text(
				"El primer nombre debe ser mayor a 3 caracteres"
			);
		} else {
			send++;
			$("#p_nombre").css("border-color", "#228B22");
			$("#p_nombre_message").text("");
		}
	

		if (p_apellido.length < 3 || p_apellido.length > 45) {
			send--;
			$("#p_apellido").css("border-color", "#FF0000");
			$("#p_apellido_message").text(
				"El primer apellido debe ser mayor a 3 caracteres"
			);
		} else {
			send++;
			$("#p_apellido").css("border-color", "#228B22");
			$("#p_apellido_message").text("");
		}

		if (fecha_nac.length == "") {
			send--;
			$("#fecha_nac").css("border-color", "#FF0000");
			$("#fecha_nac_message").text("La fecha no puede estar vacía");
		} else {
			send++;
			$("#fecha_nac").css("border-color", "#228B22");
			$("#fecha_nac_message").text("");
		}

		if (lug_nac.length == "") {
			send--;
			$("#lug_nac").css("border-color", "#FF0000");
			$("#lug_nac_message").text(
				"Lugar de nacimiento debe ser mayor a 4 caracteres"
			);
		} else {
			send++;
			$("#lug_nac").css("border-color", "#228B22");
			$("#lug_nac_message").text("");
		}

		if (sexo.length == "") {
			send--;
			$("#sexo").css("border-color", "#FF0000");
			$("#sexo_message").text("El sexo no puede estar vacío");
		} else {
			send++;
			$("#sexo").css("border-color", "#228B22");
			$("#sexo_message").text("");
		}

		if (estado_civil.length == "") {
			send--;
			$("#estado_civil").css("border-color", "#FF0000");
			$("#estado_civil_message").text("El estado civil no puede estar vacío");
		} else {
			send++;
			$("#estado_civil").css("border-color", "#228B22");
			$("#estado_civil_message").text("");
		}

		if (direccion.length == "" || direccion.length < 10) {
			send--;
			$("#direccion").css("border-color", "#FF0000");
			$("#direccion_message").text("La direccion no puede estar vacía");
		} else {
			send++;
			$("#direccion").css("border-color", "#228B22");
			$("#direccion_message").text("");
		}
		
		if (telefono.length < 11) {
			send--;
			$("#telefono").css("border-color", "#FF0000");
			$("#telefono_message").text("El teléfono debe tener 11 dígitos");
		} else {
			send++;
			$("#telefono").css("border-color", "#228B22");
			$("#telefono_message").text("");
		}

		if (plantel.length == "" || plantel.length < 10) {
			send--;
			$("#plantel").css("border-color", "#FF0000");
			$("#plantel_message").text(
				"El plantel no puede estar vacío o el nombre es muy corto"
			);
		} else {
			send++;
			$("#plantel").css("border-color", "#228B22");
			$("#plantel_message").text("");
		}

		if (ano_egre.length == "") {
			send--;
			$("#ano_egre").css("border-color", "#FF0000");
			$("#ano_egre_message").text("El año de egreso no puede estar vacío");
		} else {
			send++;
			$("#ano_egre").css("border-color", "#228B22");
			$("#ano_egre_message").text("");
		}


		if (serial.length < 10 || serial.length > 11) {
			send--;
			$("#serial").css("border-color", "#FF0000");
			$("#serial_message").text(
				"El campo serial no puede estar vacío y bede estar entre 10 u 11 caracteres"
			);
		} else {
			send++;
			$("#serial").css("border-color", "#228B22");
			$("#serial_message").text("");
		}
		//console.log(send,'van');

		if (send >= 12) {
			$("#new_asp").submit();
		}
	});

	function soloNumeros(e) {
		key = e.keyCode || e.which;
		teclado = String.fromCharCode(key);
		letras = "1234567890";
		especiales = "9-8-37-38-46-164";
		teclado_especial = false;
		for (var i in especiales) {
			if (key == especiales[i]) {
				teclado_especial = true;
				break;
			}
		}
		if (letras.indexOf(teclado) == -1 && !teclado_especial) {
			return false;
		}
	}

	function soloLetras(e) {
		key = e.keyCode || e.which;
		teclado = String.fromCharCode(key);
		letras = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
		especiales = "9-8-37-38-46-164";
		teclado_especial = false;
		for (var i in especiales) {
			if (key == especiales[i]) {
				teclado_especial = true;
				break;
			}
		}
		if (letras.indexOf(teclado) == -1 && !teclado_especial) {
			return false;
		}
	}

	function alfaNumerico(e) {
		key = e.keyCode || e.which;
		teclado = String.fromCharCode(key);
		letras =
			" -1234567890abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
		especiales = "9-8-37-38-46-164";
		teclado_especial = false;
		for (var i in especiales) {
			if (key == especiales[i]) {
				teclado_especial = true;
				break;
			}
		}
		if (letras.indexOf(teclado) == -1 && !teclado_especial) {
			return false;
		}
	}

	

});
