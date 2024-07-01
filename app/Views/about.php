<?= $this->include('template/common/header'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .container {
            display: flex;
            flex-direction: row;
            max-width: 1280px;
            width: 100%;
            margin: 0 auto;
        }
        .left-side, .right-side {
            flex: 1;
            padding: 20px;
        }
        .left-side {
            background-color: #fff;
        }
        .right-side {
            background-color: #ffffff;
        }
        .img_content { 
            width: 700px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="img_about">
                <img class="img_content"src="assets/images/resto.jpeg">
            </div>
        </div>
        <div class="right-side">
            
            <div>
                <h3>Tentang Kami</h3>
                Resto ini didirikan pada tahun 2022 oleh ibu nuryetni <br>
                dengan bertujuan agar semua kalangan masyarakat dapat menikmati <br>
                makanan ala jepang dengan harga yang murah meriah.

                <br>
                <h4> Apa perbedaan restoran ini dengan yang lain ?</h4>
                Harganya yang terjangkau, agar masyarakat kalangan menegah kebawah dapat meniknatinya <br>
                Banyak promo yang disediakan, terutama di shopeefood dan gofood <br>
                Dapat Memesan dalam jumlah besar <br>
                Berkonsep take away only <br>
            </div>

            <div>
                <h3>Alamat</h3>
                Alamat Restoran ini Perum Telaga Pasiraya JL.Lohan 2 B2/No.29 kec.Serang baru, kab.Bekasi, Jawa Barat
            </div>
        </div>
    </div>
</body>
</html>

<?= $this->include('template/common/footer'); ?>
