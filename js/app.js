    $(document).ready(function () {
    $(window).scroll(function () {
//    $("#mainNav")
    if ($(document).scrollTop() <= 100) {
        $('.navbar-custom').css("background",'none');
        $(".container-contact").show();
    } else {
        $('.navbar-custom').css("background","#bbc4c8");
        $(".container-contact").hide();
    }
});
$("input").keyup(function(){
        var height=$("#volumetric_height").val();
        var length=$("#volumetric_length").val();
        var width=$("#volumetric_width").val();
        if(height && length && width){
            var totalKg=((height*length*width)/(64.98*30.48)).toPrecision(5);
            $("#volumetric_total_kg").val(totalKg);
            var totalPounds=(totalKg/0.45359237).toPrecision(5);
            $("#volumetric_total_pound").val(totalPounds);
        }else{
            $("#volumetric_total_kg").val("");
        $("#volumetric_total_pound").val("");
        }
    });
    $("#volumetric_reset").click(function (){
        $("#volumetric_height").val("");
        $("#volumetric_length").val("");
        $("#volumetric_width").val("");
        $("#volumetric_total_kg").val("");
        $("#volumetric_total_pound").val("");
    });
});
$("#volumetric_calculator").slideDown();
$("#pincode_served").slideUp();
$("#track_shipment").slideUp();
$("#branch_locator").slideUp();
$("#faq").slideUp();
$("#feedback").slideUp();
var supportpages=function (pageName,param){
    $('.support-left-inner-active').removeClass('support-left-inner-active').addClass('support-left-inner');
    $(param).removeClass("support-left-inner").addClass("support-left-inner-active");
        if(pageName==='weightCalculator'){
            $("#volumetric_calculator").slideDown();
            $("#pincode_served").slideUp();
            $("#track_shipment").slideUp();
            $("#branch_locator").slideUp();
            $("#faq").slideUp();
            $("#feedback").slideUp();
        }else if(pageName==='pincodesServed'){
            $("#volumetric_calculator").slideUp();
            $("#pincode_served").slideDown();
            $("#track_shipment").slideUp();
            $("#branch_locator").slideUp();
            $("#faq").slideUp();
            $("#feedback").slideUp();
        }else if(pageName==='trackShipment'){
            $("#volumetric_calculator").slideUp();
            $("#pincode_served").slideUp();
            $("#track_shipment").slideDown();
            $("#branch_locator").slideUp();
            $("#faq").slideUp();
            $("#feedback").slideUp();
        }else if(pageName==='branchLocator'){
            $("#volumetric_calculator").slideUp();
            $("#pincode_served").slideUp();
            $("#track_shipment").slideUp();
            $("#branch_locator").slideDown();
            $("#faq").slideUp();
            $("#feedback").slideUp();
        }else if(pageName==='faq'){
            $("#volumetric_calculator").slideUp();
            $("#pincode_served").slideUp();
            $("#track_shipment").slideUp();
            $("#branch_locator").slideUp();
            $("#faq").slideDown();
            $("#feedback").slideUp();
        }else if(pageName==='feedback'){
            $("#volumetric_calculator").slideUp();
            $("#pincode_served").slideUp();
            $("#track_shipment").slideUp();
            $("#branch_locator").slideUp();
            $("#faq").slideUp();
            $("#feedback").slideDown();
        }else{
            $("#volumetric_calculator").slideUp();
            $("#pincode_served").slideUp();
            $("#track_shipment").slideUp();
            $("#branch_locator").slideUp();
            $("#faq").slideUp();
            $("#feedback").slideDown();
        }
    };
    var feedbackSubmit=function (){
       var name = $("input#feedback_name").val();
            var email = $("input#feedback_email").val();
            var phone = $("input#feedback_phone").val();
            var message = $("textarea#feedback_message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
           // if (firstName.indexOf(' ') >= 0) {
             //   firstName = name.split(' ').slice(0, -1).join(' ');
            //}
            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
		//		alert("test");
                    // Enable button & show success message
                    $("#feedback_submit").attr("disabled", false);
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
$('#success > .alert-success').append('</div>');

                    //clear all fields
                    $('#feedbackForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#feedbackForm').trigger("reset");
                },
            });
        }
    
    
    var changeStyle=function (){
        var selectedTag=jQuery(this);
        selectedTag.removeClass(".support-left-inner").addClass(".support-left-inner-active");
    };
    
    jQuery('img.supportIcons').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
		
		
$(document).ready(function(){
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#district').html(html);                   
                }
            }); 
        }else{
            $('#district').html('<option value="">Select country first</option>');

        }
    });
    
    $('#district').on('change',function(){
        var distID = $(this).val();
        if(distID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'dist_id='+distID,
                success:function(html){
                    $('#branch').html(html);
                }
            }); 
        }
    });
	$('#barnch_locator_reset').on('click',function(){
		$('#district').val('');
		$('#branch').html('');
	});
});
