<?php 

    include("conection.php");
    $idContact = $_GET['id'];
    $eliminar = "DELETE FROM contact WHERE idcontact='$idContact'";

    $resultado = mysqli_query($conection, $eliminar);
    if($resultado) {
        echo '
            <script>
                alert("Contacto eliminado con exito!");
                window.location = "contacts.php";
            </script>
        ';
        echo "<script> window.location='contacts.php'; </script>";
    }else{
        echo "No se pudo eliminar el contacto :c";
    }

?>