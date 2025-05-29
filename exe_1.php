<?php
    $num = 2;
    if ($num%2 == 0) {
        echo"$num is even number";
    }else{
        echo"$num is odd number";   
    }

    echo "<br>";

    $num2 = 20;
    $num3 = 10;
    $action= "/";

    switch ($action) {
        case "+":
            echo $num2 + $num3;
            break;
        case "-":
            echo $num2 - $num3;
            break;
        case "*":
            echo $num2 * $num3;
            break;
        case "/":
            echo $num2 / $num3;
            break;           
        
        default:
            echo "error";
            break;
    }
?>
<?php
    //function default value
    function sayhello($name = "Guest"){
        return "Hello, $name";
    }
    $result = sayhello();
    echo "<br>";
    echo $result;
?>

<?php
    //Type Restriction
    function add(int $a, int $b): int {
        return $a + $b;
    }
?>

<?php
    //project start
    //PO | PCo, BA , PM, QA, FE, BE

    //Array
    //1.Index Array
    //2.Associated Array
    //3.Multidimensional Array

    //Index Array
    $fruits = array("Apple", "Banana", "Orange");
    echo "<br>";
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
    //Associated Array
    $person = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    );
    echo "<br>";
    foreach ($person as $key => $value) {
        echo "$key: $value <br>";
    }
    //Multidimensional Array
    $users = [
        ["name"=>"Mg Mg", "age"=>20, "city"=>"Yangon"],
        ["name"=>"Kyaw Kyaw", "age"=>17, "city"=>"Mandalay"],
        ["name"=>"Hla Hla", "age"=>18, "city"=>"Yangon"],
    ];

    foreach ($users as $user) {
        echo "<br>";
        echo $user["name"] . "," . $user["age"] . "," . $user["city"];
    }
?>

<?php
    $mark = array(
        "Aung Aung" => 20,
        "Kyaw Kyae" => 50,
        "Hla Hla" => 30,
    );
    foreach ($mark as $key => $value) {
        if ($value >= 50) {
            echo "<br> $key : Passed";
        } else {
            echo "<br> $key : Failed";
        }
    }
?>