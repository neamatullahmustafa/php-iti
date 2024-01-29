<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($students as $value) {
                if ($value["status"] == "PHP") {
                    echo "<tr style='color:red'>
                    <td>$value[name]</td>
                    <td>$value[email]</td>
                    <td>$value[status]</td></tr>";
                }else{   echo "<tr>
                    <td>$value[name]</td>
                    <td>$value[email]</td>
                    <td>$value[status]</td></tr>";}
            }
            ?>
        </tbody>
    </table>
</body>

</html>