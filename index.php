<?php include 'header.php'; ?>

<main id="home">

<section id="hero-main">
    <div id="main-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
    <!--<div class="carousel-indicators">
        <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>-->

    <div class="carousel-inner">

        <!-- Item -->
        <div class="carousel-item active" data-bs-interval="10000">
            <div class="hero-background-0"></div>
            <div class="background-filter-0"></div>
            <div class="background-filter-0a"></div>
            <div class="background-filter-0b"></div>

            <div class="container reveal animate__animated animate__fadeIn">
                <div class="hero-subtitle-container">
                    <span class="hero-subtitle-1 text-uppercase text-center d-block">Bottom Title</span>
                </div>

                <div class="hero-title-container">
                    <span class="hero-title text-uppercase text-center d-block">Hero Title 1</span> 
                </div>

                    <a class="text-uppercase" href="https://www.facebook.com">Hear More</a>
                    <a class="text-uppercase" href="/contact.php">Contact Us</a>
            </div>

        </div>

        <!-- Item -->
        <div class="carousel-item" data-bs-interval="10000">
            <div class="hero-background-1"></div>
            <div class="background-filter-1"></div>

            <div class="container reveal animate__animated animate__fadeIn">
                <div class="hero-subtitle-container">
                    <span class="hero-subtitle-1 text-uppercase text-center d-block">Bottom Title</span>
                </div>

                <div class="hero-title-container">
                    <span class="hero-title text-uppercase text-center d-block">Hero Title 1</span> 
                </div>
                    <a class="text-uppercase" href="https://www.facebook.com">Hear More</a>
                    <a class="text-uppercase" href="/contact.php">Contact Us</a>
            </div>
        </div>

        <!-- Item -->
        <div class="carousel-item" data-bs-interval="10000">
            <div class="hero-background-2"></div>
            <div class="background-filter-2"></div>

            <div class="container reveal animate__animated animate__fadeIn">
                <div class="hero-subtitle-container">
                    <span class="hero-subtitle-1 text-uppercase text-center d-block">Bottom Title</span>
                </div>

                <div class="hero-title-container">
                    <span class="hero-title text-uppercase text-center d-block">Hero Title 1</span> 
                </div>
                    <a class="text-uppercase" href="https://www.facebook.com">Hear More</a>
                    <a class="text-uppercase" href="/contact">Contact Us</a>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#main-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#main-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>

<section id="welcome">
    <div class="container">
        <div class="row">

            
        </div>
    </div>
</section>

<section id="events">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="subtitle text-uppercase">Check Out</span>
                <h1 class="title text-uppercase">Our Next Event</h1>
                <img class="hr" src="/assets/img/hr.jpg">
            </div>
        </div> <?php

        include 'event.php'; 
        include 'event.php'; 
        include 'event.php'; 
        include 'event.php'; 
        include 'event.php'; ?>

    </div>        
</section>

<section id="music">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="subtitle text-uppercase">Diversity Playlist</span>
                <h2 class="title text-uppercase">Recent Mixes & Tracks</h2>
                <img class="hr" src="/assets/img/hr.jpg">

                <div class="soundcloud-container">

                    <!-- Skoots -->
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1365751969&color=%23d10459&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

                    <!-- EK -->
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/330176059&color=%23d10459&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

                    <!-- Xotica -->
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1249710595&color=%23d10459&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

                    <!-- Meltdown -->
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1283882266&color=%23d10459&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery">
    <div class="container gallery-container">
         <div class="row">
            <div class="col-12 text-center">
                <span class="subtitle text-uppercase text-center">Gallery</span>
                <h2 class="title text-uppercase text-center">Latest Photos</h2>
                <img class="hr" src="/assets/img/hr.jpg">
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/shirt-1.png"><img class="gallery-img" src="/assets/img/shirt-1.png"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/shirt-2.png"><img class="gallery-img" src="/assets/img/shirt-2.png"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/shirt-1.png"><img class="gallery-img" src="/assets/img/shirt-1.png"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/shirt-2.png"><img class="gallery-img" src="/assets/img/shirt-2.png"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/shirt-1.png"><img class="gallery-img" src="/assets/img/shirt-1.png"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/shirt-2.png"><img class="gallery-img" src="/assets/img/shirt-2.png"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/shirt-1.png"><img class="gallery-img" src="/assets/img/shirt-1.png"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/shirt-2.png"><img class="gallery-img" src="/assets/img/shirt-2.png"></a>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="subtitle text-uppercase">Hello</span>
                <h1 class="title text-uppercase">Drop Us A Message</h1>
                <img class="hr" src="/assets/img/hr.jpg">
                
                <form>
                    <input type="text">
                    <input type="submit">
                </form>
                
            </div>
        </div>
    </div>
</section>

</main>

<?php include 'footer.php';