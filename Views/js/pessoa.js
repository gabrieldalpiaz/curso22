$( document ).ready(function() {
    var baseUrl = "http://localhost/curso22/Controller/PessoaController.php";

    $(".btnEditar").on("click", function(){
        var idPessoa = $(this).val();
        baseUrl += "?id" + idPessoa;
        $.get(baseUrl).done(function (response) {
        console.log(JSON.stringify (response));
        })
    });

    $(".btnExcluir").on("click", function(){
        var idPessoa = $(this).val();
        baseUrl += "?id" + idPessoa;
        $.get(baseUrl).done(function (response) {
        console.log(JSON.stringify (response));
        })
    });

});