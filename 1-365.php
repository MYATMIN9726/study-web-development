<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>1から365までの表示</title>
   
</head>
<body>
    <h1>1から365までの数字</h1>
    <table>
        <tr>
        <?php
            for ($i = 1; $i <= 365; $i++) {
                echo "<td>$i</td>";
                // 20個ごとに改行（新しい行を開始）
                if ($i % 20 == 0) {
                    echo "</tr><tr>";
                }
            }
        ?>
        </tr>
    </table>
</body>
</html>