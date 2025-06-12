<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=b4cJrVjh"></script>
</head>

<body class="form">
    <?php
    include 'nav.php'
    ?>
    <main class="forml">

    <br>
    <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="nome" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" aria-label="Recipient’s username" aria-describedby="basic-addon2">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" id="email" placeholder="Email" aria-label="Recipient’s username" aria-describedby="basic-addon2">
        </div>

        <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Telefone" aria-label="Recipient’s username" aria-describedby="basic-addon2">
        </div>

        <div class="mb-3">
            <label for="basic-url" class="form-label">Your vanity URL</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>
            <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
        </div>

        <div class="input-group">
            <span class="input-group-text">Envie uma mensagem (opcional)</span>
            <textarea class="form-control" placeholder="Mensagem" aria-label="With textarea"></textarea>
        </div>
    </main>

    <button id="botao" class="botaoform">Enviar Formulário</button>

<script>
            document.getElementById('botao').onclick = function() {
                var nome = document.getElementById('nome').value;
                var sobrenome = document.getElementById('sobrenome').value;
                var email = document.getElementById('email').value;
                var telefone = document.getElementById('telefone').value;

                let emailvalidacao = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                if (nome == "" && email == "" && telefone == "") {
                    alert("Por favor, preencha todos os campos.")
                }else{
                    if (nome == "") {
            alert("Informe o nome completo");
        } else if (email == "") {
            alert("Informe o e-mail");
        } else if (!emailvalidacao.test(email)) {
            alert("Informe um email válido");
        } else if (telefone == "") {
            alert("Informe o telefone");
        } else {
            alert("Formulário enviado com sucesso!");
        }
    }

                if(nome != "" && sobrenome != "" && email != "" && telefone != "" && emailvalidacao.test(email)) {
                    alert("Formulário enviado com sucesso!");
                }
            }
        </script>




    <?php
    include 'footer.php';
    ?>

    
</body>

</html>