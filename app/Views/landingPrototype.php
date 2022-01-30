<?php
$site_url = base_url();
$local_style = $site_url . "/assets/";
$image_url = $site_url . "/assets/images/";
$script_url = $site_url . "/assets/scripts/";
?>
<div class='hero'>
    <h1>Red Valley Event Management</h1>
    <p>
        RVEM was established in 1980 as a small ticket selling agent
        for a variety of events around Galway City and over the 
        years developed into a full service events business
        organising corporate events and parties, and is now 
        considered one of the most experienced event management 
        companies in the west of Ireland.  
    </p>
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
<div class="eventTypes">
    <h2>Event Types</h2>
    <h3>Conference</h3>                
    <div class="typeRow">
        <div class="typeLeft">
            <ul>
                <li>- Choose your location virtual or in person</li>
                <li>- Invite a guest speaker</li>
                <li>- Pick additional services from our list of providers</li>
            </ul>
            <button>Book Now</button>
        </div>
        <div class="typeRight">
            <?php echo img($image_url . 'conference.png'); ?>
        </div>
    </div>
    <h3>Brand Launch</h3>
    <div class="typeRow">
        <div class="typeLeft">
            <?php echo img($image_url . 'conference.png'); ?>
        </div>
        <div class="typeRight">
            <ul>
                <li>- Choose your location virtual or in person</li>
                <li>- Invite a guest speaker</li>
                <li>- Pick additional services from our list of providers</li>
            </ul>
            <button>Book Now</button>

        </div>
    </div>
    <h3>Team Building</h3>
    <div class="typeRow">
        <div class="typeLeft">
            <ul>
                <li>- Choose your location virtual or in person</li>
                <li>- Invite a guest speaker</li>
                <li>- Pick additional services from our list of providers</li>
            </ul>
            <button>Book Now</button>
        </div>
        <div class="typeRight">
            <?php echo img($image_url . 'conference.png'); ?>
        </div>
    </div>
    <h3>Company Party</h3>
    <div class="typeRow">
        <div class="typeLeft">
            <?php echo img($image_url . 'conference.png'); ?>
        </div>
        <div class="typeRight">
            <ul>
                <li>- Choose your location virtual or in person</li>
                <li>- Invite a guest speaker</li>
                <li>- Pick additional services from our list of providers</li>
            </ul>
            <button>Book Now</button>
        </div>
    </div>
    <h3>Wedding</h3>
    <div class="typeRow">
        <div class="typeLeft">
            <ul>
                <li>- Choose your location virtual or in person</li>
                <li>- Invite a guest speaker</li>
                <li>- Pick additional services from our list of providers</li>
            </ul>
            <button>Book Now</button>
        </div>
        <div class="typeRight">
            <?php echo img($image_url . 'conference.png'); ?>

        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="<?php echo $script_url . 'lightWeightPopup.js?9875422' ?>"></script>
<script>
$(document).ready(function(e) {
	$('#popup').lightWeightPopup({href:'contact-us.html', overlay:true, width:'90%', maxWidth:'600px', title:'Ajax Model'});
	$('#inline').lightWeightPopup({title:'Inline Model'});
	$('#ancher').lightWeightPopup({width:'95%', maxWidth:'320px', top:'50px',title:'Login'});
	$('#iframe').lightWeightPopup({href:'https://www.youtube.com/embed/foSaKHdXbss', maxWidth:'600px', height:'400px', title:'Iframe Model'});
	$('.iframe').lightWeightPopup({width:'100%', height:'100%', title:'Iframe Model'});
});
	</script>
