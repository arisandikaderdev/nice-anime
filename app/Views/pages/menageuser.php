<div class="container">
    <?= view_cell('AdminHeadCell') ?>
    <div class="user-list">
        <?php foreach ($users as $user) : ?>
            <div class="card">
                <img src="<?= $user['profile_pic']; ?>" alt="img <?= $user['username']; ?>">
                <div class="card-detail">

                    <p><?= $user['username']; ?></p>
                    <p><?= $user['email']; ?></p>
                    <small> create at <?= $user['created_at']; ?></small>

                    <div class="action">
                        <a href="" class="button-secondary">delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>