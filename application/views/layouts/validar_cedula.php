<script>
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
</script>