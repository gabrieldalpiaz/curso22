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

    function montarCabecalho() {
        var html = (
            `<thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>`
        );
        
            return html;

    }

    function montarDados(pessoas) {
        var tbody = '<tbody>';

        $.each(pessoas, function(idx, pessoa)){

        var tr = (
            `<tr>
            <td scope="row">${pessoa.id} . '</td>
            <td>'${pessoa.name} . '</td>
            <td>'${pessoa.email}. '</td>
            <td>'${pessoa.phone} . '</td>
            <td>
                <button class="btnEditar" value="${pessoa.id}">Edit</button>
                <button class="btnExcluir" value="${pessoa.id}">Delete</button>
            </td>
    </tr>
