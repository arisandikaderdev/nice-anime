<section class="container form-medium">

    <!-- get error  -->
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="error">
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <form action="<?= base_url(); ?>singup" method="post" enctype="multipart/form-data">
        <h3 class="form-title">Create Your Account</h3>

        <label for="username">
            <input type="text" placeholder="username" name="username" id="username" value="<?= old('username'); ?>">
        </label>
        <label for="email">
            <input type="email" placeholder="email" name="email" id="email" value="<?= old('email'); ?>">
        </label>
        <label for="password">
            <input type="password" placeholder="password" name="password" id="password" value="<?= old('password'); ?>">
        </label>
        <label for="passconf">
            <input type="password" placeholder="password confirm" name="passconf" id="passconf" value="<?= old('passconf'); ?>">
        </label>

        <label for="imgSelect">
            <input accept=".png, .jpg, .jpeg" type="file" name="profile_pic" id="imgSelect" hidden>
            <img src="" id="img">

        </label>

        <input type="submit" value="Create">
    </form>




</section>