<?php
session_start();

// list of question on page 1
$list = [
    ["Q0" => "This is question's content", "A" => "A. This is A", "B" => "B. This is B", "C" => "C. This is", "D" => "D. This is D"],
    ["Q1" => "Em có thích ăn rau dền không?", "A" => "A", "B" => "B", "C" => "C", "D" => "D"],
    ["Q2" => "Thành phố HCM có phải là Sài Gòn không?", "A" => "A. Hỏi Phạm Thị Minh Phượng", "B" => "B", "C" => "C", "D" => "D"]
];

// $order = 0;
$no_of_ques = count($list);
// $no_of_element = count($list[0]);
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

if (isset($_POST['cont'])) {
    get_answer();
    $_SESSION['page1_option_list'] = $user_answers;
    $_SESSION['no_of_ques_pg1'] = $no_of_ques;
    header("Location: second_page.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quiz Page 1</title>
        <link rel="stylesheet" href="quiz.css">
    </head>
    <body>
        <header>
            Quiz App
        </header>
        <div class="list">
            <h3><mark>Page 1</mark></h3>
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
                <button type="submit" name="cont">Continue</button>
            </form>
        </div>
    </body>
</html>
