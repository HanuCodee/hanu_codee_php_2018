<?php
    session_start();
    //var_dump($_POST);
    include "header.php";
    if(isset($_POST['next'])){
        for($i=1;$i<26;$i++){
            if (isset($_POST['question'.$i])){
                $_SESSION['question'.$i]=$_POST['question'.$i];
            }else{
                $_SESSION['question'.$i]=null;
            }
        }
        header('Location: page2.php');
    }
?>
<form action="page2.php" method="POST">
<?php
   $question1=array('text'=>'content question 1', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 1:'.$question1['text'].'<br>';
   ?>
   <input name ='question1' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question1['answerA'].'<br>'; ?></label>
   <input name ='question1' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question1['answerB'].'<br>'; ?></label>
   <input name ='question1' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question1['answerC'].'<br>'; ?></label>
   <input name ='question1' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question1['answerD'].'<br>'; ?></label>
<br>
<?php
   $question2=array('text'=>'content question 2', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 2:'.$question2['text'].'<br>';
   ?>
   <input name ='question2' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question2['answerA'].'<br>'; ?></label>
   <input name ='question2' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question2['answerB'].'<br>'; ?></label>
   <input name ='question2' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question2['answerC'].'<br>'; ?></label>
   <input name ='question2' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question2['answerD'].'<br>'; ?></label>
<br>
<?php
   $question3=array('text'=>'content question 3', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 3:'.$question3['text'].'<br>';
   ?>
   <input name ='question3' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question3['answerA'].'<br>'; ?></label>
   <input name ='question3' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question3['answerB'].'<br>'; ?></label>
   <input name ='question3' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question3['answerC'].'<br>'; ?></label>
   <input name ='question3' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question3['answerD'].'<br>'; ?></label>
<br>
<?php
   $question4=array('text'=>'content question 4', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 4:'.$question4['text'].'<br>';
   ?>
   <input name ='question4' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question4['answerA'].'<br>'; ?></label>
   <input name ='question4' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question4['answerB'].'<br>'; ?></label>
   <input name ='question4' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question4['answerC'].'<br>'; ?></label>
   <input name ='question4' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question4['answerD'].'<br>'; ?></label>
<br>
<?php
   $question5=array('text'=>'content question 5', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 5:'.$question5['text'].'<br>';
   ?>
   <input name ='question5' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question5['answerA'].'<br>'; ?></label>
   <input name ='question5' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question5['answerB'].'<br>'; ?></label>
   <input name ='question5' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question5['answerC'].'<br>'; ?></label>
   <input name ='question5' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question5['answerD'].'<br>'; ?></label>
<br>
<?php
   $question6=array('text'=>'content question 6', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 6:'.$question6['text'].'<br>';
   ?>
   <input name ='question6' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question6['answerA'].'<br>'; ?></label>
   <input name ='question6' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question6['answerB'].'<br>'; ?></label>
   <input name ='question6' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question6['answerC'].'<br>'; ?></label>
   <input name ='question6' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question6['answerD'].'<br>'; ?></label>
<br>
<?php
   $question7=array('text'=>'content question 7', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 7:'.$question7['text'].'<br>';
   ?>
   <input name ='question7' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question7['answerA'].'<br>'; ?></label>
   <input name ='question7' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question7['answerB'].'<br>'; ?></label>
   <input name ='question7' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question7['answerC'].'<br>'; ?></label>
   <input name ='question7' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question7['answerD'].'<br>'; ?></label>
<br>
<?php
   $question8=array('text'=>'content question 8', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 8:'.$question8['text'].'<br>';
   ?>
   <input name ='question8' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question8['answerA'].'<br>'; ?></label>
   <input name ='question8' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question8['answerB'].'<br>'; ?></label>
   <input name ='question8' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question8['answerC'].'<br>'; ?></label>
   <input name ='question8' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question8['answerD'].'<br>'; ?></label>
<br>
<?php
   $question9=array('text'=>'content question 9', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 9:'.$question9['text'].'<br>';
   ?>
   <input name ='question9' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question9['answerA'].'<br>'; ?></label>
   <input name ='question9' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question9['answerB'].'<br>'; ?></label>
   <input name ='question9' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question9['answerC'].'<br>'; ?></label>
   <input name ='question9' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question9['answerD'].'<br>'; ?></label>
<br>
<?php
   $question10=array('text'=>'content question 10', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 10:'.$question10['text'].'<br>';
   ?>
   <input name ='question10' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question10['answerA'].'<br>'; ?></label>
   <input name ='question10' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question10['answerB'].'<br>'; ?></label>
   <input name ='question10' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question10['answerC'].'<br>'; ?></label>
   <input name ='question10' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question10['answerD'].'<br>'; ?></label>
<br>
<?php
   $question11=array('text'=>'content question 11', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 11:'.$question11['text'].'<br>';
   ?>
   <input name ='question11' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question11['answerA'].'<br>'; ?></label>
   <input name ='question11' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question11['answerB'].'<br>'; ?></label>
   <input name ='question11' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question11['answerC'].'<br>'; ?></label>
   <input name ='question11' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question11['answerD'].'<br>'; ?></label>
<br>
<?php
   $question12=array('text'=>'content question 12', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 12:'.$question12['text'].'<br>';
   ?>
   <input name ='question12' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question12['answerA'].'<br>'; ?></label>
   <input name ='question12' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question12['answerB'].'<br>'; ?></label>
   <input name ='question12' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question12['answerC'].'<br>'; ?></label>
   <input name ='question12' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question12['answerD'].'<br>'; ?></label>
<br>
<?php
   $question13=array('text'=>'content question 13', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 13:'.$question13['text'].'<br>';
   ?>
   <input name ='question13' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question13['answerA'].'<br>'; ?></label>
   <input name ='question13' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question13['answerB'].'<br>'; ?></label>
   <input name ='question13' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question13['answerC'].'<br>'; ?></label>
   <input name ='question13' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question13['answerD'].'<br>'; ?></label>
<br>
<?php
   $question14=array('text'=>'content question 14', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 14:'.$question14['text'].'<br>';
   ?>
   <input name ='question14' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question14['answerA'].'<br>'; ?></label>
   <input name ='question14' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question14['answerB'].'<br>'; ?></label>
   <input name ='question14' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question14['answerC'].'<br>'; ?></label>
   <input name ='question14' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question14['answerD'].'<br>'; ?></label>
<br>
<?php
   $question15=array('text'=>'content question 15', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 15:'.$question15['text'].'<br>';
   ?>
   <input name ='question15' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question15['answerA'].'<br>'; ?></label>
   <input name ='question15' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question15['answerB'].'<br>'; ?></label>
   <input name ='question15' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question15['answerC'].'<br>'; ?></label>
   <input name ='question15' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question15['answerD'].'<br>'; ?></label>
<br>
<?php
   $question16=array('text'=>'content question 16', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 16:'.$question16['text'].'<br>';
   ?>
   <input name ='question16' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question16['answerA'].'<br>'; ?></label>
   <input name ='question16' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question16['answerB'].'<br>'; ?></label>
   <input name ='question16' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question16['answerC'].'<br>'; ?></label>
   <input name ='question16' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question16['answerD'].'<br>'; ?></label>
<br>
<?php
   $question17=array('text'=>'content question 17', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 17:'.$question17['text'].'<br>';
   ?>
   <input name ='question17' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question17['answerA'].'<br>'; ?></label>
   <input name ='question17' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question17['answerB'].'<br>'; ?></label>
   <input name ='question17' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question17['answerC'].'<br>'; ?></label>
   <input name ='question17' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question17['answerD'].'<br>'; ?></label>
<br>
<?php
   $question18=array('text'=>'content question 18', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 18:'.$question18['text'].'<br>';
   ?>
   <input name ='question18' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question18['answerA'].'<br>'; ?></label>
   <input name ='question18' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question18['answerB'].'<br>'; ?></label>
   <input name ='question18' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question18['answerC'].'<br>'; ?></label>
   <input name ='question18' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question18['answerD'].'<br>'; ?></label>
<br>
<?php
   $question19=array('text'=>'content question 19', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 19:'.$question19['text'].'<br>';
   ?>
   <input name ='question19' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question19['answerA'].'<br>'; ?></label>
   <input name ='question19' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question19['answerB'].'<br>'; ?></label>
   <input name ='question19' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question19['answerC'].'<br>'; ?></label>
   <input name ='question19' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question19['answerD'].'<br>'; ?></label>
<br>
<?php
   $question20=array('text'=>'content question 20', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 20:'.$question20['text'].'<br>';
   ?>
   <input name ='question20' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question20['answerA'].'<br>'; ?></label>
   <input name ='question20' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question20['answerB'].'<br>'; ?></label>
   <input name ='question20' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question20['answerC'].'<br>'; ?></label>
   <input name ='question20' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question20['answerD'].'<br>'; ?></label>
<br>
<?php
   $question21=array('text'=>'content question 21', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 21:'.$question21['text'].'<br>';
   ?>
   <input name ='question21' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question21['answerA'].'<br>'; ?></label>
   <input name ='question21' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question21['answerB'].'<br>'; ?></label>
   <input name ='question21' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question21['answerC'].'<br>'; ?></label>
   <input name ='question21' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question21['answerD'].'<br>'; ?></label>
<br>
<?php
   $question22=array('text'=>'content question 22', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 22:'.$question22['text'].'<br>';
   ?>
   <input name ='question22' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question22['answerA'].'<br>'; ?></label>
   <input name ='question22' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question22['answerB'].'<br>'; ?></label>
   <input name ='question22' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question22['answerC'].'<br>'; ?></label>
   <input name ='question22' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question22['answerD'].'<br>'; ?></label>
<br>
<?php
   $question23=array('text'=>'content question 23', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 23:'.$question23['text'].'<br>';
   ?>
   <input name ='question23' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question23['answerA'].'<br>'; ?></label>
   <input name ='question23' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question23['answerB'].'<br>'; ?></label>
   <input name ='question23' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question23['answerC'].'<br>'; ?></label>
   <input name ='question23' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question23['answerD'].'<br>'; ?></label>
<br>
<?php
   $question24=array('text'=>'content question 24', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 24:'.$question24['text'].'<br>';
   ?>
   <input name ='question24' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question24['answerA'].'<br>'; ?></label>
   <input name ='question24' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question24['answerB'].'<br>'; ?></label>
   <input name ='question24' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question24['answerC'].'<br>'; ?></label>
   <input name ='question24' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question24['answerD'].'<br>'; ?></label>
<br>
<?php
   $question25=array('text'=>'content question 25', 'answerA'=>'answer A', 'answerB'=>'answer B', 'answerC'=>'answer C', 'answerD'=>'answer D', 'correct'=>'A');
   echo 'Question 25:'.$question25['text'].'<br>';
   ?>
   <input name ='question25' type ='radio' value ='A'>
   <label for 'A'><?php echo 'A.'.$question25['answerA'].'<br>'; ?></label>
   <input name ='question25' type ='radio' value ='B'>
   <label for 'B'><?php echo 'B.'.$question25['answerB'].'<br>'; ?></label>
   <input name ='question25' type ='radio' value ='C'>
   <label for 'C'><?php echo 'C.'.$question25['answerC'].'<br>'; ?></label>
   <input name ='question25' type ='radio' value ='D'>
   <label for 'D'><?php echo 'D.'.$question25['answerD'].'<br>'; ?></label>
<br>
<br></br>
<br>
<input  class="btn" align="middle" type="submit" name="next" value="Next >>" ></br>
</form>
<?php 
    include "footer.php"; 
?>