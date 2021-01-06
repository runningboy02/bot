<html>
<body>
보낸 메일주소: <?php
if ($_GET['email'] == null){
	echo "없음";
}else {
 echo  $_GET['email'];
 $email = 1;
}
  ?> (요청: email)<br>
  보낸 메일 제목: <?php
  if ($_GET['title'] == null){
	  echo "없음";
  } else {
 echo  ($_GET['title']);
   $title = 1;
  }
  ?> (요청: title)<br>
  보낸 메일 내용: <?php
  if ($_GET['ctt'] == null){
	  echo "없음";
  }else {
 echo  $_GET['ctt'];
 $ctt = 1;
  }
  ?> (요청: ctt)
  <br><br>
  성공 여부: 
</body>
<meta http-equiv="refresh" content="5; url=/go">
<?php
if ($_GET['key'] == 1233) {
	if ($email == 1){
		if ($title == 1){
			if ($ctt == 1){
include_once('C:\AutoSet10\solution\PHPMailer\mailer.lib.php');
mailer("running Email Api", "runningboyapi@naver.com", $_GET['email'] , $_GET['title'], $_GET['ctt']);
echo ("성공 (5초 후 메인으로 이동 합니다.)");
}else {
  echo ("실패 (메일이 수신되지 않았습니다. 5초 후 메인으로 이동 합니다.)");
  }
} else {
	echo ("실패 (메일이 수신되지 않았습니다. 5초 후 메인으로 이동 합니다.)");
}
}else {
	echo ("실패 (메일이 수신되지 않았습니다. 5초 후 메인으로 이동 합니다.)");
}
}else {
	echo ("실패 (메일이 수신되지 않았습니다. 5초 후 메인으로 이동 합니다.)");
}
  ?>
  </meta>
</html>