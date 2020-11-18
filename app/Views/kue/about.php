<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="content">
                <article class="card">
                    <h2>About</h2>
                    <img src="/img/jajanan.jpg" class="featured-image" alt="jajanan">
                    <p>Jajanan pasar merupakan penganan yang bisa dibeli dari pasar tradisional. Jenisnya pun
                        beragam, mulai dari yang rasanya manis hingga gurih. Namun, di zaman yang serba modern ini,
                        jajanan pasar tradisional tersebut agak sulit dicari. </p>

                    <p>Dahulu jajanan tersebut dapat kita nikmati dengan mudah, kini mulai tergantikan dengan
                        kuliner kekinian yang semakin menjamur. Tapi jajanan pasar tradisional ini masih tetap
                        eksis kok, meskipun zaman telah berubah.</p>
                </article>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>