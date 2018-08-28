<?php
session_start();

// process user answers
if (!empty($_POST)) {
    $_SESSION['answers'] = $_POST['answers'];

    header("Location: page2.php");
}

// get user answers (if any) to display
$answers = [];
if (isset($_SESSION['answers'])) {
    $answers = $_SESSION['answers'];
}
/*
2) form + file 

=====
1) file: p1 -> answers -> file ->p2 -> answers -> file -> p3 [answers] <- file
3) session: p1 -> [answers]-> p1 (session) -> redirect p2
            p2 -> [answers]-> p2 (session) -> redirect p1 - p3
4) cookie: 
=====
5) hidden field: p1 -> answers -> p2 (show hidden field) -> p3
*/
?>
<form action="" method="post">
    <label>Q1: content </label> 
    <br/>
    <input type="radio" name="answers[q1]" <?php if (isset($answers['q1']) && $answers['q1']=='a') echo 'checked'; ?> value="a" /> a
    <input type="radio" name="answers[q1]" <?php if (isset($answers['q1']) && $answers['q1']=='b') echo 'checked'; ?> value="b" /> b
    <input type="radio" name="answers[q1]" <?php if (isset($answers['q1']) && $answers['q1']=='c') echo 'checked'; ?> value="c" /> c
    <input type="radio" name="answers[q1]" <?php if (isset($answers['q1']) && $answers['q1']=='d') echo 'checked'; ?> value="d" /> d
    <br/>
    <input type="submit" name="action" value="page2" />
</form>