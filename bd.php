<?php
$username = "";
$password = "";
$address = "localhost";
$database = "questionnaire_wearable";
header('Content-Type: text/html; charset=utf-8');
if(isset($_GET['function']) || isset($_POST['function'])) {  
     if (isset($_POST['function']) && $_POST['function'] == "save") {
        saveAnswers();
    }
}

class Answer{
    public $id = "";
    public $participant_id = "";
    public $participant_name = "";
    public $questionnarie_name = "";
    public $questionnarie_stage = "";
    public $section_id = "";
    public $question_id = "";
    public $question = "";
    public $answer_type = "";
    public $answer_value = "";
}


function saveAnswers() {  
    global $username;
    global $password;
    global $address;
    global $database;
    $participant_id = $_POST['participant_id'];
    $mysqli = new mysqli($address,$username,$password,$database);
    if (!$mysqli) {
    die('Error: ' . mysqli_error());
    }

    $mysqli->set_charset("utf8");
    foreach ($_POST as $field_name => $field_val) {
        $newAnswer = new Answer();
        $newAnswer->participant_id = $_POST['participant_id'];
        $newAnswer->questionnarie_name = $_POST['questionnarie_name'];
        $newAnswer->questionnarie_stage = $_POST['questionnarie_stage'];
        $newAnswer->section_id = '';
        $newAnswer->question_id = '';
        $newAnswer->question = '';
        $newAnswer->answer_type = '';
        $newAnswer->answer_value = '';
        
        if (strpos($field_name, 'section')>=0){
            $fields = explode("-", $field_name);
            if (isset ($fields[0])){
            $newAnswer->section_id = str_replace("section", "", $fields[0]);
            $newAnswer->section_id = (int)$newAnswer->section_id;
            }
            if (isset ($fields[1])){
            $newAnswer->question_id = str_replace("question", "", $fields[1]);
            $newAnswer->question_id = (int)$newAnswer->question_id;
            }
            
            if (count($fields) >= 3) {
                 $newAnswer->answer_type =$fields[2];
            }
            $newAnswer->answer_value = $field_val;
            
            if (isset($_POST['s'.$newAnswer->section_id.'-q'.$newAnswer->question_id])){
                $newAnswer->question = $_POST['s'.$newAnswer->section_id.'-q'.$newAnswer->question_id];
            }
                
            $query = "INSERT INTO answers(id, participant_id, questionnarie_name, questionnarie_stage, section_id, question_id, question, answer_type, answer_value) VALUES (NULL, '$newAnswer->participant_id', '$newAnswer->questionnarie_name', '$newAnswer->questionnarie_stage', '$newAnswer->section_id', '$newAnswer->question_id', '$newAnswer->question', '$newAnswer->answer_type', '$newAnswer->answer_value');"; 

            if ($newAnswer->question_id!=0 && mysqli_query($mysqli, $query)) {
                
            }
        }
    }  
    $mysqli->close();
    header("location:thanks.php");
}
?>
