<?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $city = htmlspecialchars($_POST['city']);

        echo "<h2>Form Submitted Successfully</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>City:</strong> $city</p>";
    } else {
        echo "<p>Invalid request</p>";
    }   
?>
<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = $_POST["name"];
    //     $age = $_POST["age"];
    //     $city = $_POST["city"];

    //     echo "Name : $name <br>";
    //     echo "Age : $age <br>";
    //     echo "City : $city <br>";
    // }else {
    //     echo "No Data Submitted";
    // }
?>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     // Get and sanitize input
//     $name = htmlspecialchars($_GET["name"]);
//     $age = htmlspecialchars($_GET["age"]);
//     $city = htmlspecialchars($_GET["city"]);

//     // Display the values
//     echo "<h2>Form Data Received via GET</h2>";
//     echo "<p><strong>Name:</strong> $name</p>";
//     echo "<p><strong>Age:</strong> $age</p>";
//     echo "<p><strong>City:</strong> $city</p>";
// } else {
//     echo "<p>No data received. Please submit the form.</p>";
// }
?>

