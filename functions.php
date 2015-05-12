<?php
function createSAM($text,$section,$questionnumber) {
$return_text = <<<EOT
<!-- BEGIN: QUESTION#$questionnumber -->
<input id="s$section-q$questionnumber" type="hidden" name="s$section-q$questionnumber" value="$text">
<div class="question">
    <h3>$text</h3>
    <div>
        <div class="card-title">CONTROL</div>
        <div class="clearfix">
            <div class="info-left">
                &nbsp;
            </div>
            <div class="cards">
                <span><img src="images/manikin-control-1.png" class="img-responsive"></span>
                <span><img src="images/manikin-control-2.png" class="img-responsive"></span>
                <span><img src="images/manikin-control-3.png" class="img-responsive"></span>
                <span><img src="images/manikin-control-4.png" class="img-responsive"></span>
                <span><img src="images/manikin-control-5.png" class="img-responsive"></span>
            </div>
            <div class="info-right">
                &nbsp;
            </div>
        </div>
        <div class="radios">
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value1" type="radio" name="section$section-question$questionnumber-control" value="1">
                <label for="section$section-question$questionnumber-control-value1"></label>
            </div>
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value2" type="radio" name="section$section-question$questionnumber-control" value="2">
                <label for="section$section-question$questionnumber-control-value2"></label>
            </div>
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value3" type="radio" name="section$section-question$questionnumber-control" value="3">
                <label for="section$section-question$questionnumber-control-value3"></label>
            </div>
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value4" type="radio" name="section$section-question$questionnumber-control" value="4">
                <label for="section$section-question$questionnumber-control-value4"></label>
            </div>
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value5" type="radio" name="section$section-question$questionnumber-control" value="5">
                <label for="section$section-question$questionnumber-control-value5"></label>
            </div>
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value6" type="radio" name="section$section-question$questionnumber-control" value="6">
                <label for="section$section-question$questionnumber-control-value6"></label>
            </div>
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value7" type="radio" name="section$section-question$questionnumber-control" value="7">
                <label for="section$section-question$questionnumber-control-value7"></label>
            </div>
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value8" type="radio" name="section$section-question$questionnumber-control" value="8">
                <label for="section$section-question$questionnumber-control-value8"></label>
            </div>
            <div class="radio">
                <input id="section$section-question$questionnumber-control-value9" type="radio" name="section$section-question$questionnumber-control" value="9">
                <label for="section$section-question$questionnumber-control-value9"></label>
            </div>
        </div>
    </div>

    <div class="card-title">SATISFACTION</div>
    <div class="clearfix">
        <div class="info-left">
            &nbsp;
        </div>
        <div class="cards">
            <span><img src="images/manikin-satisfaction-1.png" class="img-responsive"></span>
            <span><img src="images/manikin-satisfaction-2.png" class="img-responsive"></span>
            <span><img src="images/manikin-satisfaction-3.png" class="img-responsive"></span>
            <span><img src="images/manikin-satisfaction-4.png" class="img-responsive"></span>
            <span><img src="images/manikin-satisfaction-5.png" class="img-responsive"></span>
        </div>
        <div class="info-right">
            &nbsp;
        </div>
    </div>
    <div class="radios">
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value1" type="radio" name="section$section-question$questionnumber-satisfaction" value="1">
            <label for="section$section-question$questionnumber-satisfaction-value1"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value2" type="radio" name="section$section-question$questionnumber-satisfaction" value="2">
            <label for="section$section-question$questionnumber-satisfaction-value2"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value3" type="radio" name="section$section-question$questionnumber-satisfaction" value="3">
            <label for="section$section-question$questionnumber-satisfaction-value3"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value4" type="radio" name="section$section-question$questionnumber-satisfaction" value="4">
            <label for="section$section-question$questionnumber-satisfaction-value4"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value5" type="radio" name="section$section-question$questionnumber-satisfaction" value="5">
            <label for="section$section-question$questionnumber-satisfaction-value5"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value6" type="radio" name="section$section-question$questionnumber-satisfaction" value="6">
            <label for="section$section-question$questionnumber-satisfaction-value6"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value7" type="radio" name="section$section-question$questionnumber-satisfaction" value="7">
            <label for="section$section-question$questionnumber-satisfaction-value7"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value8" type="radio" name="section$section-question$questionnumber-satisfaction" value="8">
            <label for="section$section-question$questionnumber-satisfaction-value8"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-satisfaction-value9" type="radio" name="section$section-question$questionnumber-satisfaction" value="9">
            <label for="section$section-question$questionnumber-satisfaction-value9"></label>
        </div>
    </div>
    <div class="card-title">EXCITEMENT</div>
    <div class="clearfix">
        <div class="info-left">
            &nbsp;
        </div>
        <div class="cards">
            <span><img src="images/manikin-excitement-1.png" class="img-responsive"></span>
            <span><img src="images/manikin-excitement-2.png" class="img-responsive"></span>
            <span><img src="images/manikin-excitement-3.png" class="img-responsive"></span>
            <span><img src="images/manikin-excitement-4.png" class="img-responsive"></span>
            <span><img src="images/manikin-excitement-5.png" class="img-responsive"></span>
        </div>
        <div class="info-right">
            &nbsp;
        </div>
    </div>
    <div class="radios">
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value1" type="radio" name="section$section-question$questionnumber-excitement" value="1">
            <label for="section$section-question$questionnumber-excitement-value1"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value2" type="radio" name="section$section-question$questionnumber-excitement" value="2">
            <label for="section$section-question$questionnumber-excitement-value2"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value3" type="radio" name="section$section-question$questionnumber-excitement" value="3">
            <label for="section$section-question$questionnumber-excitement-value3"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value4" type="radio" name="section$section-question$questionnumber-excitement" value="4">
            <label for="section$section-question$questionnumber-excitement-value4"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value5" type="radio" name="section$section-question$questionnumber-excitement" value="5">
            <label for="section$section-question$questionnumber-excitement-value5"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value6" type="radio" name="section$section-question$questionnumber-excitement" value="6">
            <label for="section$section-question$questionnumber-excitement-value6"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value7" type="radio" name="section$section-question$questionnumber-excitement" value="7">
            <label for="section$section-question$questionnumber-excitement-value7"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value8" type="radio" name="section$section-question$questionnumber-excitement" value="8">
            <label for="section$section-question$questionnumber-excitement-value8"></label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-excitement-value9" type="radio" name="section$section-question$questionnumber-excitement" value="9">
            <label for="section$section-question$questionnumber-excitement-value9"></label>
        </div>
    </div>
</div>
<hr/>
<!-- END: QUESTION#$questionnumber -->
EOT;
echo $return_text;
}


function createLikert5($text,$section,$questionnumber) {
$return_text = <<<EOT
<!-- BEGIN: QUESTION#$questionnumber -->
<input id="s$section-q$questionnumber" type="hidden" name="s$section-q$questionnumber" value="$text">
<div class="question">
    <h3>$text</h3>
    <div class="likert-radios">
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value1" type="radio" name="section$section-question$questionnumber-likert5" value="1">
            <label for="section$section-question$questionnumber-likert5-value1">Strongly disagree</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value2" type="radio" name="section$section-question$questionnumber-likert5" value="2">
            <label for="section$section-question$questionnumber-likert5-value2">Disagree</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value3" type="radio" name="section$section-question$questionnumber-likert5" value="3">
            <label for="section$section-question$questionnumber-likert5-value3">Neutral</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value4" type="radio" name="section$section-question$questionnumber-likert5" value="4">
            <label for="section$section-question$questionnumber-likert5-value4">Agree</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value5" type="radio" name="section$section-question$questionnumber-likert5" value="5">
            <label for="section$section-question$questionnumber-likert5-value5">Strongly agree</label>
        </div>
    </div>
</div>
<hr/>
<!-- END: QUESTION#$questionnumber -->
EOT;
echo $return_text;
}


function createLikert5NA($text,$section,$questionnumber) {
$return_text = <<<EOT
<!-- BEGIN: QUESTION#$questionnumber -->
<input id="s$section-q$questionnumber" type="hidden" name="s$section-q$questionnumber" value="$text">
<div class="question">
    <h3>$text</h3>
    <div class="likert-radios">
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value1" type="radio" name="section$section-question$questionnumber-likert5" value="1">
            <label for="section$section-question$questionnumber-likert5-value1">Strongly disagree</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value2" type="radio" name="section$section-question$questionnumber-likert5" value="2">
            <label for="section$section-question$questionnumber-likert5-value2">Disagree</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value3" type="radio" name="section$section-question$questionnumber-likert5" value="3">
            <label for="section$section-question$questionnumber-likert5-value3">Neutral</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value4" type="radio" name="section$section-question$questionnumber-likert5" value="4">
            <label for="section$section-question$questionnumber-likert5-value4">Agree</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-value5" type="radio" name="section$section-question$questionnumber-likert5" value="5">
            <label for="section$section-question$questionnumber-likert5-value5">Strongly agree</label>
        </div>
        <div class="radio">
            <input id="section$section-question$questionnumber-likert5-valueNA" type="radio" name="section$section-question$questionnumber-likert5" value="NA">
            <label for="section$section-question$questionnumber-likert5-valueNA">Not Applicable</label>
        </div>
    </div>
</div>
<hr/>
<!-- END: QUESTION#$questionnumber -->
EOT;
echo $return_text;
}

function createComment($text,$section,$questionnumber) {
$return_text = <<<EOT
<!-- END: QUESTION#$questionnumber -->
<input id="s$section-q$questionnumber" type="hidden" name="s$section-q$questionnumber" value="$text">
<div class="question">
    <h3>$text</h3>
    <div class="row text-input">
        <div class="col-xs-10">
            <label for="section$section-question$questionnumber-comment"></label>
            <textarea id="section$section-question$questionnumber-comment" type="text" name="section2-question$questionnumber-comment" value="" placeholder="" class="form-control input-lg col-xs-12" rows="7" cols="90" maxlength="990"></textarea>
        </div>
    </div>
</div>
<hr/>
<!-- END: QUESTION#$questionnumber -->
EOT;
echo $return_text;
}

function createSelectOneList($text,$list,$section,$questionnumber) {
$listitems = "";
foreach ($list as $value) {
    $listitems .= "<option value=\"$value\">".$value."</option>";
} 
$return_text = <<<EOT
<!-- END: QUESTION#$questionnumber -->
<input id="s$section-q$questionnumber" type="hidden" name="s$section-q$questionnumber" value="$text">
<div class="question">
    <h3>$text</h3>
    <div class="list-select row">
        <div class="col-xs-7">
            <select id="section$section-question$questionnumber-list" name="section$section-question$questionnumber-list" class="form-control input-lg">
                <option selected disabled></option>$listitems
            </select>
        </div>
    </div>
</div>
<hr/>
<!-- END: QUESTION#$questionnumber -->
EOT;
echo $return_text;
}


function createSelectOneRadio($text,$list,$section,$questionnumber) {
$listitems = "";
foreach ($list as $value) {
    $listitems .= "<div class=\"radio\"><input id=\"section$section-question$questionnumber-radiolist-$value\" type=\"radio\" name=\"section$section-question$questionnumber-radiolist\" value=\"$value\"><label for=\"section$section-question$questionnumber-radiolist-$value\">$value</label></div>";
} 
$return_text = <<<EOT
<!-- BEGIN: QUESTION#$questionnumber -->
<input id="s$section-q$questionnumber" type="hidden" name="s$section-q$questionnumber" value="$text">
<div class="question">
    <h3>$text</h3>
    <div class="likert-radios">
        $listitems
    </div>
</div>
<hr/>
<!-- END: QUESTION#$questionnumber -->
EOT;
echo $return_text;
}

function createSelectOneRadioList($text,$list,$section,$questionnumber) {
$listitems = "";
foreach ($list as $value) {
    $listitems .= "<div class=\"radio\"><input id=\"section$section-question$questionnumber-radiolist-$value\" type=\"radio\" name=\"section$section-question$questionnumber-radiolist\" value=\"$value\"><label for=\"section$section-question$questionnumber-radiolist-$value\">$value</label></div><br/>";
} 
$return_text = <<<EOT
<!-- BEGIN: QUESTION#$questionnumber -->
<input id="s$section-q$questionnumber" type="hidden" name="s$section-q$questionnumber" value="$text">
<div class="question">
    <h3>$text</h3>
    <div class="likert-radios">
        $listitems
    </div>
</div>
<hr/>
<!-- END: QUESTION#$questionnumber -->
EOT;
echo $return_text;
}

function createInputText($text,$section,$questionnumber) {
$return_text = <<<EOT
<!-- END: QUESTION#$questionnumber -->
<input id="s$section-q$questionnumber" type="hidden" name="s$section-q$questionnumber" value="$text">
<div class="question">
    <h3>$text</h3>
    <div class="row text-input">
        <div class="col-xs-7">
            <input id="section$section-question$questionnumber-text" type="text" name="section$section-question$questionnumber-text" value="" placeholder="" class="form-control input-lg">
        </div>
    </div>
</div>
<hr/>
<!-- END: QUESTION#$questionnumber -->
EOT;
echo $return_text;
}


?>