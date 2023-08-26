<?php include 'header.php'; ?>

<style>
    #welcome {
        background: url('/assets/img/welcome-bg.png') no-repeat;
    }
    #contact {
        background: url('/assets/img/contact-bg.jpg') no-repeat;
    }
</style>

<main id="home">

<section id="hero-main">
    <div id="main-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
    <!--<div class="carousel-indicators">
        <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>-->

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">

            <div class="hero-background-0"></div>
            <div class="background-filter-0"></div>
            <div class="background-filter-0a"></div>
            <div class="background-filter-0b"></div>

            <div class="container reveal animate__animated animate__fadeIn">
                <div class="hero-subtitle-container">
                    <span class="hero-subtitle uppercase red center teko semi-bold block">Top Title</span>
                    <span class="hero-subtitle-1 uppercase blue center teko block">Bottom Title</span>
                </div>

                <div class="hero-title-container">
                    <span class="hero-title uppercase center teko block">Hero Title 1</span> 
                    <span class="hero-title uppercase center teko block">Hero Title 2</span>
                </div>

                    <p class="work-sans">Hero excerpt.</p>
                    <a class="red-btn teko uppercase" href="https://www.facebook.com">Hear More</a>
                    <a class="blue-btn teko black uppercase" href="/contact.php">Contact Us</a>
            </div>

        </div>
        <div class="carousel-item" data-bs-interval="10000">

            <div class="hero-background-1"></div>
            <div class="background-filter-1"></div>

            <div class="container reveal animate__animated animate__fadeIn">
                <div class="hero-subtitle-container">
                <span class="hero-subtitle uppercase red center teko semi-bold block">Top Title</span>
                    <span class="hero-subtitle-1 uppercase blue center teko block">Bottom Title</span>
                </div>

                <div class="hero-title-container">
                    <span class="hero-title uppercase center teko block">Hero Title 1</span> 
                    <span class="hero-title uppercase center teko block">Hero Title 2</span>
                </div>

                    <p class="work-sans">Hero excerpt.</p>
                    <a class="red-btn teko uppercase" href="https://www.facebook.com">Hear More</a>
                    <a class="blue-btn teko black uppercase" href="/contact.php">Contact Us</a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="10000">

            <div class="hero-background-2"></div>
            <div class="background-filter-2"></div>

            <div class="container reveal animate__animated animate__fadeIn">
                <div class="hero-subtitle-container">
                    <span class="hero-subtitle uppercase red center teko semi-bold block">Top Title</span>
                    <span class="hero-subtitle-1 uppercase blue center teko block">Bottom Title</span>
                </div>

                <div class="hero-title-container">
                    <span class="hero-title uppercase center teko block">Hero Title 1</span> 
                    <span class="hero-title uppercase center teko block">Hero Title 2</span>
                </div>

                    <p class="work-sans">Hero excerpt.</p>
                    <a class="red-btn teko uppercase" href="https://www.facebook.com">Hear More</a>
                    <a class="blue-btn teko black uppercase" href="/contact">Contact Us</a>
            </div>
        </div>
    </div>

    <!--<button class="carousel-control-prev" type="button" data-bs-target="#main-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#main-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>-->
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
                <span class="subtitle red uppercase teko">Check Out</span>
                <h1 class="title white uppercase teko">Our Next Event</h1>
            </div>
        </div>

        <div style="border-bottom: 1px solid pink;" class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-2">
                        <span style="font-size: 4rem;">31</span>
                    </div>

                    <div class="col-10 d-flex justify-content-between">
                        <div class="justify-content-start">    
                            <div style="font-size: 1.7rem; text-transform: uppercase; line-height: 1.7rem; font-weight: 600;" class="text-start">
                                <span style="display: block;">Janurary</span>
                                <span style="display: block;">2023</span>
                            </div>
                        </div>

                        <div class="justify-content-end">
                            <div style="font-size: 1.7rem; text-transform: uppercase; line-height: 1.7rem; font-weight: 600;" class="text-end">
                                <span style="display: block;">Cleveland</span>
                                <span style="display: block;">Ohio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6"><span style="font-size: 1.7rem; text-transform: uppercase;">Fall Daze 2023</span></div>
            <div class="col-2">
                <a href=""><div class="text-center" style="padding: 1rem 2rem; background-color: pink;">Buy Tickets</div></a>
        </div>
    </div>        
</section>

<section id="music">
    <div class="container">
        <div class="row">
            <div class="col-12 center">
                <span class="subtitle black uppercase teko">Diversity Playlist</span>
                <h2 class="title uppercase teko">Recent Mixes & Tracks</h2>
                <img class="hr" src="/assets/img/wave.gif">

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
            <div class="col-12 center">
                <span class="subtitle red uppercase center teko">Gallery</span>
                <h2 class="title uppercase center teko">Latest Photos</h2>
                <img class="hr" src="/assets/img/wave.gif">
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/gallery-1.jpg"><img class="gallery-img" src="/assets/img/gallery-1.jpg"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/gallery-2.jpg"><img class="gallery-img" src="/assets/img/gallery-2.jpg"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/gallery-3.jpg"><img class="gallery-img" src="assets/img/gallery-3.jpg"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/gallery-4.jpg"><img class="gallery-img" src="/assets/img/gallery-4.jpg"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/gallery-5.jpg'; ?>"><img class="gallery-img" src="/assets/img/gallery-5.jpg"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/gallery-6.jpg"><img class="gallery-img" src="/assets/img/gallery-6.jpg"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/gallery-7.jpg"><img class="gallery-img" src="/assets/img/gallery-7.jpg"></a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="/assets/img/gallery-8.jpg"><img class="gallery-img" src="/assets/img/gallery-8.jpg"></a>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 center red-border">
                <span class="subtitle red uppercase teko">Hello</span>
                <h1 class="title blue uppercase teko">Drop Us A Message</h1>
                <img class="hr" src="/assets/img/wave.gif">
                
                <div class="contact-container">
                 
                </div>
                
            </div>
        </div>
    </div>
</section>

</main>

<?php include 'footer.php';