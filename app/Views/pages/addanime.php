<?php if (session()->getFlashdata('message')) : ?>

    <template id="succes-alert">
        <swal-title color="#00bdd6">
            succes add new anime Episode
        </swal-title>
        <swal-icon type="success" color="#00bdd6"></swal-icon>
    </template>

<?php endif; ?>

<section class="container">
    <?php if (validation_list_errors()) : ?>
        <template id="error_message">
            <swall-title>
                <?= validation_list_errors(); ?>
            </swall-title>
        </template>
    <?php endif; ?>
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

<script>
    document.body.onload = () => {
        Swal.fire({
            template: '#succes-alert' || ''
        })

        Swal.fire({
            template: "#error-message" || ''
        })
    }
</script>