$(function(){
    $("#wizard").steps(
{
    headerTag:"h4",
    bodyTag:"section",
    transitionEffect:"fade",
    enableAllSteps:true,
    transitionEffectSpeed:300,
    labels:{next:"Continue",
    previous:"Back",
    finish:'submit'},
    onFinished: function() {
        $("#wizard").submit();
        
    },
    onStepChanging:function(event,currentIndex,newIndex){
        if(newIndex>=1)
        {
            // $('.steps ul li:first-child a img').attr('src','wizard/images/item-1.jpg');
            $('.steps ul li:first-child a img').attr('class','');
        }
        else{
            // $('.steps ul li:first-child a img').attr('src','wizard/images/item-2.jpg');
            $('.steps ul li:first-child a img').attr('class','iactive');
        }
    if(newIndex===1)
    {
        $('.steps ul li:nth-child(2) a img').attr('class','iactive');
    }
    else{
        $('.steps ul li:nth-child(2) a img').attr('class','');
    }
    if(newIndex===2)
    {
        $('.steps ul li:nth-child(3) a img').attr('class','iactive');
    }
    else{
        $('.steps ul li:nth-child(3) a img').attr('class','');
    }
    if(newIndex===3)
    {
        $('.steps ul li:nth-child(4) a img').attr('class','iactive');
    }
    else{
        $('.steps ul li:nth-child(4) a img').attr('class','');
    }
return true;}});$('.forward').click(function(){$("#wizard").steps('next');})
$('.backward').click(function(){$("#wizard").steps('previous');})
$('.password i').click(function(){if($('.password input').attr('type')==='password'){$(this).next().attr('type','text');}else{$('.password input').attr('type','password');}})
$('.steps ul li:first-child').append('<img src="wizard/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="wizard/images/step-1.png" alt="" class="iactive"> ').append('<span class="step-order">PERSONAL INFO</span>');$('.steps ul li:nth-child(2').append('<img src="wizard/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="wizard/images/step-2.png" alt="">').append('<span class="step-order">OTHER INFO</span>');$('.steps ul li:nth-child(3)').append('<img src="wizard/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="wizard/images/step-3.png" alt="">').append('<span class="step-order">RELATION INFO</span>');$('.steps ul li:last-child a').append('<img src="images/step-4.png" alt="">').append('<span class="step-order">Step 04</span>');$(".quantity span").on("click",function(){var $button=$(this);var oldValue=$button.parent().find("input").val();if($button.hasClass('plus')){var newVal=parseFloat(oldValue)+1;}else{if(oldValue>0){var newVal=parseFloat(oldValue)-1;}else{newVal=0;}}
$button.parent().find("input").val(newVal);});})