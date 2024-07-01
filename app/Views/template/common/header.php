<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Judul Website Anda</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
        }

        header {
            color: #000;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1280px;
            margin: 0 auto;
            /* Center the header */
        }

        header .logo {
            padding: 10px 20px;
        }

        nav#navbar__container {
            display: flex;
            justify-content: flex-end;
            padding: 0;
        }

        nav#navbar__container a {
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        nav#navbar__container a:hover,
        nav#navbar__container a.active {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div id="header__container">
        <header>
            <div class="logo">
                <a href="/">
                    <img src="assets/images/bento-logo.png" width="220px" height="60px">
                </a>
                <!-- Sesuaikan path dan style logo -->
            </div>
            <nav id="navbar__container">
                <a href="<?= base_url('/'); ?>" class="active">Home</a>
                <a href="<?= base_url('page/menu'); ?>">Menu</a>
                <a href="<?= base_url('/about'); ?>">About</a>
                <a href="<?= base_url('page/contact'); ?>">Contact</a>
                <a href="<?= base_url('User/login'); ?>">Login</a>
            </nav>
        </header>
        <section id="wrapper">
            <section id="main">