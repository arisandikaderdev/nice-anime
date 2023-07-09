<section class="hero-img" style="--bg-img : url(<?= base_url(); ?>/asset/banner.jpg" )>
    <div class="hero-body">
        <h1>Overlord</h1>
        <div class="rating">
            <img src="<?= base_url(); ?>/asset/star.png" alt="start">
            <h4>7.5</h4>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum natus qui odio quae libero doloribus accusantium, iste nostrum, maxime atque incidunt voluptatum corrupti! Mollitia, eum molestias laboriosam tempore deserunt cupiditate autem. Quo sint impedit eaque voluptates nihil, aliquam nam, repellendus nesciunt expedita at reiciendis, dolor voluptatem tenetur blanditiis ea! Corrupti!</p>
    </div>
    <div class="overlay"></div>
</section>

<section class="latest-relese container">
    <h2 class="section-title">
        Latest Update
        <img src="<?= base_url(); ?>/asset/star-2.png" alt="headling">
    </h2>

    <div class="card-wrapper">
        <a href="#">
            <div class="card">
                <img class="card-img" src="<?= base_url(); ?>/asset/card.png" alt="card">
                <div class="card-body">
                    <div class="rating">
                        <img class="w-2" src="<?= base_url(); ?>/asset/star.png" alt="start">
                        <h4 class="card-rating">7.5</h4>
                    </div>
                    <p class="card-title">
                        <strong>
                            Overlord Season 3
                        </strong>
                    </p>
                    <p class="card-episode">Episode 2</p>
                </div>
                <div class="overlay">

                </div>
            </div>

        </a>
    </div>
</section>

<section class=" container">
    <h2 class="section-title">
        Anime
        <img src="<?= base_url(); ?>/asset/star-2.png" alt="headling">
    </h2>
    <div class="card-wrapper">
        <?php foreach ($animes as $anime) : ?>
            <a href="<?= "post/" . $anime['slug']; ?>">
                <div class="card">
                    <img class="card-img" src="<?= $anime['img']; ?>" alt="<?= $anime['title']; ?>">
                    <div class="card-body">
                        <div class="rating">
                            <img class="w-2" src="<?= base_url(); ?>/asset/star.png" alt="start">
                            <h4 class="card-rating"><?= $anime['rating']; ?></h4>
                        </div>
                        <p class="card-title">
                            <strong>
                                <?= $anime['title']; ?>
                            </strong>
                        </p>

                    </div>
                    <div class="overlay">

                    </div>
                </div>

            </a>
        <?php endforeach; ?>
    </div>
</section>