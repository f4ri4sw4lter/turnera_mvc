<?php 
$title = 'turnos';
//Header
include 'views/header.php';
//Navigation
include 'views/menu.php';
?>

<!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center">
        
        <form action="<?=URL;?>turno/agregarTurno" method="POST">
          <h2>Agregar Turno</h2>
          <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" name="dni" id="">
          </div>
          <div class="form-group">
            <label for="dni">sector</label>
            <input type="text" class="form-control" name="sector" id="">
          </div>

          <button type="submit" class="btn btn-primary">Registrar nuevo turno</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
