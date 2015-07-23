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
     if (isset($_POST['function']) && $_POST['function'] == "export") {
        exportAnswers();
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


function exportAnswers() {  
    global $username;
    global $password;
    global $address;
    global $database;
    $mysqli = new mysqli($address,$username,$password,$database);
    if (!$mysqli) {
    die('Error: ' . mysqli_error());
    }

    $mysqli->set_charset("utf8");
    $firstline = true;
    $sql = "SELECT DISTINCT participant_id, questionnarie_name, questionnarie_stage FROM answers WHERE questionnarie_name='".$_POST['questionnarie_name']."' AND participant_id!='' ORDER BY participant_id ASC, questionnarie_name ASC, questionnarie_stage ASC";
    $questionnarie_name = $_POST['questionnarie_name'];
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {

        $newAnswer = new Answer();
        $newAnswer->participant_id = "";
        $newAnswer->section_id = 0;
        $newSheet = false;
        while($row = $result->fetch_assoc()) {
            $participant_id = $row["participant_id"];
            $sqlSAM = "SELECT DISTINCT a.participant_id, a.section_id, a.question_id, a.question, (SELECT DISTINCT sc1.answer_value FROM answers sc1 WHERE sc1.questionnarie_name='".$questionnarie_name."' AND sc1.participant_id='".$participant_id."' AND a.question=sc1.question AND sc1.answer_type='control' ORDER BY  sc1.participant_id ASC, sc1.questionnarie_name ASC, sc1.questionnarie_stage ASC LIMIT 1) as control, (SELECT DISTINCT sc2.answer_value FROM answers sc2 WHERE sc2.questionnarie_name='".$questionnarie_name."' AND sc2.participant_id='".$participant_id."' AND a.question=sc2.question AND sc2.answer_type='satisfaction' ORDER BY sc2.participant_id ASC, sc2.questionnarie_name ASC, sc2.questionnarie_stage ASC LIMIT 1) as satisfaction, (SELECT DISTINCT sc3.answer_value FROM answers sc3 WHERE sc3.questionnarie_name='".$questionnarie_name."' AND sc3.participant_id='".$participant_id."' AND a.question=sc3.question AND sc3.answer_type='excitement' ORDER BY sc3.participant_id ASC, sc3.questionnarie_name ASC, sc3.questionnarie_stage ASC LIMIT 1) as excitement FROM answers a WHERE a.questionnarie_name='".$questionnarie_name."' AND a.participant_id='".$participant_id."' AND (a.answer_type='excitement' OR a.answer_type='satisfaction' OR a.answer_type='control') ORDER BY a.participant_id ASC, a.questionnarie_name ASC, a.questionnarie_stage ASC";
            $resultSAM = $mysqli->query($sqlSAM);
            //echo $sqlSAM."<br/><br/><br/>";
            //echo '<table class="table2excel" id="'. $row["participant_id"].'" >';
            echo '<table class="table2excel table table-bordered" id="'. $participant_id.'">';
            $firstline = true;
            if ($resultSAM->num_rows > 0) {
                
                
                while($rowSAM = $resultSAM->fetch_assoc()) {
                    $averageSAM = ((int)$rowSAM['control'] + (int)$rowSAM['satisfaction'] + (int)$rowSAM['excitement'])/3;
                    if (strlen($rowSAM['question'])>0 && $averageSAM != "0") {
                        if ($firstline) {
                            echo '<tr><td width="300px;"></td><td width="50px;" data-style="Bold">Control</td><td width="50px;" data-style="Bold">Satisfaction</td><td width="50px;" data-style="Bold">Excitement</td><td width="50px;" data-style="Bold">Average</td></tr>';
                            $firstline = false;
                        }
                        echo '<tr><td width="300px;">'.$rowSAM['question'].'</td><td width="50px;" data-type="Number" data-value="' . $rowSAM['control']. '">'.$rowSAM['control'].'</td><td width="50px;" data-type="Number" data-value="' . $rowSAM['satisfaction']. '">'.$rowSAM['satisfaction'].'</td><td width="50px;" data-type="Number" data-value="' . $rowSAM['excitement']. '">'.$rowSAM['excitement'].'</td><td width="50px;" data-type="Number" data-value="' . $averageSAM. '">'.$averageSAM.'</td></tr>';
                    }
                }
            }
            
            $sqlLIKERT = "SELECT DISTINCT a.participant_id, a.section_id, a.question_id, a.question, a.answer_value FROM answers a WHERE a.questionnarie_name='".$questionnarie_name."' AND a.participant_id='". $participant_id."' AND a.answer_type='likert5' ORDER BY a.participant_id ASC, a.questionnarie_name ASC, a.questionnarie_stage ASC";
            $resultLIKERT = $mysqli->query($sqlLIKERT);
            //echo $sqlLIKERT."<br/><br/><br/>";
            
            if ($resultLIKERT->num_rows > 0) {
                if (!$firstline) {
                    echo '<tr><td width="300px;"></td><td width="50px;" data-style="Bold"></td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                }
                echo '<tr><td width="300px;"></td><td width="50px;" data-style="Bold">Likert</td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                $firstline = false;
                while($rowLIKERT = $resultLIKERT->fetch_assoc()) {
                    if ($rowLIKERT['answer_value'] == 1) {
                       $answer_value = "Strongly disagree";
                    } elseif ($rowLIKERT['answer_value'] == 2) {
                       $answer_value = "Disagree";
                    } elseif ($rowLIKERT['answer_value'] == 3) {
                       $answer_value = "Neutral";
                    } elseif ($rowLIKERT['answer_value'] == 4) {
                       $answer_value = "Agree";
                    } elseif ($rowLIKERT['answer_value'] == 5) {
                       $answer_value = "Strongly Agree";
                    }
                    echo '<tr><td width="300px;">'.$rowLIKERT['question'].'</td><td width="50px;">'.$answer_value.'</td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                }
                
            }
            
            $sqlLIST = "SELECT DISTINCT a.participant_id, a.section_id, a.question_id, a.question, a.answer_value FROM answers a WHERE a.questionnarie_name='".$questionnarie_name."' AND a.participant_id='".$participant_id."' AND (a.answer_type='radiolist' OR a.answer_type='list' OR a.answer_type='comment') ORDER BY a.participant_id ASC, a.questionnarie_name ASC, a.questionnarie_stage ASC";
            $resultLIST = $mysqli->query($sqlLIST);
            //echo $sqlLIST."<br/><br/><br/>";
            
            if ($resultLIST->num_rows > 0) {
                if (!$firstline) {
                    echo '<tr><td width="300px;"></td><td width="50px;" data-style="Bold"></td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                }
                echo '<tr><td width="300px;"></td><td width="50px;" data-style="Bold">List</td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                $firstline = false;
                while($rowLIST = $resultLIST->fetch_assoc()) {
                    echo '<tr><td width="300px;">'.$rowLIST['question'].'</td><td width="50px;">'.$rowLIST['answer_value'].'</td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                }
            }
            
            $sqlOTHERS = "SELECT DISTINCT a.participant_id, a.section_id, a.question_id, a.question, a.answer_value FROM answers a WHERE a.questionnarie_name='".$questionnarie_name."' AND a.participant_id='".$participant_id."' AND a.answer_type!='likert5' AND a.answer_type!='satisfaction' AND a.answer_type!='excitement' AND a.answer_type!='control' AND a.answer_type!='radiolist' AND a.answer_type!='list' AND a.answer_type!='comment' ORDER BY a.participant_id ASC, a.questionnarie_name ASC, a.questionnarie_stage ASC";
            $resultOTHERS = $mysqli->query($sqlOTHERS);
            //echo $sqlOTHERS."<br/><br/><br/>";
            
            if ($resultOTHERS->num_rows > 0) {
                if (!$firstline) {
                    echo '<tr><td width="300px;"></td><td width="50px;" data-style="Bold"></td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                }
                echo '<tr><td width="300px;"></td><td width="50px;" data-style="Bold">Others</td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                $firstline = false;
                while($rowOTHERS = $resultOTHERS->fetch_assoc()) {
                    echo '<tr><td width="300px;">'.$rowOTHERS['question'].'</td><td width="50px;">'.$rowOTHERS['answer_value'].'</td><td width="50px;"></td><td width="50px;"></td><td width="50px;"></td></tr>';
                }
            }
        }
        echo '</table>';
        
    } else {
        echo '<javascript>alert("No results!");</javascript>';
    }
    $mysqli->close();     
}

function exportAnswers2() {  
    global $username;
    global $password;
    global $address;
    global $database;
    $mysqli = new mysqli($address,$username,$password,$database);
    if (!$mysqli) {
    die('Error: ' . mysqli_error());
    }

    $mysqli->set_charset("utf8");
    $sql = "SELECT DISTINCT id, participant_id, questionnarie_name, questionnarie_stage, section_id, question_id, question, answer_type, answer_value FROM answers WHERE questionnarie_name='".$_POST['questionnarie_name']."' AND participant_id!='' AND question!='' ORDER BY participant_id ASC, questionnarie_name ASC, questionnarie_stage ASC, answer_type ASC, section_id ASC, question_id ASC";
    $result = $mysqli->query($sql);
    ;
    if ($result->num_rows > 0) {

        $newAnswer = new Answer();
        $newAnswer->participant_id = "";
        $newAnswer->section_id = 0;
        $newSheet = false;
        while($row = $result->fetch_assoc()) {
            if ($newSheet != true || strlen($row["participant_id"]) > 0 && $newAnswer->participant_id != $row["participant_id"])
            {
                if ($newSheet) {
                    echo '</table><br/><br/>';
                }
                //echo '<table class="table2excel table table-bordered" id="'. $row["participant_id"].'">';
                echo '<table class="table2excel" id="'. $row["participant_id"].'">';
                echo '<tr><td width="200px;" data-style="Bold"><b>' . $row["questionnarie_name"]. ' (' . $row["questionnarie_stage"]. ')</b></td><td width="300px;">Participant ID: ' . $row["participant_id"]. '</td></tr>';
                $newAnswer->participant_id = $row["participant_id"];
                $newSheet = true;
            }
            if ($row["section_id"] != "" && (int)$row["section_id"] > 0 && (int)$newAnswer->section_id != (int)$row["section_id"])
            {
                echo '<tr><td></td><td></td></tr>';
                echo '<tr><td data-style="Bold"><b>SECTION ' . $row["section_id"].'</b></td><td></td></tr>';
                $newAnswer->section_id = (int)$row["section_id"];
            }
            if ((int)$row["question_id"] > 0 && $row["question"] != '')
            {
                if(!is_numeric($row["answer_value"])){
                echo '<tr><td>' . $row["question"]. '</td><td>' . $row["answer_value"]. '</td></tr>';
                } else {
                echo '<tr><td>' . $row["question"]. '</td><td data-style="Number" data-type="Number" data-value="' . $row["answer_value"]. '">' . $row["answer_value"]. '</td></tr>';
                }
            }
            
        }
        echo '</table>';
        
    } else {
        echo '<javascript>alert("No results!");</javascript>';
    }
    $mysqli->close();     
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
