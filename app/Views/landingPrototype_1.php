<?php
$site_url = base_url();
$local_style = $site_url . "/assets/";
$image_url = $site_url . "/assets/images/";
$script_url = $site_url . "/assets/scripts/";
?>
<div class='hero'>

    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide" data-splide-interval="5000">
                    <div class="splide__slide__container weddingEvent">
                        <div class="slideContent">
                            <h1>Weddings</h1>

                            <?php echo form_open('Home/BookingEvent'); ?>

                              <input type="submit" class="btn" value="Book Now">

                              <?php echo form_close(); ?>
                        </div>
                    </div>
                </li>
                <li class="splide__slide" data-splide-interval="5000">
                    <div class="splide__slide__container weddingEvent">
                        <div class="slideContent">
                            <h1>Conference</h1>

                            <?php echo form_open('Home/BookingEvent'); ?>

                              <input type="submit" class="btn" value="Book Now">

                              <?php echo form_close(); ?>
                        </div>
                    </div>
                </li>
                <li class="splide__slide" data-splide-interval="5000">
                    <div class="splide__slide__container weddingEvent">
                        <div class="slideContent">
                            <h1>Brand Launch</h1>

                            <?php echo form_open('Home/BookingEvent'); ?>

                              <input type="submit" class="btn" value="Book Now">

                              <?php echo form_close(); ?>
                        </div>
                    </div>
                </li>
                <li class="splide__slide" data-splide-interval="5000">
                    <div class="splide__slide__container weddingEvent">
                        <div class="slideContent">
                            <h1>Team Building</h1>

                            <?php echo form_open('Home/BookingEvent'); ?>

                              <input type="submit" class="btn" value="Book Now">

                              <?php echo form_close(); ?>
                        </div>
                    </div>
                </li>
                <li class="splide__slide" data-splide-interval="5000">
                    <div class="splide__slide__container weddingEvent">
                        <div class="slideContent">
                          <?php echo form_open('Home/BookingEvent'); ?>

                            <input type="submit" class="btn" value="Book Now">

                            <?php echo form_close(); ?>

                            <button class="btn"><b>Book Now</b></button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="splide__progress">
            <div class="splide__progress__bar">
            </div>
        </div>
    </div>

</div>


<div class="eventInfo">

    <h1>Event Information</h1>
    <button class="collapsible"><b>Arrange your perfect wedding</b></button>
    <div class="collapsedContent">
        <div class="typeLeft">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="typeRight">
            <img src="<?php echo $image_url . 'conference.png' ?>" alt="alt"/>
        </div>
    </div>
    <button class="collapsible"><b>Create an insightful and informative conference</b></button>
    <div class="collapsedContent">
        <div class="typeLeft">
            <img src="<?php echo $image_url . 'conference.png' ?>" alt="alt"/>
        </div>
        <div class="typeRight">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <button class="collapsible"><b>Plot for progress with a Team Building event</b></button>
    <div class="collapsedContent">
        <div class="typeLeft">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="typeRight">
            <img src="<?php echo $image_url . 'conference.png' ?>" alt="alt"/>
        </div>
    </div>
    <button class="collapsible"><b>Start with bang with a Brand Launch event</b></button>
    <div class="collapsedContent">
        <div class="typeLeft">
            <img src="<?php echo $image_url . 'conference.png' ?>" alt="alt"/>
            </div>
        <div class="typeRight">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <button class="collapsible"><b>Celebrate in style with a Company Party</b></button>
    <div class="collapsedContent">
        <div class="typeLeft">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="typeRight">
            <img src="<?php echo $image_url . 'conference.png' ?>" alt="alt"/>
        </div>
    </div>
</div>

<div class="help-div">
    <h2>Why choose Red Valley</h2>
    <div class="home-help">
        <h3>
            Bring your event vision to life
        </h3>
        <p>
            Successful events happen when everyone is on the same
            page. Red Valley brings planners and venues together
            to collaborate on key event decisions.
        </p>
    </div>
    <div class="home-help">
        <h3>
            Pick the best service providers
        </h3>
        <p>
            As one of the most experienced event management companies
            in Ireland, Red Valley has built up a catalog of vendors
            providing the best services your event needs.
        </p>
    </div>
    <div class="home-help">
        <h3>
            Stay in the loop
        </h3>
        <p>
            At Red Valley we feel it is important to keep you informed
            of the progress in the event planning process. You will be
            messages at each stage of the booking progress or you can
            view our progress after logging in.
        </p>
    </div>

</div>


<div class="partnersHome">
    <h2>Our Partners</h2>
    <?php echo img($image_url . 'dunnes.png'); ?>
    <?php echo img($image_url . 'brownThomas.png'); ?>
    <?php echo img($image_url . 'fulfill.png'); ?>
    <?php echo img($image_url . 'guiness.png'); ?>
    <?php echo img($image_url . 'marksAndSpencer.png'); ?>
</div>
<script src="<?php echo $script_url . 'splide.min.js' ?>"></script>
<script>new Splide('.splide', {
        type: 'loop',
        height: '25rem',
        perPage: 1,
        autoplay: true,
        breakpoints: {
            640: {
                height: '6rem',
            },
        },
    }).mount();</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="<?php echo $script_url . 'lightWeightPopup.js?9875422' ?>"></script>
<script>
    $(document).ready(function (e) {
        $('#popup').lightWeightPopup({href: 'contact-us.html', overlay: true, width: '90%', maxWidth: '600px', title: 'Ajax Model'});
        $('#inline').lightWeightPopup({title: 'Inline Model'});
        $('#ancher').lightWeightPopup({width: '95%', maxWidth: '320px', top: '50px', title: 'Login'});
        $('#iframe').lightWeightPopup({href: 'https://www.youtube.com/embed/foSaKHdXbss', maxWidth: '600px', height: '400px', title: 'Iframe Model'});
        $('.iframe').lightWeightPopup({width: '100%', height: '100%', title: 'Iframe Model'});
    });
</script>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>
