<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>教員用ホーム</title>
</head>
<body>
    <h1>教員用ホーム</h1> 
    <hr>
    <input type="submit" value="時間割確認">
    <form>
    <select> 
        <?php for ($i = 1; $i <= 10; $i++) : ?> 
            <option value="<?= $i ?>"><?= $i ?></option> 
        <?php endfor; ?> 
    </select>
    のクラスホーム
    <input type="submit" value="決定">
    </form>
</body>
</html>