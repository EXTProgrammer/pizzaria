<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="https://www.iconarchive.com/download/i134314/iconarchive/fat-sugar-food/Pizza.1024.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DsEdu Pizzaria</title>
</head>
<body>
    <header>
        <nav id="nav">
            <a href="index.html" class="logo">Ds_Edu Pizzaria</a>
            <div class="menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="list">
                <li><a href="#menupizza">Nosso Menu</a></li>
                <li><a href="#pedidoid">Faça seu Pedido</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="wrapper">
            <section class="modulo parallax parallax-1">+
            </section>
        </div>

        <h2 class="menup" id="menupizza">Menu</h2>
        <h2 class="pizz">Pizzaria</h2>


        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="menu1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="tabela1.png" class="d-block w-100" alt="...">
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pizzadsedu";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $endereco = $_POST["endereco"];

            $sql = "INSERT INTO clientes (nome, telefone, endereco) VALUES ('$nome', '$telefone', '$endereco')";

            if($conn->query($sql) === true){
                echo "<p>Pedido feito com sucesso!</p>";
            } else{
                echo "Erro no cadastro" .$sql ."<br>" . $conn->error;
            }
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $sabor = $_POST["sabor"];
            $tamanho = $_POST["tamanho"];
            $borda = $_POST["borda"];
            $bebida = $_POST["bebida"];

            $sql2 = "INSERT INTO pedidos (sabor, tamanho, borda, bebida) VALUES ('$sabor', '$tamanho', '$borda', '$bebida')";

            if($conn->query($sql2) === true){
                echo "";
            } else{
                echo "<p>Erro no cadastro</p>" .$sql2 ."<br>" . $conn->error;
            }
        }

        $conn->close();
    ?> 

    <h2 class="pedido" id="pedidoid">Faça seu Pedido!</h2>
    <form method="post" class="cadastro">
        <p>Nome:</p> <input type="text" name="nome" id="nome" required autocomplete="off"><br><br>
        <p>Telefone:</p> <input type="number" name="telefone" id="telefone" required autocomplete="off"><br><br>
        <p>Endereço:</p> <input type="text" name="endereco" id="endereco" required autocomplete="off"><br><br><br>

        <p>Sabor:</p><select name="sabor">
            <option value="m">Mussarela</option>
            <option value="q">Queijo</option>
            <option value="cat">Catupiri</option>
            <option value="v">Vegana</option>
            <option value="cal">Calabresa</option>
            <option value="p">Palmito</option>
        </select><br><br>
        <p>Tamanho:</p> <select name="tamanho">
            <option value="P">Pequena</option>
            <option value="M">Média</option>
            <option value="G">Grande</option>
        </select><br><br>
        <p>Borda:</p><select name="borda">
            <option value="C">Comum</option>
            <option value="R">Recheada</option>
        </select><br><br>
        <p>Bebida:</p><select name="bebida">
            <option value="C">Coca Cola</option>
            <option value="G">Guaraná</option>
            <option value="F">Fanta Uva</option>
            <option value="P">Pepsi</option>
        </select><br><br>
        <input type="submit" value="Faça seu Pedido"><br><br><br>
    </form>

    <footer>
        <p>Desenvolvido por Eduardo Xaubet Tarigo & Dominique Silva</p>
        <p>IOS | 2024 &copy;</p>
    </footer>

    <script src="main.js"></script>
</body>
</html>