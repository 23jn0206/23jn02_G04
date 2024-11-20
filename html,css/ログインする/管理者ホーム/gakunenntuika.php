<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>gakunentuika</title>
</head>
<body>
    <h1>学年の追加</h1> 
    <hr>
    <form >
        <table> 
            <tr> 
                <td>学年名　<input type="text" name="gname"></td> 
            </tr> 
            <tr> 
                <td>クラス数<input type="list" name="number" list="number_list">
                <datalist id="number_list">
                    <option value="1">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <option value="5">
                    <option value="6">
                    <option value="7">
                    <option value="8">
                    <option value="9">
                    <option value="10">
                </datalist>
                </td>
            </tr> 
            <tr> 
                <td><input type="submit" value="決定"></td> 
            </tr> 
        </table> 
    </form>
</body>
</html>