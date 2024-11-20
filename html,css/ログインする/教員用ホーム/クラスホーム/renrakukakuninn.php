<?php
    $kouketu = [
        ['studentName' => '電子太郎', 'date' => '○月○日 1~4限', 'contents' => '会社説明会', 'supple' => '○○会社の説明会に出席します', 'ok' => '✓', 'delete' => '×'],
        ['studentName' => '電子花子', 'date' => '', 'contents' => '', 'supple' => '', 'ok' => '✓', 'delete' => '×'],
    ];
    $chikoku = [
        ['studentName' => '電子太郎', 'reason' => '遅延', 'supple' => '30分遅れます', 'image' => '開く', 'ok' => '✓', 'delete' => '×'],
        ['studentName' => '電子花子', 'reason' => '', 'supple' => '', 'image' => '', 'ok' => '✓', 'delete' => '×'],
        
    ];
    $kesseki = [
        ['studentName' => '電子太郎', 'reason' => '体調不良', 'supple' => '40度の熱が出たので休みます', 'ok' => '✓', 'delete' => '×'],
        ['studentName' => '電子花子', 'reason' => '', 'supple' => '', 'ok' => '✓', 'delete' => '×'],
    ];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>renrakukakunin</title>
</head>
<body>
    <h1>公欠、遅刻、欠席連絡確認</h1> 
    <hr>
    <form>
        公欠<table border="1"> 
            <tr>
                <th>名前</th>
                <th>日時</th>
                <th>内容</th>
                <th>補足</th>
                <th>承諾</th>
                <th>削除</th>
            </tr>
            <?php foreach($kouketu as $row) : ?>
                <tr>
                    <td><?php echo $row['studentName']?></td>
                    <td><?php echo $row['date']?></td>
                    <td><?php echo $row['contents']?></td>
                    <td><?php echo $row['supple']?></td>
                    <td><?php echo $row['ok']?></td>
                    <td><?php echo $row['delete']?></td>
                </tr>
            <?php endforeach; ?>
        </table> 
        遅刻<table border="1"> 
            <tr>
                <th>名前</th>
                <th>理由</th>
                <th>補足</th>
                <th>画像</th>
                <th>承諾</th>
                <th>削除</th>
            </tr>
            <?php foreach($chikoku as $row) : ?>
                <tr>
                    <td><?php echo $row['studentName']?></td>
                    <td><?php echo $row['reason']?></td>
                    <td><?php echo $row['supple']?></td>
                    <td><?php echo $row['image']?></td>
                    <td><?php echo $row['ok']?></td>
                    <td><?php echo $row['delete']?></td>
                </tr>
            <?php endforeach; ?>
        </table> 
        欠席<table border="1"> 
            <tr>
                <th>名前</th>
                <th>理由</th>
                <th>補足</th>
                <th>承諾</th>
                <th>削除</th>
            </tr>
            <?php foreach($kesseki as $row) : ?>
                <tr>
                    <td><?php echo $row['studentName']?></td>
                    <td><?php echo $row['reason']?></td>
                    <td><?php echo $row['supple']?></td>
                    <td><?php echo $row['ok']?></td>
                    <td><?php echo $row['delete']?></td>
                </tr>
            <?php endforeach; ?>
        </table> 
        <tr> 
            <td><input type="submit" value="戻る"></td> 
        </tr> 
    </form>
</body>
</html>