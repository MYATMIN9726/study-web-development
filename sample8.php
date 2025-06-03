<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>今日から1年間の日付と曜日</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
       
    </style>
</head>
<body>
    <h1>今日から1年間の日付と曜日</h1>
    <table>
        <?php
        $week = ['日', '月', '火', '水', '木', '金', '土'];
        $start = strtotime("today");
        $end = strtotime("+1 year");

        $dayCount = 0;
        echo "<tr>";

        for ($date = $start; $date <= $end; $date = strtotime("+1 day", $date)) {
            $w = date("w", $date); // 曜日（0=日）
            $dateStr = date("Y/m/d", $date);
            $weekdayStr = $week[$w];

            echo "<td>{$dateStr}<br>{$weekdayStr}曜日</td>";
            $dayCount++;

            // 1週間ごとに改行
            if ($dayCount % 7 == 0) {
                echo "</tr><tr>";
            }
        }
        ?>
    </table>
</body>
</html>