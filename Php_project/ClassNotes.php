<?php

echo phpversion()." <br />";
echo "Hello world<br>";

  /*  //COMMENT
    $x = 0;
    #This is a comment for variable below
    $y = 0;
    // Mutiple comments
    /*

    FSDJKDSHKJDFJKFDHVJKDFVJKJK VVFJKV
    DSKJHJKVDJKFLKJVJKDNVJKJDVDKVJDVNVJK
    DVVNLKNVLKVKJLCFIOHEOIDSEIOWEOIWFIORLA

    */

   /* $name = "Iddrisu, Shamsu-deen<br>";
    // $name = 30;
    $x = $y = 50;
    echo $name."".$y+$x;

    // How to get the data type of your variable
    var_dump($name);

    // SCOPE OF VARIABLES
    /*
    local scope
    global scope
    static scope
    */

  /*  $age = 24;

    function getAge(){
        global $age;
        echo $age;
        $mark = 10;
    }

    getAge();
    // echo $mark;
    print $age;

    // outing on screen 
    // echo,print
    // Assigment find the different between echo and print
    // Assigment find the different between 

    // Single and double quote

    echo "<br> Hello $name I learned you are $age years old <br>";
    echo 'Hello $fullname I learned you are $age old <br>';

    $bool = true;
    $null = null;
    $nul = "";
    $data = array('Ama', "Kwadwo", "Adomako");

    echo var_dump($null)."<br>";
    echo var_dump($nul);

    // String Modification
    $statement = "Here we are come again with all good news.<br>";
    // length, upper, lower, split or replace
    echo strlen($statement)."<br>";
    echo strtolower($statement)."<br>";
    echo strtoupper($statement)."<br>";
    echo "<br><br>". $data [0];
    echo "<br><br>". $statement [6];
    echo "<br><br>".count($data);

    // Casting
    $num = 5;
    // $varl = 3.90;
    $varl = true;

    var_dump($num);
    var_dump($varl);
    $num = (string) $num;
    $varl = (string) $varl;
    var_dump($num);
    var_dump($varl);


    // constant
    Const COST = 90;
    // Const COST = 90;
    echo '<br>'.COST;

    /*OPERATORS
    1.arithmetic operator: +,-,
    2.assigment operator: =
    3.logical operator: and,or,not
    4.increment/decrement: ++,--
    5.comparision operator: <,>
    6.array operator
    7.string operator
    */

   /* $error = 'Error 0';

    $error = "<br>Error 1";
    $error .= "<br>Error 2";

    echo $error; 
    */

    // IF
    $num = 10;
    if(!$num){
        echo "IF statement is true for $num";
    }else{
        // echo "False";
    }

    // If operators || comparison operators
    /*
     ==
     ===
     !=
     <>
     <
     >
     >=
     <=

     */

    //  short hand
    if($num) echo "True for short hand";

    // while loop
    /*$var = 10;
    while ($var > 0 && $var <= 20){
        echo "item is $var <br>";
        $var++;
    }*/

   /* $i = 1;
    do {
        echo $i. "<br/>";
        $i++;
    }while($i < 6)
*/
/*
$num1 = 10;
for($num1 = 0; $num1 <= 10; $num1++) {
    echo "<br> The number is: $num1 <br>";
}

$rr = ["windows","linux", "mac"];
array_push($rr, "DIKUMYA");
// access array
foreach($rr as $a);
echo $rr[0];
// check if the array contains a certain element
$showE1 = '';

foreach($rr as $a){
    if(in_array("windows",$a)){
        array_push($rr,"windows");
}else{
    $showW1 .= $a."<br>";
}
}
echo $showE1;

// functions 
function getNmae(){
    echo "ddyudydrsdrtfsfrtdrrrrrrrrrf";
}
*/

// Functions Returning values
function getPassword($phone,$email){
    $emailDB = ["daan001@gmail.com","seeeeg22@gmail.com","fati@gmail.com"];
    $phoneDB = ["02478878908","02478878909","02478878907"];
    if(in_array($phone,$phoneDB) && in_array($email,$emailDB)){
        return time();
    }
    return 0;
}

$phone = "02478878907";
$email = "fati@gmail.com";

$password = getPassword($phone,$email);
if($password){
    echo "Your password is $password";
}
?>