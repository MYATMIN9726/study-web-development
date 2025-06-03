<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>連想配列の例</title>
</head>
<body>
    <h1>果物の日本語</h1>
    <?php
    $fruits = [
        'apple' => 'りんご',
        'lemon' => 'レモン',
        'banana' => 'バナナ',
        'grape' => 'ぶどう'
    ];

    foreach ($fruits as $key => $value) {
        echo "<p>" . $key . " は日本語で「" . $value . "」です。</p>";
    }
    ?>
</body>
</html> 