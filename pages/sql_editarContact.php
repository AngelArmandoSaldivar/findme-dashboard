<?php 

    include("conection.php");

   if(isset($_POST['nombre'])) {
        if(strlen($_POST['apellidos']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['age']) >= 1 &&
            strlen($_POST['pass']) >= 1 &&
            strlen($_POST['rol']) >= 1) {
                $idcontact = $_POST['id'];
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $age = $_POST['age'];
                $pass = $_POST['pass'];
                $role = $_POST['rol'];

                $query = "UPDATE contact SET name='$nombre', lastname='$apellidos', email='$email', phone='$phone', age='$age', password='$pass', role='$role' WHERE idcontact='$idcontact'";
                $resultado = mysqli_query($conection, $query);
                if($resultado) {
                    echo '
                        <script>
                            alert("Contacto Actualizado con exito!");
                            window.location = "contacts.php";
                        </script>
                    ';
                    echo "<script> window.location='contacts.php'; </script>";
                }else{
                    echo "No se pudo actualizar el contacto :c";
                }
        }else{
            echo "Complete todos los campos!";
        } 
    }

?>