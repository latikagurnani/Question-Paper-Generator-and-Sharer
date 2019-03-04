<html>
<head>
    <style>
table, th, td {
/*    border: 1px solid black;*/
/*    background: #fff;*/
/*    padding:4px;*/
}
</style>

</head>
<body>

<div style="margin-left:200px margin-top:50px">
<table class="table table-bordered table-hover table-responsive">
    <col width ="50">
   <col width = "400">
   <col width = "50">
<!--   <col width ="50">-->
    <tr class="info">
    <th></th>
    <th >Question</th>
    <th>Marks</th>
<!--    <th>EDIT</th>-->
<?php

require_once("../includes/db.php");
//session_start();
$difficulty_level;
//echo $subject_id;

/*-----------------------5,5,5,5 Marks --------------------------------*/
 function question_1_type_1($question_1_count,$counts,$total_main_questions)
    {   
            global $connection;
            global $question_number;
            global $ques_no_1_6;
     
            global $save_question_id;
            global $save_question_number;
            global $save_question_sub;
            global $save_question_statement;
            global $save_question_marks;
            global $subject_id;
            
            
     
            echo "<tr><td>"."<strong>".$total_main_questions."</strong>"."</td>";
            echo "<td>"."<strong>"."Attempt all FOUR"."</strong>"."</td></tr>";
            
            while($question_1_count != 4){
            
            $val = rand(1,50);
            
            $counts=$counts+1;    

            $query = "select * from question where question_id=$val and subject_id=$subject_id and history != 1";
            $generated_question = mysqli_query($connection,$query);
            $num_of_rows=mysqli_num_rows($generated_question);
            if($num_of_rows == 1)
            {    
                $i=0;
                $question_1_count=$question_1_count+1;
                $row=mysqli_fetch_assoc($generated_question);
                $question_statement = $row['question_statement'];
                $chapter_id = $row['chapter_id'];
                $module_id = $row['module_id'];
                $question_id = $row['question_id'];
                
                
                
                
                
                echo "<tr><td>".$question_number[$question_1_count -1]."</td>";
                echo "<td>".$question_statement."</td>";
                echo "<td>"."5"."</td></tr>";
//                echo "<td><button class='btn-primary'><a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                $query="Update question set history=1 where question_id = $question_id";
                $update_history=mysqli_query($connection,$query);
                
                
                
                array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_1_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,5);
                
                
            }
        }
        
    }
/*-----------------------10 Marks --------------------------------*/


    function question_1_type_2($question_1_count,$counts,$total_main_questions)
    {   
            global $connection;
            global $question_number;
            global $ques_no_1_6;
        
            global $save_question_id;
            global $save_question_number;
            global $save_question_sub;
            global $save_question_statement;
            global $save_question_marks;
            global $subject_id;
     
            echo "<tr><td>"."<strong>".$total_main_questions."</strong>"."</td></tr>";
            
        
            while($question_1_count != 2){

            $val = rand(1,50);
            $counts=$counts+1;    

            $query = "select * from question where question_id=$val and module_id in (1,2,3,4,5,6) and marks=   1 and subject_id=$subject_id and history != 1";
            $generated_question = mysqli_query($connection,$query);
            $num_of_rows=mysqli_num_rows($generated_question);
            if($num_of_rows == 1)
            {    
                
                $question_1_count=$question_1_count+1;
                $row=mysqli_fetch_assoc($generated_question);
                $question_statement = $row['question_statement'];
                $chapter_id = $row['chapter_id'];
                $module_id = $row['module_id'];
                $question_id = $row['question_id'];
                echo "<tr><td>".$question_number[$question_1_count -1]."</td>";
                echo "<td>".$question_statement."</td>";
                echo "<td>"."10"."</td></tr>";
//                echo "<td><button class='btn-primary'><a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                $query="Update question set history=1 where question_id = $question_id";
                $update_history=mysqli_query($connection,$query);
                
                array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_1_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,10);
//                
                
            }
        }
        
    }

        
        
        
///********************************************Question 2,3,4,5****************************************/
///*          1-6,6,8
//            2-10,10
//            3-6,6,4,4
//            4-7,7,6
//            
//*/


        
//**********************************************Marks 6,6,8**********************************************/        
     
        
function question_2_type_1($question_2_count,$counts,$total_main_questions)
    {   
            global $connection;
            global $question_number;
            global $ques_no_2_5;
    
        
            global $save_question_id;
            global $save_question_number;
            global $save_question_sub;
            global $save_question_statement;
            global $save_question_marks;
            global $subject_id;
    
            echo "<tr><td>"." "."</td></tr>";
            echo "<tr><td>"."<strong>".$total_main_questions."</strong>"."</td>";
            echo "<td>".""."</td></tr>";
    
            while($question_2_count != 3){

            $val = rand(1,50);
            $counts=$counts+1;
                
            $var_marks_set=0;  
                
            $query = "select * from question where question_id=$val and module_id in (1,2,3,4,5,6) and subject_id= $subject_id and history != 1";
            if($question_2_count==2)
            {
                $query="select * from question where question_id=$val and module_id in (1,2,3,4,5,6) and subject_id = $subject_id and history !=1 ";
//                echo $query;
                $var_marks_set=1;
            }
            $generated_question = mysqli_query($connection,$query);
            $num_of_rows=mysqli_num_rows($generated_question);
            if($num_of_rows == 1)
            {    
                $question_2_count=$question_2_count+1;
                $row=mysqli_fetch_assoc($generated_question);
                $question_statement = $row['question_statement'];
                $chapter_id = $row['chapter_id'];
                $module_id = $row['module_id'];
                $question_id = $row['question_id'];
                
                if($var_marks_set == 0){  
                echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
                echo "<td>".$question_statement."</td>";
                echo "<td>"."6"."</td></tr>";
//                echo "<td><button class='btn-primary'><a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                    
                $query="Update question set history=1 where question_id = $question_id";
                $update_history=mysqli_query($connection,$query);
                array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_2_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,6);
                
                    
                }
                elseif($var_marks_set==1)
                {
                echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
                echo "<td>".$question_statement."</td>";
                echo "<td>"."8"."</td></tr>";
//                echo "<td><button class='btn-primary'><a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                
                $query="Update question set history=1 where question_id = $question_id";
                $update_history=mysqli_query($connection,$query);
                    
                array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_2_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,8);
                
                
                }
            }

        }
    }


/*-----------------------10,10 Marks --------------------------------*/



    function question_2_type_2($question_2_count,$counts,$total_main_questions)
    {   
            global $connection;
            global $question_number;
            global $ques_no_2_5;
        
            
            global $save_question_id;
            global $save_question_number;
            global $save_question_sub;
            global $save_question_statement;
            global $save_question_marks;
            global $subject_id;
        
            echo "<tr><td>"." "."</td></tr>";
            echo "<tr><td>"."<strong>".$total_main_questions."</strong>"."</td>";
            echo "<td>".""."</td></tr>";
        
            while($question_2_count != 2){

            $val = rand(1,50);
            $counts=$counts+1;    

            $query = "select * from question where question_id=$val and module_id in (1,2,3,4,5,6) and subject_id=$subject_id and marks=1 and history != 1";

            $generated_question = mysqli_query($connection,$query);
            $num_of_rows=mysqli_num_rows($generated_question);
            if($num_of_rows == 1)
            {    
                $question_2_count=$question_2_count+1;
                $row=mysqli_fetch_assoc($generated_question);
                $question_statement = $row['question_statement'];
                $chapter_id = $row['chapter_id'];
                $module_id = $row['module_id'];
                $question_id = $row['question_id'];
                echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
                echo "<td>".$question_statement."</td>";
                echo "<td>"."10"."</td></tr>";
//                echo "<td><button class='btn-primary'><a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                
                $query="Update question set history=1 where question_id = $question_id";
                $update_history=mysqli_query($connection,$query);
                
                array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_2_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,10);
                
                

            }

        }
        
    }

        
        
/***************************Marks 6,6,4,4**************************************/
    function question_2_type_3($question_2_count,$counts,$total_main_questions)
    {   
            global $connection;        
            global $question_number;
            global $ques_no_2_5;
        
            
            global $save_question_id;
            global $save_question_number;
            global $save_question_sub;
            global $save_question_statement;
            global $save_question_marks;
            global $subject_id;
        
            echo "<tr><td>"." "."</td></tr>";
            echo "<tr><td>"."<strong>".$total_main_questions."</strong>"."</td>";
            echo "<td>".""."</td></tr>";
            
            while($question_2_count != 4){

            $val = rand(1,50);
            $counts=$counts+1;
                
            $var_marks_set=0;   
                
            $query = "select * from question where question_id=$val and module_id in (1,2,3,4,5,6) and subject_id=$subject_id and history != 1";
            if($question_2_count >= 2)
            {
                $query="select * from question where question_id=$val and module_id in (1,2,3,4,5,6) and subject_id=$subject_id and history != 1";
                $var_marks_set=1;
            }
            $generated_question = mysqli_query($connection,$query);
            $num_of_rows=mysqli_num_rows($generated_question);
            if($num_of_rows == 1)
            {    
                $question_2_count=$question_2_count+1;
                $row=mysqli_fetch_assoc($generated_question);
                $question_statement = $row['question_statement'];
                $chapter_id = $row['chapter_id'];
                $module_id = $row['module_id'];
                $question_id =$row['question_id']; 
            
                if($var_marks_set == 0){  
                    echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
                    echo "<td>".$question_statement."</td>";
                    echo "<td>"."6"."</td></tr>";
//                    echo "<td><button class='btn-primary'><a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                    $query="Update question set history=1 where question_id = $question_id";
                    $update_history=mysqli_query($connection,$query);
                    
                array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_2_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,6);
                
                
                }
                elseif($var_marks_set==1)
                {
                    echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
                    echo "<td>".$question_statement."</td>";
                    echo "<td>"."4"."</td></tr>";
//                    echo "<td><button class='btn-primary'><a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                    $query="Update question set history=1 where question_id = $question_id";
                    $update_history=mysqli_query($connection,$query);
                    
                array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_2_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,4);
                
                
                }
            }

        }
        
    }

        
/**********************************Marks 7,7,6 *********************************/


    function question_2_type_4($question_2_count,$counts,$total_main_questions)
    {   
            global $connection;
            global $question_number;
            global $ques_no_2_5;
        
            
            global $save_question_id;
            global $save_question_number;
            global $save_question_sub;
            global $save_question_statement;
            global $save_question_marks;
            global $subject_id;
        
            echo "<tr><td>"." "."</td></tr>";
            echo "<tr><td>"."<strong>".$total_main_questions."</strong>"."</td>";
            echo "<td>".""."</td></tr>";
            
            while($question_2_count != 3){

            $val = rand(1,50);
            $counts=$counts+1; 
                
            $var_marks_set=0;    
                
            $query = "select * from question where question_id=$val and module_id in (1,2,3,4,5,6) and subject_id=$subject_id and history != 1";
            if($question_2_count==2)
            {
                $query="select * from question where question_id=$val and module_id in (1,2,3,4,5,6) and subject_id=$subject_id and marks = 1 and history != 1";
                $var_marks_set=1;
            }
            $generated_question = mysqli_query($connection,$query);
            $num_of_rows=mysqli_num_rows($generated_question);
            if($num_of_rows == 1)
            {    
                $question_2_count=$question_2_count+1;
                $row=mysqli_fetch_assoc($generated_question);
                $question_statement = $row['question_statement'];
                $chapter_id = $row['chapter_id'];
                $module_id = $row['module_id'];
                $question_id = $row['question_id'];
                if($var_marks_set == 0){  
                    echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
                    echo "<td>".$question_statement."</td>";
                    echo "<td>"."7"."</td></tr>";
//                    echo "<td><button class='btn-primary'><a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                    
                    $query="Update question set history=1 where question_id = $question_id";
                    $update_history=mysqli_query($connection,$query);
                    
                    array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_2_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,7);
                
                
                }
                elseif($var_marks_set==1)
                {
                    echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
                    echo "<td>".$question_statement."</td>";
                    echo "<td>"."6"."</td></tr>";
//                    echo "<td><button class='btn-primary'<a href ='teacher_blank.php?edit=$question_id'></a>Edit</button></td></tr>";
                    
                    $query="Update question set history=1 where question_id = $question_id";
                    $update_history=mysqli_query($connection,$query);
                
                    array_push($save_question_id,$question_id);
                array_push($save_question_number,$total_main_questions);
                array_push($save_question_sub,$question_number[$question_2_count -1]);
                array_push($save_question_statement,$question_statement);
                array_push($save_question_marks,6);
                
                }
            }

        }
    }

        
        
        
function reset_history(){
    global $connection;
    $query = "Update question set history=0";
    $rested_history=mysqli_query($connection,$query);
    
}
        
        
/*************************************************************************************/
        
        
/*************************************Global Variables********************************/
    
$ques_no_1_6 = array("Q1","Q6");

$ques_no_2_5 =array("Q2","Q3","Q4","Q5");
$question_number=array("a)","b)","c)","d)");
$total_main_questions=array("Q1","Q2","Q3","Q4","Q5","Q6");

$save_question_id=array();
$save_question_number=array();
$save_question_sub=array();
$save_question_marks=array();
$save_question_statement=array();

//-------------------------------Function Calls---------------------------------

question_1_6($total_main_questions[0]);  
question_2_5($total_main_questions[1]);
question_2_5($total_main_questions[2]);
question_2_5($total_main_questions[3]);
question_2_5($total_main_questions[4]);
question_1_6($total_main_questions[5]);
reset_history();
//echo $save_question_id[0];
        
        
///********************************************Question 1****************************************/
function question_1_6($total_main_questions){
    global $ques_no_1_6;
    $question_1_type = array(1,2);
    $question_1_random = $question_1_type[array_rand($question_1_type,1)];
//    echo "<br>"."*****************Question $ques_no_1_6************************"."<br>";
//    $ques_no_1_6=$ques_no_1_6+5;
    //echo "type of question 1 : ".$question_1_random;
    echo "<br>";
    $question_1_count=0;

    $counts=0;
    if($question_1_random == 1)
    {
        question_1_type_1($question_1_count,$counts,$total_main_questions);
    }
    else if($question_1_random == 2)
    {
        question_1_type_2($question_1_count,$counts,$total_main_questions);
    }
}
        
function question_2_5($total_main_questions){
    global $ques_no_2_5;
    $question_2_type = array(1,2,3,4);
    $question_2_random = $question_2_type[array_rand($question_2_type,1)];
    //echo "<br>"."*******************************Question $ques_no_2_5**************************"."<br>";
    //$ques_no_2_5=$ques_no_2_5+1;
    //echo "type of question 2 : ".$question_2_random;
    $question_2_count=0;

    $counts=0;
    if($question_2_random == 1)
    {
        question_2_type_1($question_2_count,$counts,$total_main_questions);
    }
    else if($question_2_random == 2)
    {
        question_2_type_2($question_2_count,$counts,$total_main_questions);
    }
    else if($question_2_random == 3)
    {
        question_2_type_3($question_2_count,$counts,$total_main_questions);
    }
    else if($question_2_random == 4)
    {
        question_2_type_4($question_2_count,$counts,$total_main_questions);
    }
}
 
        
?>

</table>
</div>
<div>
<!--
    <form action="save_paper.php" method="post">
        <button name="save">Save</button>
        <input type="text" name="generated_paper_name">
    </form>
-->
    
<?php
//    
//    print_r($save_question_id);
//    print_r($save_question_number);
//    print_r($save_question_sub);
//    print_r($save_question_marks);
//    print_r($save_question_statement);
//    
    $_SESSION['question_id']=$save_question_id;
    $_SESSION['question_number']=$save_question_number;
    $_SESSION['question_sub']=$save_question_sub;
    $_SESSION['question_statement']=$save_question_marks;
    $_SESSION['question_marks']=$save_question_statement;
    $_SESSION['subject']=$subject_id;
    $_SESSION['my session']="sanjay";

    
?>
    
</div>
</body>
</html>
    