<script>
    $(document).ready(function () {
    
    $("#btn_save").on('click', function(event) {
        event.preventDefault();
        let nombres = $("#nombres").val();   
        let apellidos = $("#apellidos").val(); 
        let email = $("#email").val(); 
        let username = $("#username").val(); 
        let password = $("#password").val();  
        let password_val = $("#password_val").val();
        let send = 0;
        
       if (nombres=="") {
        send--;
         $("#nombres").addClass("error");   
       }else{
           send++; 
        $("#nombres").removeClass("error"); 
       }

       if (apellidos=="") {
        send--;
        $("#apellidos").addClass("error");   
       }else{
        send++;
        $("#apellidos").removeClass("error"); 
       }

       if (email=="") {
        send--;
        $("#email").addClass("error");   
       }else{
        send++;
        $("#email").removeClass("error"); 
       }

       if (username=="") {
        send--;
        $("#username").addClass("error");   
       }else{
        send++;
        $("#username").removeClass("error"); 
       }

       if (password=="") {
        send--;
        $("#password").addClass("error");   
       }else{
        send++;
        $("#password").removeClass("error"); 
       }

       if (password_val=="") {
        send--;
        $("#password_val").addClass("error");   
       }else{
        send++;
        $("#password_val").removeClass("error"); 
       }

       if (password != password_val) {
           alert("Las contraseñas no son iguales");
           $("#password").val("");
           $("#password_val").val("");

       }

       if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
        send--;
        $("#email").addClass("error")       
       }
       
       if (send == 6) {
        $( "#new_user" ).submit();
       }
    });

    $("#btn_edit_user").on('click', function(event) {
        event.preventDefault();
        let nombres = $("#nombres").val();   
        let apellidos = $("#apellidos").val(); 
        let email = $("#email").val(); 
        let username = $("#username").val(); 
        let send = 0;
        
       if (nombres=="") {
        send--;
         $("#nombres").addClass("error");   
       }else{
           send++; 
        $("#nombres").removeClass("error"); 
       }

       if (apellidos=="") {
        send--;
        $("#apellidos").addClass("error");   
       }else{
        send++;
        $("#apellidos").removeClass("error"); 
       }

       if (email=="") {
        send--;
        $("#email").addClass("error");   
       }else{
        send++;
        $("#email").removeClass("error"); 
       }

       if (username=="") {
        send--;
        $("#username").addClass("error");   
       }else{
        send++;
        $("#username").removeClass("error"); 
       }


       if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
        send--;
        $("#email").addClass("error")       
       }
       
       if (send == 4) {
        $( "#edit_user" ).submit();
       }
    });
   
});
</script>