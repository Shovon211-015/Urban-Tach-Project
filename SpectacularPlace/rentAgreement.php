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
    <link rel="stylesheet" href="rentAgreement.css">

    <!-- Template Stylesheet -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--This Link for just a simple button effect-->
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit/css/mdb.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="headImage">
            <h1>Urban Rent Argument</h1>
            <a href="#">
                <h5>urbanTech@gmail.com</h5>
            </a>
        </div>

        <div class="container border">
            <div class="agreementBody">
                <h2>Lease Rental Agreement Letter</h2> <br>
            </div>

            <div class="mainContent">
                <p>December 10, 2024</p> <br>

                <p>Faisal Mahmud</p>
                <p>3472 Payne Street</p>
                <p>Houston, TX77062</p> <br>

                <p>Dear Faisal Mahmud</p>

                <p>I, Francis Sellers, am writing to acknowledge and confirm the Lease Rental Agreement Letter for
                    the property located at 425 Green Acres Road, Greenville, NC 27834.
                    This letter outlines the basic terms and conditions of the rental
                    agreement which includes the following:</p>

                <ol type="1">
                    <li><b>Rent Period:</b>
                        The rental period will commence on December 11, 2050, and
                        will continue until December 15, 2051.
                    </li>

                    <li><b>Rent Amount:</b>
                        The monthly rent will be $10,000 and should be paid within
                        the first five days of every month.
                    </li>

                    <li><b>Property Maintenance:</b>
                        As the tenant, you are expected to maintain the property
                        and report any damages as soon as possible.
                    </li>

                    <li><b>Termination of Lease:</b>
                        The lease can be terminated by giving one month's notice
                        or as outlined in local rental laws.
                    </li>
                </ol>

                <p>
                    This Lease Rental Agreement Letter shall be binding upon and ensure for the benefit
                    of the parties, their successors, and personal executives. Any breach of the terms
                    and conditions described in this agreement may lead to lawful consequences.
                </p>

                <p>Sincerely,</p>
                <P>Urban Team</P>
            </div>
        </div>

        <div class="agreeBtn">
            <button type="button" id="agreeButton" class="btn btn-success" data-mdb-ripple-init>I Agree</button>

            <script>
                // handle button click and redirect
                document.getElementById('agreeButton').addEventListener('click', function() {
                    window.location.href = 'ctzRent.php'; // Redirect to-------------------------------------------------------------- ctzRent.php
                });
            </script>


            <script>
                // Initialization for ES Users
                import {
                    Ripple,
                    initMDB
                } from "mdb-ui-kit";

                initMDB({
                    Ripple
                });
            </script>
        </div>
    </div>


    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/script.js"></script>
    <script src="rent.php"></script>

    <!--This Link for just a simple button effect-->
    <script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit/js/mdb.min.js"></script>
</body>

</html>