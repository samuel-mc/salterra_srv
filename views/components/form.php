<section class="mw--1440 py-4 px-4 px-md-5">
    <?php if ($formTitle != null): ?>
        <h2 class="text--2xl text-center mb-4 playfair playfair--300"><?= $formTitle ?></h2>
    <?php endif; ?>
    <div class="mw--480 mx-auto">
        <form>
            <div class="grid--2cols gap--24">
                <div>
                    <label for="firstName" class="poppins poppins--300 text--xs text-uppercase">First name*:</label>
                    <input type="text" id="firstName" name="firstName" class="form__input">
                </div>
                <div>
                    <label for="lastName" class="poppins poppins--300 text--xs text-uppercase">Last name*:</label>
                    <input type="text" id="lastName" name="lastName" class="form__input">
                </div>
            </div>
            <div>
                <label for="email" class="poppins poppins--300 text--xs text-uppercase">Email address*:</label>
                <input type="email" id="email" name="email" class="form__input">
            </div>
            <div class="grid--2cols gap--24">
                <div>
                    <label for="phone" class="poppins poppins--300 text--xs text-uppercase">Phone number:</label>
                    <input type="tel" id="phone" name="phone" class="form__input">
                </div>
                <div>
                    <label for="company" class="poppins poppins--300 text--xs text-uppercase">ECT. </label>
                    <input type="text" id="company" name="company" class="form__input">
                </div>
            </div>
            <div class="my-4">
                <input type="submit" value="SEND" class="btn btn--grey rounded-0 w-100">
            </div>
        </form>
    </div>
</section>