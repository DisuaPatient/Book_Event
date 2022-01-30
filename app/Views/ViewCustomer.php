<html>

	<head>
		<title>Modeling Data and ORM in CodeIgniter 4</title>
	</head>

	<body>

    <table class="table table-sm">
<thead>
  <tr>
    <?php foreach ($customers as $customer) { ?>
    <th scope="col">CustomerID</th>
    <th scope="col">FirstName</th>
    <th scope="col">LastName</th>
    <th scope="col">Email</th>
    <th scope="col">AddressLine1</th>
    <th scope="col">AddressLine2</th>
    <th scope="col">Country</th>
    <th scope="col">County</th>
    <th scope="col">PhoneNumber</th>
    <th scope="col">Password</th>
  </tr>
</thead>
<div class="customerInfo">
        <p>CustomerID: <?php echo $customer['CustomerID']; ?></p>
          <p>Customer Name: <?php echo $customer['FirstName']; ?></p>
        <p>Customer Name: <?php echo $customer['LastName']; ?></p>
          <p>Email: <?php echo $customer['Email']; ?></p>
          <p>PhoneNumber: <?php echo $customer['Phone']; ?></p>
          <p>Address1: <?php echo $customer['AddressLine1']; ?></p>
          <p>Address Line 2: <?php echo $customer['AddressLine2']; ?></p>
          <p>City: <?php echo $customer['City']; ?></p>
          <p>country: <?php echo $customer['Country']; ?></p>
          <p>county: <?php echo $customer['County']; ?></p>
          <p>password: <?php echo $customer['Password']; ?></p>       

      </div>
  <?php } ?>
</table>

	</body>

</html>
