<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title>mission_2 プログラミングブログ</title>
</head>
<script>
function InputCheck(forum){
	if (forum.number1.value=="")
  {
    alert("番号を入力してください");
    forum.number1.focus();
    return (false);
  }
  if (forum.password2.value=="")
  {
    alert("パスワードを入力してください");
    forum.password2.focus();
    return (false);
  }
}
function myrefresh(){ 
window.location.reload(); 
} 
setTimeout('myrefresh()',10000);
</script>

<body>

<form action="mission_2-15-3.php" method="post" class="comment" onsubmit="return InputCheck(this)" name="forum">
<!-formタグで入力フォームを作って、入力した後、データ値は”mission_2-15-3.php”まで送る->
<br><br>
<div class="thin">
<!-見出し->
  <h3 style="color:#FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;プログラミングブログ</h3>
</div>
<div class="thick">
  削除対象番号：<input type="text"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;番号を入力ください"class="su" name="number1"/><br><br>
  パスワード：<input type="password" class="su" name="password2"/><br><br>
  <button type="submit" onclick='return confirm("本当に削除しますか？");'>送信</button>&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="reset">リセット</button><br><br>
</div>
</form>
<hr>
<?php
include('conn.php');
$sql='SELECT * FROM Article';
$result=$conn->query($sql);

foreach($result as $row){
	echo $row[0].',';
	echo $row[1].',';
	echo $row[2].',';
	echo $row[4].'<br>';
}
?>
</body>
</html>