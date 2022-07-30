<?php involve('regtop');

begin('BUSINESS CERTIFCATE');
?>
<body>
<div class="wrapper">
    <h3>BUSINESS Certificate application form</h3>
<form  id="wizard" class="addbusinesscert">

<h4></h4>
<section>
<h3>Basic details</h3>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-account"></i>
<input type="text" name="fname" class="form-control" placeholder="First Name">


</div>
<div class="form-holder">
<i class="zmdi zmdi-account"></i>
<input type="text" name="lname" class="form-control" placeholder="Last Name">
</div>
</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-account"></i>
<input type="text" name="oname" class="form-control" placeholder="Other Name">
</div>
<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="gender" class="mysl" aria-label="Default select example">
  <option value="">Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  
</select>
</div>
</div>

<div class="form-row">
<label>Date of Birth</label><br>
<div class="form-holder">

<i class="zmdi zmdi-grid"></i>

<input type="date" name="dob" class="form-control" placeholder="Date of birth">
</div>
<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="mstatus" class="mysl" aria-label="Default select example">
  <option value="">Marital status</option>
  <option value="Single">Single</option>
  <option value="Married">Married</option>
  <option value="Divorced">Divorced</option>
  
</select>
</div>
</div>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-map"></i>
<input type="text" name="street" class="form-control" placeholder="Street">
</div>
<div class="form-group">
<div class="form-holder">
<i class="zmdi zmdi-pin"></i>
<input type="text" name="city" class="form-control" placeholder="City/town">
</div>
<div class="form-holder">
<i class="zmdi zmdi-pin-drop"></i>
<input type="text" name="district" class="form-control" placeholder="District">
</div>
</div>
</div>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-pin"></i>
<input type="text" name="region"  class="form-control" placeholder="Region">
</div>
<div class="form-holder">
<i class="zmdi zmdi-pin"></i>
<input type="text" name="postaladdress" class="form-control" placeholder="Postal Address">
</div>
</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-smartphone-android"></i>
<input type="text" name="phone"  class="form-control" placeholder="Phone Number">
</div>
<div class="form-holder">
<i class="zmdi zmdi-email"></i>
<input type="text" name="email" class="form-control" placeholder="Email Address">
</div>
</div>  


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-account"></i>
<input type="text" name="nationality"  class="form-control" placeholder="Nationality">
</div>
<div class="form-holder">
<i class="zmdi zmdi-account"></i>
<input type="text" name="occupation" class="form-control" placeholder="Occupation">
</div>
</div>  




</section>

<!-- <h4></h4>
<section>
<h3>Other Details </h3>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-male-alt"></i>
<input type="text" name="height"  class="form-control" placeholder="Height">
</div>
<div class="form-holder">
<i class="zmdi zmdi-eye"></i>
<input type="text" name="eyecolor" class="form-control" placeholder="Colour of eyes">
</div>
</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-face"></i>
<input type="text" name="haircolor"  class="form-control" placeholder="Colour of hair">
</div>
<div class="form-holder">
<i class="zmdi zmdi-map"></i>
<input type="text" name="nationality" class="form-control" placeholder="Nationality">
</div>
</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-account-circle"></i>
<input type="text" name="profession"  class="form-control" placeholder="Profession">
</div>
<div class="form-holder">
<i class="zmdi zmdi-account-circle"></i>
<input type="text" name="prevpro" class="form-control" placeholder="Previous profession">
</div>
</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-account-box-phone"></i>
<input type="text" name="bcert"  class="form-control" placeholder="Birth certificate number">
</div>
<label>Date of Issue</label><br>
<div class="form-holder">
<i class="zmdi zmdi-grid"></i>
<input type="date" name="bcertdoi" class="form-control" placeholder="Date of issue">
</div>
</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-map"></i>
<input type="text" name="bcertpoi"  class="form-control" placeholder="Place of issue">
</div>

<div class="form-holder">
<i class="zmdi zmdi-arrows"></i>
<input type="text" name="postal"  class="form-control" placeholder="Postal Address">
</div>

</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="nidtype" class="mysl" aria-label="Default select example">
  <option value="">Select Nation ID Type</option>
  <option value="Ghana Card">Ghana Card</option>
  <option value="Voters ID">Voters ID</option>
</select>
</div>
<div class="form-holder">
<i class="zmdi zmdi-account-circle"></i>
<input type="text" name="nidnumber" class="form-control" placeholder="Enter National ID's Number">
</div>
</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-map"></i>
<input type="text" name="currentcity"  class="form-control" placeholder="City of residence">
</div>

<div class="form-holder">
<i class="zmdi zmdi-arrows"></i>
<input type="text" name="Street"  class="form-control" placeholder="Street Name">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-map"></i>
<input type="text" name="currentcountry"  class="form-control" placeholder="Country of residence ">
</div>

<div class="form-holder">
<i class="zmdi zmdi-arrows"></i>
<input type="text" name="suburb"  class="form-control" placeholder="Suburb">
</div>

</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-card-travel"></i>
<input type="text" name="isntitute"  class="form-control" placeholder="Institution attended">
</div>

<div class="form-holder">
<i class="zmdi zmdi-calendar"></i>
<input type="text" name="yearstarted"  class="form-control" placeholder="Year of commence">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-calendar"></i>
<input type="text" name="yearended"  class="form-control" placeholder="Year of completion">
</div>

<div class="form-holder">
<i class="zmdi zmdi-arrows"></i>
<input type="text" name="address"  class="form-control" placeholder="Current  Address">
</div>

</div>

</section> -->

<!-- <h4></h4>
<section>
<h3 style="margin-bottom: 16px;">RELATION INFO</h3>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fathername"  class="form-control" placeholder="Fathers name">
</div>

<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="fatheralive" class="mysl" aria-label="Default select example">
  <option value="">Is your father alive?</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fathercontact"  class="form-control" placeholder="Phone Number">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fatheremail"  class="form-control" placeholder="Father's email">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fathertown"  class="form-control" placeholder="Father's hometown">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fatherresaddress"  class="form-control" placeholder="Father's residential address">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fatherposaddress"  class="form-control" placeholder="Fathers postal address">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fathernation"  class="form-control" placeholder="Father's Nationality">
</div>

</div>
<h3>One Grand parent Info</h3>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandpname"  class="form-control" placeholder="Name of grand parent">
</div>

<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="grandpalive" class="mysl" aria-label="Default select example">
  <option value="">Is your Grandparent alive?</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandptelephone"  class="form-control" placeholder="Grand Parent Telephone">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandpemail"  class="form-control" placeholder=" Grand Parent Email">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandptown"  class="form-control" placeholder="Grand Parent Hometown">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandpresaddress"  class="form-control" placeholder=" Grand Parent residential address">
</div>

</div>



<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandppostaladdress"  class="form-control" placeholder="Grand Parent postal address">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandpnational"  class="form-control" placeholder=" Grand Parent Nationality">
</div>

</div> -->



<!-- <div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandptelephone"  class="form-control" placeholder="Grand Parent Telephone">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="grandpemail"  class="form-control" placeholder=" Grand Parent Email">
</div>

</div> -->
<!-- </section> -->

<h4></h4>
<section>
<h3>BUSINESS DETAILS</h3>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="name1"  class="form-control" placeholder="Business Name (First Choice)">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="name2"  class="form-control" placeholder="Business Name (Second Choice)">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="name3"  class="form-control" placeholder="Business Name (Last Choice)">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<textarea name="activities"  class="form-control" placeholder="Enter principal activities of company"></textarea>
</div>

</div>




<!-- fathers details -->


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="numemployee"  class="form-control" placeholder="No. employee Envisaged">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="tin"  class="form-control" placeholder="TIN No (if you have)">
</div>

</div>

<div class="form-row">


<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="ghanacardnumber"  class="form-control" placeholder="Ghana Card Number">
</div>

<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="buztype" class="mysl" aria-label="Default select example">
  <option value="">Select Business Type</option>
  <option value="Sole Proprietorship">Sole Proprietorship</option>
  <option value="Incorporated Partnership">Incorporated Partnership</option>
  <option value="External Company">External Company</option>
  <option value="Corporation">Corporation</option>
  <option value="Company Limited Shares">Company Limited Shares</option>
  <option value="Company Limited by Guarantee">Company Limited by Guarantee</option>
  <option value="Company Unlimited by Shares">Company Unlimited by Shares</option>
</select>
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="gps"  class="form-control" placeholder="GPS Address">
</div>



</div>









<h3>UPLOAD NEEDED DOCUMENTS</h3>


  <!-- <label>Upload Birth Certificate Image</label><br><br>


<input type="file" name="bcertimage"  class="form-control" placeholder="Guarantor's Contact"><br><br> -->



<label>Upload image of Front of Ghana Card</label><br><br>
<input type="file" name="nidpic"  class="form-control" placeholder="Guarantor's Residential address"><br><br>

<label>Upload image of Back of Ghana Card</label><br><br>
<input type="file" name="ppic"  class="form-control" placeholder="Guarantor's Residential address">
<input type="hidden" name="requestid" value="2">

</section>
</form>
</div>
<?php scripts(); ?>
<script src="wizard/js/main1.js"></script>



</body>
</html>
