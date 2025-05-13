<?php $title = isset($title) ? $title : 'Tanko';
?>

<!-- Desktop Navbar -->
<header class="justify-content-between align-items-center px-4 py-2 mw--1440 d-none d-lg-flex" id="desktopNavbar">
    <div>
        <a href="<?php echo __ROOT__; ?>/">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="Logo" class="logo" width="170.48" height="110.58">
        </a>
    </div>
    <div>
        <nav class="d-flex">
            <ul class="d-flex list-unstyled align-items-center m-0">
                <li><a class="a--black mx-3 inter inter--400" href="<?php echo __ROOT__; ?>/">Home</a></li>
                <li><a class="a--black mx-3 inter inter--400" href="<?php echo __ROOT__; ?>/about">About</a></li>
                <li><a class="a--black mx-3 inter inter--400" href="<?php echo __ROOT__; ?>/our-tents">Our Tents</a></li>
<!--                <li><a class="a--black mx-3 inter inter--400" href="--><?php //echo __ROOT__; ?><!--/promotions">Promotions</a></li>-->
                <li><a class="a--black mx-3 inter inter--400" href="<?php echo __ROOT__; ?>/meetings-and-events">Meetings & Events</a></li>
                <li><a class="a--black mx-3 inter inter--400" href="<?php echo __ROOT__; ?>/contact">Contact</a></li>
                <li>
                    <a href="https://direct-book.com/properties/salterraglampingdirect?locale=en&referrer=canvas&items[0][adults]=2&items[0][children]=0&items[0][infants]=0&currency=MXN&checkInDate=2025-04-15&checkOutDate=2025-04-16&trackPage=yes" target="_blank" class="btn btn-dark text-white mw--max-content py-2 px-4">
                        <span class="me-2">Book Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </li>
                <li>
                    <a href="https://wa.me/+524421693408" target="_blank" class="a--black mx-3">
                        <i class="fa-brands fa-whatsapp fa-2x"></i>
                    </a>
                </li>
            </ul>

        </nav>
    </div>
</header>

<!-- Mobile Navbar -->
<header class="d-lg-none">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo __ROOT__; ?>">
                <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="Logo" class="logo" width="85.24" height="55.29">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-2" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link inter inter--400 <?php echo ($title == 'Home') ? 'active' : ''; ?>" aria-current="page" href="<?php echo __ROOT__; ?>/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inter inter--400 <?php echo ($title == 'About') ? 'active' : ''; ?>" href="<?php echo __ROOT__; ?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inter inter--400 <?php echo ($title == 'Our Tents') ? 'active' : ''; ?>" href="<?php echo __ROOT__; ?>/our-tents">Our Tents</a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link inter inter--400 --><?php //echo ($title == 'Promotions') ? 'active' : ''; ?><!--" href="--><?php //echo __ROOT__; ?><!--/promotions">Promotions</a>-->
<!--                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link inter inter--400 <?php echo ($title == 'Meetings & Events') ? 'active' : ''; ?>" href="<?php echo __ROOT__; ?>/meetings-and-events">Meetings & Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inter inter--400 <?php echo ($title == 'Contact') ? 'active' : ''; ?>" href="<?php echo __ROOT__; ?>/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://wa.me/+524421693408" target="_blank" class="nav-link">
                            <i class="fa-brands fa-whatsapp fa-2x"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://direct-book.com/properties/salterraglampingdirect?locale=en&referrer=canvas&items[0][adults]=2&items[0][children]=0&items[0][infants]=0&currency=MXN&checkInDate=2025-04-15&checkOutDate=2025-04-16&trackPage=yes" target="_blank" class="btn btn-dark text-white mw--max-content py-2 px-4">
                            <span class="me-2">Book Now</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>