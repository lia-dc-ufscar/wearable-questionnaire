<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>INTERACTION_QUESTIONNAIRE_COMMUNITY</title>
    <link rel="stylesheet" href="components/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <form action="bd.php" method="post" id="form">
        
        
        <!-- QUESTIONNARIE NAME: Change value attribute -->
        <input type="hidden" id="questionnarie_name" name="questionnarie_name" value="interaction_questionnaire_community-v2">
        
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">&laquo;</a><a class="navbar-brand" href="#" onclick="scrollTo('body')">Interaction Questionnaire - Community (Post-Questionnaire)</a>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="modal-title" id="splashModalTitle">Study on wearable computing - Talking about your experience with the Prototype</h1>
                        <div class="container-fluid">

                            <div class="info">
                                <p>This questionnaire will help us to better understand how wearable computing can support people to connect to their families and friends. We kindly ask you to talk about your interaction with the prototype.</p>
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
                        <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">I understand and want to proceed</button><!-- &nbsp;&nbsp;&nbsp;<a href="thanks.php"><button type="button" class="btn btn-danger btn-lg">No, I don't want to proceed</button></a>-->
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
                <h2>SECTION 1 – INTERACTION WITH DISPLAY</h2>
                <div class="info center">Please provide some information about your experience while interacting with the interactive display: 
                </div>
<?php
					createSAM("1.  How I felt about seeing the location of the wearer on the map:",1,1);
					createSAM("2.  How I felt about being able to see the wearer’s photos:",1,2);
					createSAM("3.  How I felt about seeing where the wearer’s photos were taken:",1,3);
					createSAM("4.  How I felt about being able to request photos from the wearer:",1,4);
					createSAM("5.  How I felt about seeing the photos I requested:",1,5);
					createSAM("6.  How I felt about the camera being unavailable to attend to another photo request:",1,6);
					createSAM("7.  How I generally felt about interacting with the wearer using the shared display:",1,7);

                    createComment("8. Please use the space below for additional comments on the use of the display:",1,8);	
?>
				
            </div>
        </div>
        
        
        <!-- END: SECTION#1 -->
		
		<!-- BEGIN: SECTION#2 -->
		
        <div class="section">
            <div class="container">
                <h2>SECTION 2 - INTERACTION WITH WEARABLE THROUGH DISPLAY </h2>
                <div class="info center">Please provide some more information about your experience while interacting with the wearer:
                </div>
<?php
					createLikert5("1. I felt connected to the wearer by seeing where s/he is.",2,1);
					createLikert5("2. I felt connected to the wearer by seeing his/her photos.",2,2);
					createLikert5("3. I liked to interact with the wearer.",2,3);
					createLikert5("4. I felt ease to see where the wearer was.",2,4);
					createLikert5("5. I felt ease to see photos the wearer took.",2,5);					
					createLikert5("6. I felt ease when requesting photos from the wearer.",2,6);
					createLikert5("7. I felt like I was interacting with the wearer.",2,7);
					createLikert5("8. I felt like the wearer was interacting with me.",2,8);
					
					createComment("9. Please use the space below for additional comments on the use of the display to interact with the wearer:",2,9);					
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