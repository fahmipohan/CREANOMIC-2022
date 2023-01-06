<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php include("./partials/head.php"); ?>
<link rel="stylesheet" href="./assets/css/fest.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body onload="myFunction()">
    <!-- NAVBAR -->
    <?php include("./partials/navbar.php"); ?>

    <main>
        <div class="judul">
            <h1 class="text-center text-white">CREAFEST</h1>
            <h3 class="text-center text-white">The Final Festival of Creanomic 2022</h3>
        </div>

        <!-- ISI -->

        <!-- <section class="fest mb-4 mt-5">
            <div class="text-center mt-3">
                <div class="col-lg-7 gs mx-auto">
                    <img src="./assets/img/daun_jatuh.jpg" style="width: 700px" class="img-fluid" alt="" />
                </div>
            </div>
        </section> -->

        <section id="about">
            <div class="about">
                <div class="container">
                    <div class="row d-flex justify-content-center align-content-center">
                        <div class="col-11 col-xs-12 col-sm-12 col-md-12 col-lg-7 about-content d-flex">
                            <div class="glass-about">
                                <img src="./assets/img/daun_jatuh.png" style="width: 10000px" class="img-fluid"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- FOOTER -->
        <?php include("./partials/footer.php"); ?>

        <!-- SCRIPT -->
        <?php include("./partials/script.php"); ?>
    </main>
</body>

</html>