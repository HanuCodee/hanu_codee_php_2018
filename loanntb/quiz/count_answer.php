<?php

//function count_correct_answers() {            <-- can't use function??
//    global $no_of_ques, $no_of_element, $list, $mark;
$mark = 0;
$user_answers = array();
    for ($i = 0; $i < $no_of_ques; $i++) {
        $option_name = "option" . ($i + 1);
        $key = $list[$i][($no_of_element - 1)];

        if (isset($_POST[$option_name])) {
            $option = $_POST[$option_name];
            echo $option;
        } else {
            $option = null;
        }

        // $array_push($user_answers, $option);

        // $answer = substr($option, 0, 1);
        
        // if ($answer == $key) {
        //     $mark++;
        // }
    }
//}
?>