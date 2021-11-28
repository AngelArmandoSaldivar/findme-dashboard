<?php 

    include("conection.php");
    $iduser = $_GET['id'];
    $eliminar = "DELETE FROM users WHERE idusers='$iduser'";

    $resultado = mysqli_query($conection, $eliminar);
    if($resultado) {
        echo '
            <script>
                alert("Usuario eliminado con exito!");
                window.location = "data.php";
            </script>
        ';        
    }else{
        echo "No se pudo eliminar el usuario :c";
    }

?>