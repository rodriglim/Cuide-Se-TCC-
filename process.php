<script src="./glightbox/js/glightbox.min.js"></script>
<link rel="stylesheet" href="./glightbox/css/glightbox.min.css">
<?php
require_once('./config/db_connect.php');

if(isset($_GET['searchphrase'])){

    $id = $_GET['searchphrase'];

    $sql_categoria_details = "SELECT nomeEstabelecimento, imgEstabelecimento, telefoneEstabelecimento FROM Estabelecimento WHERE Categoria_idCategoria =$id ";
    $result_categoria_details = $conn->query($sql_categoria_details);
    
    
    $sql_nomeCategoria = "SELECT nomeCategoria FROM categoria WHERE idCategoria =$id ";
    $result_nomeCategoria = $conn->query($sql_nomeCategoria);
    $row_result_nomeCategoria = $result_nomeCategoria->fetch_assoc();

?>

    <div class="tab-header text-center">
    <h3><?php echo $row_result_nomeCategoria['nomeCategoria']; ?></h3>
  </div>

  <div class="row gy-5">

    <?php
    if ($result_categoria_details->num_rows > 0) {
      while ($row_result_categoria_details = $result_categoria_details->fetch_assoc()) {

    ?>
        <div class="col-lg-4 menu-item">
          <a href="<?php echo $row_result_categoria_details['imgEstabelecimento']; ?>" class="glightbox">
            <img src="<?php echo $row_result_categoria_details['imgEstabelecimento']; ?>" class="menu-img img-fluid">
          </a>
          <h4><?php echo $row_result_categoria_details['nomeEstabelecimento']; ?> </h4>
          <p class="ingredients"><?php echo $row_result_categoria_details['telefoneEstabelecimento']; ?></p>
          <!-- <p class="price">$5.95</p></div> -->
        </div>
       <?php }} ?>
  </div>

  <?php } ?>
    