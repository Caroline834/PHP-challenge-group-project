function submit(){
    var q1a1 = document.getElementById('q1a1');
    var q1a2 = document.getElementById('q1a2');
    var q1a3 = document.getElementById('q1a3');
    var q1a4 = document.getElementById('q1a4');

    var q2a1 = document.getElementById('q2a1');
    var q2a2 = document.getElementById('q2a2');
    var q2a3 = document.getElementById('q2a3');
    var q2a4 = document.getElementById('q2a4');

    var q3a1 = document.getElementById('q3a1');
    var q3a2 = document.getElementById('q3a2');
    var q3a3 = document.getElementById('q3a3');
    var q3a4 = document.getElementById('q3a4');

    var q4a1 = document.getElementById('q4a1');
    var q4a2 = document.getElementById('q4a2');
    var q4a3 = document.getElementById('q4a3');
    var q4a4 = document.getElementById('q4a4');

    var q5a1 = document.getElementById('q5a1');
    var q5a2 = document.getElementById('q5a2');
    var q5a3 = document.getElementById('q5a3');
    var q5a4 = document.getElementById('q5a4');

    var q6a1 = document.getElementById('q6a1');
    var q6a2 = document.getElementById('q6a2');
    var q6a3 = document.getElementById('q6a3');
    var q6a4 = document.getElementById('q6a4');

    var score1=0;
    var score2 = 0;
    var score3 = 0;
    var score4 = 0;
    var total;

    check();

    // window.location.replace("../../../View/userMentalTest2.php");
    total = score1 + score2 + score3 + score4;

    if(total == 0){
        document.getElementById('dd').innerHTML = "You have in good mental health";
    }else if(total <= 6){
        document.getElementById('dd').innerHTML = "Mild Condition";
    }else if(total < 12){
        document.getElementById('dd').innerHTML = "MIddle Condition";
    }else{
        document.getElementById('dd').innerHTML = "Sevre Condition";
    }
    



    function check(){
        // for (let index = 0; index < 6; index++) {
        // const element = array[index];
        if( q1a1.checked || q2a1.checked || q3a1.checked || q4a1.checked || q5a1.checked || q6a1.checked)
        {
            score1 = 0;
        }

        if(q1a2.checked){score2 =  score2+1;}
        if(q2a2.checked){score2 =  score2+1;}
        if(q3a2.checked){score2 =  score2+1;}
        if(q4a2.checked){score2 =  score2+1;}
        if(q5a2.checked){score2 =  score2+1;}
        if(q6a2.checked){score2 =  score2+1;}

        if(q1a3.checked){score3 =  score3+2;}
        if(q2a3.checked){score3 =  score3+2;}
        if(q3a3.checked){score3 =  score3+2;}
        if(q4a3.checked){score3 =  score3+2;}
        if(q5a3.checked){score3 =  score3+2;}
        if(q6a3.checked){score3 =  score3+2;}

        if(q1a4.checked){score4 =  score4+3;}
        if(q2a4.checked){score4 =  score4+3;}
        if(q3a4.checked){score4 =  score4+3;}
        if(q4a4.checked){score4 =  score4+3;}
        if(q5a4.checked){score4 =  score4+3;}
        if(q6a4.checked){score4 =  score4+3;}
    // }

}
}

