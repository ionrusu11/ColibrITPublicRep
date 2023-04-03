<?= $this->extend('layouts/users') ;?>
<?= $this->section('content') ;?>
<!---->
<div class="poosterImg"></div>
<div class="headerTop">
    <div class="logo1"></div>
    <!--
    <div class="langSelect">
        <a href="" class="langOption selectedLang">Ro</a>
        <a href="" class="langOption">En</a>
    </div>
    -->
</div>
<div class="poosterContainer">
    <div></div>
    <h1 class="bannerSlogan">Orice anunț ajută autoritățile locale să facă orașul mai frumos</h1>
    <a href="<?= base_url('/form')?>" class="mainButton textMedium">Trimite un anunț</a>
</div>
<!---->

<div class="sliderSection">
    <p class="textBig">Autorități locale implicate:</p>
    <din id="authorityListContainer" class="authorityListContainer">
        <div id="authorityList" class="authorityList">
            <div class="authorityItem">
                <img class="authorityImg" src="<?= base_url('assets/users/img/police.jpg')?>" alt="">
                <div class="authorityText" >
                    <p class="textMedium">Poliția Iași</p>
                    <p class="textSmall">La serviciul oamenilor</p>
                </div>
            </div>
            <div class="authorityItem">
                <img class="authorityImg" src="<?= base_url('assets/users/img/police2.webp')?>" alt="">
                <div class="authorityText" >
                    <p class="textMedium">Poliția București</p>
                    <p class="textSmall">Mereu gata</p>
                </div>
            </div>
            <div class="authorityItem">
                <img class="authorityImg" src="<?= base_url('assets/users/img/primarie.jpg')?>" alt="">
                <div class="authorityText" >
                    <p class="textMedium">Primaria Iasi</p>
                    <p class="textSmall"></p>
                </div>
            </div>
        </div>
    </din>
</div>
<!---->
<div class="postsSection">
    <p class="textBig">Din ultimele cazuri rezolvate:</p>
    <div class="postsContainer">
        <div class="postItem">
            <img src="<?= base_url('assets/users/img/post1.jpg')?>" alt="" class="postImg">
            <div class="postText">
                <p class="textMedium">Gunoiște ilegală în zona industrială</p>
                <p class="textSmall">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis quas voluptates odio vitae vero veniam optio quam nam, officia quasi facilis laboriosam neque libero placeat. Expedita assumenda temporibus debitis.</p>
            </div>
        </div>
        <div class="postItem">
            <img src="<?= base_url('assets/users/img/post2.jpg')?>" alt="" class="postImg">
            <div class="postText">
                <p class="textMedium">Chei de automobil ce și-au regăsit stăpânul</p>
                <p class="textSmall">Lorem obcaecati distinctio, quae nulla voluptates. Consequatur, inventore hic similique ipsum atque illum nesciunt sit porro eos quae expedita nam.</p>
            </div>
        </div>
    </div>
</div>
<!---->
<div class="statisticsContaner">

</div>
<!---->
<div class="footerContainer">

    <div class="contact">
        <p>Contact:</p>
        <p>(206) 342-8631</p>
        <p>autority.mail@gmail.com</p>
    </div>

    <div class="logo2"></div>
</div>
<!--content-->
<?= $this->endSection() ;?>
