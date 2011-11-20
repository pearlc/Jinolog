<?php header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinolog</title>
	 <!-- Framework CSS -->
	<base href="<?=base_url();?>">
    <link rel="stylesheet" href="ui/css/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="ui/css/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection"><![endif]-->

	<!-- Javascript -->
	<script type="text/javascript" language="javascript" src="ui/js/jquery-1.7.js"></script>
	<script type="text/javascript" language="javascript" src="ui/js/common.js"></script>
</head>
<body>

	<div class="header">
		<h1 id="logo"><a href="" title="Link to main page"><img src="ui/image/logo.gif" alt="jinolog logo"></img></a></h1>
		<div id="hsearch">
			<form id="search">
				<div>
					<input type="text" placeholder="search" />
				</div>
			</form>
		</div>
		<hr class="thick" />
	</div>
	<div class="container">
		<div class="mainbar">
			<h3>Here's a box</h3>
			<p>동일한 서버에서 서비스되는 www.example1.com 와 www.example2.com 이라는 사이트가 있다고 가정하자. 이 두개는 같은 서버에 있기는 하지만 도메인 이름이 다르다. 따라서 이 두 사이트간 쿠키를 공유할 수는 없다. 하지만 www.example.com 과 이 사이트의 서브도메인을 활용한 사이트, 예를들어 app.example.com, demo.example.com 를 사용한다면 이 세 도메인간의 쿠키는 공유될수 있다. 이때 이 서비스가 반드시 동일한 서버에 있을 필요는 없으며, 모든 도메인이 하나의 top domain에 속할 필요는 없다.</p>
			<p><a href="">Comments</a></p>
			<hr>

			<h3>도메인들 간 쿠키 공유하기</h3>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ornare mattis nunc. Mauris venenatis, pede sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue.<br />Mauris a lectus. Aliquam erat volutpat. Phasellus ultrices mi a sapien. Nunc rutrum egestas lorem. Duis ac sem sagittis elit tincidunt gravida. Mauris a lectus. Aliquam erat volutpat. Phasellus ultrices mi a sapien. Nunc rutrum egestas lorem. Duis ac sem sagittis elit tincidunt gravida.</p>
			<p><a href="">Comments</a></p>
			<hr>

			<h3>Lorem ipsum dolor sit amet</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p><a href="">Comments</a></p>
			<hr>
		</div>
		
		<div class="sidebar">
			<h3>Recent Posts</h3>
			<ul>
				<li><a href="" title="Lorem ipsum dolor sit">Lorem ipsum dolor sit</a></li>
				<li><a href="" title="">도메인들 간 쿠키 공유하기</a></li>
				<li><a href="" title="">웹브라우저 user-agent string 의 역사</a></li>
				<li><a href="" title="php로 웹상의 파일 읽기(html 소스 읽기)">php로 웹상의 파일 읽기(html 소스 읽기)</a></li>
				<li><a href="" title="">X-Forwarded-For(XFF) HTTP 헤더</a></li>
			</ul>
			<h3>Archives</h3>
			<ul>
				<li><a href="" title="">November 2011 (1)</a></li>
				<li><a href="" title="">October 2011 (1)</a></li>
				<li><a href="" title="">July 2011 (3)</a></li>
				<li><a href="" title="">June 2011 (1)</a></li>
				<li><a href="" title="">March 2011 (8)</a></li>
			</ul>
			<h3>Categories</h3>
			<ul>
				<li><a href="" title="">Programming (13)</a></li>
					<ul>
						<li><a href="" title="">etc (3)</a></li>
						<li><a href="" title="">jQuery (4)ddddddddddadfadfadfds</a></li>
						<li><a href="" title="">MySQL (4)</a></li>
						<li><a href="" title="">php (2)</a></li>
						<li><a href="" title="">That's me (1)</a></li>
					</ul>
				<li><a href="" title="">That's me</a></li>
			</ul>
			<h3>Others</h3>
			<ul>
				<li><a href="" title="">Log in</a></li>
				<li><a href="" title="">RSS feed</a></li>
			</ul>
		</div>
	</div>
	<div class="footer">
		<h1>This is footer</h1>
	</div>
</body>
</html>