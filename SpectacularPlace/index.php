<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Urban Tech Revulation</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">

   <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->
   <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

   <!-- Customized Bootstrap Stylesheet -->
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/bootstrap.min2.css" rel="stylesheet">

   <!-- Template Stylesheet -->
   <link href="../css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">

   <style>
      /* Define CSS styles for the form */
      .add-product-form {
         display: none;
         /* Initially hidden */
         /* Add any desired styling for the form */
      }
   </style>
</head>

<body>
   <div class="container-fluid position-relative d-flex p-0">
      <!-- Sidebar Start -->
      <div class="sidebar pe-4 pb-3">
         <nav class="navbar bg-secondary navbar-dark">
            <a href="../ctzIndex.php" class="navbar-brand mx-4 mb-3">
               <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Urban Tech</h3>
            </a>

            <div class="navbar-nav w-100">
               <a href="../ctzIndex.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
               <style>
                  .spacil a {
                     font-family: sans-serif;
                  }
               </style>
               <div class="sidebarCall spacil" id="sidebarCall">

                  <!--?php include "../sidebarContent.php" ?-->

                  <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Profile</a>
                     <div class="dropdown-menu bg-transparent border-0">
                        <a href="../ebill/index.php" class="dropdown-item">Payment</a>
                        <a href="../index.php" class="dropdown-item">Log Out</a>
                     </div>
                  </div>
                  <a href="../RentPHP/ctzRent.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Rent</a>
                  <a href="rent.php" class="nav-item nav-link"><i class="fa fa-keyboard me-1"></i>Spectacular Place</a>
                  <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Shopping</a>
               </div>
            </div>
         </nav>
      </div>
      <!-- Sidebar End -->


      <div class="content">
         <!-- Navbar Start -->
         <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
               <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
               <i class="fa fa-bars"></i>
            </a>
            <div class="">
               <p class="pp">CITIZEN</p>
               <style>
                  .pp {
                     color: goldenrod;
                     font-weight: 900;
                     font-size: 25px;
                     padding: 13px 0px 0px 10px;
                  }

                  .messateTxt {
                     color: black;
                  }
               </style>
            </div>
            <div class="navbar-nav align-items-center ms-auto">
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                     <i class="fa fa-envelope me-lg-2"></i>
                     <span class="d-none d-lg-inline-flex">Message</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                     <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                           <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                           <div class="ms-2">
                              <h6 class="fw-normal mb-0 messateTxt">Mr y</h6>
                              <small>15 minutes ago</small>
                           </div>
                        </div>
                     </a>
                     <hr class="dropdown-divider">
                     <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                           <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                           <div class="ms-2">
                              <h6 class="fw-normal mb-0 messateTxt">Mr Green</h6>
                              <small>15 minutes ago</small>
                           </div>
                        </div>
                     </a>
                     <hr class="dropdown-divider">
                     <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                           <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                           <div class="ms-2">
                              <h6 class="fw-normal mb-0 messateTxt">Mr xyz</h6>
                              <small>15 minutes ago</small>
                           </div>
                        </div>
                     </a>
                     <hr class="dropdown-divider">
                     <a href="#" class="dropdown-item text-center">See all message</a>
                  </div>
               </div>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                     <i class="fa fa-bell me-lg-2"></i>
                     <span class="d-none d-lg-inline-flex">Notificatin</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                     <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Profile updated</h6>
                        <small>15 minutes ago</small>
                     </a>
                     <hr class="dropdown-divider">
                     <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">New user added</h6>
                        <small>15 minutes ago</small>
                     </a>
                     <hr class="dropdown-divider">
                     <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Password changed</h6>
                        <small>15 minutes ago</small>
                     </a>
                     <hr class="dropdown-divider">
                     <a href="#" class="dropdown-item text-center">See all notifications</a>
                  </div>
               </div>


               <!--FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF-->
               <?php
               // Establish a connection to MySQL database
               $servername = "localhost";
               $username = "root";
               $password = "";
               $dbname = "urbancityrevolution";

               // Create connection
               $conn = new mysqli($servername, $username, $password, $dbname);

               // Check connection
               if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
               }

               // Check if the user is logged in and the email is set in the session
               if (isset($_SESSION['citizenEmail'])) {
                  $email = $_SESSION['citizenEmail'];

                  // Query to fetch user information based on email
                  $sql = "SELECT firstname, lastname, image FROM citizenreg WHERE email = '$email'";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                     $row = $result->fetch_assoc();
                     $userImage = $row['image'];
                     $userName = $row['firstname'];
                     $userLastName = $row['lastname'];
                  }
               }
               ?>

               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                     <?php if (isset($userImage)) : ?>
                        <img class="rounded-circle me-lg-2" src="../<?php echo $userImage; ?>" alt="" style="width: 40px; height: 40px;">
                     <?php else : ?>
                        <img class="rounded-circle me-lg-2" src="../img/default-img.jpg" alt="" style="width: 40px; height: 40px;">
                     <?php endif; ?>
                     <span class="d-none d-lg-inline-flex">
                        <?php
                        // marge first_Name and Last_Name (Allah map koro... r pari na);
                        if (isset($userName) && isset($userLastName)) {
                           echo $userName . ' ' . $userLastName;
                        } elseif (isset($userName)) {
                           echo $userName;
                        } else {
                           echo '';
                        }
                        ?>
                     </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                     <a href="../ctzMyProfile.php" class="dropdown-item">My Profile</a>
                     <a href="../index.php" class="dropdown-item" name="logout">Log Out</a>
                  </div>

                  <?php
                  if (isset($_POST["logout"])) {
                     session_destroy();
                     header("location: index.php");
                     exit();
                  }
                  ?>
               </div>

               <!--FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF (done after try 47 times :)-->


            </div>
         </nav>
         <!-- Navbar End -->
         <style>
            .formatting .h6 {
               text-align: center;
               margin: auto;
            }

            .formatting h6 {
               padding-top: 93px;
            }
         </style>

         <!-- clender and vgtID Start -->
         <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
               <!--<div class="col-2">
                  <div class="h-100 bg-secondary rounded p-4">
                     new code
                  </div>
               </div>-->

               <!--ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff--->
               <div class="col-12">
                  <div class="h-100 bg-secondary rounded p-4">
                     <h1 class="text-center text-danger " style="font-family: 'Abril Fatface', cursive;"> Urban Shopping</h1>

                     <!--Shopping Start-->
                     <?php
                     include 'config.php';
                     //session_start();
                     $user_id = $_SESSION['user_id'];

                     if (!isset($user_id)) {
                        //header('location: login.php');
                        echo '<script>window.setTimeout(function() { window.location.href = "login.php"; }, 100);</script>';
                        exit;
                     }

                     if (isset($_GET['logout'])) {
                        // Unset session variables
                        //session_unset();

                        // Destroy the session
                        //session_destroy();

                        // Redirect to login.php after a brief delay using JavaScript
                        echo '<script>window.setTimeout(function() { window.location.href = "../ctzIndex.php"; }, 100);</script>';
                        exit;
                     }


                     $message = [];

                     if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['add_to_cart'])) {
                           $product_name = $_POST['product_name'];
                           $product_price = $_POST['product_price'];
                           $product_image = $_POST['product_image'];
                           $product_quantity = $_POST['product_quantity'];

                           $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

                           if (mysqli_num_rows($select_cart) > 0) {
                              $message[] = 'Product already added to cart!';
                           } else {
                              mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
                              $message[] = 'Product added to cart!';
                           }
                        }

                        if (isset($_POST['update_cart'])) {
                           $update_quantity = $_POST['cart_quantity'];
                           $update_id = $_POST['cart_id'];
                           mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
                           $message[] = 'Cart quantity updated successfully!';
                        }
                     }

                     if (isset($_GET['remove'])) {
                        $remove_id = $_GET['remove'];
                        mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
                        // Use JavaScript to redirect after a brief delay to prevent header issues
                        echo '<script>window.setTimeout(function() { window.location.href = "index.php"; }, 100);</script>';
                        exit;
                     }

                     if (isset($_GET['delete_all'])) {
                        mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                        // Use JavaScript to redirect after a brief delay to prevent header issues
                        echo '<script>window.setTimeout(function() { window.location.href = "index.php"; }, 100);</script>';
                        exit;
                     }
                     ?>


                     <?php
                     if (isset($message)) {
                        foreach ($message as $message) {
                           echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
                        }
                     }
                     ?>

                     <div class="container">

                        <div class="user-profile">
                           <?php
                           $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                           if (mysqli_num_rows($select_user) > 0) {
                              $fetch_user = mysqli_fetch_assoc($select_user);
                           };
                           ?>

                           <p> username : <span><?php echo $fetch_user['name']; ?></span> </p>
                           <p> email : <span><?php echo $fetch_user['email']; ?></span> </p>
                           <div class="flex">
                              <a href="login.php" class="btn">login</a>
                              <a href="register.php" class="option-btn">register</a>
                              <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
                           </div>
                        </div>

                        <div class="products">
                           <h1 class="heading">latest products</h1>

                           <div class="box-container">

                              <?php //-----------------------------------------------------------------------------------------------------ORDER BY id DESC;
                              $select_product = mysqli_query($conn, "SELECT * FROM `products` ORDER BY id DESC") or die('query failed');
                              if (mysqli_num_rows($select_product) > 0) {
                                 while ($fetch_product = mysqli_fetch_assoc($select_product)) {
                              ?>
                                    <form method="post" class="box" action="">
                                       <!-- Ensure that the image path is correct -->
                                       <img src="<?php echo $fetch_product['image']; ?>" alt="Product Image">
                                       <div class="name"><?php echo $fetch_product['name']; ?></div>
                                       <div class="price">&#2547; <?php echo $fetch_product['price']; ?>/-</div>
                                       <input type="number" min="1" name="product_quantity" value="1">
                                       <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                       <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                       <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                       <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                                    </form>
                              <?php
                                 }
                              }
                              ?>


                           </div>

                        </div>

                        <div class="shopping-cart">

                           <h1 class="heading">shopping cart</h1>

                           <table>
                              <thead>
                                 <th>image</th>
                                 <th>name</th>
                                 <th>price</th>
                                 <th>quantity</th>
                                 <th>total price</th>
                                 <th>action</th>
                              </thead>
                              <tbody>
                                 <?php
                                 $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                                 $grand_total = 0;
                                 if (mysqli_num_rows($cart_query) > 0) {
                                    while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                                 ?>
                                       <tr>
                                          <td><img src="<?php echo $fetch_cart['image']; ?>" height="100px" alt="Product"></td>
                                          <td><?php echo $fetch_cart['name']; ?></td>
                                          <td>&#2547; <?php echo $fetch_cart['price']; ?>/-</td>
                                          <td>
                                             <form action="" method="post">
                                                <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                                                <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                                                <input type="submit" name="update_cart" value="update" class="option-btn">
                                             </form>
                                          </td>
                                          <td>&#2547; <?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
                                          <td><a href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
                                       </tr>
                                 <?php
                                       $grand_total += $sub_total;
                                    }
                                 } else {
                                    echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
                                 }
                                 ?>
                                 <tr class="table-bottom">
                                    <td colspan="4">grand total :</td>
                                    <td>&#2547; <?php echo $grand_total; ?>/-</td>
                                    <td><a href="index.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">delete all</a></td>
                                 </tr>
                              </tbody>
                           </table>

                           <div class="cart-btn">
                              <a href="#" class="btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">proceed to checkout</a>
                           </div>

                        </div>

                     </div>






                     <!--Shopping Start-->
                  </div>
                  <!--ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff--->
               </div>
            </div>
            <!-- Clender and vgtID End -->

            <!-- Footer Start -->
            <?php include "../footer.php"; ?>
            <!-- Footer End -->
         </div>
         <!-- Content End -->

         <!-- Back to Top -->
         <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
      </div>


      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="lib/chart/chart.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/tempusdominus/js/moment.min.js"></script>
      <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
      <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


      <!-- Template Javascript -->
      <script src="../js/main.js"></script>
      <script src="../js/script.js"></script>
      <script src="../rent.js"></script>
</body>

</html>