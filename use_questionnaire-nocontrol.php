<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Use Questionnaire V2</title>
    <link rel="stylesheet" href="components/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <form action="bd.php" method="post" id="form">
        
        
        <!-- QUESTIONNARIE NAME: Change value attribute -->
        <input type="hidden" id="questionnarie_name" name="questionnarie_name" value="use_questionnaire_wearer-nocontrol">
        
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">&laquo;</a><a class="navbar-brand" href="#" onclick="scrollTo('body')">Use Questionnaire (No Control) (Post-Questionnaire)</a>
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
                                <p>This questionnaire will help us to better understand how wearable computing can support people to connect to their families and friends. We kindly ask you to talk about your interaction with the prototype.</p>
                                <p>The questionnaire is composed of two types of questions:</p>
                                <ul>
                                    <li>the first type has three sets of five images and nine circles;</li>
                                    <li>the second type has five options ranging from very strongly disagree to very strongly agree.</li>
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
                <h2>SECTION 1</h2>
                <div class="info center">Please provide some information about your experience while using the prototype (here referred to as ‘the wearable’ - t-shirt plus technology (set of hardware and software connected to the clothes) plus shirt): 
                </div>
 <?php
	createSAM("1.  How I generally felt wearing the wearable: ","1","1");
?>               
		
			<div class="info center">Please mark your level of agreement for each of the following statements: 
            </div>
<?php
	createLikert5("2. I felt the design of the wearable looked nice.","1","2");
	createLikert5("3. I felt everyone could see I was wearing something different.","1","3");
	createLikert5("4. I felt like I could control the wearable.","1","4");
	createLikert5("5. I felt like I could do things I normally do.","1","5");	
	createLikert5("6. I felt like I needed more feedback of what was happening. ","1","6");
	createLikert5("7. I found the weight of the wearable to be adequate. ","1","7");
	createLikert5("8. I felt like I could use the wearable for a long time.","1","8");
	createLikert5("9. I felt like the size of the wearable was appropriate.","1","9");
	createLikert5("10. I felt like all the different parts were well contained in the wearable. ","1","10");
	createLikert5("11. I felt like the shape of the wearable was adequate. ","1","11");
	createLikert5("12. I felt like the position of the different parts of the hardware on the wearable was appropriate. ","1","12");
	createLikert5("13. I felt the wearable thermal comfort adequate. ","1","13");
	createLikert5("14. I felt the different functionalities worked well together. ","1","14");
	createLikert5("15. I felt the different parts were well attached.","1","15");
	createLikert5("16. I felt like I need to pay minimal attention to the wearable. ","1","16");
	createLikert5("17. I felt the interactions with the wearable were simple.","1","17");
	createLikert5("18. I thought the wearable was attentive to changes in the environment around me. ","1","18");
	createLikert5("19. I felt easy moving my body while using the wearable.","1","19");
	createLikert5("20. I felt like all the parts were integrated into the clothing.","1","20");
	createLikert5("21. I always knew what each part did.","1","21");
	createLikert5("22. I thought the wearable communicated well what was happening.","1","22");
	createLikert5("23. I felt I could easily access all the parts necessary.","1","23");
	createLikert5("24. I did bump into things. ","1","24");
	
	createSAM("25. Independently of my interactions with others, this is how I felt about using the GPS feature of the wearable: ","1","25");
	createSAM("26. Independently of my interactions with others, this is how I felt about using the camera feature of the wearable: ","1","26");
	createSAM("27. Independently of my interactions with others, this is how I felt about the notification feature of the wearable: ","1","27");	

    createComment("28. Please use the space below for additional comments on using the wearable:","1","28");	
?>	
			
			   
            </div>
        </div>
        

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
        /* $("#form").submit(function () {
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