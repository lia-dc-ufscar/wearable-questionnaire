<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <link rel="stylesheet" href="components/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <form action="bd.php" method="post" id="form">
        
        
        <!-- QUESTIONNARIE NAME: Change value attribute -->
        <input type="hidden" id="questionnarie_name" name="questionnarie_name" value="Questionnaire1">
        
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" onclick="scrollTo('body')">Questionnaire</a>
                </div>
                <div class="participant">
                    Participant # <span><input id="participant_id" name="participant_id" type="text" value=""><select id="questionnarie_stage" name="questionnarie_stage">
                                <option value="Pre-Questionnarie">Pre-Questionnarie</option>
                                <option value="Post-Questionnarie" selected>Post-Questionnarie</option>
                            </select></span>
                </div>
            </div>
        </nav>
        
        
        <!-- BEGIN: Modal -->
        <div class="modal fade" id="splashModal" tabindex="-1" role="dialog" aria-labelledby="splashModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <h1 class="modal-title" id="splashModalTitle">Questionnaire on your Interactions <br/>with the Prototype</h1>
                        <div class="container-fluid">

                            <div class="info">
                                <p>The questionnaire is composed of two sections:</p>
                                <ul>
                                    <li>the first one has three sets of five images and nine circles;</li>
                                    <li>the second one has five options ranging from strongly disagree to strongly agree.</li>
                                </ul>
                                <p>You should mark the one that is closest to what you feel. There are no right or wrong answers. Please give the response that best describes your experience.</p>
                            </div>
                            <div class="alert alert-warning" role="alert"><b>IMPORTANT DISCLAIMER:</b> The present questionnaire has been developed by researchers of The University of British Columbia, under the "A Study on Virtual Proxemics" research held at the Human Communication Technologies laboratory. The present establishment has not participated in the development of this survey and your answers will not be disclosed to its employees, managers or other party associated with its business.</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">I understand and wish to proceed</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Modal -->


        <!-- BEGIN: SECTION#1 -->
        <div class="section">
            <div class="container">
                <h2>SECTION 1</h2>
                <div class="info center">Please provide some information about your experience while interacting with the interactive display.
                </div>
                
                
                <!-- BEGIN: QUESTION#1 -->
                <div class="question">
                    <h3>1. First question (SAM):</h3>
                    <div>
                        <div class="card-title">CONTROL</div>
                        <div class="clearfix">
                            <div class="info-left">
                                Controlled
                                <br/> Influenced
                                <br/> Cared for
                                <br/> Fearful
                                <br/> Submissive
                            </div>
                            <div class="cards">
                                <span><img src="images/manikin-control-1.png" class="img-responsive"></span>
                                <span><img src="images/manikin-control-2.png" class="img-responsive"></span>
                                <span><img src="images/manikin-control-3.png" class="img-responsive"></span>
                                <span><img src="images/manikin-control-4.png" class="img-responsive"></span>
                                <span><img src="images/manikin-control-5.png" class="img-responsive"></span>
                            </div>
                            <div class="info-right">
                                In control
                                <br/> Influencer
                                <br/> Opinion make
                                <br/> Important
                                <br/> Dominant
                                <br/> Autonomous
                            </div>
                        </div>
                        <div class="radios">
                            <div class="radio">
                                <input id="section1-question1-control-value1" type="radio" name="section1-question1-control" value="1">
                                <label for="section1-question1-control-value1"></label>
                            </div>
                            <div class="radio">
                                <input id="section1-question1-control-value2" type="radio" name="section1-question1-control" value="2">
                                <label for="section1-question1-control-value2"></label>
                            </div>
                            <div class="radio">
                                <input id="section1-question1-control-value3" type="radio" name="section1-question1-control" value="3">
                                <label for="section1-question1-control-value3"></label>
                            </div>
                            <div class="radio">
                                <input id="section1-question1-control-value4" type="radio" name="section1-question1-control" value="4">
                                <label for="section1-question1-control-value4"></label>
                            </div>
                            <div class="radio">
                                <input id="section1-question1-control-value5" type="radio" name="section1-question1-control" value="5">
                                <label for="section1-question1-control-value5"></label>
                            </div>
                            <div class="radio">
                                <input id="section1-question1-control-value6" type="radio" name="section1-question1-control" value="6">
                                <label for="section1-question1-control-value6"></label>
                            </div>
                            <div class="radio">
                                <input id="section1-question1-control-value7" type="radio" name="section1-question1-control" value="7">
                                <label for="section1-question1-control-value7"></label>
                            </div>
                            <div class="radio">
                                <input id="section1-question1-control-value8" type="radio" name="section1-question1-control" value="8">
                                <label for="section1-question1-control-value8"></label>
                            </div>
                            <div class="radio">
                                <input id="section1-question1-control-value9" type="radio" name="section1-question1-control" value="9">
                                <label for="section1-question1-control-value9"></label>
                            </div>
                        </div>
                    </div>

                    <div class="card-title">SATISFACTION</div>
                    <div class="clearfix">
                        <div class="info-left">
                            Unhappy
                            <br/> Nervous
                            <br/> Irritated
                            <br/> Unsatisfied
                            <br/> Blue
                            <br/> Desperate
                        </div>
                        <div class="cards">
                            <span><img src="images/manikin-satisfaction-1.png" class="img-responsive"></span>
                            <span><img src="images/manikin-satisfaction-2.png" class="img-responsive"></span>
                            <span><img src="images/manikin-satisfaction-3.png" class="img-responsive"></span>
                            <span><img src="images/manikin-satisfaction-4.png" class="img-responsive"></span>
                            <span><img src="images/manikin-satisfaction-5.png" class="img-responsive"></span>
                        </div>
                        <div class="info-right">
                            Happy
                            <br/> Calm
                            <br/> Pleased
                            <br/> Satisfied
                            <br/> Confident
                            <br/> Optimistic
                            <br/> Hopeful
                        </div>
                    </div>
                    <div class="radios">
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value1" type="radio" name="section1-question1-satisfaction" value="1">
                            <label for="section1-question1-satisfaction-value1"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value2" type="radio" name="section1-question1-satisfaction" value="2">
                            <label for="section1-question1-satisfaction-value2"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value3" type="radio" name="section1-question1-satisfaction" value="3">
                            <label for="section1-question1-satisfaction-value3"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value4" type="radio" name="section1-question1-satisfaction" value="4">
                            <label for="section1-question1-satisfaction-value4"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value5" type="radio" name="section1-question1-satisfaction" value="5">
                            <label for="section1-question1-satisfaction-value5"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value6" type="radio" name="section1-question1-satisfaction" value="6">
                            <label for="section1-question1-satisfaction-value6"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value7" type="radio" name="section1-question1-satisfaction" value="7">
                            <label for="section1-question1-satisfaction-value7"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value8" type="radio" name="section1-question1-satisfaction" value="8">
                            <label for="section1-question1-satisfaction-value8"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-satisfaction-value9" type="radio" name="section1-question1-satisfaction" value="9">
                            <label for="section1-question1-satisfaction-value9"></label>
                        </div>
                    </div>
                    <div class="card-title">EXCITEMENT</div>
                    <div class="clearfix">
                        <div class="info-left">
                            Bored
                            <br/> Calm
                            <br/> Relaxed
                            <br/> Slow
                            <br/> Lazy
                            <br/> Sleppy
                        </div>
                        <div class="cards">
                            <span><img src="images/manikin-excitement-1.png" class="img-responsive"></span>
                            <span><img src="images/manikin-excitement-2.png" class="img-responsive"></span>
                            <span><img src="images/manikin-excitement-3.png" class="img-responsive"></span>
                            <span><img src="images/manikin-excitement-4.png" class="img-responsive"></span>
                            <span><img src="images/manikin-excitement-5.png" class="img-responsive"></span>
                        </div>
                        <div class="info-right">
                            Excited
                            <br/> Stimulated
                            <br/> Frenetic
                            <br/> Agitated
                        </div>
                    </div>
                    <div class="radios">
                        <div class="radio">
                            <input id="section1-question1-excitement-value1" type="radio" name="section1-question1-excitement" value="1">
                            <label for="section1-question1-excitement-value1"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-excitement-value2" type="radio" name="section1-question1-excitement" value="2">
                            <label for="section1-question1-excitement-value2"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-excitement-value3" type="radio" name="section1-question1-excitement" value="3">
                            <label for="section1-question1-excitement-value3"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-excitement-value4" type="radio" name="section1-question1-excitement" value="4">
                            <label for="section1-question1-excitement-value4"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-excitement-value5" type="radio" name="section1-question1-excitement" value="5">
                            <label for="section1-question1-excitement-value5"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-excitement-value6" type="radio" name="section1-question1-excitement" value="6">
                            <label for="section1-question1-excitement-value6"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-excitement-value7" type="radio" name="section1-question1-excitement" value="7">
                            <label for="section1-question1-excitement-value7"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-excitement-value8" type="radio" name="section1-question1-excitement" value="8">
                            <label for="section1-question1-excitement-value8"></label>
                        </div>
                        <div class="radio">
                            <input id="section1-question1-excitement-value9" type="radio" name="section1-question1-excitement" value="9">
                            <label for="section1-question1-excitement-value9"></label>
                        </div>
                    </div>
                </div>
                <hr/>
                <!-- END: QUESTION#1 -->
                
                
                <!-- BEGIN: QUESTION#2 -->
                <div class="question">
                    <h3>2. Second question (Select one):</h3>
                    <div class="likert-radios">
                        <div class="radio">
                            <input id="section1-question2-value1" type="radio" name="section1-question2" value="1">
                            <label for="section1-question2-value1">Strongly disagree</label>
                        </div>
                        <div class="radio">
                            <input id="section1-question2-value2" type="radio" name="section1-question2" value="2">
                            <label for="section1-question2-value2">Disagree</label>
                        </div>
                        <div class="radio">
                            <input id="section1-question2-value3" type="radio" name="section1-question2" value="3">
                            <label for="section1-question2-value3">Neutral</label>
                        </div>
                        <div class="radio">
                            <input id="section1-question2-value4" type="radio" name="section1-question2" value="4">
                            <label for="section1-question2-value4">Agree</label>
                        </div>
                        <div class="radio">
                            <input id="section1-question2-value5" type="radio" name="section1-question2" value="5">
                            <label for="section1-question2-value5">Strongly agree</label>
                        </div>
                    </div>
                </div>
                <hr/>
                <!-- END: QUESTION#2 -->
                
                
            </div>
        </div>
        
        
        <!-- END: SECTION#1 -->
        <div class="section">
            <div class="container">
                <h2>SECTION 2</h2>
                <div class="info center">Please provide some more information about your experience while interacting the prototype (here referred to as <b>‘the cat’</b>).
                </div>
                
                
                <!-- BEGIN: QUESTION#3 -->
                <div class="question">
                    <h3>3. Third question (Select one - list).</h3>
                    <div class="list-select row">
                        <div class="col-xs-7">
                            <label for="section2-question3">Some text here:</label>
                            <select id="section2-question3" name="section2-question3" class="form-control input-lg">
                                <option selected disabled></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr/>
                <!-- END: QUESTION#3 -->
                
                
                <!-- END: QUESTION#4 -->
                <div class="question">
                    <h3>4. Fourth question (Type something).</h3>
                    
                    <div class="row text-input">
                        <div class="col-xs-7">
                            <label for="section2-question4">Some text here:</label>
                            <input id="section2-question4" type="text" name="section2-question4" value="" placeholder="" class="form-control input-lg">
                        </div>
                    </div>
                </div>
                <hr/>
                <!-- END: QUESTION#4 -->
                
                
                <!-- END: QUESTION#5 -->
                <div class="question">
                    <h3>5. Fifth question (Likert 7).</h3>
                    <div class="likert-radios">
                        <div class="radio">
                            <input id="section2-question5-value1" type="radio" name="section2-question5" value="1">
                            <label for="section2-question5-value1">Very Strongly Disagree</label>
                        </div>
                        <div class="radio">
                            <input id="section2-question5-value2" type="radio" name="section2-question5" value="2">
                            <label for="section2-question5-value2">Strongly Disagree</label>
                        </div>
                        <div class="radio">
                            <input id="section2-question5-value3" type="radio" name="section2-question5" value="3">
                            <label for="section2-question5-value3">Mildly Disagree</label>
                        </div>
                        <div class="radio">
                            <input id="section2-question5-value4" type="radio" name="section2-question5" value="4">
                            <label for="section2-question5-value4">Neutral</label>
                        </div>
                        <div class="radio">
                            <input id="section2-question5-value5" type="radio" name="section2-question5" value="5">
                            <label for="section2-question5-value5">Mildly Agree</label>
                        </div>
                        <div class="radio">
                            <input id="section2-question5-value6" type="radio" name="section2-question5" value="6">
                            <label for="section2-question5-value6">Strongly agree</label>
                        </div>
                        <div class="radio">
                            <input id="section2-question5-value7" type="radio" name="section2-question5" value="7">
                            <label for="section2-question5-value7">Very Strongly Agree</label>
                        </div>
                    </div>
                </div>
                <hr/>
                <!-- END: QUESTION#5 -->
				
				
				
				<!-- BEGIN: QUESTION#6 -->
                <div class="question">
                    <h3>6. Please use the space below for additional comments on the use of the wearable to interact with the community. </h3>
                    <label for="section2-question15">Some text here:</label>
                    <div class="row text-input">
                        <div>
                           
                           	<textarea id="section2-question15" name="section2-question15" rows="7" cols="90" maxlength="990"></textarea>
							
						</div>
                    </div>
                </div>
               
            <!-- END: QUESTION#6 -->
                
                
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
        });
        
        //Validate before submit
        $("#form").submit(function () {
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
        });

        //Function to scroll
        function scrollTo(id) {
            $('html, body').stop().animate({
                'scrollTop': $(id).first().offset().top - 60
            }, 2000, 'swing', function () {});
        }
    </script>
</body>

</html>