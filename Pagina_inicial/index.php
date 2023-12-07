<?php
include "db_conn.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style.css -->
    <link rel="stylesheet" href="quemsomos.css">
         <!-- Link (Bootstrap) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 
 <!-- Link para (Bootstrap Icons) -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>

    <title>Meus usuários</title>
</head>

<body>
<nav class="navbar navbar-expand-lg destaque py-4 px-2" id="navbar">
        <div class="container">
          <!-- Marca ou logo -->
          <link rel="shortcut icon" href="logo.png" type="image/x-icon" src="logo.png" alt="logo.png"></link>
          <a class="navbar-brand" href="#">Listen Music</a>
          
          <!-- Items da barra de navegação -->
          <div id="navbar-items">
            <div></div>
    
            <!-- Formulário de busca -->
            <form class="d-flex" id="search-form">
                <i class="bi bi-search primary-color"></i> <!--Ícone de pesquisa-->
                <input class="form-control me-2" type="search" placeholder="Busque seu produto..." aria-label="Search">
                <button class="btn secondary-bg-color" type="submit">Pesquisar</button>
              </form>
      
              <!-- Ícones da barra de navegação -->
              <ul class="navbar-nav mb-2 mb-lg-0" >
                <li class="nav-item">
                  <a  class="nav-link" href="#">
                    <i class="bi bi-person"></i><!--link para o perfil do usuário-->
                  </a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link" href="#">
                    <i class="bi bi-heart"></i><!--link para favoritos-->
                  </a>
                  <span class="qty-info">5</span><!--Quantidade de itens (ex:favoritos)-->
                </li>
                <li class="nav-item" id="bag-item" style="color: white;">
                  <a  class="nav-link" href="#">
                    <i class="bi bi-bag"></i><!--link para o carrinho-->
                    <b>R$639,60</b><!--Valor total do carrinho-->
                  </a>
                  <span class="qty-info">4</span> <!--Quantidade de itens no carrinho-->
                </li>  
              </ul>    
            </div>
          </div>
        </nav>
        <br>
    <div class="container">
        <?php
        if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <a href="add-new.php" class="btn btn-dark mb-3">Novo Usuário</a>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="color: white;">ID</th>
                    <th scope="col" style="color: white;">Nome</th>
                    <th scope="col" style="color: white;">Sobrenome</th>
                    <th scope="col" style="color: white;">E-mail</th>
                    <th scope="col" style="color: white;">Gênero</th>
                    <th scope="col" style="color: white;">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["first_name"] ?></td>
                        <td><?php echo $row["last_name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["gender"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square" fs-5 me-3></i></a>

                            <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<!-- FOOTER -->
<footer id="footer">
    <div class="container-fluid" id="footer-links-container">
      <div class="row">
        <!-- Colunas para link de páginas -->
        <div class="col-12 col-md-4 footer-column">
          <h3>Páginas</h3>
          <!-- Lista de link de página -->
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#" class="secondary-color">Home</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">CDs</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Vinil</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Sobre nós</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-4 footer-column" id="footer-center">
          <h3>Listen Music</h3>
          <p class="secondary-color">Alguma dúvida ?Ligue para nós</p>
          <p class="store-phone"><i class="bi bi-telephone"></i> (50)999999-9999</p>
        </div>
        <div class="col-12 col-md-4 footer-column">
          <h3>Informações</h3>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#" class="secondary-color">Politica de Privacidade</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Politica de Entrega</a></li>
            <li class="mb-2"><a href="#" class="secondary-color">Rastreie seu pedido</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Seção para a newletter -->

    
    <div class="container-fluid" id="newsletter-container">
      <div class="col-12">
        <div class="row">
          <p class="secondary-color">Se inscreva na nosssa Newletter:</p>
          <!-- Formulario para inscrição na newsletter -->
          <form class="d-flex" id="news-form">
            <i class="bi bi-envelope primary-color"></i>
            <input class="form-control me-2" placeholder="Insira seu e-mail">
            <button class="btn secondary-bg-color" type="submit">Enviar</button>
          </form>
        </div>
      </div>
      <!-- Icones de redes sociais -->
      <div class="col-12" id="social-container">
        <i class="bi bi-facebook"></i>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-youtube"></i>
        <i class="bi bi-twitter"></i>
      </div>
    </div>

    <!-- Texto de direitos autorais -->
    <div class="container" id="copy-container">
      <p>Alguns direitos reservados @2023 <span class="primary-color">Listen Music</span> - A sua loja retrô</p>
    </div>
   </footer>

    <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>