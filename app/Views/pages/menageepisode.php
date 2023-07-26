<section class="container">
    <?= view_cell('AdminHeadCell'); ?>

    <div class="episode-list">
        <?php foreach ($episodes as $episode) : ?>
            <div class="card">
                <img src="<?= $episode['img'] ?>" alt="">
                <div class="card-detail">
                    <h1 class="title"><?= $episode['title']; ?></h1>
                    <small> episode <?= $episode['episode']; ?></small>
                    <div class="flex space-between">
                        <p class="rating">
                            <img class="w-2" src="<?= base_url(); ?>/asset/star.png">

                            <?= $episode['rating']; ?>
                        </p>

                        <small>
                            Added <?= $episode['created_at']; ?>
                        </small>
                    </div>

                    <div class="card-resolution">
                        <div class="resolution-items">
                            <p>1080p</p>
                            <?php
                            $link1080 = json_decode($episode['link_1080'], true);

                            foreach ($link1080 as $link) :
                            ?>
                                <a href="<?= $link['res']; ?>"><?= $link['name']; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <div class="resolution-items">
                            <p>720p</p>
                            <?php
                            $link720 = json_decode($episode['link_720'], true);

                            foreach ($link720 as $link) :
                            ?>
                                <a href="<?= $link['res']; ?>"><?= $link['name']; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <div class="resolution-items">
                            <p>480p</p>
                            <?php
                            $link480 = json_decode($episode['link_480'], true);

                            foreach ($link480 as $link) :
                            ?>
                                <a href="<?= $link['res']; ?>"><?= $link['name']; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <div class="resolution-items">
                            <p>360p</p>
                            <?php
                            $link360 = json_decode($episode['link_360'], true);

                            foreach ($link360 as $link) :
                            ?>
                                <a href="<?= $link['res']; ?>"><?= $link['name']; ?></a>
                            <?php endforeach; ?>
                        </div>


                    </div>

                    <div class="action">
                        <a class="button" href="">edit</a>
                        <a class="button-secondary" href="">delete</a>
                    </div>
                </div>

            </div>

        <?php endforeach; ?>

    </div>
    </div>
</section>