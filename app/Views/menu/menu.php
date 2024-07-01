<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menu dengan Gambar</title>
    <style>
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            max-width: 1280px;
            margin: auto;
        }

        .menu-item {
            flex-basis: 30%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            overflow: hidden;
        }

        .menu-item img {
            width : 350px;
            height : 350px;
            align-items: center;
            justify-content: center;
            transition: transform 0.5s ease;
        }

        .menu-item:hover img {
            transform: scale(1.1);
        }

        .menu-item h3 {
            text-align: center;
            padding: 10px;
        }

        .menu__img {
            width : 350px;
            height : 350px;
            align-items: center;
            justify-content: center;
        }

        h2 {
            text-align: center;
            font-size: 40px;
            color: black;
        }

        .menu-description_container {
            display:flex;
            justify-content: space-between;
        }

        .menu__desription {
            color : red;
        }

        .details-btn { 
            padding:15px;
            margin:5px;
        }

        .menu__price { 
            color : red;
        }
        .order-btn{
            padding:15px;
            margin:5px;
            background-color: red;
            color:white;
            text-align: center;
            align-self: center;
            text-decoration: none;
            border-radius: 10%;
            font-weight: bold;
        }
                
    </style>
</head>

<body>
    <h2>Our Menu</h2>
    <div class="menu-container">
        <?php if(isset($menu) && !empty($menu)):?> 
            <?php foreach ($menu as $row): ?>
                <div class="menu-item">
                    <img class="menu__img" src="<?= $row['gambar']; ?>" alt="<?= $row['nama_menu']; ?>">
                    <h3><?= $row['nama_menu']; ?><?= $row['slug']; ?></h3>
                    <h3>Rp. <?= number_format($row['harga'], 0, ',', '.'); ?></h3>
                </div>
            <?php endforeach;?>
        <?php else: ?>
            <div class="menu-item">
                <img class="menu__img" src="assets/images/Chicken Teriyaki Bento.png">
                    <h3 class="menu__title">Chicken Teriyaki Bento</h3>
                    <h3 class="menu__price">Rp. 25.000</h3>
                    <!-- Container desription -->
                     <section class="menu-description_container">
                        <a class="details-btn">
                            Chicken Teriyaki adalah menu dengan ayam yang lumuri oleh saus teriyaki
                        </a>
                        <a class="order-btn" href="/">
                            Order
                        </a>
                    </section>            
            </div>
            <div class="menu-item">
                <img class="menu__img" src="assets/images/Chicken Teriyaki Bento.png">
                <h3 class="menu__title">Chicken Teriyaki Bento</h3>
                <h3 class="menu__desription">Rp. 25.000</h3>
                 <!-- Container desription -->
                 <section class="menu-description_container">
                        <a class="details-btn">
                            Chicken Teriyaki adalah menu dengan ayam yang lumuri oleh saus teriyaki
                        </a>
                        <a class="order-btn" href="/">
                            Order
                        </a>
                    </section>    
            </div>
            <div class="menu-item">
                <img class="menu__img" src="assets/images/Chicken Teriyaki Bento.png">
                <h3 class="menu__title">Chicken Teriyaki Bento</h3>
                <h3 class="menu__desription">Rp. 25.000</h3>
                 <!-- Container desription -->
                 <section class="menu-description_container">
                        <a class="details-btn">
                            Chicken Teriyaki adalah menu dengan ayam yang lumuri oleh saus teriyaki
                        </a>
                        <a class="order-btn" href="/">
                            Order
                        </a>
                    </section>    
            </div>
            <div class="menu-item">
                <img class="menu__img" src="assets/images/Chicken Teriyaki Bento.png">
                <h3 class="menu__title">Chicken Teriyaki Bento</h3>
                <h3 class="menu__desription">Rp. 25.000</h3>
                 <!-- Container desription -->
                 <section class="menu-description_container">
                        <a class="details-btn">
                            Chicken Teriyaki adalah menu dengan ayam yang lumuri oleh saus teriyaki
                        </a>
                        <a class="order-btn" href="/">
                            Order
                        </a>
                    </section>    
            </div>
           
        <?php endif; ?>
    </div>
</body>

</html>
