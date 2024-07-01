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
    max-width: 1280px; /* Menetapkan lebar maksimum */
    margin: auto; /* Tambahkan ini untuk memusatkan kontainer */
}

.menu-item {
    flex-basis: 30%; /* Atur lebar setiap item menu */
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    margin: 10px;
    overflow: hidden;
}

.menu-item img {
    width: 100%;
    height: auto;
    transition: transform 0.5s ease;
}

.menu-item:hover img {
    transform: scale(1.1);
}

.menu-item h3 {
    text-align: center;
    padding: 10px;
}
</style>
</head>
<body>

<div class="menu-container">
    <div class="menu-item">
        <img src="/assets/images/bento.png" alt="Menu 1">
        <h3>Menu 1</h3>
        <h3>Rp. 10.000</h3>
    </div>
    <div class="menu-item">
        <img src="/assets/images/bento.png" alt="Menu 2">
        <h3>Menu 2</h3>
        <h3>Rp. 10.000</h3>

    </div>
    <div class="menu-item">
        <img src="/assets/images/bento.png" alt="Menu 3">
        <h3>Menu 3</h3>
        <h3>Rp. 10.000</h3>

    </div>
    <!-- Tambahkan lebih banyak item menu sesuai kebutuhan -->
</div>

</body>
</html>