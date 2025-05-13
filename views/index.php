<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
    <main>
        <!-- Section Hero -->
        <section class="mw--1440 home__hero">
            <video class="w-100" autoplay muted loop>
                <source src="<?php echo __ROOT__; ?>/public/video/homeHero.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero__bg">
                <div class="hero__bg--content">
                    <h2 class="text--white playfair playfair--800 text--2xl m-0 p-0">Salterra Glamping</h2>
                    <p class="text--white inter--400 text--md">
                        Crafting memorable experiences for couples
                    </p>
                </div>
            </div>
        </section>
        <!-- Section Our Experiences -->
        <section class="mw--1440 py-4 px-4 px-md-5 grid--2cols gap--24">
            <div>
                <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/exp1.png"
                                     alt="Our experiences Image 1" class="w-100">
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/exp2.png"
                                     alt="Our experiences Image 2" class="w-100">
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/exp3.png"
                                     alt="Our experiences Image 3" class="w-100">
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="align-content-center">
                <h3 class="playfair playfair--400 text--xl">Our experiences</h3>
                <p class="poppins poppins--400 text--grey text--md">
                    Salterra Glamping is a company based on experiences that make you connect with your partner, friends
                    or loved ones. When booking, in the "extras" section you will find some of our experiences that you
                    can book from the moment you make your reservation. Contact us in case of any questions or doubts.
                </p>
                <div class="mt-5">
                    <a href="<?php echo __ROOT__; ?>/experiences" class="btn btn--grey py-3 px-4">
                        <span class="me-2">Learn more</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Our Tents -->
        <section class="mw--1440 tents__container">
            <div>
                <div class="splide" role="group" aria-label="Splide Basic HTML Example" id="splideTents">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/trents1.png" alt="Our tents Image 1"
                                     class="w-100 img--19-6">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tents__bg">
                <div class="py-3 text-center">
                    <h3 class="text--lg text-uppercase text--grey poppins poppins--400">Our tents</h3>
                </div>
                <div class="px-4 px-md-5">
                    <ul class="list-unstyled d-flex justify-content-between p-0 border-bottom border-white">
                        <li class="px-2 px-lg-5">
                            <button type="button" class="btn btn-transparent btn--fit text-white a--white" data-bs-toggle="modal" data-bs-target="#modalSingle">Single tent</button>
                        </li>
                        <li class="px-2 px-lg-5">
                            <button type="button" class="btn btn-transparent btn--fit text-white a--white" data-bs-toggle="modal" data-bs-target="#modalTwo">Two beds</button>
                        </li>
                        <li class="px-2 px-lg-5">
                            <button type="button" class="btn btn-transparent btn--fit text-white a--white" data-bs-toggle="modal" data-bs-target="#modaDecor">Tent decor</button>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <!-- Modal Single tent -->
            <div class="modal fade" id="modalSingle" tabindex="-1" aria-labelledby="singleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="singleModalLabel">Single tent</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Two beds -->
            <div class="modal fade" id="modalTwo" tabindex="-1" aria-labelledby="twoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="twoModalLabel">Two beds</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Tent decor -->
            <div class="modal fade" id="modaDecor" tabindex="-1" aria-labelledby="decorModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="decorModalLabel">Tent decor</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <!-- Section Meeting and Events -->
        <section class="mw--1440 py-4 px-4 px-md-5 grid--2cols gap--24">
            <div class="align-content-center">
                <h3 class="playfair playfair--400 text--xl">Meeting and events</h3>
                <p class="poppins poppins--400 text--grey text--md">
                    Salterra Glamping is a company based on experiences that make you connect with your partner, friends
                    or loved ones. When booking, in the "extras" section you will find some of our experiences that you
                    can book from the moment you make your reservation. Contact us in case of any questions or doubts.
                </p>
            </div>
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/home/meeting.png" alt="meeting and events" class="w-100">
            </div>
        </section>

        <!-- Section Our packages -->
        <section class="mw--1440 py-4 px-4 px-md-5">
            <header class="py-3">
                <h3 class="playfair playfair--400 text--xl">Our packages</h3>
            </header>
            <div class="splide" role="group" aria-label="Splide Basic HTML Example" id="splidePackages">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/packages1.png" alt="Our packages Image 1"
                                 class="w-100 img--19-6">
                            <div class="py-2">
                                <h3 class="playfair playfair--300 text--lg">Paquete compromiso</h3>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/packages2.png" alt="Our packages Image 2"
                                 class="w-100 img--19-6">
                            <div class="py-2">
                                <h3 class="playfair playfair--300 text--lg">Paquete aniversario</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section Our membership program -->
        <section class="mw--1440 py-4 px-4 px-md-5">
            <div class="row m-0 p-0">
                <div class="col-lg-7 m-0 p-0 grid--2cols gap-2 align-content-center">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/memb1.png" alt="Our membership program Image"
                         class="w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/memb2.png" alt="Our membership program Image"
                         class="w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/memb3.png" alt="Our membership program Image"
                         class="w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/memb4.png" alt="Our membership program Image"
                         class="w-100">
                </div>
                <div class="col-lg-5 pt-4 p-md-4 align-content-center">
                    <h3 class="playfair playfair--400 text--xl">Our membership program</h3>
                    <p class="text--md text--grey poppins poppins--400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales elit mauris, in elementum
                        quam semper vel. Vestibulum blandit faucibus mi id feugiat. Donec quis ipsum eget massa iaculis
                        placerat. Nulla risus ipsum, tincidunt mattis ante vulputate, gravida venenatis ante. Orci
                        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor,
                        magna non mollis semper, diam purus scelerisque nulla, posuere efficitur mauris lorem in odio.
                        Suspendisse vitae fermentum urna.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section who we are -->
        <section class="mw--1440 py-4 px-4 px-md-5">
            <div class="row m-0 p-0">
                <div class="col-md-5 p-0 m-0 pb-4 p-lg-3 align-content-center">
                    <h3 class="playfair playfair--400 text--xl">Who we are</h3>
                    <p class="poppins poppins--400 text--grey text--sm">
                        A stay at Salterra Glamping is a one-of-a-kind experience, providing an engaging way to connect
                        with nature without sacrificing the comforts of a hotel. Salterra Glamping is more than
                        safari-inspired canvas tents and luxurious king-size beds. It is as much about the experiences
                        it provides, as it is about the memories it creates, whether you go with your partner, friends
                        or loved ones. Experience everything that Salterra Glamping has to offer in terms of cooking,
                        contact with nature and adventures.
                    </p>
                    <div class="mt-5">
                        <a href="https://direct-book.com/properties/salterraglampingdirect?locale=en&referrer=canvas&items[0][adults]=2&items[0][children]=0&items[0][infants]=0&currency=MXN&checkInDate=2025-04-15&checkOutDate=2025-04-16&trackPage=yes"
                           target="_blank" class="btn btn--grey py-3 px-4">
                            <span class="me-2">Book now</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 p-0 m-0">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/whoWeAre.png" alt="Who we are Image"
                         class="w-100">
                </div>
            </div>
        </section>

        <section class="mw--1440 py-4 px-4 px-md-5 grid--2cols">
            <div class="text-center align-content-center">
                <h3 class="playfair playfair--300 text--2xl">Frequent ask questions</h3>
                <p class="poppins poppins--400 text--grey text--sm">
                    Te invitamos a desconectar de la rutina y sumergirte en la tranquilidad del aire libre. Nuestras
                    exclusivas tiendas de campaña, ubicadas en un entorno natural incomparable, te ofrecen una
                    experiencia única de campamento con todas las comodidades que necesitas para relajarte y disfrutar
                    al máximo.
                </p>
            </div>
            <div>
                <?php
                $questions = [
                    [
                        'id' => 1,
                        'question' => 'Question 1?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales elit mauris, in elementum quam semper vel. Vestibulum blandit faucibus mi id feugiat. Donec quis ipsum eget massa iaculis placerat. Nulla risus ipsum, tincidunt mattis ante vulputate, gravida venenatis ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor, magna non mollis semper, diam purus scelerisque nulla, posuere efficitur mauris lorem in odio. Suspendisse vitae fermentum urna.'
                    ],
                    [
                        'id' => 2,
                        'question' => 'Question 2?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales elit mauris, in elementum quam semper vel. Vestibulum blandit faucibus mi id feugiat. Donec quis ipsum eget massa iaculis placerat. Nulla risus ipsum, tincidunt mattis ante vulputate, gravida venenatis ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor, magna non mollis semper, diam purus scelerisque nulla, posuere efficitur mauris lorem in odio. Suspendisse vitae fermentum urna.'
                    ],
                    [
                        'id' => 3,
                        'question' => 'Question 3?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales elit mauris, in elementum quam semper vel. Vestibulum blandit faucibus mi id feugiat. Donec quis ipsum eget massa iaculis placerat. Nulla risus ipsum, tincidunt mattis ante vulputate, gravida venenatis ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor, magna non mollis semper, diam purus scelerisque nulla, posuere efficitur mauris lorem in odio. Suspendisse vitae fermentum urna.'
                    ],
                    [
                        'id' => 4,
                        'question' => 'Question 4?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales elit mauris, in elementum quam semper vel. Vestibulum blandit faucibus mi id feugiat. Donec quis ipsum eget massa iaculis placerat. Nulla risus ipsum, tincidunt mattis ante vulputate, gravida venenatis ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor, magna non mollis semper, diam purus scelerisque nulla, posuere efficitur mauris lorem in odio. Suspendisse vitae fermentum urna.'
                    ],
                    [
                        'id' => 5,
                        'question' => 'Question 5?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales elit mauris, in elementum quam semper vel. Vestibulum blandit faucibus mi id feugiat. Donec quis ipsum eget massa iaculis placerat. Nulla risus ipsum, tincidunt mattis ante vulputate, gravida venenatis ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor, magna non mollis semper, diam purus scelerisque nulla, posuere efficitur mauris lorem in odio. Suspendisse vitae fermentum urna.'
                    ],
                    [
                        'id' => 6,
                        'question' => 'Question 7?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales elit mauris, in elementum quam semper vel. Vestibulum blandit faucibus mi id feugiat. Donec quis ipsum eget massa iaculis placerat. Nulla risus ipsum, tincidunt mattis ante vulputate, gravida venenatis ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor, magna non mollis semper, diam purus scelerisque nulla, posuere efficitur mauris lorem in odio. Suspendisse vitae fermentum urna.'
                    ]
                ]
                ?>
                <div class="accordion" id="accordionExample">

                    <?php foreach ($questions as $question): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo $question['id']; ?>" aria-expanded="false"
                                        aria-controls="collapse<?php echo $question['id']; ?>">
                                    <?php echo $question['question']; ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $question['id']; ?>" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo $question['answer']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php $formTitle = 'Sign up for information & offers'; ?>
        <?php include 'components/form.php'; ?>

        <section class="mw--1440">
            <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.1955839374864!2d-99.9595685246152!3d20.539176980990394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d377291e9bdab5%3A0x3e4436ebc237c91e!2sSalterra%20Glamping!5e0!3m2!1ses-419!2smx!4v1744125065301!5m2!1ses-419!2smx"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>

    <script src="<?php echo __ROOT__; ?>/public/lib/splide-4.1.3/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var splide = new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                perMove: 1,
                autoplay: true,
                pagination: false,
                arrows: false,
            }).mount();
        });

        var splidePackages = new Splide('#splidePackages', {
            type: 'loop',
            padding: {'right': '28rem'},
            focus: 'left',
            gap: '1rem',
            breakpoints: {
                '640': {
                    perPage: 1,
                    padding: {'right': '0rem'},
                },
                '768': {
                    perPage: 2,
                    padding: {'right': '0rem'},
                },
                '1024': {
                    perPage: 3,
                    padding: {'right': '0rem'},
                },
            },
        }).mount();

        const splideTents = new Splide('#splideTents', {
            type: 'loop',
            gap: '1rem',
            perPage: 1,
            perMove: 1,
        }).mount();
    </script>

<?php include 'partials/footer.php'; ?>