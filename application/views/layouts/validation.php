<script src="<?php echo base_url(); ?>assets/js/validation.js"></script>

<script>
	base_url = '<?php echo base_url(); ?>';
	function soloLetras(e) {
		key = e.keyCode || e.which;
		teclado = String.fromCharCode(key);
		letras =
			" abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
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

	function soloNumeros(e) {
		key = e.keyCode || e.which;
		teclado = String.fromCharCode(key);
		letras =
			"1234567890";
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

	function alfanumerico(e) {
		key = e.keyCode || e.which;
		teclado = String.fromCharCode(key);
		letras =
			"abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890";
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

	function comprobarCedula() {
        
        jQuery.ajax({
            url: base_url + "preinscripcion/preinscripcion/comprobarCedula",
            data: "cedula=" + $("#cedula").val(),
            type: "POST",
            success: function(data) {
                if (data == "Cédula ya registrado en la base de datos") {
                    
                    $("#cedula").focus();
                }
    
                $("#cedula_data").html(data);
               
            },
            error: function() {}
        });
    }

	function comprobarRusnies() {
        
        jQuery.ajax({
            url: base_url + "preinscripcion/preinscripcion/comprobarRusnies",
            data: "rusnie=" + $("#rusnie").val(),
            type: "POST",
            success: function(data) {
                if (data == "Código RUSNIES ya registrado en la base de datos") {
                    
                    $("#rusnie").focus();
                }
    
                $("#rusnie_data").html(data);
               
            },
            error: function() {}
        });
    }

	function comprobarTitulo() {
        
        jQuery.ajax({
            url: base_url + "preinscripcion/preinscripcion/comprobarTitulo",
            data: "serial=" + $("#serial").val(),
            type: "POST",
            success: function(data) {
                if (data == "Serial del título ya está registrado en la base de datos") {
                    
                    $("#serial").focus();
                }
    
                $("#titulo_data").html(data);
               
            },
            error: function() {}
        });
    }

	function validarEmail() {
		valor = $("#email").val();
		re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
     	if(!re.exec(valor))
			{			
			$("#email").css("border-color", "#FF0000");
			$("#email_message").text(
				"El correo electrónico no cumple con el formato."
			);
		} else {
			$("#email").css("border-color", "#228B22");
			$("#email_message").text("");
		}
    }
</script>