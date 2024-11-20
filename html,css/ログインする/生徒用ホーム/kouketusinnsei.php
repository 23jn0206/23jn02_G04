<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>公欠申請</title>
</head>
<body>
    <h1>公欠申請</h1> 
    <hr>
    <form >
        <table> 
            <tr> 
                <td>日時</td> 
                <td><input type="text" name="kouketuDay"><input type="text" size="2" name="kouketuTime1">～<input type="text" size="2" name="kouketuTime2">限</td> 
            </tr> 
            <tr> 
                <td>内容</td> 
                <td>
                <select> 
                    <option value="1">外部合同企業説明会</option>
                    <option value="2">会社説明会・セミナー</option>
                    <option value="3">書類応募</option>
                    <option value="4">入社試験</option> 
                    <option value="5">会社説明会＋入社試験</option>
                    <option value="6">会社見学</option>
                    <option value="7">内定式</option>
                    <option value="8">内定後研修</option>
                    <option value="9">その他の就職活動</option>
                    <option value="10">その他の理由</option>
                </select> 
                </td>
            </tr>
            <tr> 
                <td>補足</td> 
                <td><input type="text" size="100" name="supplement"></td> 
            </tr> 
        </table> 
        <input type="submit" value="ログイン">
    </form>
</body>
</html>