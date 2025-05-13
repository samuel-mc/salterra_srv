<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <!-- Section Hero -->
    <section class="mw--1440 home__hero">
        <div class="w-100">
            <img src="<?php echo __ROOT__; ?>/public/img/romantic/hero.jpeg" class="w-100" alt="Fondo"/>
        </div>
        <div class="hero__bg">
            <div class="hero__bg--content">
                <h2 class="text--white playfair playfair--800 text--2xl m-0 p-0">Romantic
                    packages</h2>
            </div>
        </div>
    </section>

    <!-- Galery -->
    <section class="mw--1440 py-4 px-4 px-md-5 romantic__galery">
        <div class="grid--3cols romantic__galery--images">
            <img src="<?php echo __ROOT__; ?>/public/img/romantic/g1.png">
            <img src="<?php echo __ROOT__; ?>/public/img/romantic/g2.png">
            <img src="<?php echo __ROOT__; ?>/public/img/romantic/g3.png">
            <img src="<?php echo __ROOT__; ?>/public/img/romantic/g4.png">
            <img src="<?php echo __ROOT__; ?>/public/img/romantic/g5.png">
            <img src="<?php echo __ROOT__; ?>/public/img/romantic/g6.png">
        </div>
        <div class="romantic__galery--bg">
        </div>
    </section>

    <!-- Section 'Salterra Glamping' -->
    <section class="mw--1440 py-4 px-4 px-md-5">
        <div class="row m-0 p-0 py-4 ">
            <div class="col-md-5 p-0 m-0 pb-4 p-lg-3 align-content-center">
                <h3 class="playfair playfair--400 text--xl">Salterra Glamping</h3>
                <p class="poppins poppins--400 text--grey text--sm">
                    Disfruta del aire libre en nuestros alojamientos exclusivos en tiendas de campaña tipo safari.
                    Experimenta cielos nocturnos estrellados, paisajes extraordinarios, y cenas románticas con tu
                    pareja.
                    Nuestras tiendas de campaña de lona están inspiradas en los safaris y cuentan con baños privados y
                    camas
                    confortables.
                </p>
                <div class="mt-5">
                    <a href="<?php echo __ROOT__; ?>/book-now" class="btn btn--grey py-3 px-4">
                        <span class="me-2">Book now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-7 p-0 m-0">
                <img src="<?php echo __ROOT__; ?>/public/img/home/whoWeAre.png" alt="Who we are Image" class="w-100">
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>
