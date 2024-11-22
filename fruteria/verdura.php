<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href ="img/logosinfon.png"/>
    <title>FyV Don José - Verdura</title>
    <link rel="stylesheet" href="css/productos.css">
</head>
<body>
    <header> <!--HEADER-->
        <div class="sd">
            <img src="img/logosinfon.png" alt="logo" height="100px">
            <img src="img/tituhea.png" alt="FyV DonJosé" height="50px" style="padding-left: 20px;">
        </div>
        <nav class="opc">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li class="mede">
                    <button class="boton">Catálogo</button>
                    <div class="medec">
                    <a href="Fruta.php" >Frutas</a>
                    <a href="verdura.php" >Verduras</a> 
                </li>
                <li class="mede">
                    <button class="boton">Perfil</button>
                    <div class="medec">
                    <a href="perfil.php">Perfil de usuario</a>
                    <a href="iniciar.php" >Iniciar sesion</a>
                    <a href="registro.php" >Registrarse</a> 
                </li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="carrito.php">Carrito</a></li>
            </ul>
        </nav>
    </header> <!--HEADER-->

    <br><br><br><br>
    <div class="col">
    <?php 
        $sql = "SELECT * FROM productos WHERE tipo = 'verdura'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='di'>";
                echo "<img src='".$row['imagen'] . "' alt='" . $row['nombre'] . "' class='im'>";
                echo "<h2>". $row['nombre'] ."</h2>";
                echo "<p>";
                echo "<strong>Precio: </strong>$" . $row['precio'] . "/kg<br>";
                echo "<strong>Calorías: </strong>" . $row['calorias'] ."<br>";
                echo "<strong>Vitaminas: </strong>$" . $row['vitaminas'] . "<br>";
                echo "<strong>Stock (kg): </strong>" . $row['stock'] . "<br>";
                echo "<form method='POST' action='addcarrito.php'>";
                echo "<input type='hidden' name='id_producto' value='". $row['id_producto'] ."'>";
                echo "<input type='hidden' name='nombre' value='". $row['nombre'] ."'>";
                echo "<input type='hidden' name='calorias' value='". $row['calorias'] ."'>";
                echo "<input type='hidden' name='vitaminas' value='". $row['vitaminas'] ."'>";
                echo "<input type='hidden' name='precio' value='". $row['precio'] ."'>";
                echo "<input type='hidden' name='stock' value='". $row['stock'] ."'>";
                echo "<input type='hidden' name='imagen' value='". $row['imagen'] ."'>";
                echo "<input type='hidden' name='tipo' value='". $row['tipo'] ."'>";
                echo "<input type='hidden' name='calorias' value='". $row['calorias'] ."'>";        
                echo "<input type='number' name='cantidad_a_comprar' value='1' min='1' max='".$row['stock']."' class = 'can'>";
                echo "<input type='submit' name='submit' value='Añadir al carrito' class='ac'>";
                echo "</form>";
                echo "</p>";
                echo "</div>";
            }
        } else {
            echo "<script> alert('NO FUNCIONA'); </script>";
        }
    ?>
    </div>
    <br><br><br>

<footer> <!--FOOTER-->
    <center>
    <table>
        <tr>
            <td>
                <h3>SÍGUENOS EN:</h3>
                <a href="https://www.facebook.com/groups/423071950490099/?ref=share&mibextid=NSMWBT" target="_blank"><img src="img/facebook.png" alt="" class="reds" style="background-color: white;"></a>
                <a href="https://www.instagram.com/fyvdonjose?igsh=eWdxcHRwcWxqc2V0" target="_blank"><img src="img/instagram.png" alt="" class="reds"></a>
                <a href="https://www.tiktok.com/@fv.don.jos?_t=8mnQa0FmN9C&_r=1" target="_blank"><img src="img/tiktok.png" alt="" class="reds"></a>
            </td>
            <td>
                <h3>CONTACTANOS DESDE:</h3>
                <strong style="color: rgb(145, 250, 148);">fyvdonjose@gmail.com</strong>
                <strong class="nt" style="color: rgb(145, 250, 148);">(656)-553-8724</strong>
            </td>
            <td>
                <h3>ACEPTAMOS:</h3>
                <img src="img/visa.jpg" alt="" class="reds" style="background-color: white;">
                <img src="img/mastercard.png" alt="" class="reds" style="background-color: white;">
                <img src="img/American.png" alt="" class="reds" style="background-color: white;">
            </td>
        </tr>
    </table>
    </center>
    <sub style="color: blanchedalmond;">Ever Daniel Pereyra Castillo 5ºJ 2230805128<b>1282</b></sub>
</footer> <!--FOOTER-->
</body>
</html>