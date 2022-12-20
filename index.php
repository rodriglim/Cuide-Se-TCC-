<?php
require_once('./config/db_connect.php');





$sql_categoria = "SELECT * FROM categoria";
$result_categoria = $conn->query($sql_categoria);


$sql_categoria_details = "SELECT nomeEstabelecimento, imgEstabelecimento, telefoneEstabelecimento FROM Estabelecimento WHERE Categoria_idCategoria =1 ";
$result_categoria_details = $conn->query($sql_categoria_details);


$sql_nomeCategoria = "SELECT nomeCategoria FROM categoria WHERE idCategoria =1 ";
$result_nomeCategoria = $conn->query($sql_nomeCategoria);
$row_result_nomeCategoria = $result_nomeCategoria->fetch_assoc();


?>



<!DOCTYPE html>
<html lang="br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cuide-Se</title>
  <link rel="icon" href="./images/pngwing.com.png">
  <link rel="stylesheet" href="../Projeto TCC Responsive new/style.css">
  <link rel="stylesheet" href="../Projeto TCC Responsive new/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="../Projeto TCC Responsive new/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <section>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./images/iconecuidese.png" alt="logo">
          Cuide-Se
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#inicio">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu">Categoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contato">Contato</a>
            </li>
          </ul>
             <button class="b_button">Login</button>
        </div>
      </div>
    </nav>
  </section>
  <div class="container-test">
    
  </div>
  <section>
    <div class="main-box" id="inicio">
      <div class="title2">
        <h1>Cuide<h2>se</h2>
        </h1>
        <p>O melhor para sua saúde</p>

      </div>
      <div class="thumbnail">
        <img src="./images/testebanner.png" alt="banner">
      </div>
    </div>
  </section>

  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Categorias</h2>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">


        <?php

        if ($result_categoria->num_rows > 0) {
          while ($row_result_categoria = $result_categoria->fetch_assoc()) {

        ?>

            <li class="nav-item ">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-starters" onclick="CategoriaFilter('<?php echo $row_result_categoria['idCategoria']; ?>')">
                <h4><?php echo $row_result_categoria['nomeCategoria']; ?></h4>
              </a>
            </li><!-- End tab nav item -->
        <?php }
        } ?>

        <!-- <li class="nav-item"  active show>
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>Sem Lactose</h4>
        
          </a> -->
        <!-- End tab nav item -->

        <!-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
            <h4>Sem Glúten</h4>
          </a>
        </li> -->
        <!-- End tab nav item -->

        <!-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
            <h4>Sem Açúcar</h4>
          </a>
         

        </li> -->
        <!-- End tab nav item -->

      </ul>









      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="results">

          <div class="tab-header text-center">
            <h3><?php echo $row_result_nomeCategoria['nomeCategoria']; ?></h3>
          </div>

          <div class="row gy-5">

            <?php
            if ($result_categoria_details->num_rows > 0) {
              while ($row_result_categoria_details = $result_categoria_details->fetch_assoc()) {

            ?>
                <div class="col-lg-4 menu-item">
                  <a>
                    <img src="<?php echo $row_result_categoria_details['imgEstabelecimento']; ?>" class="menu-img img-fluid" style="width:100%">
                  </a>
                  <h4><?php echo $row_result_categoria_details['nomeEstabelecimento']; ?> </h4>
                  <p class="ingredients"><?php echo $row_result_categoria_details['telefoneEstabelecimento']; ?></p>
                  <!-- <p class="price">$5.95</p></div> -->
                </div>
               <?php }} ?>
          </div>
     
      <!--End Starter Menu Content-->





      <!-- <div class="tab-pane fade" id="menu-breakfast">

          <div class="tab-header text-center">
            <h3>Sem Lactose</h3>
          </div>

          <div class="row gy-5" id = "row2">

            
          </div>
        </div> -->
      <!--End Breakfast Menu Content-->

      <!-- <div class="tab-pane fade" id="menu-lunch">

          <div class="tab-header text-center">
            <h3>Sem Glúten</h3>
          </div>

          <div class="row gy-5" id = "row3">

            
          </div>
        </div> -->
      <!--End Lunch Menu Content-->

      <!-- <div class="tab-pane fade" id="menu-dinner">

          <div class="tab-header text-center">
            <h3>Sem Açúcar</h3>
          </div>

          <div class="row gy-5" id = "row4">

            
          </div>
        </div> -->
      <!--End Dinner Menu Content-->

        </div>

      </div>
  </section>


  <footer class="footer section bd-container" id="contato">
    <div class="footer_container bd-grid">
      <div class="section-header-contato">
        <h2>Contatos</h2>
      </div>

      <div class="footer_content">
        <b class="footer_logo">
          <span>Cuide-se</span>
        </b>

        <span class="footer_description">O melhor serviço, para você. </span>

        <div>
          <a href="#" class="footer_social"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="footer_social"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="footer_social"><i class="bx bxl-twitter"></i></a>
        </div>
      </div>

      <div class="footer_content">
        <h3 class="footer_title">Informações</h3>
        <ul>
          <li><a href="#" class="footer_link">Eventos</a></li>
          <li><a href="#" class="footer_link">Política de Privacidade</a></li>
          <li><a href="#" class="footer_link">Termos de serviço</a></li>
        </ul>
      </div>

      <div class="footer_content">
        <h3 class="footer_title">Endereço</h3>
        <ul>
          <li><a href="https://goo.gl/maps/pYxuvHELg2oAoNY7A">Feira de Santana - BA</a></li>
        </ul>
      </div>

      <div class="footer_content">
        <h3 class="footer_title">Navegação</h3>
        <ul>
          <li><a href="#app" class="footer_link">Download</a></li>
          <li><a href="#contact" class="footer_link">Contate-nos</a></li>
        </ul>
      </div>
    </div>

    <p class="footer_copy">
      &#169; 2022, Cuide-se
    </p>
  </footer>
  </div>



  <script src="./glightbox/js/glightbox.min.js"></script>
  <script src="./swiper/swiper-bundle.min.js"></script>

  <script src="./js/first.js"></script>
  <script src="./js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>