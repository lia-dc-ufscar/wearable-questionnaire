<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>PERCEIVED SOCIAL SUPPORT – WEARER</title>
    <link rel="stylesheet" href="components/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <form action="bd.php" method="post" id="form">
        
        
        <!-- QUESTIONNARIE NAME: Change value attribute -->
        <input type="hidden" id="questionnarie_name" name="questionnarie_name" value="perceived_social_support_wearer">
        
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">&laquo;</a><a class="navbar-brand" href="#" onclick="scrollTo('body')">Perceived Social Support - Wearer (Pre-Questionnaire)</a>
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
                                <p>The questionnaire is composed of two sections:</p>
                                <ul>
                                    <li>the first section is about you and things you do and like, not disclosing your identity;</li>
									<li>the second section is about how you feel about  being connected to them.</li>
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
                <h2>SECTION 1</h2>
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
                <h2>SECTION 2</h2>
				
                <div class="info">We are interested in how you feel about each one of the following social groups:
				</div>
					<ul>
                        <li>Significant Other - referred to as a special person, such as: partner, boy/girlfriend, husband/wife, friends with benefits;</li>
						<li>Immediate family;</li>
						<li>Extended family;</li>
						<li>Close friends;</li>
						<li>Friends;</li>
						<li>Acquaintances;</li>
						<li>Public.</li>
					</ul>
                <hr/>
		
<?php

		createLikert5NA("1. There is a special person who is around when I am in need.","2", "1");
		createLikert5NA("2. There is a special person with whom I can share my joys and sorrows.","2", "2");
		createLikert5NA("3. My immediate family really tries to help me.","2", "3");
		createLikert5NA("4. I get the emotional help and support I need from my immediate family.","2", "4");
		createLikert5NA("5. My family really tries to help me.","2", "5");
		createLikert5NA("6. I get the emotional help and support I need from my family.","2", "6");
		createLikert5NA("7. I have a special person who is a real source of comfort to me.","2", "7");
		createLikert5NA("8. My close friends really try to help me.","2", "8");
		createLikert5NA("9. I can count on my close friends when things go wrong.","2", "9");
		createLikert5NA("10. My friends really try to help me.","2", "10");
		createLikert5NA("11. I can count on my friends when things go wrong.","2", "11");
		createLikert5NA("12. My acquaintances really try to help me.","2", "12");
		createLikert5NA("13. I can count on my acquaintances when things go wrong.","2", "13");
		createLikert5NA("14. People in public really try to help me.","2", "14");
		createLikert5NA("15. I can count on people in public when things go wrong.","2", "15");
		createLikert5NA("16. I can talk about my problems with my immediate family.","2", "16");
		createLikert5NA("17. I can talk about my problems with my family.","2", "17");
		createLikert5NA("18. I have close friends with whom I can share my joys and sorrows.","2", "18");
		createLikert5NA("19. I have friends with whom I can share my joys and sorrows.","2", "19");
		createLikert5NA("20. I have acquaintances with whom I can share my joys and sorrows.","2", "20");
		createLikert5NA("21. I have people in public with whom I can share my joys and sorrows.","2", "21");
		createLikert5NA("22. There is a special person in my life who cares about my feelings.","2", "22");
		createLikert5NA("23. My immediate family is willing to help me make decisions.","2", "23");
		createLikert5NA("24. My family is willing to help me make decisions.","2", "24");
		createLikert5NA("25. I can talk about my problems with my close friends.","2", "25");
		createLikert5NA("26. I can talk about my problems with my friends.","2", "26");
		createLikert5NA("27. I can talk about my problems with my acquaintances.","2", "27");
		createLikert5NA("28. I can talk about my problems with people in public.","2", "28");	
		
		
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
