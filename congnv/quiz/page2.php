<?php
session_start();

// array_merge
if (!empty($_POST)) {
    // process user answers
    if (isset($_SESSION['answers'])) {
        $_SESSION['answers'] = array_merge($_SESSION['answers'], $_POST['answers']);
    } else 
        $_SESSION['answers'] = $_POST['answers'];

    if ($_POST['action'] == 'page1')
        header("Location: page1.php");
    else {
        header("Location: page3.php");
    }
}

// get user answers (if any) to display
$answers = [];
if (isset($_SESSION['answers'])) {
    $answers = $_SESSION['answers'];
}
?>

<form action="" method="post">
    <label>Q2: content </label> 
    <br/>
    <input type="radio" name="answers[q2]" <?php if (isset($answers['q2']) && $answers['q2']=='a') echo 'checked'; ?> value="a" /> a
    <input type="radio" name="answers[q2]" <?php if (isset($answers['q2']) && $answers['q2']=='b') echo 'checked'; ?> value="b" /> b
    <input type="radio" name="answers[q2]" <?php if (isset($answers['q2']) && $answers['q2']=='c') echo 'checked'; ?> value="c" /> c
    <input type="radio" name="answers[q2]" <?php if (isset($answers['q2']) && $answers['q2']=='d') echo 'checked'; ?> value="d" /> d
    <br/>
    <input type="submit" name="action" value="page1" />
    <input type="submit" name="action" value="page3" />
</form>