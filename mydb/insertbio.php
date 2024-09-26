<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Bio</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<form method="post" action="insertbiosuccess.php">
<p>

<label>รหัสนักศึกษา</label>
<input type="int" name="sid" id="sid">

</p>
<form>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="sname" id="sname">
        </p>
        <p>
            <label>นามสกุล</label>
            <input type="text" name="slastname" id="slastname">
        </p>
        <p>
            <label>ที่อยู่</label>
            <input type="text" name="address" id="address">
        </p>
        <p>
            <label>เบอร์โทร</label>
            <input type="text" name="telephone" id="telephone">
            <br><br>
            <input class="submit"type="submit" value="บันทึก">
        </p>
</form>
        <a href='mainmenu.php'><button class="btn3"> Home </button></a>
    </form>
</body>
</html>