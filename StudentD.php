<!DOCTYPE html>
<html>
<head>
    <title>Student Report</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Student data
$students = [
    ["id" => "S1", "name" => "ABC", "attendance" => 15, "sub1" => 70, "sub2" => 72, "sub3" => 78],
    ["id" => "S2", "name" => "CDF", "attendance" => 25, "sub1" => 50, "sub2" => 60, "sub3" => 70]
];

echo "<table>";
echo "<tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Attendance</th>
        <th>Sub1</th>
        <th>Sub2</th>
        <th>Sub3</th>
        <th>Percentage</th>
      </tr>";

foreach ($students as $s) {
    // Calculate percentage
    $total = $s['sub1'] + $s['sub2'] + $s['sub3'];
    $percentage = $total / 3;

    echo "<tr>
            <td>{$s['id']}</td>
            <td>{$s['name']}</td>
            <td>{$s['attendance']}</td>
            <td>{$s['sub1']}</td>
            <td>{$s['sub2']}</td>
            <td>{$s['sub3']}</td>
            <td>" . round($percentage, 2) . "%</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>