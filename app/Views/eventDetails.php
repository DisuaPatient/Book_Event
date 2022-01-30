<?php
$site_url = base_url();
$local_style = $site_url . "/assets/";
$image_url = $site_url . "/assets/images/";
$script_url = $site_url . "/assets/scripts/";
?>
<div class="eventDetails">
    <div class="details">
        <h2>
            John Barry's Brand Launch
        </h2>
        <p>
            Date: 10/1/22
        </p>
        <p>
            Budget: €5000
        </p>
    </div>
    <div class="vendorDetails">
        <table>
            <th>Vendor ID</th>
            <th>Vendor Name</th>
            <th>Vendor Type</th>
            <th>Event Date</th>
            <th>Balance due</th>
            <tr>
                <td>1</td>
                <td>Green Olive Event Catering</td>
                <td>Catering</td>
                <td>10/1/22</td>
                <td>€700</td>
                <td><button type="button" id="popup" class="btn" data-href="paymentForm" data-content="ajax">Make a payment</button></td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="Change Vendor"></form></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Midnight Revellers</td>
                <td>Band</td>
                <td>10/1/22</td>
                <td>€300</td>
                <td><button type="button" id="popup" class="btn" data-href="paymentForm" data-content="ajax">Make a payment</button></td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="Change Vendor"></form></td>
            </tr><tr>
                <td>3</td>
                <td>Sound to Light</td>
                <td>Lighting & Sound</td>
                <td>10/1/22</td>
                <td>€500</td>
                <td><button type="button" id="popup" class="btn" data-href="paymentForm" data-content="ajax">Make a payment</button></td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="Change Vendor"></form></td>
            </tr><tr>
                <td>4</td>
                <td>South Court Hotel</td>
                <td>Location</td>
                <td>10/1/22</td>
                <td>€1000</td>
               <td><form method="POST" action="viewEventDetails"><!--<input type="submit" class="btn" value="Make a payment">--></form>
                   <button type="button" id="popup" class="btn" data-href="paymentForm" data-content="ajax">Make a payment</button></td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="Change Vendor"></form></td>
            </tr><tr>
                <td>5</td>
                <td>John Paul Photography</td>
                <td>Photographer</td>
                <td>10/1/22</td>
                <td>€300</td>
                <td><button type="button" id="popup" class="btn" data-href="paymentForm" data-content="ajax">Make a payment</button></td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="Change Vendor"></form></td>
            </tr>
        </table>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="<?php echo $script_url.'lightWeightPopup.js?9875422'?>"></script>
	<script>
$(document).ready(function(e) {
	$('#popup').lightWeightPopup({href:'paymentForm', overlay:true, width:'90%', maxWidth:'600px', title:'Payment Form'});
	$('#inline').lightWeightPopup({title:'Inline Model'});
	$('#ancher').lightWeightPopup({width:'95%', maxWidth:'320px', top:'80px',title:'Login'});
	$('#ancherPay').lightWeightPopup({width:'95%', maxWidth:'600px', top:'80px',title:'Payment Form'});
	$('#iframe').lightWeightPopup({href:'https://www.youtube.com/embed/foSaKHdXbss', maxWidth:'600px', height:'400px', title:'Iframe Model'});
	$('.iframe').lightWeightPopup({width:'100%', height:'100%', title:'Iframe Model'});
});
	</script>