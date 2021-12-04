<?php //access the global array called $_POST to get the values from the text fields 
    //user answers from html
    $a1 = $_POST['q1'];
    $a2 = $_POST['q2'];
    $a3 = $_POST['q3'];
    $a4 = $_POST['q4'];
    $a5 = $_POST['q5'];

    $totalCorrect = 0;
    $possibleCorrect = 5;
    //determines if the user got a question correct, if they do a point is added
    if($a1 == "A") {$totalCorrect++;}
    if($a2 == "B") {$totalCorrect++;}
    if($a3 == "C") {$totalCorrect++;}
    if($a4 == "C") {$totalCorrect++;}
    if($a5 == "C") {$totalCorrect++;}

    //correct answers for easier use in displaying results
    $correct1 = "one";
    $correct2 = 'cout << "Hello World";';
    $correct3 = "int x = 5;";
    $correct4 = "length()";
    $correct5 = "MyClass myObj;";

    //depending on what the user answered, $userAns is assigned that option for each question
    $userAns1 = " ";
    if($a1 == "A"){ $userAns1 = "one"; 
    }elseif ($a1 == "B") {$userAns1 = "two"; 
    }elseif($a1 == "C"){$userAns1 = "three"; 
    }elseif ($a1 == "D") {$userAns1 = "none"; }

    $userAns2 = " ";
    if($a2 == "A"){$userAns2 = 'Console.WriteLine("Hello World)";'; 
    }elseif($a2 == "B") {$userAns2 = 'cout << "Hello World";'; 
    }elseif($a2 == "C"){$userAns2 = 'System.out.println("Hello World)";'; 
    }elseif ($a2 == "D") {$userAns2 = 'print("Hello World)";'; }

    $userAns3 = " ";
    if($a3 == "A"){ $userAns3 = "double x = 5;"; 
    }elseif ($a3 == "B") {$userAns3 = "x = 5;"; 
    }elseif($a3 == "C"){$userAns3 = "int x = 5;"; 
    }elseif ($a3 == "D") {$userAns3 = "float x = 5;"; }

    $userAns4 = " ";
    if($a4 == "A"){ $userAns4 = "getSize()"; 
    }elseif ($a4 == "B") {$userAns4 = "getSize[]"; 
    }elseif($a4 == "C"){$userAns4 = "length()"; 
    }elseif ($a4 == "D") {$userAns4 = "length[]"; }

    $userAns5 = " ";
    if($a5 == "A"){ $userAns5 = "class MyClass = new myObj();"; 
    }elseif ($a5 == "B") {$userAns5 = "class myObj = new MyClass();"; 
    }elseif($a5 == "C"){$userAns5 = "MyClass myObj;"; 
    }elseif ($a5 == "D") {$userAns5 = "new myObj = MyClass();"; }

    //displays total correct along with %
    echo "<div id='results'>$totalCorrect / 5 correct   " . $totalCorrect / $possibleCorrect * 100 . "%<br></div>";
    
    echo "<br><div id='q1'>Question 1: The explicit keyword is an optional decoration for the constructors that takes exactly _____ argument <br> 
        You answered: " . $userAns1 . "<br>
        Correct answer: " . $correct1 . 
    "<br></div>";

    echo "<br><div id='q2'>Question 2: What is a correct syntax to output 'Hello World' in C++? <br> 
        You answered: " . $userAns2 . "<br>
        Correct answer: " . $correct2 .
    "<br></div>";

    echo "<br><div id='q3'>Question 3: How do you create a variable with the numeric value 5? <br>
        You answered: " . $userAns3 . "<br>
        Correct answer: " . $correct3 . 
    "<br></div>";

    echo "<br><div id='q4'>Question 4: Which method can be used to find the length of a string? <br>
        You answered: " . $userAns4 . "<br>
        Correct answer: " . $correct4 . 
    "<br></div>";

    echo "<br><div id='q5'>Question 5: What is the correct way to create an object called myObj of MyClass? <br>
        You answered: " . $userAns5 . "<br>
        Correct answer: " . $correct5 . 
    "<br></div>";

?>


