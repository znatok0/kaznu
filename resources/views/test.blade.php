@extends('layouts.app')

@section('content')
    <?php 
        echo $test_questions->questions
    ?>
    <script>
        var lesson_id = "<?php echo $test_questions->lesson_id ?>";
        var course_id = "<?php echo $test_questions->course_id ?>";
        var lesson_num = "<?php echo $current_lesson_num->lesson_number ?>";
        var int_lesson_num = parseInt(lesson_num);
        var lessons_quantity = "<?php echo $lesson_num ?>";
        var int_lessons_quantity = parseInt(lessons_quantity);
        function I(a){ return document.getElementById(a); }
        if(parseInt(course_id) == 5){
            if(parseInt(lesson_id) == 1) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A0", "A2", "A2", "A0", "A3" ];
            }
            else if(parseInt(lesson_id) == 2) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A0", "A2", "A2", "A0", "A3" ];
            }
            else if(parseInt(lesson_id) == 3) {
                var q = [ "Q0", "Q1", "Q2" ];
                var r = [ "A2", "A3", "A3" ];
            }
            else if(parseInt(lesson_id) == 4) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A1", "A2", "A1", "A2", "A0" ];
            }
            else if(parseInt(lesson_id) == 5) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A3", "A2", "A1", "A0" ];
            }
            else if(parseInt(lesson_id) == 6) {
                var q = [ "Q0", "Q1", "Q2" ];
                var r = [ "A3", "A3", "A2" ];
            }
            else if(parseInt(lesson_id) == 7) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A3", "A0", "A1", "A3" ];
            }
            else if(parseInt(lesson_id) == 8) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5" ];
                var r = [ "A3", "A0", "A1", "A2", "A1", "A1" ];
            }
            else if(parseInt(lesson_id) == 9) {
                var q = [ "Q0", "Q1", "Q2" ];
                var r = [ "A3", "A2", "A2" ];
            }
            else if(parseInt(lesson_id) == 10) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A1", "A0", "A2", "A3", "A2" ];
            }
            else if(parseInt(lesson_id) == 11) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A0", "A1", "A3", "A2" ];
            }
            else if(parseInt(lesson_id) == 12) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5" ];
                var r = [ "A1", "A3", "A3", "A0", "A2", "A1" ];
            }
            else if(parseInt(lesson_id) == 13) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A1", "A1", "A0", "A3" ];
            }
            else if(parseInt(lesson_id) == 14) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A2", "A0", "A3", "A0", "A2" ];
            }
            else if(parseInt(lesson_id) == 15) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A2", "A2", "A2", "A0" ];
            }
            else if(parseInt(lesson_id) == 16) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A3", "A1", "A3", "A2" ];
            }
            else if(parseInt(lesson_id) == 17) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A2", "A1", "A3", "A0" ];
            }
            else if(parseInt(lesson_id) == 18) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A1", "A2", "A0", "A2", "A3" ];
            }
            else if(parseInt(lesson_id) == 19) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A0", "A0", "A1", "A2" ];
            }
        }
        else if(parseInt(course_id) == 4){
            if(parseInt(lesson_id) == 1) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "Q9", "Q10", "Q11", "Q12", "Q13", "Q14" ];
                var r = [ "A0", "A3", "A0", "A0", "A0", "A1", "A0", "A2", "A2", "A3", "A0", "A1", "A1", "A2", "A3" ];
            }
            else if(parseInt(lesson_id) == 2) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5" ];
                var r = [ "A2", "A2", "A1", "A3", "A2", "A1" ];
            }
            else if(parseInt(lesson_id) == 3) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5" ];
                var r = [ "A2", "A2", "A1", "A2", "A3", "A0" ];
            }
            else if(parseInt(lesson_id) == 4) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5" ];
                var r = [ "A3", "A2", "A1", "A3", "A3", "A1" ];
            }
            else if(parseInt(lesson_id) == 5) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A2", "A1", "A3", "A2", "A1" ];
            }
            else if(parseInt(lesson_id) == 6) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6" ];
                var r = [ "A2", "A0", "A1", "A0", "A1", "A2", "A3" ];
            }
            else if(parseInt(lesson_id) == 7) {
                var q = [ "Q0", "Q1" ];
                var r = [ "A2", "A1" ];
            }
            else if(parseInt(lesson_id) == 8) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7" ];
                var r = [ "A1", "A1", "A2", "A2", "A1", "A2", "A0", "A1" ];
            }
            else if(parseInt(lesson_id) == 9) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "Q9" ];
                var r = [ "A1", "A3", "A2", "A2", "A0", "A2", "A1", "A1", "A2", ];
            }
            else if(parseInt(lesson_id) == 10) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A1", "A2", "A0", "A1", "A3" ];
            }
            else if(parseInt(lesson_id) == 11) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "Q9" ];
                var r = [ "A1", "A2", "A0", "A1", "A0", "A0", "A2", "A2", "A3", "A2" ];
            }
            else if(parseInt(lesson_id) == 12) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5" ];
                var r = [ "A1", "A3", "A2", "A2", "A1", "A1" ];
            }
            else if(parseInt(lesson_id) == 13) {
                var q = [ "Q0", "Q1", "Q2" ];
                var r = [ "A3", "A3", "A0" ];
            }
            else if(parseInt(lesson_id) == 14) {
                var q = [ "Q0", "Q1" ];
                var r = [ "A3", "A3" ];
            }
            else if(parseInt(lesson_id) == 15) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A3", "A0", "A3", "A3", "A1" ];
            }
            else if(parseInt(lesson_id) == 16) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A1", "A1", "A2", "A1", "A3" ];
            }
            else if(parseInt(lesson_id) == 17) {
                var q = [ "Q0", "Q1", "Q2" ];
                var r = [ "A1", "A3", "A3" ];
            }
            else if(parseInt(lesson_id) == 18) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A1", "A2", "A2", "A0" ];
            }
        }
        else if(parseInt(course_id) == 6){
            if(parseInt(lesson_id) == 1) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7" ];
                var r = [ "A1", "A1", "A0", "A0", "A1", "A2", "A0", "A2" ];
            }
            else if(parseInt(lesson_id) == 2) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "Q9", "Q10", "Q11", "Q12", "Q13", "Q14", "Q15" ];
                var r = [ "A1", "A0", "A0", "A0", "A2", "A2", "A0", "A3", "A0", "A2", "A2", "A0", "A2", "A2", "A2", "A1" ];
            }
            else if(parseInt(lesson_id) == 3) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8" ];
                var r = [ "A2", "A1", "A0", "A0", "A0", "A0", "A3", "A2", "A3" ];
            }
            else if(parseInt(lesson_id) == 4) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4" ];
                var r = [ "A1", "A2", "A2", "A3", "A0" ];
            }
            else if(parseInt(lesson_id) == 5) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "Q9", "Q10", "Q11" ];
                var r = [ "A2", "A0", "A3", "A2", "A1", "A3", "A0", "A0", "A3", "A0", "A1", "A0" ];
            }
            else if(parseInt(lesson_id) == 6) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7" ];
                var r = [ "A3", "A0", "A2", "A0", "A1", "A1", "A0", "A1" ];
            }
            else if(parseInt(lesson_id) == 7) {
                var q = [ "Q0", "Q1", "Q2", "Q3" ];
                var r = [ "A1", "A3", "A2", "A0" ];
            }
            else if(parseInt(lesson_id) == 9) {
                var q = [ "Q0", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7","Q8", "Q9", "Q10", "Q11", "Q12", "Q13", "Q14","Q15", "Q16", "Q17", "Q18","Q19", "Q20", "Q21", "Q22", "Q23"];
                var r = [ "A1", "A2", "A0", "A0", "A0", "A0", "A1", "A1","A3", "A1", "A3", "A0", "A3", "A0", "A0","A0", "A1", "A1", "A0","A1", "A1", "A1", "A2", "A2"];
            }
        }
        displayresult = 1;
        function checkTest() { 
        var bal = 0; 
        for (var i=0;i<q.length;i++) { 
        if (displayresult == 1) 
        I(q[i]).style.cssText="-moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; padding: 5px; margin-bottom: 10px; color: #000;" 
        else I(q[i]).style.display = 'none'; 
        if (I(q[i]+'_h').value == r[i]) 
        { 
            bal++; 
            I(q[i]).style.background="#d7ffb9"; 
        } else I(q[i]).style.background="#ffc0b9"; 
        } 
        if(q.length > bal){
            I('test_result').innerHTML='<h3>Тест завершен!</h3><strong>Всего вопросов:</strong> '
            +q.length+'<br /><strong>Правильных ответов:</strong> '+bal+
            '<br /><a style="border-bottom: 1px dotted; cursor: pointer;" onClick="window.location.reload(true);">Пройти еще раз</a>'; 
        }
        else if(q.length == bal){
            if(int_lesson_num < int_lessons_quantity){
                I('test_result').innerHTML='<h3>Тест завершен!</h3><strong>Всего вопросов:</strong> '
                +q.length+'<br /><strong>Правильных ответов:</strong> '+bal+
                '<br /><a style="border-bottom: 1px dotted; cursor: pointer;" href="/lesson/'+course_id+'/'+(int_lesson_num+1)+'">К следующей теме</a>';
            } 
            else if(int_lessons_quantity == int_lessons_quantity){
                I('test_result').innerHTML='<h3>Тест завершен!</h3><strong>Всего вопросов:</strong> '
                +q.length+'<br /><strong>Правильных ответов:</strong> '+bal+
                '<br /><p style="border-bottom: 1px dotted; cursor: pointer;">Поздравляем, курс пройден!</p>'; 
            }
        }
        I('test_result').scrollIntoView(); 
        }
    </script>
    <style>
        main{
            padding-top: 10px;
            width: 70%;
            margin: 0 auto;
        }
        input.submit{
            margin: 5px 0 10px 0;
            background-color: #0094ce;
            color: white;
            padding: 5px;
            border-radius: 10px;
        }
    </style>
@endsection