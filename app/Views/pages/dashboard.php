<section class="container">
    <?= view_cell('AdminHeadCell'); ?>

    <div class="anime-list">
        <?php foreach ($animes as $anime) : ?>
            <div class="card">
                <img src="<?= $anime['img'] ?>" alt="">
                <div class="card-detail">
                    <h1 class="title"><?= $anime['title']; ?></h1>
                    <div class="flex space-between">
                        <p class="rating">
                            <img class="w-2" src="<?= base_url(); ?>/asset/star.png">

                            <?= $anime['rating']; ?>
                        </p>

                        <small>
                            Added <?= $anime['created_at']; ?>
                        </small>


                    </div>
                    <small class="description"><?= $anime['description']; ?></small>

                    <div class="action">
                        <a class="button" href="">edit</a>
                        <a class="button-secondary" href="">delete</a>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    </div>
    </div>

</section>