<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <h2>1. Pass first name and last name with parameter and print out the names together in one string.</h2>
    <?php
    function fullName($fName, $lName){
        echo "Your full name is {$fName} {$lName}";
    }

    fullName("Nurshadul", "Islam");
    ?>

    <h2>2. Make 3 functions with 2 parameters each. Pass two numbers and print out SUM, MULTIPLICATION, SUBTRACTION by 3 separate functions.</h2>

    <?php
    function sum($first, $second){
        echo "Sum of {$first} and {$second} is ".$first+$second;
    }

    function multiplication($first, $second){
        echo "Multiplication of {$first} and {$second} is ".$first*$second;
    }

    function subtraction($first, $second){
        echo "Subtraction of {$first} and {$second} is ".$first-$second;
    }

    sum(10, 5);
    echo "<br>";
    multiplication(10, 5);
    echo "<br>";
    subtraction(10,5);
    ?>

    <h2>3. Print 20 to 10 reversely by for loop.</h2>
    <?php
    for($i=20; $i>=10; $i--){
        echo $i. " ";
    }
    ?>



    <h2>4. sum 1,2,3,4 using loop. Means 1+2+3+4 = ?</h2>
    <?php
    $i=1;
    $result=0;
    while($i<=4){
        $result+=$i;
        $i++;
    }

    echo "1+2+3+4 = ". $result;
    ?>

    <h2>5. Make multiplication table (নামাতা) for 40 to 45 using nested loop.</h2>

    <?php
    for($i=40; $i<=45; $i++){
        echo "<h3>multiplication table of {$i}</h3>";
        for($j=1; $j<=10; $j++){
            echo "{$i}x{$j}= ".($i*$j);
            echo "<br>";
        }
        echo "<br>";
    }
    ?>

    <h2>6. (Special) Make this sum 1+2+3+4+5 = ? by recursion function.</h2>
    <?php
    
    function sum2($number){
        if($number<6){
            return $number+sum2($number+1);
        }
    }

    echo "1+2+3+4+5 = ";
    echo sum2(1);
    ?>

    <h2>7. Make an array of numbers 1-10. Find the odd numbers from the list using loop.</h2>
    
    <?php
    $numbers=[1,2,3,4,5,6,7,8,9,10];
    $odd;
    foreach($numbers as $k=>$number){
        if($number%2==1){
            $odd[$k]=$number;
        }
    }

    echo "Odd numbers are: ";
    foreach($odd as $v){
        echo $v . " ";
    }
    ?>

    <h2>8. Suppose you want to arrange a party at your house. You have 10 friends on your list. (Take random 10 names in the array). Due to money shortage, you want to invite only those friends who's name has not more than 5 Characters. So write a program to sort out those friends' names from the array and print them using loop.</h2>

    <?php
    $friends=['sopan', 'dipu', 'rina', 'rita', 'mahfuz', 'minhaz', 'nurshadul', 'farzana', 'nitu', 'juthi'];
    foreach($friends as $k=>$friend){
        if(strlen($friend)<=5){
            $party[$k]=$friend;
        }
    }
    echo "Welcome to party: ";
    foreach($party as $pty){
        echo ucfirst($pty).", ";
    }
    ?>
    
</body>
</html>