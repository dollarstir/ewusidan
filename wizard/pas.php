<?php involve('regtop');

begin('BIRTH CERTIFCATE');
?>
<body>
<div class="wrapper">
    <h3>Passport application form (New applicant)</h3>
<form  id="wizard" class="addpassport" method="post" enctype="multipart/form-data">

<h4></h4>
<section>
<h3>Basic details</h3>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-account"></i>
<input type="text" name="fname" class="form-control" placeholder="First Name">

<input type="hidden" name="requestid" class="form-control" placeholder="" value="1">
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
<input type="text" name="cob" class="form-control" placeholder="Country of birth">
</div>
<div class="form-group">
<div class="form-holder">
<i class="zmdi zmdi-pin"></i>
<input type="text" name="rob" class="form-control" placeholder="Region of Birth">
</div>
<div class="form-holder">
<i class="zmdi zmdi-pin-drop"></i>
<input type="text" name="pob" class="form-control" placeholder="City/Town of Birth">
</div>
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




</section>

<h4></h4>
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

</section>

<h4></h4>
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

</div>



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
</section>

<h4></h4>
<section>
<h3>MOTHER DETAILS</h3>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="mothername"  class="form-control" placeholder="Mother's name">
</div>

<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="motheralive" class="mysl" aria-label="Default select example">
  <option value="">Is your mother alive?</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="mothercontact"  class="form-control" placeholder="Phone Number">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="motheremail"  class="form-control" placeholder="Mother's email">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="mothertown"  class="form-control" placeholder="Mother's hometown">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="motherresaddress"  class="form-control" placeholder="Mother's residential address">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="motherposaddress"  class="form-control" placeholder="Mother's postal address">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="mothernation"  class="form-control" placeholder="Mother's Nationality">
</div>
</div>



<h3>ONE Guarantor INFO</h3>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="guarantorname"  class="form-control" placeholder="Guarantor's Name">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="guarantoroccupation"  class="form-control" placeholder="Guarantor's Occupation">
</div>
</div>


<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="guarantorcontact"  class="form-control" placeholder="Guarantor's Contact">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="guarantorresaddress"  class="form-control" placeholder="Guarantor's Residential address">
</div>
</div>

<h3>UPLOAD NEEDED DOCUMENTS</h3>


  <label>Upload Birth Certificate Image</label><br><br>


<input type="file" name="bcertimage"  class="form-control" placeholder="Guarantor's Contact"><br><br>



<label>Upload Front of the Selected National ID</label><br><br>
<input type="file" name="nidpic"  class="form-control" placeholder="Guarantor's Residential address"><br><br>

<label>Upload passport Sized Picture of yourself</label><br><br>
<input type="file" name="ppic"  class="form-control" placeholder="Guarantor's Residential address">


</section>
</form>
</div>
<?php scripts(); ?>
<script src="wizard/js/main.js"></script>



</body>
</html>
