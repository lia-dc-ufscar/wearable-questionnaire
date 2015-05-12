<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>PERCEIVED SOCIAL SUPPORT – COMMUNITY/USER</title>
    <link rel="stylesheet" href="components/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <form action="bd.php" method="post" id="form">
        
        
        <!-- QUESTIONNARIE NAME: Change value attribute -->
        <input type="hidden" id="questionnarie_name" name="questionnarie_name" value="Perceived_social_support_community">
        
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">&laquo;</a><a class="navbar-brand" href="#" onclick="scrollTo('body')">Perceived Social Support Community (Pre-Questionnaire)</a>
                </div>
                <div class="participant">
                    Participant # <span><input id="participant_id" name="participant_id" type="text" value=""></span>
                    <input id="questionnarie_stage" name="questionnarie_stage" value="Pre-Questionnarie" type="hidden" />
                </div>
            </div>
        </nav>
        
        
        <!-- BEGIN: Modal -->
        <div class="modal fade" id="splashModal" tabindex="-1" role="dialog" aria-labelledby="splashModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        
                        <h1 class="modal-title" id="splashModalTitle">Study on wearable computing - Talking about family and friends</h1>
                        <div class="container-fluid">

                            <div class="info">
                                <p>This questionnaire will help us to better understand how wearable computing can support people to connect to their families and friends. We kindly ask you to talk about your relationship with them.</p>
                                <p>The questionnaire is composed of four sections:</p>
                                <ul>
                                    <li>the first section is about you and things you do and like, not disclosing your identity;</li>
                                    <li>the second section is about the wearer who selected me as his/her community representative;</li>
									<li>the third section is about how you feel being connected to them;</li>
									<li>the fourth section is about how you think they feel about being connected to you.</li>
                                </ul>
                                <p>Please select the answer that is closest to what you feel, that best describes your experience with that relationship.</p>
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
                <h2>SECTION 1 - DEMOGRAPHICS</h2>
                <div class="info center">Please provide some information about you, not disclosing your identity: 
                </div>

 
				<?php   
                createSelectOneRadio("1. Your gender identity:",array('Male','Female', 'Transgender', 'Other'),1,1);
                createSelectOneList("2. Your year of birth is:",array('before 1950','between 1950-1954', 'between 1955-1959', 'between 1960-1964', 'between 1965-1969', 'between 1970-1974', 'between 1975-1979', 'between 1980-1984', 'between 1985-1989', 'between 1990-1994', 'between 1995-1999', 'between 2000-2004'),1,2);
                createSelectOneList("3. Your highest level of completed education:",array('Elementary school','Completed some high school','High school graduate','Completed some College/Bachelor&#39s','College/Bachelor&#39s degree','Completed some postgraduate', 'Master&#39s degree', 'Doctorate, law or professional degree'),1,3);

                createSelectOneList("4. The religion you self-identify with is:",array('','No religion','Agnosticism','Atheism','Bahá&#39;í','Faith','Buddhism','Caodaism','Cheondoism','Christianity','Hinduism','Hoahaoism','Islam','Jainism','Judaism','Korean','Shamanism','Shinto','Sikhism','Tenriism','Wicca','Zoroastrianism','Other'),1,4);

                createSelectOneList("5. Your political identity is:",array('','No political identity','Very liberal','Liberal','Moderate','Conservative','Very conservative','Other'),1,5);

                createSelectOneList("6. Your ethnicity is:",array('','Aboriginal','African','African Canadian','Arab','Caucasian/White','Hispanic/Latino','Middle Eastern','Pacific Asian','South Asian','Other Asian','Other'),1,6);

                createSelectOneList("7. Your nationality is :",array('Afghan','Albanian','Algerian','American','Andorran','Angolan','Arab','Argentine','Armenian','Aromanian','Aruban','Australian','Austrian','Azeri','Bahamian','Bahraini','Bangladeshi','Barbadian','Belarusian','Belgian','Belizean','Bermudian','Boer','Bosniak','Brazilian','Breton','British','British Virgin Islander','Bulgarian','Burmese','Burkinabè','Burundian','Cambodian','Cameroonian','Canadian','Catalan','Cape Verdean','Chadian','Chilean','Chinese','Colombian','Comorian','Congolese','Croatian','Cuban','Cypriot','Czech','Dane','Dominican','Dutch','East Timorese','Ecuadorian','Egyptian','Emirati','English','Eritrean','Estonian','Ethiopian','Faroese','Finn','Finnish Swedish','Fijian','Filipino','French citizen','Georgian','German','Baltic German','Ghanaian','Gibraltar','Greek','Greek Macedonian','Grenadian','Guatemalan','Guianese (French)','Guinean','Guinea-Bissau national','Guyanese','Haitian','Honduran','Hong Kong Hungarian','Icelander','Indian','Indonesian','Iranians (Persians)','Irish','Israeli','Italian','Ivoirian','Jamaican','Japanese','Jordanian','Kazakh','Kenyan','Korean','Kosovo Albanian','Kurd','Kuwaiti','Lao','Latvian','Lebanese','Liberian','Libyan','Liechtensteiner','Lithuanian','Luxembourger','Macedonian','Malagasy','Malaysian','Malawian','Maldivian','Malian','Maltese','Manx','Mauritian','Mexican','Moldovan','Moroccan','Mongolian','Montenegrin','Namibian','Nepalese','New Zealander','Nicaraguan','Nigerien','Nigerian','Norwegian','Pakistani','Palauan','Palestinian','Panamanian','Papua New Guinean','Paraguayan','Peruvian','Pole','Portuguese','Puerto Rican','Quebecer','Réunionnai','Romanian','Russian','Rwandan','Salvadoran','São Tomé and Príncipe','Saudi','Scot','Senegalese','Serb','Sierra Leonean','Singaporean','Slovak','Slovene','Somali','South','African','Spaniard','Sri Lankan','St Lucian','Sudanese','Surinamese','Swede','Swis','Syrian','Taiwanese','Tanzanian','Thai','Tibetan','Tobagonian','Trinidadian','Tunisian','Turk','Tuvaluan','Ugandan','Ukrainian','Uruguayan','Uzbek','Vanuatuan','Venezuelan','Vietnamese','Welsh','Yemeni','Zambian','Zimbabwean'),1,7);

                createSelectOneList("8. Your first language is:",array('Arabic (Standard Arabic)','Bengali','English','French','German','Hindi','Italian','Japanese','Javanese','Kannada','Korean','Malay','Mandarin','Marathi','Panjabi','Portuguese','Russian','Spanish','Tamil','Telugu','Turkish','Urdu','Vietnamese','Western','Wu (Shanghainese)','Yue (Cantonese)','Other'),1,8);
                ?> 
            </div>
        </div>
        <!-- END: SECTION#1 -->
			
		
		<!-- BEGIN: SECTION#2 -->
        <div class="section">
            <div class="container">
                <h2>SECTION 2 – PERCEIVED SOCIAL SUPPORT (1/3)</h2>
                <div class="info center">We are interested in how you feel about the wearer who selected you as his/her community. We will not disclose this information to him/her, only the research group will see this information once it has been properly anonymized.
                </div>
<?php   
                createSelectOneRadioList("1. I think that the wearer who selected me as his/her community is my:",array('SO (Significant Other: partner – boy/girlfriend – husband/wife – friends with benefits)','Immediate family', 'Extended family', 'Close friends', 'Friends', 'Acquaintances', 'Public/Stranger'),2,1);
                
?>                   
                
            </div>
        </div>
		<!-- END: SECTION#2 -->
		
		
		<!-- BEGIN: SECTION#3 -->
		<div class="section">
            <div class="container">
                <h2>SECTION 3 - PERCEIVED SOCIAL SUPPORT (2/3)</h2>
                <div class="info center">Read each statement carefully and please indicate how <b>they make you feel</b>:
                </div>
		
<?php

	createLikert5("1. S/he is a special person who is around when I am in need. ","3","1");
	createLikert5("2. S/he is a special person with whom I can share my joys and sorrows.","3","2");
	createLikert5("3. S/he really tries to help me.","3","3");
	createLikert5("4. I have only met him/her a couple of times.","3","4");
	createLikert5("5. I get the emotional help and support I need from him/her.","3","5");
	createLikert5("6. S/he is a real source of comfort to me.","3","6");
	createLikert5("7. I have never met him/her.","3","7");
	createLikert5("8. I can count on him/her when things go wrong.","3","8");
	createLikert5("9. I would ask him/her for help.","3","9");
	createLikert5("10. I can talk about my problems with him/her.","3","10");
	createLikert5("11. I feel comfortable sharing my thoughts and feelings with him/her","3","11");
	createLikert5("12. S/he cares about my feelings.","3","12");
	createLikert5("13. S/he is willing to help me make decisions.","3","13");	

?>   		
		
		    </div>
        </div>
		<!-- END: SECTION#3 -->
		
		<!-- BEGIN: SECTION#4 -->
		<div class="section">
            <div class="container">
                <h2>SECTION 4 - PERCEIVED SOCIAL SUPPORT (3/3)</h2>
                <div class="info center">Read each statement carefully and please indicate <b>how you think you make them feel</b>:
                </div>
<?php				
	
	createLikert5("1. I am a special person who is around when s/he is in need.","4","1");
	createLikert5("2. I am a special person with whom s/he can share his/her joys and sorrows.","4","2");
	createLikert5("3. I really try to help him/her.","4","3");
	createLikert5("4. S/he has only met me a couple of times.","4","4");
	createLikert5("5. S/he gets the emotional help and support s/he needs from me.","4","5");
	createLikert5("6. I am a real source of comfort to him/her.","4","6");
	createLikert5("7. S/he has never met me.","4","7");
	createLikert5("8. S/he can count on me when things go wrong.","4","8");
	createLikert5("9. S/he would ask me for help.","4","9");
	createLikert5("10. S/he can talk about his/her problems with me.","4","10");
	createLikert5("11. S/he does feel comfortable sharing his/her thoughts and feelings with me.","4","11");
	createLikert5("12. I care about his/her feelings.","4","12");
	createLikert5("13. I am willing to help him/her make decisions.","4","13");
				
?> 
	
		   </div>
        </div>
		<!-- END: SECTION#4 -->
		
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
                if (str == 'Other') { 
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