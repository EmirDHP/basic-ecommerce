<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - EmirStore</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>

    <div class="container" style="padding-bottom: 0px;">
        <div class="navbar">
            <div class="logo">
                <img src="images/emirstore.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="./">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="">Login</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- Connection -->
    <?php
    $error = false;
    $config = include 'config.php';

    try {
        $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

        $consultaSQL = "SELECT * FROM products;";

        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();

        $fotos = $sentencia->fetchAll();
    } catch (PDOException $error) {
        $error = $error->getMessage();
    }
    ?>

    <!-- featured products -->
    <div class="small-container">
        <div class="row">
            <h2 class="title">All Products</h2>
        </div>
        <div class="row">
            <?php
            if ($fotos && $sentencia->rowCount() > 0) {
                foreach ($fotos as $fila) {
            ?>
                    <div class="col-4">
                        <div id="cf">
                        <img class="top" src="images/<?php echo ($fila["product"]); ?>">
                        <img class="bottom" src="images/<?php echo ($fila["image2"]); ?>" width="200px" height="266px">
                        <img class="third" src="images/<?php echo ($fila["image3"]); ?>" width="200px" height="266px">
                        </div>
                        <h4><?php echo ($fila["product_name"]); ?></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>$50.00</p>
                        <?php
                        echo "<a class='btn' href='details.php?id=" . $fila['id'] . "'>View More</a>";
                        ?>
                    </div>
            <?php }
            } ?>
        </div>
    </div>

    <!-- Foteer -->
    <div class="footer">
        <div class="container">
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Desarrollado por <a href="http://emirhernandez.epizy.com/" target="_blank">Emir Hernandez</a>
            </div>
        </div>
    </div>

    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>

</html>