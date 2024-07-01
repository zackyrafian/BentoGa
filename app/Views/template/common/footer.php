<style>
.google-map {
    margin: 20px;
}

.social-media {
    flex-basis: 40%;
    margin: 10px;
    overflow: hidden;
}

.social-media-container {
    max-width: 600px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    /* margin: auto; */
}

.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    max-width: 1280px;
    margin: auto;
}

footer {
    text-align: center;
}

.img__contact__1 {
    width: 30px;
    height: 30px;
}

.contact-container {
    text-align: center;
}

</style>

<div>
    <Footer>
        <div class="footer-container">
            <div class="social-media-container">
                <!-- Shopeefood link -->
                <div class="social-media">
                    <a href="https://shopee.co.id/">
                        <img src="assets/images/shoppefood.png" width="50%" height="auto">
                    </a>
                </div>
                <!-- Gofood link -->
                <div class="social-media">
                    <a href="https://gofood.co.id/jakarta/restaurant/bentoga-lohan-2-blk-b2-no-29-17330-dafcc44e-e1c9-4600-acdd-027c3cdf37ac?page=12">
                        <img src="assets/images/Gofood.jpeg" width="50%" height="auto">
                    </a>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1376457812653!2d107.10278617355674!3d-6.37622616236785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6999f6c6c000bb%3A0xc564957a013e1f0d!2sBentoGa!5e0!3m2!1sid!2sid!4v1718941616061!5m2!1sid!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <p>© 2022 BentoGa. All rights reserved.</p>
        <div class="contact-container">
            <div class="img-contact">
                <a>
                    <img class="img__contact__1" src="assets/images/social-media/whatsapp.png">
                </a>
            </div>
        </div>
    </Footer>
</div>
