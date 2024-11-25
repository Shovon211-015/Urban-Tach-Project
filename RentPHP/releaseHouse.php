<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a database connection (modify with your database credentials)
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

    // Process and sanitize form data
    $full_name = mysqli_real_escape_string($conn, $_POST['name']);
    $dob = $_POST['dob'];
    $time = $_POST['Time'];
    $houseId = $_POST['houseId'];
    $nid = mysqli_real_escape_string($conn, $_POST['nid']);
    $phone = mysqli_real_escape_string($conn, $_POST['date']);
    $email = mysqli_real_escape_string($conn, $_POST['time']);
    $pat = isset($_POST['inlineRadioOptions1']) && $_POST['inlineRadioOptions1'] == 'option1' ? mysqli_real_escape_string($conn, $_POST['pets']) : "";
    $vehicles = isset($_POST['inlineRadioOptions2']) && $_POST['inlineRadioOptions2'] == 'option1' ? mysqli_real_escape_string($conn, $_POST['vehicals']) : "";
    $rent_duration = $_POST['rentDuration'];
    $start_date = $_POST['startDate'];
    $image = $_FILES['image']['name'];

    // Move uploaded image file to a directory (adjust the path as needed)
    $target_dir = "rentalPhoto/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Insert data into rentalinfo table
    $sql = "INSERT INTO rentalinfo (full_name, dob, time, houseId, nid, phone, email, pat, vehicles, rent_duration, start_date, image) VALUES ('$full_name', '$dob', '$time', '$houseId', '$nid', '$phone', '$email', '$pat', '$vehicles', '$rent_duration', '$start_date', '$image')";

    if ($conn->query($sql) === TRUE) {
        // Upload the image file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            //echo '
            //<script>
            //setTimeout(function() {
            //var successMessage = document.getElementById("successMessage");
            //if (successMessage) {
            //successMessage.style.display = "none"; // Hide message after 2 seconds
            //}
            //}, 2000);
            //</script>';
            header("Location: rentAgreement.php");
            //exit();

        } else {
            echo "<div>Data inserted successfully but failed to upload image.</div>";
        }
    } else {
        //echo '<div>Error2: ' . $conn->error . '</div>';

        echo '<script>
        window.onload = function() {
            var warningDiv = document.createElement("div");
            warningDiv.classList.add("alert", "alert-warning", "text-center", "alert-dismissible", "fade", "show");
            warningDiv.setAttribute("role", "alert");
            warningDiv.innerHTML ="Duplicate House Id";

            var closeButton = document.createElement("button");
            closeButton.setAttribute("type", "button");
            closeButton.classList.add("btn-close");
            closeButton.setAttribute("data-bs-dismiss", "alert");
            closeButton.setAttribute("aria-label", "Close");
            warningDiv.appendChild(closeButton);

            document.body.insertBefore(warningDiv, document.body.firstChild);
        }
    </script>';
    }

    // Close the database connection
    $conn->close();
}
?>


<!--phpppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp-->


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

    <link rel="stylesheet" href="../css/style.css">

    <!-- Template Stylesheet -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    <div class="container mt-4">
        <style>
            .addHouse {
                color: black;
                text-align: center;
                font-size: 20px;
                padding: 9px 0px 0px 0px;

                margin-left: 74px;
                margin-bottom: 20px;
                text-align: end;
                width: 50%;
                /* You can adjust the width as needed */
            }

            .addHouseinto {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .marginCenter {
                width: 100%;
            }
        </style>
        <div class="addHouseinto">
            <h1 class="mb-4 addHouse">Profile Information</h1>
            <a href="Rent.php"><i class="fa fa-xmark fa-2x"></i></a>
        </div>



        <!--rhrhrhrhrhrhrhrhrhrhrhrhrhrhrhrrhrhrhrhrhrhrhrhrhrhrhrhrhrhrhrhrhr-->
        <div class="card mb-3 marginCenter">
            <div class="">
                <div class="row g-2">
                    <div class="col-6">
                        <!-- Placeholder image -->
                        <style>
                            .imageSizing {
                                width: 73%;
                                height: 350px;
                                display: flex;
                                margin: 57px auto;
                            }
                        </style>
                        <?php
                        $con = mysqli_connect('localhost', 'root', '', 'urbancityrevolution');
                        if (!$con) {
                            echo "Connection failed: " . mysqli_connect_error();
                        }

                        $houseId = isset($_GET['id']) ? $_GET['id'] : '';

                        // Query to fetch data based on the provided houseId
                        $query = "SELECT full_name, dob, time, houseId, nid, phone, email, pat, vehicles, rent_duration, image, start_date FROM rentalinfo WHERE houseId = '$houseId'";
                        $result = mysqli_query($con, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                        ?>
                            <img src="rentalphoto/<?php echo $row['image']; ?>" class="imageSizing" alt="Profile image"> <!--should be set the image file name------1.5hr lost-->

                        <?php
                        } else {
                            echo "No data found.";
                        }

                        mysqli_close($con);
                        ?>
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'urbancityrevolution');
                            if (!$con) {
                                echo "Connection failed: " . mysqli_connect_error();
                            }

                            $houseId = isset($_GET['id']) ? $_GET['id'] : '';

                            // Query to fetch data based on the provided houseId
                            $query = "SELECT full_name, dob, time, houseId, nid, phone, email, pat, vehicles, rent_duration, image, start_date FROM rentalinfo WHERE houseId = '$houseId'";
                            $result = mysqli_query($con, $query);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                            ?>
                                <h5 class="card-title"><b>Name: <?php echo $row['full_name']; ?></b></h5>
                                <p>House ID: <b><?php echo htmlspecialchars($row['houseId']); ?></b></p>
                                <p>Date of Birth: <b><?php echo $row['dob']; ?></b></p>
                                <p>Nid: <b><?php echo $row['nid']; ?></b></p>
                                <p>Time: <b><?php echo $row['time']; ?></b></p>
                                <p>Phone: <b><?php echo $row['phone']; ?></b></p>
                                <p>Email: <b><?php echo $row['email']; ?></b></p>
                                <p>Pat: <b><?php echo $row['pat']; ?></b></p>
                                <p>Vehicles: <b><?php echo $row['vehicles']; ?></b></p>
                                <p>Rent Duration: <b><?php echo $row['rent_duration']; ?></b></p>
                                <p>Rent Start: <b><?php echo $row['start_date']; ?></b></p>

                            <?php
                            } else {
                                echo "No data found.";
                            }

                            mysqli_close($con);
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--rhrhrhrhrhrhrhrhrhrhrhrhrhrhrhrrhrhrhrhrhrhrhrhrhrhrhrhrhrhrhrhrhr-->

    </div>
    <div class="d-flex justify-content-center">

        <!-- Delete Button -->
        <button type="button" class="btn btn-primary mb-1" onclick="confirmDelete('<?php echo $houseId; ?>')">Delete</button>

        <script>
            function confirmDelete(houseId) {
                var confirmDelete = confirm("Are you sure you want to delete this record?");
                if (confirmDelete) {
                    // If the user confirms, execute the deletion
                    window.location.href = "deleteProfilinfo.php?id=" + houseId; // Redirect to delete.php with the houseId
                } else {
                    // If the user cancels, do nothing or show a message
                    alert("Deletion cancelled");
                }
            }
        </script>
    </div>
    </form>
    </div>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/script.js"></script>
    <script src="rent.php"></script>
</body>

</html>