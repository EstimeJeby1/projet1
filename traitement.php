<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>


<?php

function traitement($position1,$position2,$score1,$score2){
       $_SESSION[$position1]['MJ']+=1;
       $_SESSION[$position2]['MJ']+=1;

       if($score1>$score2){
        $_SESSION[$position1]['MG']+=1;
        $_SESSION[$position1]['BP']+=$score1;
        $_SESSION[$position1]['BC']+=$score2;
        $_SESSION[$position1]['DIF']+=($score1-$score2);
        $_SESSION[$position1]['POINT']+=3;

        $_SESSION[$position2]['MP']+=1;
        $_SESSION[$position2]['BP']+=$score2;
        $_SESSION[$position2]['BC']+=$score1;
        $_SESSION[$position2]['DIF']+=($score2-$score1);

       }
       elseif($score1<$score2){
        $_SESSION[$position1]['MP']+=1;
         $_SESSION[$position1]['BP']+=$score1;
         $_SESSION[$position1]['BC']+=$score2;
         $_SESSION[$position1]['DIF']+=$score1;

         $_SESSION[$position2]['MG']+=1;
         $_SESSION[$position2]['BP']+=$score2;
         $_SESSION[$position2]['BC']+=$score1;
         $_SESSION[$position2]['DIF']+=($score2-$score1);
         $_SESSION[$position2]['POINT']+=3;
       }
         else{
            $_SESSION[$position1]['MN']+=1;
            $_SESSION[$position1]['BP']+=$score1;
            $_SESSION[$position1]['BC']+=$score2;
            $_SESSION[$position1]['DIF']+=($score1-$score2);
            $_SESSION[$position1]['POINT']+=1;


            $_SESSION[$position2]['MN']+=1;
            $_SESSION[$position2]['BP']+=$score2;
            $_SESSION[$position2]['BC']+=$score1;
            $_SESSION[$position2]['DIF']+=($score2-$score1);
            $_SESSION[$position2]['POINT']+=1;
         }



       }




?>