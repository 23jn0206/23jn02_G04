<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>contact</title>
</head>
<body>
    <h1>遅刻 欠席連絡</h1> 
    <hr>
    <form >
        <table> 
            <tr> 
                <td>遅刻 欠席</td> 
                <td><input type="list" name="Lateness/adsence" list="Lateness/adsence_list">
                <datalist id="Lateness/adsence_list">
                    <option value="遅刻">
                    <option value="欠席">
                </datalist>
                </td>
            </tr> 
            <tr> 
                <td>理由</td> 
                <td><input type="list" name="reason" list="reason_list">
                <datalist id="reason_list">
                    <option value="寝坊">
                    <option value="体調不良">
                    <option value="電車遅延">
                    <option value="交通事故">
                    <option value="通院">
                    <option value="忌引き">
                    <option value="冠婚葬祭">
                    <option value="その他">
                </datalist>
                </td>
            </tr> 
            <tr> 
                <td>補足</td> 
                <td><input type="text" name="supplement"></td> 
            </tr> 
            <tr> 
                <td>遅刻証明書</td> 
                <td><input type="submit" value="画像をアップロード"></td> 
            </tr> 
            <tr> 
                <td><input type="submit" value="送信"></td> 
            </tr> 
        </table> 
    </form>
</body>
</html>