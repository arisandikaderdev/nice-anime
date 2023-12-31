<div class="admin-head">
    <h1 class="section-title">
        Admin Dashboard
    </h1>
    <div class="admin-menu">

        <div x-cloak x-data="{open : false}" class="admin-menu-items">
            <img @click="open = true" src="<?= base_url(); ?>/asset/add.png" alt="add">
            <div class="dialog" x-show="open" @click.outside="open = false">
                <a href="<?= base_url(); ?>/add">
                    Add Anime
                    <img class="w-2" src="<?= base_url(); ?>/asset/plus.svg" alt="plus">
                </a>
                <a href="<?= base_url(); ?>addepisode">
                    Add Episode
                    <img class="w-2" src="<?= base_url(); ?>/asset/plus.svg" alt="plus">
                </a>
            </div>
        </div>
        <div class="admin-menu-items">
            <img src="<?= base_url(); ?>asset/bell.png" alt="notification">


        </div>
        <div x-cloak x-data="{open : false}" class="admin-menu-items">
            <img @click="open = true" src="<?= base_url(); ?>/asset/bullet menu.png" alt="admin menu">

            <div class="dialog" x-show="open" @click.outside="open = false">
                <a href="<?= base_url(); ?>dashboard">
                    Menage Animes
                    <img class="w-2" src="<?= base_url(); ?>/asset/film.svg" alt="plus">
                </a>
                <a href="<?= base_url(); ?>dashboard/menageepisode">
                    Menage Episodes
                    <img class="w-2" src="<?= base_url(); ?>/asset/stack.svg" alt="plus">
                </a>
                <a href="<?= base_url(); ?>dashboard/menageuser">
                    Menage Users
                    <img class="w-2" src="<?= base_url(); ?>/asset/person.svg" alt="plus">
                </a>
            </div>
        </div>
    </div>
    <input type="search" name="search" placeholder="search anime">
</div>