# My-Portfolio-Web
- 개발인원 : 1명
- 역할
  - 전체
  
## Introduction
직접 구현해 본 저의 포트폴리오 웹사이트입니다.

HTML과 CSS로 레이아웃을 구성하고 JavaScript와 jQuery를 이용해 기능을 구현한 후 php를 이용해 MySQL과 연동하여 데이터베이스를 구축했습니다. 

최종적으로 닷홈 호스팅 서버에 올려 외부에서 접속할 수 있도록 했습니다.

## Development Environment
- TextEditor : Sublime Text 3
- Language : HTML, CSS, JavaScript(jQuery), php
- Server : 닷홈 호스팅 서비스
- FTP : FileZilla
- DB : MySQL, phpMyAdmin 

## Code Preview
***JavaScript를 이용한 innerHTML 전환***
```html
<li class="aside-listText"><p><a href="javascript:workChange(1);">역할 카드게임 'WANTED'</a></p></li>
<li class="aside-listText"><p><a href="javascript:workChange(2);">GPS를 활용한 운동관리 어플리케이션</a></p></li>
```
```javascript
// 선택한 작품에 맞는 작품 설명 페이지 호출 함수
function workChange(idx) {
   	var strHTML = "";
	var activitySection = document.getElementById("work-section");

	switch (idx) 
	{
		// WANTED
		case 1:
		strHTML += "<h2>Unity엔진과 C#으로 구현한 카드배틀게임</h2>";
		strHTML += "<img src='images/work_wanted01.png'>";
		strHTML += "<img src='images/work_wanted02.png'>";
		...
		activitySection.innerHTML = strHTML;
		break;
		
		// 운동관리
		case 2:
		strHTML += "<h2>GPS를 활용한 종합 운동관리 안드로이드 앱</h2>";
		strHTML += "<img src='images/work_android01.png' style='width:360px;height:640px;'>&nbsp";
		strHTML += "<img src='images/work_android02.jpg' style='width:360px;height:640px;'><br>";
		...
		activitySection.innerHTML = strHTML;
		break;
		...
 ```
 
***php session을 이용한 로그인 관리***
```php
<?php
session_start(); //세션변수 사용전에 session_start()를 사용해야 한다.

if(!isset($_SESSION['login_id']) && !isset($_SESSION['login_pw'])) { ?>
<form action="./account/login_ok.php" method="post">				
<table style='display: inline-block;''> <!-- 아이디, 비밀번호 입력 테이블 -->
		<tr>
			<td><input type='text' placeholder='아이디' name='login_id' maxlength='20' style='width: 98%' required></td>
			<td><input type='password' placeholder='비밀번호' name='login_pw' maxlength='20' style='width: 98%' required></td>
			<td><button type='submit'>로그인</button></td>
			<td><button type='button' onclick='location.href="./account/join.php"'>회원가입</button></td>
		</tr>
	</table>
</form>
<?php } else {
	$user_id = $_SESSION['login_id'];
  $user_nick = $_SESSION['login_nick'];
  echo "<p><strong>$user_nick</strong>($user_id) 님 로그인 되셨습니다.";
  echo " <a href=\"./account/logout.php\">[로그아웃]</p>";
}
?>
```

## Screenshots
