<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #007bff;
            color: white;
        }
     */
    </style>
</head>
<body>

<?php
$arr = [
    "row1" => ["name" => "alaa", "age" => 22, "address" => "banha"],
    "row2" => ["name" => "ali", "age" => 21, "address" => "menoufia"],
    "row3" => ["name" => "aya", "age" => 20, "address" => "banha"],
    "row4" => ["name" => "menna", "age" => 22, "address" => "banha"],
    "row5" => ["name" => "omar", "age" => 23, "address" => "menoufia"],
];

echo "<table>";

$headers = array_keys(reset($arr));

echo "<thead><tr>";
foreach ($headers as $header) {
    echo "<th>$header</th>";
}
echo "</tr></thead>";

echo "<tbody>";
foreach ($arr as $row) { 
    echo "<tr>";
    foreach ($row as $value) { 
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

?>

</body>
</html>
