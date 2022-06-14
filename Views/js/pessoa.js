$( document ).ready(function() {
    var baseUrl = "http://localhost/curso22/Controller/PessoaController.php";

    $(".btnEditar").on("click", function(){
        var idPessoa = $(this).val();
        baseUrl += "?id=" + idPessoa;

        $.get(baseUrl).done(function(response){
            var dadosPessoa = response;
            console.log("I'm click of Edit button id: " + dadosPessoa.id);

            $("#idBanco").val(dadosPessoa.id);
            $("#idName").val(dadosPessoa.nome);
            $("#idEmail").val(dadosPessoa.email);
            $(".modal").modal('show');
        });

    });

    $(".btnExcluir").on("click", function(){
        var idPessoa = $(this).val();
        

        $.post(baseUrl, { id: idPessoa }).done(function(response){
            console.log(JSON.stringify(response))
        });

        console.log("I'm click of Delete button id: " + idPessoa);
    });


});