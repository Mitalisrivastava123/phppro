<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- first program -->
    <h4>Write a program to check student grade based on the marks using if-else statement.</h4>
    <?php
    $marks = 20;
    if($marks>60)
    {
        $grade = "first division";
    }
    else if($marks>45 && $marks<59)
    {
        $grade = "second division";
    }
    elseif($marks>33 && $marks<44)
    {
        $grade = "third division";
    }
   else if($marks<33)
   {
    $grade = "fail";
   }
   echo  "Student Grade :" .$grade;
    ?>
<br>
<!-- second program -->
<h4>Write a Program to display count, from 5 to 15 using PHP loop as given below.</h4>
    <?php
    for($i=5;$i<=15;$i++)
    {
        echo "numbers from 5 to 15 are ".$i ."<br>";
    }
    ?>
    <!-- thirs program -->
    <h4>Write a program to print “Welcome to the PHP World” using some part of the text in variable & some part directly in </h4>

    <?php 
    $txt = "welcome to the php world";
    echo $txt;
    echo "<br>";
    echo "welcome to the php world";
    ?>
    <!-- fourth program -->
    <h4>Write a program to perform sum or addition of two numbers in PHP programming.</h4>
    <?php
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo "sum of $a and $b is " .$c; 
    ?>
<!-- fifth program -->
    <h4>Write a program to print 2 php variables using single echo statement.</h4>

    <?php
    $a1 = 10;
    $b1 = 20;
    $c1 = 30;
    echo "first variable :$a1  second variable :$b1 third variable :$c1"; 
    ?>
    <!-- sixth program -->
    <h4>Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.</h4>
    <?php 
    $day = "friday";
    switch($day)
    {
        case "monday":
            echo "monday";
            break;
            case "tuesday" :
                echo "tuesday";
                break;
                case "wednesday":
                    echo "wednesday";
                    break;
                    case "thursday":
                        echo "thursday";
                        break;
                        case "friday":
                            echo "friday";
                            break;
                            case "saturday": 
                                echo "saturday";
                                break;
                                case "sunday":
                                    echo "sunday";
                                    break;
                                    default:
                                    echo "no weeks";                     

    }
  
    ?>
    <!-- seventh program -->
    <h4>Write a program to calculate factorial of a number using for loop in php.</h4>
  <?php
  $fact =1;
  $n=5;
  for($i=1;$i<=$n;$i++)
  {
    $fact = $fact * $i;
  } 
  echo 'factorial is' .$fact;

  ?>
  <!-- eightth proogram -->
  <h4>Write a PHP program using nested for loop that creates a chess board</h4>

  <table width="400px" height="30px"  border="1px">

      <?php
     for($i=1;$i<=8;$i++)
     {
        for($j=1;$j<=8;$j++)
        {
            $total = $i + $j;
            if($total%2 == 0)
            {
            echo "<td height=30px width=40px bgcolor=black></td>";
            }
            else
            {
                echo "<td height=30px width=40px bgcolor=white></td>";
            }
        }
        echo "</tr>";
     }
      
          ?>
  </table>
</body>
</html>