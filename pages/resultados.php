<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Design</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="pages/style.css">
  <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=b4cJrVjh"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
</head>

<body class="bg">
  <?php
  include 'nav.php';
  ?>

  <h1 class="h1r">Resultados</h1>
  <section class="navr">
    <div>
      <?php
      foreach ($fotoresultado as $id => $valor) {
        echo "<div class='col-6 col-md-3'>
              <a href='{$valor['foto']}'>
                <img src='{$valor['foto']}' class='card-img-top w-100' alt='Sobrancelha {$id}'>
              </a>
            </div>";
      }
      ?>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <section>
    <div id="carouselExampleIndicators" class="carousel slide container" style="width: 50%;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner" style=" border: 8px solid rgb(94, 8, 105); border-radius: 20px">
        <div class="carousel-item active">
          <img src="../img/imgresultados/um.jpg" class="d-block w-100" alt="img-sobrancelha">
        </div>
        <div class="carousel-item">
          <img src="../img/imgresultados/cinco.jpg" class="d-block w-100" alt="img-sobrancelha">
        </div>
        <div class="carousel-item">
          <img src="../img/imgresultados/tres.jpg" class="d-block w-100" alt="img-sobrancelha">
        </div>
        <div class="carousel-item">
          <img src="../img/imgresultados/dois.jpg" class="d-block w-100" alt="img-sobrancelha">
        </div>
        <div class="carousel-item">
          <img src="../img/imgresultados/quat.jpg" class="d-block w-100" alt="img-sobrancelha">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <br>
  <br>
  <br>
  <br>

  <h1 class="bdyr" style="padding-bottom: 50px; padding-top: 50px">Avaliações</h1>

  <section class="avaliacoes">
    <div class="avals">
      <div class="aval">
        <div class="topaval">
          <img src="../img/pp4.jpg">
          Eloá F. Martins
        </div>
        <div class="txtaval">
          Trabalho maravilhoso, a Laura é um amor😍
        </div>
        <div class="bottomaval text-end" style="padding-top: 90px;">
          - 14/06/2025
        </div>
      </div>
      <div class="aval">
        <div class="topaval">
          <img src="../img/pp5t.jpg">
          Giovana N. Torres
        </div>
        <div class="txtaval">
          Amei! A profissional entende exatamente o que você quer e faz tudo com muito capricho. Indico demais!
        </div>
        <div class="bottomaval text-end">
          - 05/03/2025
        </div>
      </div>
      <div class="aval">
        <div class="topaval">
          <img src="../img/pp1r.jpg">
          Anna Clara G.
        </div>
        <div class="txtaval">
          Profissional detalhista e cuidadosa. Saí me sentindo linda e renovada❤️
        </div>
        <div class="bottomaval text-end" style="padding-top: 65px;">
          - 26/04/2025
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <?php
  include 'footer.php';
  ?>
</body>

</html>