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
    <script src="js/js-image-zoom.js"></script>
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

    <?php
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Include config file
        require_once "config.php";

        // Prepare a select statement
        $sql = "SELECT * FROM products WHERE id = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = trim($_GET["id"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $product_name    = $row["product_name"];
                    $price           = $row["price"];
                    $product_detail  = $row["product_detail"];
                    $product         = $row["product"];
                    $image1          = $row["image1"];
                    $image2          = $row["image2"];
                    $image3          = $row["image3"];
                    $image4          = $row["image4"];
                } else {
                    // URL doesn't contain valid id parameter. Redirect to error page
                    header("location: error.php");
                    exit();
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($link);
    } else {
        print_r($sql);
        exit();
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
    ?>

    <!-- Single product details -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2" id="zoom">
                <img src="images/<?= $row["image1"]; ?>" width="100%" id="productImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/<?= $row["image1"]; ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/<?= $row["image2"]; ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/<?= $row["image3"]; ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/<?= $row["image4"]; ?>" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <h1>Red Printed T-Shirt by HRX</h1>
                <h4>$50.00</h4>
                <a href="" class="btn">Add To Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus esse voluptatibus beatae, obcaecati architecto et laboriosam ratione, ipsam aliquid ab voluptates, velit totam! Culpa tempore officia vel? Ipsa, non.</p>
            </div>
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

    <!-- js for product gallery -->
    <script>
        var productImg = document.getElementById("productImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            productImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            productImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            productImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            productImg.src = smallimg[3].src;
        }
    </script>

    <!-- js for zoom image -->
    <script>
        var options1 = {
            width: 400,
            height: 250,
            zoomWidth: 500,
            offset: {
                vertical: 0,
                horizontal: 10
            }
        };

        // If the width and height of the image are not known or to adjust the image to the container of it
        var options2 = {
            zoomWidth: 500,
            offset: {
                vertical: 0,
                horizontal: 10
            }
        };
        new ImageZoom(document.getElementById("zoom"), options2);
    </script>

</body>

</html>