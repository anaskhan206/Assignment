<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Marksheet Program</title>
</head>
<body>
    <h1>Marksheet Program</h1>
    <?php
    $rollno = 5042;
    $standard = "X";
    $eng ="85";
    $urdu ="80";
    $maths ="75";
    $science ="70";
    $banking ="65";
    $geography ="60";
    $physics ="55";
    $chemistry ="50";
    $obtmarks = $eng + $urdu + $maths + $science + $banking + $geography + $physics + $chemistry;
    $totalmarks = 300;
    $per = $obtmarks/$totalmarks*100;
    $grade;

    if ($per >= 80 && $per <= 100) {
        $grade = "A+";
    }else if ($per >= 70 && $per <= 79) {
        $grade = "A";
    }else if ($per >= 60 && $per <= 69) {
        $grade = "B";
    }else if ($per >= 50 && $per <= 59) {
        $grade = "C";
    }else if ($per >= 40 && $per <= 49) {
        $grade = "D";
    }else {
        $grade = "PASS";
    }
    ?>

    <div class = "container">
      <table border="1">
         <tr>
            <th>rollno</th>
            <th>standard</th>
            <th>eng</th>
            <th>urdu</th>
            <th>maths</th>
            <th>science</th>
            <th>banking</th>
            <th>geography</th>
            <th>physics</th>
            <th>chemistry</th>
            <th>obtmarks</th>
            <th>totalmarks</th>
            <th>per</th>
            <th>grade</th>
         </tr>
         <tr>
            <td><?php echo $rollno ?></td>
            <td><?php echo $standard ?></td>
            <td><?php echo $eng ?></td>
            <td><?php echo $urdu ?></td>
            <td><?php echo $maths ?></td>
            <td><?php echo $science ?></td>
            <td><?php echo $banking ?></td>
            <td><?php echo $geography ?></td>
            <td><?php echo $physics ?></td>
            <td><?php echo $chemistry ?></td>
            <td><?php echo $obtmarks ?></td>
            <td><?php echo $totalmarks ?></td>
            <td><?php echo $per ?></td>
            <td><?php echo $grade ?></td>
         </tr>
      </table>
    </div>
</body>
</html>