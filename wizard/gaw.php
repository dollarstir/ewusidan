<?php involve('regtop');

begin('GAZETTE');
?>
<body>
<div class="wrapper">
    <h3>GAZETTE</h3>
<form  id="wizard" class="addgazette">

<h4></h4>
<section>
<h3>Basic details</h3>

<div class="form-row">
        <div class="form-holder">
        <i class="zmdi zmdi-account"></i>
        <input type="text" name="name" class="form-control" placeholder="Name">

        </div>


        <div class="form-holder">
        <i class="zmdi zmdi-pin"></i>
        <input type="number" name="phone" class="form-control" placeholder="Phone Number">

        </div>

</div>
<div class="form-row">
        <div class="form-holder">
        <i class="zmdi zmdi-account"></i>
        <input type="text" name="occupation" class="form-control" placeholder="Occupation">

        </div>


        <div class="form-holder">
        <i class="zmdi zmdi-pin"></i>
        <input type="text" name="place" class="form-control" placeholder="Place of work">

        </div>

</div>


<div class="form-row">
        <div class="form-holder">
        <i class="zmdi zmdi-pin"></i>
        <input type="text" name="postal" class="form-control" placeholder="Postal address">

        </div>


        <div class="form-holder">
        <i class="zmdi zmdi-file"></i>
        <input type="text" name="wid" class="form-control" placeholder="Work ID">

        </div>

</div>



<div class="form-row">
<div class="form-holder">
<i class="zmdi zmdi-email"></i>
<input type="text" name="email" class="form-control" placeholder="Email">
</div>

</div>


</section>


<h4></h4>
<section>


<h3>UPLOAD NEEDED DOCUMENTS</h3>


  <!-- <label>Upload Birth Certificate Image</label><br><br>


<input type="file" name="bcertimage"  class="form-control" placeholder="Guarantor's Contact"><br><br> -->



<label>Upload image of Ghana Card / Voters ID</label><br><br>
<input type="file" name="nidpic"  class="form-control" placeholder="Guarantor's Residential address"><br><br>

<label>Upload Picture of affidavit</label><br><br>
<input type="file" name="ppic"  class="form-control" placeholder="Guarantor's Residential address">
<input type="hidden" name="requestid" value="4">

</section>
</form>
</div>
<?php scripts(); ?>
<script src="wizard/js/main1.js"></script>



</body>
</html>
