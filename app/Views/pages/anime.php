<section class="Animes container">
    <div class="anime-info">
        <div class="head">
            <h1><?= $anime['title']; ?></h1>
            <div class="rating">
                <img class="w-6" src="<?= base_url(); ?>/asset/star.png" alt="star">
                <h3><?= $anime['rating']; ?></h3>
                <small>Mal</small>
            </div>
        </div>
        <img src="<?= $anime['img']; ?>" alt="anime name here">
        <p class="description">
            <?= $anime['description']; ?>
        </p>
    </div>

    <h2 class="section-title"><?= $anime['title']; ?> Episode
        <img src="<?= base_url(); ?>/asset/star-2.png" alt="headling">
    </h2>


    <div class="episode-wrapper">
        <div class="episode">
            <a href="#">Episode 1</a>
        </div>
        <div class="episode">
            <a href="#">Episode 1</a>
        </div>
        <div class="episode">
            <a href="#">Episode 1</a>
        </div>
    </div>

</section>