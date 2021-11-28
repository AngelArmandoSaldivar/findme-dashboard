<?php 

    include("conection.php");

   if(isset($_POST['nombre'])) {
        if(strlen($_POST['apellidos']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['age']) >= 1 &&
            strlen($_POST['pass']) >= 1 &&
            strlen($_POST['rol']) >= 1) {
                $iduser = $_POST['id'];
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $age = $_POST['age'];
                $pass = $_POST['pass'];
                $role = $_POST['rol'];

                $query = "UPDATE users SET name='$nombre', lastname='$apellidos', email='$email', phone='$phone', age='$age', password='$pass', role='$role' WHERE idusers='$iduser'";
                $resultado = mysqli_query($conection, $query);
                if($resultado) {
                    echo '
                        <script>
                            alert("Usuario Actualizado con exito!");
                            window.location = "data.php";
                        </script>
                    ';
                    echo "<script> window.location='data.php'; </script>";
                }else{
                    echo "No se pudo actualizar el usuario :c";
                }
        }else{
            echo "Complete todos los campos!";
        } 
    }

?>