<?php ob_start() ?>

<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="css/customer_reg_form.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <?php include 'header.php';  ?>
  <style>
    .container {
      width: 80%;
      background-color: white;
      padding: 50px;

    }
  </style>
</head>
<body>
  <div class="container_regfrm_container_parent">
    <center><h3 style="color: white;">Online Account Opening Form</h3></center>
    <div class="container">
      <form>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
          </div>
          <div class="form-group col-md-3">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" class="form-control">
              <option selected value="male">Male</option>
              <option selected value="female">female</option>
              <option selected value="others">others</option>

            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="mob">Mobile No</label>
            <input type="text" name="mobile" class="form-control" placeholder="Mobile no" required />

          </div>
          <div class="form-group col-md-3">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="land">Landline No</label>
            <input type="text" name="landline" placeholder="Landline no" class="form-control" required />
          </div>
          <div class="form-group col-md-3">
            <label for="">Date of Birth</label>
            <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" class="form-control" required />
          </div>
          <div class="form-group col-md-3">
            <label for="inpu">PAN number</label>
            <input type="text" name="pan_no" placeholder="PAN_number" class="form-control" required data-toggle="tooltip" data-placement="bottom" title="Permanent Account Number (PAN) is a ten-digit alphanumeric number, issued in the form of a laminated card, by the Income Tax Department, to any person who applies for it or to whom the department allots the number without an application." />
          </div>

          <div class="form-group col-md-3">
            <label for="mob">Aadhar Card Number</label>
            <input type="text" name="citizenship" placeholder="Aadhar_no" class="form-control" required data-toggle="tooltip" data-placement="bottom" title="Aadhaar number is a 12-digit random number issued by the UIDAI (“Authority”) to the residents of India after satisfying the verification process laid down by the Authority." />
          </div>
        </div>
        <!-- </div> -->
        <div class="form-group">
          <label for="inputAddress">Home Address</label>
          <input type="text" class="form-control" id="inputAddress" name="homeaddrs" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Office Address </label>
          <input type="text" class="form-control" id="inputAddress2" name="officeadda" placeholder="Apartment, studio, or floor">
        </div>
        <!-- </div> -->
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputCountry">Country</label>
            <input type="text" class="form-control" id="inputCity" name="country" placeholder="India">
          </div>
          <div class="form-group col-md-3">
            <label for="inputState">State</label>
            <input type="text" class="form-control" id="inputState" name="state" placeholder="TamilNadu">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="city" placeholder="City">
          </div>
          <div class="form-group col-md-3">
            <label for="inputZip">Pin Code</label>
            <input type="text" class="form-control" name="pin" id="inputZip" placeholder="pin-code">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputCountry">Area/Locality</label>
            <input type="text" class="form-control" name="arealoc" id="arealoc" placeholder="area/loality">
          </div>
          <div class="form-group col-md-3">
            <label for="inputState">Nominee Name</label>
            <input type="text" class="form-control" name="nominee_name" id="nominee" placeholder="Nominee name(if any)" data-toggle="tooltip" data-placement="bottom" title="A Nominee is a person whom you can list in your investment or bank application as the person who can receive the proceeds of your account in case of your unexpected death.">
          </div>
          <div class="form-group col-md-3">
            <label for="inputacno">Nominee Account Number</label>
            <input type="text" class="form-control" id="inputCity" name="nominee_ac_no" placeholder="Nominee Account NO">
          </div>
          <div class="form-group col-md-3">
            <label for="acctype">Account Type</label>
            <select id="acctype" name="acctype" class="form-control">
              <option selected value="Joint" data-toggle="tooltip" data-placement="bottom" title="A joint account is a bank or brokerage account shared between two or more individuals. Joint accounts are most likely to be used by relatives, couples, or business partners who have a level of familiarity and trust with each other.">Joint</option>
              <option selected value="single" data-toggle="tooltip" data-placement="bottom" title="A single account is an account operated for one individual. The individual has control of the account and the assets go to their estate in case of their death.">Single</option>
            </select>
          </div>
        </div>
        <div style="justify-content: center; display:flex;">
          <input type="submit" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>

</body>

</html>


<?php

if (isset($_POST['submit'])) {

  session_start();
  $_SESSION['$cust_acopening'] = TRUE;
  $_SESSION['cust_name'] = $_POST['name'];
  $_SESSION['cust_gender'] = $_POST['gender'];
  $_SESSION['cust_mobile'] = $_POST['mobile'];
  $_SESSION['cust_email'] = $_POST['email'];
  $_SESSION['cust_landline'] = $_POST['landline'];
  $_SESSION['cust_dob'] = $_POST['dob'];
  $_SESSION['cust_pan='] = $_POST['pan_no'];
  $_SESSION['cust_citizenship'] = $_POST['citizenship'];
  $_SESSION['cust_homeaddrs'] = $_POST['homeaddrs'];
  $_SESSION['cust_officeaddrs'] = $_POST['officeaddrs'];
  $_SESSION['cust_country'] = $_POST['country'];
  $_SESSION['cust_state'] = $_POST['state'];
  $_SESSION['cust_city'] = $_POST['city'];
  $_SESSION['cust_pin'] = $_POST['pin'];
  $_SESSION['arealoc'] = $_POST['arealoc'];
  $_SESSION['nominee_name'] = $_POST['nominee_name'];
  $_SESSION['nominee_ac_no'] = $_POST['nominee_ac_no'];
  $_SESSION['cust_acctype'] = $_POST['acctype'];

  header('location:cust_regfrm_confirm.php');
}

?>