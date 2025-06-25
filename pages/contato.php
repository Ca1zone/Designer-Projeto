<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=b4cJrVjh"></script>
  <link rel="stylesheet" href="style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
</head>

<body class="form" style=" overflow-x: hidden; ">
   <?php
    include 'nav.php'
    ?>
    
  <main>
    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <section class="formulario">
        <h1 class="text-center user-select-none" style="font-family: 'Playfair Display', serif;">Agendar horário</h1>
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-md-5">
            <label for="validationCustom01" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="invalid-feedback">
              Por favor, digite o seu nome.
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
            <div class="invalid-feedback">
              Por favor, digite o seu sobrenome.
            </div>
          </div>

          <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Email:</label>
            <input type="email" class="form-control" id="validationCustom03" placeholder="nome@exemplo.com" required>
            <div class="invalid-feedback">
              Digite um email válido.
            </div>
          </div>
          <div class="col-md-3">
            <label for="telefone" class="form-label">Telefone (WhatsApp):</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(44) 91234-5678" required>
            <div class="invalid-feedback">
              Digite um número de telefone válido.
            </div>
          </div>
          <!-- script para mascara do telefone -->
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

          <script>
            $(document).ready(function() {
              $('#telefone').mask('(00) 00000-0000');
            });
          </script>
          <div class="col-md-11">
            <label for="validationCustom05" class="form-label">Mensagem (opcional)</label>
            <!-- <input type="text" class="form-control" id="" required> INPUT CASO O JAVA NAO FUNCIONE -->
            <textarea class="form-control" placeholder="Escreva uma mensagem" id="validationCustom05" required rows="3"></textarea>
            <div class="invalid-feedback">
              Digite a sua mensagem.
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Confirmar informações
              </label>
              <div class="invalid-feedback">
                Confirme as informações antes de enviar.
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-outline-primary" type="submit">Enviar <i class="fa-regular fa-paper-plane"></i></button>
          </div>
        </form>

        <script>
          // bootstrap validation
          (() => {
            'use strict'

            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
              form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
          })()
        </script>

      </section>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>