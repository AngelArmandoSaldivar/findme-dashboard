<?php    
     session_start();
     include 'conection.php'; 
?>
<!DOCTYPE html>
<html lang="en">

  <?php 
    require('head.php');
  ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <?php 
    require('nav.php');
  ?>

  <?php 
    require('header.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacto de confianza</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="contacts.php">Regresar</a></li>
              <li class="breadcrumb-item active">Contacto de confianza</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Contacto de confianza</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                <div class="card-body">
                  <div class="form-group">
                    <?php
                        $idContact = $_GET['id'];
                         $query = "SELECT * FROM contact WHERE idcontact='$idContact'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<label for=' exampleInputEmail1'>Nombre</label>";                             
                             echo "<input type='text' class='form-control col-lg-6 col-md-6 col-xs-12' value=".$row['name']." disabled>";
                         }
                      ?> 

                    <?php
                        $idContact = $_GET['id'];
                         $query = "SELECT * FROM contact WHERE idcontact='$idContact'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<label for=' exampleInputEmail1'>Apellidos</label>";                             
                             echo "<input type='text' class='form-control col-lg-6 col-md-6 col-xs-12' value=".$row['lastname']." disabled>";
                         }
                      ?>

                    <?php
                        $idContact = $_GET['id'];
                         $query = "SELECT * FROM contact WHERE idcontact='$idContact'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<label for=' exampleInputEmail1'>Correo electrónico</label>";                             
                             echo "<input type='text' class='form-control col-lg-6 col-md-6 col-xs-12' value=".$row['email']." disabled>";
                         }
                      ?>

                    <?php
                        $idContact = $_GET['id'];
                         $query = "SELECT * FROM contact WHERE idcontact='$idContact'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<label for=' exampleInputEmail1'>Telefono</label>";                             
                             echo "<input type='text' class='form-control col-lg-6 col-md-6 col-xs-12' value=".$row['phone']." disabled>";
                         }
                      ?>
                      <?php
                        $idContact = $_GET['id'];
                         $query = "SELECT * FROM contact WHERE idcontact='$idContact'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<label for=' exampleInputEmail1'>Edad</label>";                             
                             echo "<input type='text' class='form-control col-lg-6 col-md-6 col-xs-12' value=".$row['age']." disabled>";
                         }
                      ?>
                      <?php
                        $idContact = $_GET['id'];
                         $query = "SELECT * FROM contact WHERE idcontact='$idContact'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<label for=' exampleInputEmail1'>Contraseña</label>";                             
                             echo "<input type='text' class='form-control col-lg-6 col-md-6 col-xs-12' value=".$row['password']." disabled>";
                         }
                      ?>
                      <?php
                        $idContact = $_GET['id'];
                         $query = "SELECT * FROM contact WHERE idcontact='$idContact'";
                     
                         $result = mysqli_query($conection,$query);
                     
                         while($row = $result->fetch_assoc()) {
                             echo "<label for=' exampleInputEmail1'>Rol</label>";                             
                             echo "<input type='text' class='form-control col-lg-6 col-md-6 col-xs-12' value=".$row['role']." disabled>";
                         }
                      ?>
                    
                </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>        
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Findme</a>.</strong>Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="usuarios.js"></script>
<script src="dist/js/demos.js"></script>
<!-- Page specific script -->

</body>
</html>
