<?php 
include '../classes/manage_quiz_class.php';
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'uniquedeveloper');
	if (!$con)
	 {
		die('unable to coonect to database');
	 }
if (isset($_POST['btn_add_quiz_sub']))
 {
	$coursename=$_POST['course_name1'];
	$query="insert into category(cat_name) values('$coursename')";
	$r=mysqli_query($con, $query);
	if ($r==true) 
	{
		header("Location:manage_quiz.php");
	}
 }
 if (isset($_POST['btn_delete_quiz_sub']))
 {
	extract($_POST);
	$query="delete from category where id='$selected_course'";
	$r=mysqli_query($con, $query);
	if ($r==true) 
	{
		header("Location:manage_quiz.php");
	}
 }
extract($_POST);
$quiz=new manage_quiz_class;;
$ques=htmlentities($question);
$option1=htmlentities($opt1);
$option2=htmlentities($opt2);
$option3=htmlentities($opt3);
$option4=htmlentities($opt4);
echo "$ques";
echo "$option1";
echo "$option2";
echo "$option3";
echo "$option4";
echo $cat."<br>"; 
$array=[$option1,$option2,$option3,$option4];
$matchedanswer=array_search($answer,$array);
echo "answer is".$matchedanswer;
$query="insert into question_test (question,opt1,opt2,opt3,opt4,answer,course_id)values('$ques','$option1','$option2','$option3','$option4','$matchedanswer','$cat')"; //$cat value comes from select name attribute
// mysqli_query($con,$query);
if ($quiz->add_quize($query)) 
{
	header("location:manage_quiz.php?run=success");
}
?>