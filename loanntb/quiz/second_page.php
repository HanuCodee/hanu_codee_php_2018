<?php
session_start();

$list = array(
    array("Q0" => "This is question's content", "A" => "This is A", "B" => "This is B", "C" => "This is C", "D" => "This is D"),
    array("Q1" => "Q2", "A" => "A", "B" => "B", "C" => "C", "D" => "D"),
    array("Q2" => "Q3", "A" => "A", "B" => "B", "C" => "C", "D" => "D"),
    array("Q3" => "Q4", "A" => "A", "B" => "B", "C" => "C", "D" => "D"),
    array("Q4" => "Q5", "A" => "A", "B" => "B", "C" => "C", "D" => "D")
);

<<<<<<< HEAD
=======
$order = 0;
>>>>>>> de0e1758b8b1d27743502bc99247ab8352e32d39
$no_of_ques = count($list);
$user_answers = [];

/**
 * @overview    Store user's answers in an array
 * @modifies    $user_answers
 * @effects
 *  if user choose option "A"
 *      add "A" in $user_answers
 */

function get_answer() {
    global $no_of_ques, $user_answers;

    for ($i = 0; $i < $no_of_ques; $i++) {
        $option_name = "option" . $i;

        if (isset($_POST[$option_name])) {
            $user_option = $_POST[$option_name];
        } else {
            $user_option = " ";
        }
        array_push($user_answers, $user_option);
    }
    
    // foreach ($user_answers as $value) {
    //     echo $value;
    // }
}

if (isset($_POST['submit'])) {
    get_answer();
    $_SESSION['page2_option_list'] = $user_answers;
    $_SESSION['no_of_ques_pg2'] = $no_of_ques;
<<<<<<< HEAD
    header("Location: submit.php");
}

if (isset($_POST['return'])) {
    get_answer();
    $_SESSION['page2_option_list'] = $user_answers;
    header("Location: first_page.php");
=======
    header("Location: http://localhost/codee/week3/quiz/submit.php");
>>>>>>> de0e1758b8b1d27743502bc99247ab8352e32d39
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quiz Page 2</title>
        <link rel="stylesheet" href="quiz.css">
    </head>
    <body>
        <header>
            Quiz App
        </header>
        <div class="list">
            <h3><mark>Page 2</mark></h3>
            <form name="ques1" method="post">
            <table style="width: 100%">
                    <?php
                        for ($i = 0; $i < $no_of_ques; $i++) {
                            $ques = $list[$i];
                    ?>
                    <tr>
                        <th colspan="4">
                            Question <?= ($i + 1) . ": "; ?>
                            <?php
                                echo $ques["Q".$i];
                            ?>
                        </th>
                    </tr>
                    <tr>
                        <td><input type="radio" name="option<?= $i; ?>" value="A"><?php echo $ques['A']; ?></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="option<?= $i; ?>" value="B"><?php echo $ques['B']; ?></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="option<?= $i; ?>" value="C"><?php echo $ques['C']; ?></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="option<?= $i; ?>" value="D"><?php echo $ques['D']; ?></td>
                    </tr>
                        <?php } ?>
                    </tr>
                </table>
                <button type="submit" name="return">Page 1</button>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
