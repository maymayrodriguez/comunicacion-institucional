<?php
// Obtener el mes y año actual
$month = date('m');
$year = date('Y');

// Obtener el número de días en el mes
$daysInMonth = cal_days_in_month(
    CAL_GREGORIAN,
    $month,
    $year
);

// Obtener el día de la semana en el que comienza el mes
$firstDay = date('N', strtotime("$year-$month-01"));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario de eventos</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            border: 1px solid #020202;
            padding: 15px;
        }

        th {
            background-color: #0B3B60;
            color: white;
        }

        td {
            height: 35px;
        }

        .today {
            background-color: #17AAD2;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>
    <?php echo date('F Y'); ?>
</h2>

<table>
    <tr>
        <th>Lun</th>
        <th>Mar</th>
        <th>Mie</th>
        <th>Jue</th>
        <th>Vie</th>
        <th>Sab</th>
        <th>Dom</th>
    </tr>

    <tr>
        <?php
        // Celdas vacías antes del primer día del mes
        for ($i = 1; $i < $firstDay; $i++) {
            echo "<td></td>";
        }

        // Muestra los días del mes
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $class = ($day == date('j')) ? 'today' : '';

            echo "<td class='$class'>$day</td>";

            // Comienza una nueva fila después del domingo
            if (($day + $firstDay - 1) % 7 == 0) {
                echo "</tr><tr>";
            }
        }
        ?>
    </tr>
</table>

</body>
</html>