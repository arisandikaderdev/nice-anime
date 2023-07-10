<section class="Animes container">
    <div class="anime-info">
        <div class="head">
            <h1><?= "{$animes['title']} episode {$animes['episode']}"; ?> </h1>
            <div class="rating">
                <img class="w-6" src="<?= base_url(); ?>/asset/star.png" alt="star">
                <h3><?= $animes['rating']; ?></h3>
                <small>Mal</small>
            </div>
        </div>
        <img src="<?= $animes['img']; ?>" alt="anime name here">
        <p class="description">
            <?= $animes['description']; ?>
        </p>
    </div>

    <h2 class="section-title"><?= "{$animes['title']} episode {$animes['episode']}"; ?> Dawnload
        <img src="<?= base_url(); ?>/asset/star-2.png" alt="headling">
    </h2>


    <div class="dawnload-wrapper">
        <div class="dawnload-item">
            <h3 class="resolution">1080p</h3>
            <div class="dawnload-btn">
                <?php
                $r1080 = json_decode($animes['link_1080'], true);

                foreach ($r1080 as $res1080) :
                ?>
                    <a href="<?= $res1080['res']; ?>">
                        <button>
                            <?= $res1080['name']; ?>
                        </button>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>
        <div class="dawnload-item">
            <h3 class="resolution">720p</h3>
            <div class="dawnload-btn">
                <?php
                $r720 = json_decode($animes['link_720'], true);

                foreach ($r720 as $res720) :
                ?>
                    <a href="<?= $res720['res']; ?>">
                        <button>
                            <?= $res720['name']; ?>
                        </button>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <div class="dawnload-item">
        <h3 class="resolution">480p</h3>
        <div class="dawnload-btn">
            <?php
            $r480 = json_decode($animes['link_480'], true);

            foreach ($r480 as $res480) :
            ?>
                <a href="<?= $res480['res']; ?>">
                    <button>
                        <?= $res480['name']; ?>
                    </button>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    </div>
    </div>

</section>