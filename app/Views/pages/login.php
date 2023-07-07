<section class="container form-medium">
    <form action="<?= base_url(); ?>login" method="post">
        <h3 class="form-title">Login to Your Account</h3>

        <label for="username">
            <input type="text" placeholder="username" name="username" id="username">
        </label>

        <label for="password">
            <input type="password" placeholder="password" name="password">
        </label>

        <input type="checkbox" name="remember" id="remember">
        <span>Remember me</span>

        <input type="submit" value="Login">
        <p class="text-center">
            don't have account ? <a href="<?= base_url(); ?>singup"><strong>create first</strong></a>
        </p>

    </form>
</section>