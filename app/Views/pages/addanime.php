<section class="container">
    <?= validation_list_errors(); ?>
    <h2 class="section-title">
        Add New Anime
    </h2>
    <form class="container" action="<?= base_url(); ?>add" enctype="multipart/form-data" method="post">
        <label for="title">
            <input type="text" id="title" name="title" placeholder="title">
        </label>
        <label for="deskripsi">
            <textarea name="deskripsi" id="deskripsi">deskripsi</textarea>
        </label>
        <label for="rating">
            <input type="number" name="rating" placeholder="rating">
        </label>
        <label for="imgSelect">
            <input type="file" name="img" id="imgSelect" hidden>
            <img src="" id="img">

        </label>

        <input value="add Anime" class="button" type="submit">
    </form>

</section>