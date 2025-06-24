<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=b4cJrVjh"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body>
    <?php
    include 'nav.php';
    ?>

    <main class="man">
        <div class="mainft">
            <img src="../img/is.png">
        </div>
        <button href="contato" class="mainbtn">
            <div class="pl">
                <strong>Agende seu Horário<i class="fa-solid fa-bell-concierge"></i></strong>
            </div>
        </button>
    </main>

    <section class="sobreall container">
        <div class="row sobre">
                <div class="col">
                    <img src="../img/img1.png">
                </div>
                <div>
                    <div class="col">
                        <p>
                            Bem vinda ao meu espaço!
                        </p>
                        <br>
                        <p>
                            Meu nome é Laura, tenho 18 anos e sou apaixonada por realçar a beleza natural das pessoas. Criei esse espaço para apresentar meu trabalho como designer de sobrancelhas — feito de forma artesanal, com cuidado e um olhar apurado para os detalhes.
                            <br><br>
                            Mais do que estética, acredito que uma sobrancelha bem feita é capaz de transformar a forma como a gente se vê. Um olhar harmonioso, bem cuidado, para te trazer confiança e autoestima, além de revelar o melhor de cada pessoa.
                        </p>
                    </div>
                </div>
        </div>
    </section>

    <section class="slogan">
        <img src="../img/slogan.png">
    </section>

    <?php
    include 'footer.php';
    ?>
</body>

</html>