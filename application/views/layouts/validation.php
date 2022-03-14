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
</script>