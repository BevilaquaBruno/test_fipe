<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste</title>
  <!-- PureCSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <!-- Mine -->
  <script src="/public/app.js"></script>
  <link rel="stylesheet" href="/public/app.css">
</head>
<body>
  <div class="pure-g text-center">
    <div class="pure-u-1-1 gray-bk">
      <p style="font-size: 20px; font-weight: bold;">Selecione o tipo de veículo:</p>
    </div>
  </div>
  <div class="pure-g text-center">
    <div class="pure-u-1-3 gray-bk">
      <a class="link" href="/carros">Carros</a>
    </div>
    <div class="pure-u-1-3 gray-bk">
      <a class="link" href="/motos">Motos</a>
    </div>
    <div class="pure-u-1-3 gray-bk">
      <a class="link" href="/caminhoes">Caminhões</a>
    </div>
  </div>
  <div class="container">
    <?php if($page === ""){
      require_once("./pages/". ucfirst($page) . ".html");
    }else{
      echo("Selecione uma opção acima.");
    } ?>
  </div>
</body>
</html>