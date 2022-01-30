<?php
$site_url = base_url();
$local_style = $site_url . "/assets/";
$image_url = $site_url . "/assets/images/";
$script_url = $site_url . "/assets/scripts/";
?>
<div class="portal">
    <div class="loggedInfo">
        <h2>Event Team Name: Staff Name</h2>
        
        <hr>
    </div>
    <div class="staffOptions">
        <button>Staff Management</button>
        <button>Event Management</button>
        <hr>
    </div>
    <div class="mgmt">
        <h2>Event Management</h2>
        <p>Events for (Team Name)</p>
        <table>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Event Type</th>
            <th>Event Date</th>
            <th>Customer Name</th>
            <tr>
                <td>1</td>
                <td>BT Brand Launch</td>
                <td>Brand Launch</td>
                <td>10/1/22</td>
                <td>John Barry</td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="View Details"></form></td>
            </tr>
            <tr>
                <td>1</td>
                <td>BT Brand Launch</td>
                <td>Brand Launch</td>
                <td>10/1/22</td>
                <td>John Barry</td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="View Details"></form></td>
            </tr><tr>
                <td>1</td>
                <td>BT Brand Launch</td>
                <td>Brand Launch</td>
                <td>10/1/22</td>
                <td>John Barry</td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="View Details"></form></td>
            </tr><tr>
                <td>1</td>
                <td>BT Brand Launch</td>
                <td>Brand Launch</td>
                <td>10/1/22</td>
                <td>John Barry</td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="View Details"></form></td>
            </tr><tr>
                <td>1</td>
                <td>BT Brand Launch</td>
                <td>Brand Launch</td>
                <td>10/1/22</td>
                <td>John Barry</td>
                <td><form method="POST" action="viewEventDetails"><input type="submit" class="btn" value="View Details"></form></td>
            </tr>
        </table>
        <p>< 1 2 3 4 ></p>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="<?php echo $script_url.'lightWeightPopup.js?9875422'?>"></script>
	<script>
$(document).ready(function(e) {
	$('#popup').lightWeightPopup({href:'contact-us.html', overlay:true, width:'90%', maxWidth:'600px', title:'Ajax Model'});
	$('#inline').lightWeightPopup({title:'Inline Model'});
	$('#ancher').lightWeightPopup({width:'95%', maxWidth:'320px', top:'50px',title:'Login'});
	$('#iframe').lightWeightPopup({href:'https://www.youtube.com/embed/foSaKHdXbss', maxWidth:'600px', height:'400px', title:'Iframe Model'});
	$('.iframe').lightWeightPopup({width:'100%', height:'100%', title:'Iframe Model'});
});
	</script>