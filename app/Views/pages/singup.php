<section class="container form-medium">
    <form action="<?= base_url(); ?>singup" enctype="multipart/form-data">
        <h3 class="form-title">Create Your Account</h3>

        <label for="username">
            <input type="text" placeholder="username" name="username" id="username">
        </label>
        <label for="email">
            <input type="email" placeholder="email" name="email" id="email">
        </label>
        <label for="password">
            <input type="password" placeholder="password" name="password" id="password">
        </label>
        <label for="passconf">
            <input type="password" placeholder="passconf" name="passconf" id="passconf">
        </label>

        <label for="imgSelect">
            <input accept=".png, .jpg, .jpeg" type="file" name="img" id="imgSelect" hidden>
            <img src="" id="img">

        </label>

        <input type="submit" value="Create">
    </form>




</section>