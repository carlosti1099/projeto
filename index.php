<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projeto Dev Web</title>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Estilo CSS-->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="engenheironet">Engenheironet</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato">Contato</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="box">
  <section class="banner">
    <div class="overlay"></div>
    <div class="container chamada-banner">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Carlos Roberto</h2>
          <p>Empresa voltada para o desenvolvimento web e marketing digital</p>
          <a href="">Saiba Mais!</a>
        </div><!--col-md-12-->
      </div><!--row-->
    </div>
  </section>

  <section class="cadastro-lead">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6">
          <h2><i class="bi bi-list-stars"></i>Entre na nossa lista!</h2>
        </div>
        <div class="col-md-6">
          <form method="post">
            <input type="text" name="nome" /><input type="submit" />
          </form>
        </div>
      </div>
    </div>
  </section><!--cadastro-lead-->

  <section class="depoimento text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Depoimento</h2>
          <blockquote>
            <p>Sempre que pensamos em Revolução Industrial, associamos o termo às máquinas à vapor e outros conceitos vistos durante a escola.
            Contudo, já dissemos mais acima que as inovações tecnológicas evoluem rapidamente.
            Nesse sentido, é válido afirmar que nos encontramos na 4ª Revolução Industrial, que é caracterizada por tecnologias com produções digitais, inteligência artificial, robôs automatizados e outros.</p>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <section class="diferenciais text-center">
    <h2>Conheça nossa empresa!</h2>
    <div class="container diferenciais-container">
      <div class="row">
        <div class="col-md-4">
          <h3><span class=""><i class="bi bi-cpu-fill"></i></span></h3>
          <h2>Diferencial #1</h2>
          <p>Equipe Especializada: Contamos com uma equipe de profissionais altamente qualificados e certificados nas principais tecnologias do mercado. Nossa equipe está constantemente atualizada com as últimas tendências e soluções em TI.</p>
        </div>
        <div class="col-md-4">
          <h3><span class=""><i class="bi bi-shield-shaded"></i></span></h3>
          <h2>Diferencial #2</h2>
          <p>Soluções Personalizadas: Entendemos que cada negócio é único. Por isso, oferecemos soluções personalizadas que atendem às necessidades específicas de cada cliente, garantindo maior eficiência e resultados mais satisfatórios.</p>
        </div>
        <div class="col-md-4">
          <h3><span class=""><i class="bi bi-wrench"></i></span></h3>
          <h2>Diferencial #3</h2>
          <p>Resposta Rápida: Nosso compromisso é resolver os problemas o mais rápido possível. Com um sistema de atendimento eficiente, asseguramos que as suas solicitações sejam atendidas com agilidade e precisão.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="equipe">
    <h2>Equipe</h2>
    <div class="container equipe-container">
      <div class="row">
        <div class="col-md-6">
          <div class="equipe-single">
            <div class="row">
              <div class="col-md-2">
                <div class="user-picture">
                  <div class="user-picture-child"></div>
                </div>
              </div>
              <div class="col-md-10">
                <h3>Carlos</h3>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div><!--row-->
          </div>
        </div>

        <div class="col-md-6">
          <div class="equipe-single">
            <div class="row">
              <div class="col-md-2">
                <div class="user-picture">
                  <div class="user-picture-child"></div>
                </div>
              </div>
              <div class="col-md-10">
                <h3>Carlos</h3>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div><!--row-->
          </div>
        </div>
      </div><!--row principal-->
    </div><!--equipe container-->
  </section>

  <section class="final-site">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Fale conosco</h2>
            <form>
              <div class="form-group">
                <label for="email">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome">
              </div>

              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="email">Mensagem:</label>
                <textarea class="form-control"></textarea>
              </div>
            
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-md-6">
          <h2>Nossos planos</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Plano Semanal</th>
                <th>Plano Diário</th>
                <th>Plano Anual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>R$199,00</td>
                <td>R$299,00</td>
                <td>R$399,00</td>
              </tr>

              <tr>
                <td>R$199,00</td>
                <td>R$299,00</td>
                <td>R$399,00</td>
              </tr>

              <tr>
                <td>R$199,00</td>
                <td>R$299,00</td>
                <td>R$399,00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p class="text-center">Todos os direitos reservados!</p>
  </footer>

</div><!--box-->



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Boostrao JS-->
  <script src="js/bootstrap.min.js"></script>

</body>
</html>