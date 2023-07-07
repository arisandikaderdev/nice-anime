<section class="container form-medium">
    <form action="<?= base_url(); ?>contact" method="post">

        <h3 class="form-title">
            Contact us
        </h3>

        <label for="email">
            <input type="email" placeholder="your email" name="email" id="email">
        </label>

        <label for="message">
            <textarea name="message" id="message">your message
            </textarea>
        </label>

        <input type="submit" value="send">

        <div class="sosmed-wrapper">
            <a href="#">
                <img src="<?= base_url(); ?>asset/twitter.svg" alt="twitter">
            </a>
            <a href="#">
                <img src="<?= base_url(); ?>asset/facebook.svg" alt="facebook">
            </a>
            <a href="#">
                <img src="<?= base_url(); ?>asset/instagram.svg" alt="instagram">
            </a>
            <a href="#">
                <img src="<?= base_url(); ?>asset/github.svg" alt="github">
            </a>
            <a href="#">
                <img src="<?= base_url(); ?>asset/linkedin.svg" alt="linkedin">
            </a>
        </div>
    </form>

</section>