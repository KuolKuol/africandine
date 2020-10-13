<!-- GET THE HEADER -->
<?php get_header(); ?>

 <!-- START: BACKGROUND VIDEO -->
 <div class="video-background">
        <video muted autoplay loop>
            <source src="<?php echo get_template_directory_uri(); ?>/videos/Pot.mp4">
        </video>
    </div>
    <div class="video-overlay"></div>
 <!-- END: BACKGROUND VIDEO -->

<!-- START:HERO CONTENT -->
<div class="container hero">
    <h1 class="hero__heading">Eat And Never Be Hungry</h1>
    <h2 class="hero__sub-heading">Dine-In, Takout And Delivery</h2>
    <a href="#" class="link--box link--box-secondary">LEARN MORE</a>             
</div>

<div class="menu_container">
    <small class="sub-heading">MENU</small>
    <h2 class="heading">Check Out Our Menu</h2>
    <a href="#" class="btn">VIEW MENU</a>
    <div class="menu__gallery">
        <a href="#" class="menu__item">
            <h3 class="menu__title">MAINS</h3>
        </a>
        <a href="#" class="menu__item">
            <h3 class="menu__title">APPETIZERS</h3>
        </a>
        <a href="#" class="menu__item">
            <h3 class="menu__title">DESSERTS</h3>
        </a>
        <a href="#" class="menu__item">
            <h3 class="menu__title">DRINKS</h3>
        </a>
    </div>
</div>
<!-- START:HERO CONTENT -->

<!-- START: MAP  -->
<div class="map">
    <small class="sub-heading">Location</small>
    <h2 class="heading">Check Out Our Restaurant</h2>
    <a href="#" class="btn">Visit Us</a>
    <div class="map__container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d40132.94808948051!2d-113.99243655207196!3d51.04737726779542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x53717b52a0f8b4e5%3A0xb872d40deb8bbaab!2smj+cuisine+calgary!3m2!1d51.030806399999996!2d-113.9811175!5e0!3m2!1sen!2sca!4v1551656276601" width="100%" height="450" frameborder="0" style="position:relative;" allowfullscreen></iframe>
    </div>
</div>
<!-- END: MAP -->

<!-- GET THE FOOTER -->
<?php get_footer(); ?>