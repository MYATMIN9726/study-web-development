<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>100から1までの偶数</title>
</head>
<body>
    <h1>100から1までの偶数</h1>
    <table>
        <tr>
        <?php
            $count = 0;
            for ($i = 100; $i >= 1; $i--) {
                if ($i % 1 == 0) {
                    echo "<td>$i</td>";
                    $count++;
                    // 10個ごとに改行（1行に10個）
                    if ($count % 10 == 0) {
                        echo "</tr><tr>";
                    }
                }
            }
        ?>
        </tr>
    </table>
</body>
</html>