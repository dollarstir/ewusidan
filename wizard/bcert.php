<?php involve('regtop');

begin('BIRTH CERTIFCATE');
?>
<body>
<div class="wrapper">
    <h3>Birth Certificate application form</h3>
<form  id="wizard" class="addberthcert" method="post" enctype="multipart/form-data">

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
<h3>MOTHER's DETAILS</h3>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="mothername"  class="form-control" placeholder="Mother's  maiden name">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="motheroccupation"  class="form-control" placeholder="Mother's occupation">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="motherreligion" class="mysl" aria-label="Default select example">
  <option value="">Select Mothers Religion</option>
  <option value="Christianity"> Christianity</option>
  <option value="Islam">Islam</option>
  <option value="Traditional Religion">Traditional</option>
</select>
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="motherphone"  class="form-control" placeholder="Mother's Phone Number">
</div>

</div>




<!-- fathers details -->

<h3>Father's DETAILS</h3>
<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fathername"  class="form-control" placeholder="Father's  name">
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fatheroccupation"  class="form-control" placeholder="Father's occupation">
</div>

</div>

<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-chevron-down"></i>
<select name="fatherreligion" class="mysl" aria-label="Default select example">
  <option value="">Select Father's Religion</option>
  <option value="Christianity"> Christianity</option>
  <option value="Islam">Islam</option>
  <option value="Traditional Religion">Traditional</option>
</select>
</div>

<div class="form-holder">
<i class="zmdi zmdi-"></i>
<input type="text" name="fatherphone"  class="form-control" placeholder="Father's Phone Number">
</div>

</div>









<h3>UPLOAD NEEDED DOCUMENTS</h3>


  <!-- <label>Upload Birth Certificate Image</label><br><br>


<input type="file" name="bcertimage"  class="form-control" placeholder="Guarantor's Contact"><br><br> -->



<label>Upload Front of the Selected National ID</label><br><br>
<input type="file" name="nidpic"  class="form-control" placeholder="Guarantor's Residential address"><br><br>

<!-- <label>Upload passport Sized Picture of yourself</label><br><br>
<input type="file" name="ppic"  class="form-control" placeholder="Guarantor's Residential address"> -->
<input type="hidden" name="requestid" value="2">

</section>
</form>
</div>
<?php scripts(); ?>
<script src="wizard/js/main1.js"></script>



</body>
</html>
