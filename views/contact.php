<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

    <main class="py-5">

        <div class="py-4"></div>

        <?php $formTitle = 'Let us know what you think!'; ?>
        <?php include 'components/form.php'; ?>

        <section class="w--480 mx-auto py-4">
            <h3 class="text--xl text-center mb-4 playfair playfair--300">Want to reach out directly?</h3>
            <p class="text--sm text-center mb-4 inter inter--400 text--grey">Lorem ipsum dolor sit amet consectetur
                adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.</p>
            <div class="grid--2cols gap--24">
                <div>
                    <a class="d-flex" href="#">
                        <i class="fa-regular fa-envelope fa-3x"></i>
                        <span class="text--grey ms-3">
                            <span class="text--sm inter inter--400">Email</span>
                            <span class="text--xs inter inter--600 text-break">contact@salterra.com</span>
                        </span>
                    </a>
                </div>
                <div>
                    <a class="d-flex" href="">
                        <i class="fa-solid fa-phone fa-2x"></i>
                        <span class="text--grey ms-3">
                            <span class="text--sm inter inter--400">Phone</span> <br>
                            <span class="text--xs inter inter--600 text-break">(414) 687 - 5892</span>
                        </span>
                    </a>
                </div>

            </div>
        </section>
    </main>

<?php include 'partials/footer.php'; ?>