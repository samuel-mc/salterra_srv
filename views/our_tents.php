<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <!-- Section Hero -->
    <section class="mw--1440 home__hero">
        <div class="w-100">
            <img src="<?php echo __ROOT__; ?>/public/img/tents/hero.jpeg" class="w-100" alt="Fondo"/>
        </div>
        <div class="hero__bg">
            <div class="hero__bg--content">
                <h2 class="text--white playfair playfair--800 text--2xl m-0 p-0">Discover our tents</h2>
            </div>
        </div>
    </section>

    <section class="mw--1440 py-5 px-1">
        <header class="my-2 px-3 px-md-5">
            <ul class="list-unstyled list--tents">
                <li>
                    <button class="btn btn-transparent btn--fit px-5 a--black" onclick="toggleTent('Single')">
                        Single tent
                    </button>
                </li>
                <li>
                    <button class="btn btn-transparent btn--fit px-5 a--black" onclick="toggleTent('Two')">
                        Two beds
                    </button>
                </li>
                <li>
                    <button class="btn btn-transparent btn--fit px-5 a--black" onclick="toggleTent('Jacuzzi')">
                        Tents w/jacuzzi
                    </button>
                </li>
                <li>
                    <button class="btn btn-transparent btn--fit px-5 a--black" onclick="toggleTent('Decor')">
                        Tent decor
                    </button>
                </li>
            </ul>
        </header>
        <main>
            <div id="containerSingle">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example" id="splideTents">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/tents/c1.png" alt="Our tents Image 1"
                                     class="w-100 img--19-6">
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/tents/c2.png" alt="Our tents Image 2"
                                     class="w-100 img--19-6">
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/tents/c3.png" alt="Our tents Image 3"
                                     class="w-100 img--19-6">
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/tents/c4.png" alt="Our tents Image 4"
                                     class="w-100 img--19-6">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="splide" id="thumbnialTents">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/tents/c1.png" alt="Our tents Image 1"
                                     class="w-100 img--19-6">
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/tents/c2.png" alt="Our tents Image 2"
                                     class="w-100 img--19-6">
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/tents/c3.png" alt="Our tents Image 3"
                                     class="w-100 img--19-6">
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/tents/c4.png" alt="Our tents Image 4"
                                     class="w-100 img--19-6">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="containerTwo">
                <p>
                    Two beds tent
                </p>
            </div>
            <div id="containerJacuzzi">
                <p>
                    Tents with jacuzzi
                </p>
            </div>
            <div id="containerDecor">
                <p>
                    Tent decor
                </p>
            </div>
        </main>
    </section>

    <section class="bg--light-grey mw--1440 py-5 px-4 px-md-5 rounded-3 m-3 m-lg-5">
        <div class="grid--4cols">
            <ul class="list-unstyled">
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Baño privado
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Plancha/tabla de planchar
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Servicio de habitaciones
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Cama Queen
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Vistas
                </li>
            </ul>
            <ul class="list-unstyled">
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Ducha independiente
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Ropa de cama y toallas
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Internet Inalámbrico
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Acceso a Internet de banda ancha
                </li>
            </ul>
            <ul class="list-unstyled">
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Secador de pelo
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Ropa de cama incluida
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Comedor Marco
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Películas gratis
                </li>
            </ul>
            <ul class="list-unstyled">
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Servicio de habitaciones diario
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Zona de comedor exterior
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Calefacción
                </li>
                <li class="poppins poppins--400 text--black text--sm my-3">
                    Salón social
                </li>
            </ul>

        </div>

    </section>

    <!-- Section 'Romantic packages' -->
    <section class="mw--1440 py-5">
        <header class="text-center my-4">
            <h2 class="text--black playfair playfair--300 text--xl m-0 p-0">Romantic packages</h2>
        </header>
        <div class="grid--4cols gap-0">
            <?php $romanticPackages = [
                [
                    'name' => 'Paquete compromiso',
                    'link' => 'commitment',
                    'img' => 'rp1.png'
                ],
                [
                    'name' => 'Paquete aniversario',
                    'link' => 'anniversary',
                    'img' => 'rp2.png'
                ],
                [
                    'name' => 'Teppee date',
                    'link' => 'teppee_date',
                    'img' => 'rp3.png'
                ],
                [
                    'name' => 'Cena romántica',
                    'link' => 'romantic_dinner',
                    'img' => 'rp4.png'
                ]
            ];
            ?>
            <?php foreach ($romanticPackages as $package): ?>
                <div class="romantic__item">
                    <div>
                        <img src="<?php echo __ROOT__; ?>/public/img/tents/<?php echo $package['img']; ?>" class="w-100"
                             alt="Fondo"/>
                    </div>
                    <div class="romantic__item--content">
                        <h3 class="text--lg playfair playfair--300 text--white m-0 p-0"><?php echo $package['name']; ?></h3>
<!--                        <a href="--><?php //echo __ROOT__; ?><!--/romantic_packages/--><?php //echo $package['link']; ?><!--"-->
<!--                           class="a--white poppins poppins--300 text--sm">Ver más</a>-->
                    </div>
                </div>
            <?php endforeach; ?></div>

    </section>

    <!-- Section 'Salterra Glamping' -->
    <div class="row m-0 p-0 py-4">
        <div class="col-md-5 p-0 m-0 pb-4 p-lg-3 align-content-center">
            <h3 class="playfair playfair--400 text--xl">Salterra Glamping</h3>
            <p class="poppins poppins--400 text--grey text--sm">
                Disfruta del aire libre en nuestros alojamientos exclusivos en tiendas de campaña tipo safari.
                Experimenta cielos nocturnos estrellados, paisajes extraordinarios, y cenas románticas con tu pareja.
                Nuestras tiendas de campaña de lona están inspiradas en los safaris y cuentan con baños privados y camas
                confortables.
            </p>
            <div class="mt-5">
                <a href="https://direct-book.com/properties/salterraglampingdirect?locale=en&referrer=canvas&items[0][adults]=2&items[0][children]=0&items[0][infants]=0&currency=MXN&checkInDate=2025-04-15&checkOutDate=2025-04-16&trackPage=yes" target="_blank" class="btn btn--grey py-3 px-4">
                    <span class="me-2">Book now</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-md-7 p-0 m-0">
            <img src="<?php echo __ROOT__; ?>/public/img/home/whoWeAre.png" alt="Who we are Image" class="w-100">
        </div>
    </div>
</main>

<script src="<?php echo __ROOT__; ?>/public/lib/splide-4.1.3/dist/js/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var splide = new Splide('#splideTents', {
            type: 'fade',
            heightRatio: 0.5,
            pagination: false,
            arrows: false,
            cover: true,
        }).mount();

        var thumbnails = new Splide('#thumbnialTents', {
            gap         : 10,
            rewind      : true,
            pagination  : false,
            isNavigation: true,
            perPage     : 4,
            breakpoints : {
                600: {
                    perPage: 2,
                },
            },
        }).mount();

        splide.sync(thumbnails);
    });
</script>
<script>
    function toggleTent(tentType) {
        const containers = ['containerSingle', 'containerTwo', 'containerJacuzzi', 'containerDecor'];
        containers.forEach(container => {
            document.getElementById(container).style.display = (container === `container${tentType}`) ? 'block' : 'none';
        });
    }

    // Initialize with only the first container visible
    toggleTent('Single');
</script>


<?php include 'partials/footer.php'; ?>
