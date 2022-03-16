<script>
  $("#btn_save").on("click", function(event) {
    event.preventDefault();
    let base_url = "<?php echo base_url(); ?>";
    let cedula     = $("#cedula").val();
    let p_nombre   = $("#p_nombre").val();
    let p_apellido = $("#p_apellido").val();
    let email      = $("#email").val();    
    let re = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/; //expresión regular para validad el email
    let send = 0;

    if (cedula.length < 7 || cedula.length > 8) {
      send--;
      $("#cedula").css("border-color", "#FF0000");
      $("#cedula_message").text("la cédula debe ser de 7 u 8 dígitos.");
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

    
    if (!re.exec(email)) {
      send--;
      $("#email").css("border-color", "#FF0000");
      $("#email_message").text(
        "El correo electrónico no cumple con el formato."
      );
    } else {
      send++;
      $("#email").css("border-color", "#228B22");
      $("#email_message").text("");
    }


    if (send >= 4) {
      $("#new_admitido").submit();
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
</script>