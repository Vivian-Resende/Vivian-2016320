$("#formLogin").submit(function (e){
    e.preventDefault();

     $.ajax({
        type: "POST",
        url: "http://127.0.0.1/login.php", 
        data: {
            username: $("#username").val(),
            password: $("#password").val(),
            email: $("#email").val()
        },            
        async: false,
        dataType: "json", 
        success: function (json) {

            if(json.result == true){
               //redireciona o usuario para pagina
               $("#username").html(json.dados.nome);

               $.mobile.changePage("#index", {
                    transition : "slidefade"
                });

            }else{
               alert(json.msg);
            }
        },error: function(xhr,e,t){
            console.log(xhr.responseText);                
        }
    });
  });