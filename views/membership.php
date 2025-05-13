<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <!-- Section Hero -->
    <section class="mw--1440 home__hero">
        <div class="w-100">
            <img src="<?php echo __ROOT__; ?>/public/img/membership/home.png" class="w-100" alt="Fondo"/>
        </div>
        <div class="hero__bg">
            <div class="hero__bg--content">
                <h2 class="text--white playfair playfair--800 text--2xl m-0 p-0">Membership <br/> program</h2>
            </div>
        </div>
    </section>

    <!-- Our membership program -->
    <section class="mw--1440 py-4 px-4 px-md-5 my-4">
        <div class="grid--2cols gap--24">
            <div class="align-content-center p-4">
                <h3 class="playfair playfair--400 text--xl">Our membership program</h3>
                <p class="poppins poppins--400 text--grey text--md">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales elit mauris, in elementum quam semper vel. Vestibulum blandit faucibus mi id feugiat. Donec quis ipsum eget massa iaculis placerat. Nulla risus ipsum, tincidunt mattis ante vulputate, gravida venenatis ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor, magna non mollis semper, diam purus scelerisque nulla, posuere efficitur mauris lorem in odio. Suspendisse vitae fermentum urna.
                </p>
            </div>
            <div class="grid--2cols">
                <img src="<?php echo __ROOT__; ?>/public/img/membership/item1.png" class="w-100" alt="Membership item 1"/>
                <img src="<?php echo __ROOT__; ?>/public/img/membership/item2.png" class="w-100" alt="Membership item 2"/>
                <img src="<?php echo __ROOT__; ?>/public/img/membership/item3.png" class="w-100" alt="Membership item 3"/>
                <img src="<?php echo __ROOT__; ?>/public/img/membership/item4.png" class="w-100" alt="Membership item 4"/>
            </div>
        </div>
    </section>

    <?php $formTitle = 'Do you want to be part of our program?'; ?>
    <?php include 'components/form.php'; ?>

</main>

<?php include 'partials/footer.php'; ?>
