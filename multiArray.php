<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Array</title>
</head>
<body>
    <?php 
        $users = [
            ["name"=>"Mg Mg", "age"=>20, "city"=>"Yangon"],
            ["name"=>"Kyaw Kyaw", "age"=>17, "city"=>"Mandalay"],
            ["name"=>"Hla Hla", "age"=>18, "city"=>"Yangon"],
        ];
    ?>
    <table border="1" cellspaing="5">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
        <?php foreach ($users as $user):?>
        <tr>
            <td><?= $user['name'] ?></td>
            <td><?= $user['age'] ?></td>
            <td><?= $user['city'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>