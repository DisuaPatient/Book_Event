<div class="updateEventForm">
    <h2>Update Customer Details</h2>
    <?php echo form_open('login_Controller/UpdateCustomer/'['CustomerID']);?>
    <div>
    <label for="eventDate">First Name</label>
    <input type="datetime-local" name="FirstName" id="FirstName" value="<?php echo $CustomerDetails['FirstName'];?>">
    </div>
    <div>
    <label for="guests">  City</label>
    <input type="number" name="  City" id="  City" value="<?php echo $CustomerDetails['City'];?>">
    </div>
    <div>
    <label for="budget">Country</label>
    <input type="number" name="Country" id="Country" value="<?php echo $CustomerDetails['Country'];?>">
    </div>
    <div>
    <label for="eventNotes">Last Name</label>
    <textarea id="Last Name" name="Last Name" rows="5" cols="10"><?php echo $CustomerDetails['Last Name'];?></textarea>
    </div>
    <div>
    <label for="eventStatus">AddressLine1</label>
    <input type="text" name="AddressLine1" id="AddressLine1" value="<?php echo $CustomerDetails['AddressLine1'];?>">
    </div>
    <div>
        <input type="submit" name="button" class="btn" value="Update">
    </div>
</div>
