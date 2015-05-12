<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>INTERACTION QUESTIONNAIRE - WEARER (NO CONTROL)</title>
    <link rel="stylesheet" href="components/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <form action="bd.php" method="post" id="form">
        
        
        <!-- QUESTIONNARIE NAME: Change value attribute -->
        <input type="hidden" id="questionnarie_name" name="questionnarie_name" value="interaction_questionnaire_wearer-nocontrol">
        
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">&laquo;</a><a class="navbar-brand" href="#" onclick="scrollTo('body')">Interaction Questionnaire - Wearer (No Control) (Post-Questionnaire)</a>
                </div>
                <div class="participant">
                    Participant # <span><input id="participant_id" name="participant_id" type="text" value=""></span>
                    <input id="questionnarie_stage" name="questionnarie_stage" value="Post-Questionnarie" type="hidden" />
                </div>
            </div>
        </nav>
        
        
        <!-- BEGIN: Modal -->
        <div class="modal fade" id="splashModal" tabindex="-1" role="dialog" aria-labelledby="splashModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <h1 class="modal-title" id="splashModalTitle">Study on wearable computing - Talking about your experience with the Prototype</h1>
                        <div class="container-fluid">

                            <div class="info">
                                <p>This questionnaire will help us to better understand how wearable computing can support people to connect to their families and friends. We kindly ask you to talk about your interactions with the prototype.</p>
                                <p>The questionnaire is composed of two sections:</p>
                                <ul>
                                    <li>the first section is about your interaction with the different functionalities and parts of the wearable;</li>
                                    <li>the second section is about your interactions with the community.</li>
                                </ul>
                                <p>Please select the answer that best describes your experience.</p>
                                <p>Remember: there are no right or wrong answers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">I understand and want to proceed</button><!--&nbsp;&nbsp;&nbsp;<a href="thanks.php"><button type="button" class="btn btn-danger btn-lg">No, I don't want to proceed</button></a>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Modal -->
	

<?php
include "functions.php";
?>
	
		
        <!-- BEGIN: SECTION#1 -->
        <div class="section">
            <div class="container">
                <h2>SECTION 1 – INTERACTION WITH WEARABLE </h2>
                <div class="info center">Please provide some information about your experience while interacting the prototype (here referred to as ‘the wearable’ - t-shirt plus technology (set of hardware and software connected to the clothes) plus shirt): 
                </div>
                
<?php              
                createSelectOneList("1.  How many photo requests I noticed:",array('','0','1','2','3','4','5','6','7','8','9','10 or more'),1,1);
                createSAM("2.  How I felt about having a GPS in the wearable showing my current location to a remote community:",1,2);				
				createSAM("3.  How I felt about having a camera in the wearable taking pictures and sending to a remote community:",1,3);				
				createSAM("4.  How I felt about having a remote community looking at my path in a map at the shared interactive display:",1,4);				
				createSAM("5.  How I felt about having a remote community looking at my photos along with my path in a map at the shared interactive display: ",1,5);
				createSAM("6.  How I felt about knowing the wearable has just one mode ON (LED always ON):",1,6);			
				createSAM("7.  How I felt about knowing the GPS showing where I am has just one mode ON (LED always ON): ",1,7);
				createSAM("8.  How I felt about being notified (LED) when a photo is automatically taken to be plotted along with my position in the map at the shared interactive display:",1,8);
				createSAM("9.  How I felt about being notified (LED) when a photo at the map is seen by somebody interacting with the shared display:",1,9);
				createSAM("10.  How I felt about being notified (LED) when somebody from the remote community interacts with the shared display to request a photo to be automatically taken:",1,10);
				createSAM("11.  How I felt about being notified (LED) when the photo requested by somebody from the community is taken to be plotted in the map with my current position on the shared display:",1,11); 
				createSAM("12.  How I felt about the level of attention requested by the wearable when I have NO control over the actions:",1,12);
				createSAM("13.  How I felt about the look related to fashion style of the wearable:",1,13);
				createSAM("14.  How comfortable I felt wearing that kind of cloth, shirt and size used for wearable:",1,14);
				createSAM("15.  How I felt using (control, movements, accessible) the wearable:",1,15); 
				createSAM("16.  How I felt using (temperature, weight, proximity to my body) the wearable:",1,16);

				createComment("17. Please use the space below for additional comments on the use of the wearable:",1,17);			
		
?>           
			

            </div>
        </div>
        
        
        <!-- END: SECTION#1 -->
        
		<!-- END: SECTION#2 -->
		
		<div class="section">
            <div class="container">
                <h2>SECTION 2 - INTERACTION WITH COMMUNITY THROUGH WEARABLE </h2>
                <div class="info center">Please provide some more information about your experience while interacting with the community using the prototype (here referred to as ‘the wearable’ - t-shirt plus technology (set of hardware and software connected to the clothes) plus shirt):
                </div>
<?php               
					createLikert5("1. I felt more connected to the community by sharing where I am.",2,1);
					createLikert5("2. I felt more connected to the community by sharing what I see.",2,2);
					createLikert5("3. I felt like I am sharing personal things with the community.",2,3);
					createLikert5("4. I felt safe knowing the community knows where I am.",2,4);
					createLikert5("5. I felt comfortable knowing the community sees where I am.",2,5);
					createLikert5("6. I felt useful by sharing information with the community.",2,6);

					createComment("7. Please use the space below for additional comments on the use of the wearable to interact with the community.",2,7);		
					
?>  
			
             
            </div>
        </div>
		<!-- END: SECTION#2 -->
		
		
        <div class="section center">
            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
        </div>
        <input type="hidden" id="participant_id" name="function" value="save">
    </form>
    <script src="components/jquery/1.11.1/jquery.min.js"></script>
    <script src="components/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#splashModal').modal('show');
            
            var participantid = getCookie("participant_id");
            
            if (participantid != "") {
                $('#participant_id').val(participantid);
            }
            $('#participant_id').change(function() {
                participantid = $('#participant_id').val();
                if (participantid != null) {
                    setCookie("participant_id", participantid, 365);
                }
            });
                            
            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays*24*60*60*1000));
                var expires = "expires="+d.toUTCString();
                document.cookie = cname + "=" + cvalue + "; " + expires;
            }

            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for(var i=0; i<ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1);
                    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
                }
                return "";
            }
            
            $('select').on('change', function() {
                var str = this.value;
                if (str.search('Other')>=0) { 
                $('<div style="margin-top:10px;" id="'+$(this).attr('id')+'-other"><label>Other:</label><input id="'+$(this).attr('id')+'-other" type="text" name="'+$(this).attr('name')+'-other" value="" class="form-control input-lg"></div>').insertAfter(this);
                } else {
                    $('#'+$(this).attr('id')+'-other').remove();
                }
            });
        });
        
        //Validate before submit
        /*$("#form").submit(function () {
            var valid = true;
            $('.warning').removeClass('warning');

            $('input').each(function () {
                if (!$(this).val().length != 0) {
                    valid = false;
                    $(this).parents('.question').addClass('warning');
                }
                if ($(this).is(':radio') && !$("input[type='radio'][name='" + $(this).attr('name') + "']:checked").length != 0) {
                    valid = false;
                    $(this).parents('.question').addClass('warning');
                }
            });
            $('option:selected').each(function () {
                if (!$(this).val().length != 0) {
                    valid = false;
                    $(this).parents('.question').addClass('warning');
                }
            });
            if ($('.warning').length > 0) {
                valid = false;
                alert("Please answer all the questions.");
                scrollTo('.question.warning');
            }
            return valid;
        });*/

        //Function to scroll
        function scrollTo(id) {
            $('html, body').stop().animate({
                'scrollTop': $(id).first().offset().top - 60
            }, 2000, 'swing', function () {});
        }
    </script>
</body>

</html>