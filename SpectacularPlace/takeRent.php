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
        </style>
        <div class="addHouseinto">
            <h1 class="mb-4 addHouse">Fill This Form</h1>
            <a href="ctzRent.php"><i class="fa fa-xmark fa-2x"></i></a>
        </div>


        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <!--First part-->
            <div class="row">
                <div class="col-3">
                    <div class="mb-3 a1">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="mb-3">
                        <label for="Time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="Time" name="Time" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="mb-3">
                        <label for="houseId" class="form-label">House ID</label>
                        <input type="text" class="form-control" id="houseId" name="houseId" required value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>" readonly>
                    </div>
                </div>
            </div>

            <!--Second part-->
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="nid" class="form-label">DLN/NID</label>
                        <input type="text" class="form-control" id="nid" name="nid" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="date" class="form-label">Phone</label>
                        <input type="Phone" class="form-control" id="date" name="date" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="time" class="form-label">Email</label>
                        <input type="email" class="form-control" id="time" name="time" required>
                    </div>
                </div>
            </div>

            <!--Third part-->
            <div class="row">
                <div class="d-flex flex-row">
                    <div>
                        <p>Pats? </p>
                    </div>
                    <div class="form-check form-check-inline ps-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="petInput" name="pets" placeholder="If Yes, Describe">
                        </div>
                    </div>
                </div>
                <script>
                    // Get the radio buttons and vehicles input------------------[{(3)}]-----------------need/not----vehicals radio button;
                    const radioYesPet = document.getElementById('inlineRadio1');
                    const PetInput = document.getElementById('petInput');

                    // Add change event listener to the radio buttons
                    radioYesPet.addEventListener('change', function() {
                        if (this.checked) {
                            PetInput.required = true; // Make input required if 'Yes' is selected
                        }
                    });

                    // Get the 'No' radio button
                    const radioNoPet = document.getElementById('inlineRadio2');

                    // Add change event listener to the 'No' radio button
                    radioNoPet.addEventListener('change', function() {
                        if (this.checked) {
                            PetInput.required = false; // Remove required attribute if 'No' is selected
                            PetInput.value = ''; // Clear input value
                        }
                    });
                </script>
            </div>

            <!--4th part-->
            <div class="row">
                <div class="d-flex flex-row">
                    <div>
                        <p>Vehicals? </p>
                    </div>
                    <div class="form-check form-check-inline ps-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio3" value="option1">
                        <label class="form-check-label" for="inlineRadio3">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="option2">
                        <label class="form-check-label" for="inlineRadio4">No</label>
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="vehicalsInput" name="vehicals" placeholder="If Yes, Describe">
                        </div>
                    </div>
                </div>
                <script>
                    // Get the radio buttons and vehicles input--------------------[{(4)}]------------vehical yes/no
                    const radioYesVehicles = document.getElementById('inlineRadio3');
                    const vehiclesInput = document.getElementById('vehicalsInput');

                    // Add change event listener to the radio buttons
                    radioYesVehicles.addEventListener('change', function() {
                        if (this.checked) {
                            vehiclesInput.required = true; // Make input required if 'Yes' is selected
                        }
                    });

                    // Get the 'No' radio button
                    const radioNoVehicles = document.getElementById('inlineRadio4');

                    // Add change event listener to the 'No' radio button
                    radioNoVehicles.addEventListener('change', function() {
                        if (this.checked) {
                            vehiclesInput.required = false; // Remove required attribute if 'No' is selected
                            vehiclesInput.value = ''; // Clear input value
                        }
                    });
                </script>
            </div>

            <script>
                // jQuery code to show/hide the text input based on radio button selection
                $(document).ready(function() {
                    $('input[name="inlineRadioOptions1"]').change(function() {
                        if ($(this).val() === 'option1') {
                            $('#petsInput').removeClass('d-none'); // Show input if "Yes" is selected
                        } else {
                            $('#petsInput').addClass('d-none'); // Hide input if "No" is selected
                        }
                    });
                });
            </script>


            <!--5th part   rentDuration-->
            <div class="row">
                <div class="col-6">
                    <div class="mb-6">
                        <label for="rentDuration" class="form-label">Rent Duration</label>
                        <input type="date" class="form-control" id="rentDuration" name="rentDuration" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-6">
                        <label for="startDate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="startDate" name="startDate" required>
                    </div>
                </div>
            </div>

            <!--6th part-->
            <div class="col-12">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    <div id="imageHelp" class="form-text">Please select an image file (jpg, jpeg, png, gif).</div>
                </div>
            </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mb-1">Submit</button>
    </div>
    </form>
    </div>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/script.js"></script>
    <script src="rent.php"></script>
</body>

</html>