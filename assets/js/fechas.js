$(document).ready(function(){
    $('#btn_cedula').click(function() {
        if ($('#cedula').val().length != 8) {
            $('#cedula').css('border-color','#FF0000');
            alert('El número de cédula debe ser de 8 digitos.');
            return false;
        }
    });
});