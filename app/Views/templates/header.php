<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <title><?= $title; ?></title>
    <script defer src="<?= base_url(); ?>/js/cdn.min.js"></script>
    <script defer src="<?= base_url(); ?>/js/script.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <img src="<?= base_url(); ?>/asset/logo.svg" alt="">
        </div>
        <nav class="nav-desktop">
            <ul>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url(); ?>browse">Browse</a></li>
                <li><a href="<?= base_url(); ?>about">About</a></li>
                <li><a href="<?= base_url(); ?>contact">Contact Us</a></li>
                <li><a href="<?= base_url(); ?>login">Login</a></li>
            </ul>
        </nav>

        <nav class="nav-mobile" x-cloak x-data="{open : false}">
            <ul x-show="open" @click.outside="open = false">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url(); ?>browse">Browse</a></li>
                <li><a href="<?= base_url(); ?>about">About</a></li>
                <li><a href="<?= base_url(); ?>contact">Contact Us</a></li>
                <li><a href="<?= base_url(); ?>login">Login</a></li>
            </ul>
            <div class="menu">
                <img :class="open && 'hidden'" @click="open = ! open" src="<?= base_url(); ?>/asset/menu.png" alt="menu">
                <img :class="!open && 'hidden'" @click="open = ! open" src="<?= base_url(); ?>/asset/close.png" alt="menu">
            </div>
        </nav>
    </header>

    <div class="content">