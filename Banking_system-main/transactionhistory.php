<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Of Spark Foundation</title>

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <!-- header section starts  -->

    <header>

        <div class="container">

            <a href="index.php" class="logo"><span></span>Bank Of <span>Sparks Foundation</span></a>

            <nav class="nav">
                <ul>
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#review">review</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </nav>

            <div class="fas fa-bars"></div>

        </div>

    </header>

    <!-- header section ends  -->
    <!-- Table -->
    <div class="container">
            <!-- <h2 class="text-center pt-4" style="color : black;">Transaction History</h2> -->     
        <br>
        <div class="table-responsive-sm my-5">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        <table class="table table-hover table-striped">
            <thead style="color : white;" class="table-dark">
                <tr>
                    <th class="text-center">S.No.</th>
                    <th class="text-center">Sender</th>
                    <th class="text-center">Receiver</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Date & Time</th>
                </tr>
            </thead>
            <tbody>
            <?php

    include 'config.php';

    $sql ="select * from transaction";

    $query =mysqli_query($conn, $sql);

    while($rows = mysqli_fetch_assoc($query))
    {
    ?>
    <tr style="color : black;">
                <td class="py-2"><?php echo $rows['tno']; ?></td>
                <td class="py-2"><?php echo $rows['sname']; ?></td>
                <td class="py-2"><?php echo $rows['rname']; ?></td>
                <td class="py-2"><?php echo $rows['balance']; ?> </td>
                <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                    
            <?php
                }

            ?>
            </tbody>
        </table>

        </div>
    </div>
<!-- End Table -->
    <!-- footer section starts  -->

    <section class="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-4" data-aos="fade-right">
                    <a href="#" class="logo"><span></span>Bank Of <span>Sparks Foundation</span></a>
                    <p>The right relationship is everything. We are great when together. Adding a Better Value. Building
                        a Better life with banking.</p>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-up">
                    <h3>links</h3>
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">facility</a>
                    <a href="#">review</a>
                    <a href="#">contact</a>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-left">
                    <h3>share</h3>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">instagram</a>
                    <a href="#">github</a>
                </div>

            </div>

        </div>



    </section>

    <!-- footer section ends -->


















    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- magnific popup js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- aos js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- custom js link  -->
    <script src="main.js"></script>


    <script>

        AOS.init({
            duration: 1000,
            delay: 400
        });

    </script>

</body>

</html>
