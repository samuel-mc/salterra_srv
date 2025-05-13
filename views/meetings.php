<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <!-- Section Hero -->
    <section class="mw--1440 home__hero">
        <div class="w-100">
            <img src="<?php echo __ROOT__; ?>/public/img/meetings/hero.png" class="w-100" alt="Fondo"/>
        </div>
        <div class="hero__bg">
            <div class="hero__bg--content">
                <h2 class="text--white playfair playfair--800 text--2xl m-0 p-0">Meeting and events <br/> program</h2>
            </div>
        </div>
    </section>

    <!-- Our membership program -->
    <section class="mw--1440 py-4 px-4 px-md-5 my-4">
        <div class="grid--2cols gap--24">
            <div class="grid--2cols">
                <img src="<?php echo __ROOT__; ?>/public/img/meetings/item1.png" class="w-100" alt="Membership item 1"/>
                <img src="<?php echo __ROOT__; ?>/public/img/meetings/item2.png" class="w-100" alt="Membership item 2"/>
                <img src="<?php echo __ROOT__; ?>/public/img/meetings/item3.png" class="w-100" alt="Membership item 3"/>
                <img src="<?php echo __ROOT__; ?>/public/img/meetings/item4.png" class="w-100" alt="Membership item 4"/>
            </div>
            <div class="align-content-center p-4">
                <h3 class="playfair playfair--400 text--xl">Meeting and events</h3>
                <p class="poppins poppins--400 text--grey text--md">
                    Salterra Glamping is a company based on experiences that make you connect with your partner, friends
                    or loved ones. When booking, in the "extras" section you will find some of our experiences that you
                    can book from the moment you make your reservation. Contact us in case of any questions or doubts.
                </p>
            </div>
        </div>
    </section>

    <?php $formTitle = 'Do you want to be part of our program?'; ?>
    <?php include 'components/form.php'; ?>

</main>

<?php include 'partials/footer.php'; ?>
