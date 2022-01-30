<div class="payForm">
    <p>Please enter your payment information below.</p>
    <hr>
    <form method="POST" action="man" id="PayForm">
        <label for="amount">Payment Amount(€)</label>
        <input type="text" name="amount">
        <label for="optionsRadios">Payment Options</label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
        <img src="http://localhost/CI4-RedValley/public/assets/images/visa.png" alt="visa logo">
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
        <img src="http://localhost/CI4-RedValley/public/assets/images/mastercard.png" alt="mastercard logo">
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
        <img src="http://localhost/CI4-RedValley/public/assets/images/jcb.png" alt="jcb logo">
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
        <img src="http://localhost/CI4-RedValley/public/assets/images/amex.png" alt="amex logo">
        <p>Credit Card</p>

        <label for="card_name">Name on card</label>
        <input type="text" class="form-control" id="card_name" placeholder="">


        <label for="card_number" class="control-label">Card number</label>
        <input type="text" class="form-control" id="card_number" placeholder="">	            

        <label class="control-label">Expiry</label>
        <select>
            <option>-</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select> /
        <select>
            <option>-</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select><br>

        <label for="cvv2" class="control-label text-left">Security Code</label>
        <input type="text" maxlength="3" class="cvv2 form-control" id="cvv2" placeholder="">
        <img src="http://localhost/CI4-RedValley/public/assets/images/cvv2.jpg" alt="cvv2">

        <input type="submit" value="Submit" class="btn">

    </form>
</div>