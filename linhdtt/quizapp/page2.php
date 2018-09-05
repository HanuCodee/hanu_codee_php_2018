<?php
  // Start the session
    session_start();
    include "header.php";
    for($i=1;$i<26;$i++){
        if(isset($_POST['question'.$i])){
            $_SESSION['question'.$i] = $_POST['question'.$i];
        }
    }

    if(isset($_POST['back'])){
      header('Location: page1.php');
    }

    if(isset($_POST['submit'])){

      for($i=26;$i<51;$i++){
        if(isset($_POST['question'.$i])){
            $_SESSION['question'.$i] = $_POST['question'.$i];
        }
      }
      header('Location: page3.php');
    }
?>
<form action="page3.php" method="POST">
<?php
   $question26=array('text'=>'content question 26', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 26:'.$question26['text'].'<br>';
   ?>
   <input name ='question26' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question26['answerA'].'<br>'; ?></label>
   <input name ='question26' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question26['answerB'].'<br>'; ?></label>
   <input name ='question26' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question26['answerC'].'<br>'; ?></label>
   <input name ='question26' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question26['answerD'].'<br>'; ?></label>
<br>

<?php
   $question27=array('text'=>'content question 27', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 27:'.$question27['text'].'<br>';
   ?>
   <input name ='question27' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question27['answerA'].'<br>'; ?></label>
   <input name ='question27' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question27['answerB'].'<br>'; ?></label>
   <input name ='question27' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question27['answerC'].'<br>'; ?></label>
   <input name ='question27' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question27['answerD'].'<br>'; ?></label>
<br>
<?php
   $question28=array('text'=>'content question 28', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 28:'.$question28['text'].'<br>';
   ?>
   <input name ='question28' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question28['answerA'].'<br>'; ?></label>
   <input name ='question28' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question28['answerB'].'<br>'; ?></label>
   <input name ='question28' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question28['answerC'].'<br>'; ?></label>
   <input name ='question28' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question28['answerD'].'<br>'; ?></label>
<br>
<?php
   $question29=array('text'=>'content question 29', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 29:'.$question29['text'].'<br>';
   ?>
   <input name ='question29' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question29['answerA'].'<br>'; ?></label>
   <input name ='question29' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question29['answerB'].'<br>'; ?></label>
   <input name ='question29' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question29['answerC'].'<br>'; ?></label>
   <input name ='question29' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question29['answerD'].'<br>'; ?></label>
<br>
<?php
   $question30=array('text'=>'content question 30', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 30:'.$question30['text'].'<br>';
   ?>
   <input name ='question30' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question30['answerA'].'<br>'; ?></label>
   <input name ='question30' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question30['answerB'].'<br>'; ?></label>
   <input name ='question30' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question30['answerC'].'<br>'; ?></label>
   <input name ='question30' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question30['answerD'].'<br>'; ?></label>
<br>
<?php
   $question31=array('text'=>'content question 31', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 31:'.$question31['text'].'<br>';
   ?>
   <input name ='question31' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question31['answerA'].'<br>'; ?></label>
   <input name ='question31' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question31['answerB'].'<br>'; ?></label>
   <input name ='question31' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question31['answerC'].'<br>'; ?></label>
   <input name ='question31' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question31['answerD'].'<br>'; ?></label>
<br>
<?php
   $question32=array('text'=>'content question 32', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 32:'.$question32['text'].'<br>';
   ?>
   <input name ='question32' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question32['answerA'].'<br>'; ?></label>
   <input name ='question32' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question32['answerB'].'<br>'; ?></label>
   <input name ='question32' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question32['answerC'].'<br>'; ?></label>
   <input name ='question32' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question32['answerD'].'<br>'; ?></label>
<br>
<?php
   $question33=array('text'=>'content question 33', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 33:'.$question33['text'].'<br>';
   ?>
   <input name ='question33' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question33['answerA'].'<br>'; ?></label>
   <input name ='question33' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question33['answerB'].'<br>'; ?></label>
   <input name ='question33' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question33['answerC'].'<br>'; ?></label>
   <input name ='question33' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question33['answerD'].'<br>'; ?></label>
<br>
<?php
   $question34=array('text'=>'content question 34', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 34:'.$question34['text'].'<br>';
   ?>
   <input name ='question34' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question34['answerA'].'<br>'; ?></label>
   <input name ='question34' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question34['answerB'].'<br>'; ?></label>
   <input name ='question34' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question34['answerC'].'<br>'; ?></label>
   <input name ='question34' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question34['answerD'].'<br>'; ?></label>
<br>
<?php
   $question35=array('text'=>'content question 35', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 35:'.$question35['text'].'<br>';
   ?>
   <input name ='question35' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question35['answerA'].'<br>'; ?></label>
   <input name ='question35' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question35['answerB'].'<br>'; ?></label>
   <input name ='question35' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question35['answerC'].'<br>'; ?></label>
   <input name ='question35' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question35['answerD'].'<br>'; ?></label>
<br>
<?php
   $question36=array('text'=>'content question 36', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 36:'.$question36['text'].'<br>';
   ?>
   <input name ='question36' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question36['answerA'].'<br>'; ?></label>
   <input name ='question36' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question36['answerB'].'<br>'; ?></label>
   <input name ='question36' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question36['answerC'].'<br>'; ?></label>
   <input name ='question36' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question36['answerD'].'<br>'; ?></label>
<br>
<?php
   $question37=array('text'=>'content question 37', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 37:'.$question37['text'].'<br>';
   ?>
   <input name ='question37' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question37['answerA'].'<br>'; ?></label>
   <input name ='question37' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question37['answerB'].'<br>'; ?></label>
   <input name ='question37' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question37['answerC'].'<br>'; ?></label>
   <input name ='question37' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question37['answerD'].'<br>'; ?></label>
<br>
<?php
   $question38=array('text'=>'content question 38', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 38:'.$question38['text'].'<br>';
   ?>
   <input name ='question38' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question38['answerA'].'<br>'; ?></label>
   <input name ='question38' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question38['answerB'].'<br>'; ?></label>
   <input name ='question38' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question38['answerC'].'<br>'; ?></label>
   <input name ='question38' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question38['answerD'].'<br>'; ?></label>
<br>
<?php
   $question39=array('text'=>'content question 39', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 39:'.$question39['text'].'<br>';
   ?>
   <input name ='question39' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question39['answerA'].'<br>'; ?></label>
   <input name ='question39' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question39['answerB'].'<br>'; ?></label>
   <input name ='question39' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question39['answerC'].'<br>'; ?></label>
   <input name ='question39' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question39['answerD'].'<br>'; ?></label>
<br>
<?php
   $question40=array('text'=>'content question 40', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 40:'.$question40['text'].'<br>';
   ?>
   <input name ='question40' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question40['answerA'].'<br>'; ?></label>
   <input name ='question40' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question40['answerB'].'<br>'; ?></label>
   <input name ='question40' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question40['answerC'].'<br>'; ?></label>
   <input name ='question40' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question40['answerD'].'<br>'; ?></label>
<br>
<?php
   $question41=array('text'=>'content question 41', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 41:'.$question41['text'].'<br>';
   ?>
   <input name ='question41' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question41['answerA'].'<br>'; ?></label>
   <input name ='question41' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question41['answerB'].'<br>'; ?></label>
   <input name ='question41' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question41['answerC'].'<br>'; ?></label>
   <input name ='question41' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question41['answerD'].'<br>'; ?></label>
<br>
<?php
   $question42=array('text'=>'content question 42', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 42:'.$question42['text'].'<br>';
   ?>
   <input name ='question42' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question42['answerA'].'<br>'; ?></label>
   <input name ='question42' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question42['answerB'].'<br>'; ?></label>
   <input name ='question42' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question42['answerC'].'<br>'; ?></label>
   <input name ='question42' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question42['answerD'].'<br>'; ?></label>
<br>
<?php
   $question43=array('text'=>'content question 43', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 43:'.$question43['text'].'<br>';
   ?>
   <input name ='question43' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question43['answerA'].'<br>'; ?></label>
   <input name ='question43' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question43['answerB'].'<br>'; ?></label>
   <input name ='question43' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question43['answerC'].'<br>'; ?></label>
   <input name ='question43' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question43['answerD'].'<br>'; ?></label>
<br>
<?php
   $question44=array('text'=>'content question 44', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 44:'.$question44['text'].'<br>';
   ?>
   <input name ='question44' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question44['answerA'].'<br>'; ?></label>
   <input name ='question44' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question44['answerB'].'<br>'; ?></label>
   <input name ='question44' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question44['answerC'].'<br>'; ?></label>
   <input name ='question44' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question44['answerD'].'<br>'; ?></label>
<br>
<?php
   $question45=array('text'=>'content question 45', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 45:'.$question45['text'].'<br>';
   ?>
   <input name ='question45' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question45['answerA'].'<br>'; ?></label>
   <input name ='question45' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question45['answerB'].'<br>'; ?></label>
   <input name ='question45' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question45['answerC'].'<br>'; ?></label>
   <input name ='question45' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question45['answerD'].'<br>'; ?></label>
<br>
<?php
   $question46=array('text'=>'content question 46', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 46:'.$question46['text'].'<br>';
   ?>
   <input name ='question46' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question46['answerA'].'<br>'; ?></label>
   <input name ='question46' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question46['answerB'].'<br>'; ?></label>
   <input name ='question46' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question46['answerC'].'<br>'; ?></label>
   <input name ='question46' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question46['answerD'].'<br>'; ?></label>
<br>
<?php
   $question47=array('text'=>'content question 47', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 47:'.$question47['text'].'<br>';
   ?>
   <input name ='question47' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question47['answerA'].'<br>'; ?></label>
   <input name ='question47' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question47['answerB'].'<br>'; ?></label>
   <input name ='question47' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question47['answerC'].'<br>'; ?></label>
   <input name ='question47' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question47['answerD'].'<br>'; ?></label>
<br>
<?php
   $question48=array('text'=>'content question 48', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 48:'.$question48['text'].'<br>';
   ?>
   <input name ='question48' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question48['answerA'].'<br>'; ?></label>
   <input name ='question48' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question48['answerB'].'<br>'; ?></label>
   <input name ='question48' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question48['answerC'].'<br>'; ?></label>
   <input name ='question48' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question48['answerD'].'<br>'; ?></label>
<br>
<?php
   $question49=array('text'=>'content question 49', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 49:'.$question49['text'].'<br>';
   ?>
   <input name ='question49' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question49['answerA'].'<br>'; ?></label>
   <input name ='question49' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question49['answerB'].'<br>'; ?></label>
   <input name ='question49' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question49['answerC'].'<br>'; ?></label>
   <input name ='question49' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question49['answerD'].'<br>'; ?></label>
<br>
<?php
   $question50=array('text'=>'content question 50', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 50:'.$question50['text'].'<br>';
   ?>
   <input name ='question50' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question50['answerA'].'<br>'; ?></label>
   <input name ='question50' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question50['answerB'].'<br>'; ?></label>
   <input name ='question50' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question50['answerC'].'<br>'; ?></label>
   <input name ='question50' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question50['answerD'].'<br>'; ?></label>
<br>
<input class="btn" type="button" name="back" value="<< Back">
<input class="btn" type="submit" name="submit" value="Submit >>">
<?php
    function validate(){
        for($i=1;$i<26;$i++){
            if(isset($_SESSION['question'.$i])){
                return true;
            }else{
                return false;
                die();
            }
        }
    }
    if(validate()){?>
    <input class="btn" type="submit" name="result" value="Result"></br>
    <?php }?>
</form>
<?php
    include "footer.php";
?>