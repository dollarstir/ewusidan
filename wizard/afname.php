<?php involve('regtop');

begin('AFFIDAVIT FOR CHANGE OF NAME ');
?>
<body>
<div class="wrapper">
    <h3>Affidavit for change of name</h3>
<form  id="wizard" class="addaffidavitname" method="post" enctype="multipart/form-data">

<h4></h4>
<section>
<h3>Basic details</h3>


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
        <input type="text" name="oldname" class="form-control" placeholder="Old Name">

        </div>


        <div class="form-holder">
        <i class="zmdi zmdi-account"></i>
        <input type="text" name="newname" class="form-control" placeholder="New Name">

        </div>

</div>





</section>


<h4></h4>
<section>




<div class="form-row">
        <div class="form-holder">
        <i class="zmdi zmdi-pin"></i>
        <input type="text" name="postal" class="form-control" placeholder="Postal address">

        </div>


        <div class="form-holder">
        <i class="zmdi zmdi-pin"></i>
        <input type="text" name="region" class="form-control" placeholder="Region">

        </div>

</div>



<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-pin"></i>
<input type="text" name="town" class="form-control" placeholder="Town">
</div>

</div>


<h3>UPLOAD NEEDED DOCUMENTS</h3>


  <!-- <label>Upload Birth Certificate Image</label><br><br>


<input type="file" name="bcertimage"  class="form-control" placeholder="Guarantor's Contact"><br><br> -->



<label>Upload image of Ghana Card / Voters ID</label><br><br>
<input type="file" name="nidpic"  class="form-control" placeholder="Guarantor's Residential address"><br><br>

<!-- <label>Upload Picture of affidavit</label><br><br>
<input type="file" name="ppic"  class="form-control" placeholder="Guarantor's Residential address"> -->
<input type="hidden" name="requestid" value="5">

</section>
</form>
</div>
<?php scripts(); ?>
<script src="wizard/js/main1.js"></script>



</body>
</html>
