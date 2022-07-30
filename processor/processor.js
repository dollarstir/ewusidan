
$(function(){
  // $(".paying").hide();



    $(document).on('click', "#ddo",function(){
        swal({
            title: "Done!",
            text: "Record Deleted Successfully",
            timer: 1000,
            type: 'success',
            padding: "2em",
            target: document.querySelector("html")
          });
    })
    

    function resp(response){

        if(response == "success"){
            swal.close();
            swal({
                title: "Success",
                text: "Record added Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record Deleted Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'loginsuccess'){

            swal({
                title: "Login Successfull!",
                text: "will be redirected soon",
                timer: 2000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location="/tms/home";
              });

        }

        else if(response == 'successpassport'){

          swal({
              title: "Records  Submitted!",
              text: "will be redirected soon to finish up",
              timer: 4000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="finishup?token=1";
            });

      }


      



      else if(response == 'successbirthcert'){

        swal({
            title: "Records  Submitted!",
            text: "will be redirected soon to finish up",
            timer: 4000,
            type: 'success',
            padding: "2em",
            onOpen: function () {
              swal.showLoading();
            },
          }).then(function (result) {
            window.location="finishup?token=2";
          });
  
    }

    else if(response == 'successbusinesscert'){

      swal({
          title: "Records  Submitted!",
          text: "will be redirected soon to finish up",
          timer: 4000,
          type: 'success',
          padding: "2em",
          onOpen: function () {
            swal.showLoading();
          },
        }).then(function (result) {
          window.location="finishup?token=3";
        });

  }


  else if(response == 'successaffidavitname'){

    swal({
        title: "Records  Submitted!",
        text: "will be redirected soon to finish up",
        timer: 4000,
        type: 'success',
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location="finishup?token=4";
      });

}


else if(response == 'successaffidavitdob'){

  swal({
      title: "Records  Submitted!",
      text: "will be redirected soon to finish up",
      timer: 4000,
      type: 'success',
      padding: "2em",
      onOpen: function () {
        swal.showLoading();
      },
    }).then(function (result) {
      window.location="finishup?token=5";
    });

}

else if(response == 'successgazette'){

  swal({
      title: "Records  Submitted!",
      text: "will be redirected soon to finish up",
      timer: 4000,
      type: 'success',
      padding: "2em",
      onOpen: function () {
        swal.showLoading();
      },
    }).then(function (result) {
      window.location="finishup?token=6";
    });

}
        else if(response == 'Updated Successfully'){

            swal({
                title: "Success",
                text: "Update Successful",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }


        else if(response == 'initpay'){

          // $('.paying').show();
          window.location="pay";

      }


        else if(response == 'loginfailed'){

            swal({
                title: "Oops!",
                text: "Record not found in database! ",
                type: "error",
                padding: "2em",
              });

        }
        else{

            swal({
                title: "Attention!",
                text: response,
                type: "warning",
                padding: "2em",
              });

        }


    }

    function before()
{
    
  swal({
    title: 'Please Wait !',
    html: 'request in progress...',
    allowOutsideClick: false,
    
});
}

// add birth certificate
$('.addbirthcert').submit(function(e){

    e.preventDefault();
    var staff = {
        url: 'processor/processor.php?action=addbirthcert',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(staff);
});


// add passport

$('.addpassport').submit(function(e){

  e.preventDefault();
  var staff = {
      url: 'processor/processor.php?action=addpassport',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});





// add business cert
$('.addbusinesscert').submit(function(e){

  e.preventDefault();
  var staff = {
      url: 'processor/processor.php?action=addbusinesscert',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// check payment type

$('.finishup').submit(function(e){

  e.preventDefault();
  var staff = {
      url: 'processor/processor.php?action=payment',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});



// Add affidavit name
$('.addaffidavitname').submit(function(e){

  e.preventDefault();
  var staff = {
      url: 'processor/processor.php?action=addaffidavitname',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// Add affidavit dob

$('.addaffidavitdob').submit(function(e){

  e.preventDefault();
  var staff = {
      url: 'processor/processor.php?action=addaffidavitdob',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});



// Add Gazette

$('.addgazette').submit(function(e){

  e.preventDefault();
  var staff = {
      url: 'processor/processor.php?action=addgazette',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});







    
})