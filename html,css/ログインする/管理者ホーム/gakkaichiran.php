<?php
    $gakka = [
        ['gname' => '情報処理科', 'grade' => '23JN', 'class' => '01'],
        ['gname' => '情報処理科', 'grade' => '23JN', 'class' => '02'],
        ['gname' => '情報処理科', 'grade' => '23JN', 'class' => '03'],
        ['gname' => '情報処理科', 'grade' => '23JN', 'class' => '04'],
        ['gname' => '情報処理科', 'grade' => '24JN', 'class' => '01'],
        ['gname' => '情報処理科', 'grade' => '24JN', 'class' => '02'],
        ['gname' => '情報処理科', 'grade' => '24JN', 'class' => '03'],
        ['gname' => '情報処理科', 'grade' => '24JN', 'class' => '04'],
        ['gname' => 'ゲーム制作科', 'grade' => '23CI', 'class' => '01'],
        ['gname' => 'ゲーム制作科', 'grade' => '23CI', 'class' => '02'],
        ['gname' => 'ゲーム制作科', 'grade' => '23CI', 'class' => '03'],
        ['gname' => 'ゲーム制作科', 'grade' => '23CI', 'class' => '04'],
        ['gname' => 'ゲーム制作科', 'grade' => '24CI', 'class' => '01'],
        ['gname' => 'ゲーム制作科', 'grade' => '24CI', 'class' => '02'],
        ['gname' => 'ゲーム制作科', 'grade' => '24CI', 'class' => '03'],
        ['gname' => 'ゲーム制作科', 'grade' => '24CI', 'class' => '04'],
    ];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>gakkaichiran</title>
</head>
<body>
    <h1>学科一覧</h1> 
    <td><input type="text" name="search"><input type="submit" value="検索"></td> 
    <hr>
    <form >
        <table border="1"> 
            <tr>
                <th>学科</th>
                <th>学年</th>
                <th>クラス</th>
            </tr>
            <?php foreach($gakka as $row) : ?>
                <tr>
                    <td><?php echo $row['gname']?></td>
                    <td><?php echo $row['grade']?></td>
                    <td><?php echo $row['class']?></td>
                </tr>
            <?php endforeach; ?>
        </table> 
        <td><input type="submit" value="学科追加"></td>
    </form>
</body>
</html>