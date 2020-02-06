<html>

<head>
	<title>spegel ros</title>

	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<style>
		.container-fluid {
			background-color : #6DDADA ;
		}

		html, body, #container {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		body > #container { height: auto; min-height: 100%; }
		#footer {
		 clear: both;
		 position: relative;
		 z-index: 10;
		 height: 150px;
		 margin-top: -150px;
		 background: #202a49;
		}
		#content { padding-bottom: 150px; }

		body {
					font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
				}
				p.size{ font-size:20px;}
				p.percentage{ font-size:80%;}
				p.style{ font-style:italic; }
				p.bold { font-weight:bold; }
				p.variant { font-variant:small-caps; }
				
		body {margin: 0;}

		ul.topnav {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #333;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #111;}

		ul.topnav li a.active {background-color: #4CAF50;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
		  ul.topnav li.right, 
		  ul.topnav li {float: none;}
		}

		* { box-sizing: border-box; }
		body {
		  margin: 0;
		  background: url(https://html5book.ru/wp-content/uploads/2015/10/background54.png)
		}
		nav { background: white; }
		nav ul {
		  list-style: none;
		  margin: 0;
		  padding: 0;
		}
		nav a {
		  text-decoration: none;
		  outline: none;
		  display: block;
		  transition: .4s ease-in-out;
		}
		.topmenu {
		  text-align: center;
		  padding: 10px 0;
		}
		.topmenu > li {
		  display: inline-block;
		  position: relative;
		}
		.topmenu > li:after {
		  content: "";
		  position: absolute;
		  right: 0;
		  width: 1px;
		  height: 12px;
		  background: #d2d2d2;
		  top: 16px;
		  box-shadow: 4px -2px 0 #d2d2d2;
		  transform: rotate(30deg);
		}
		.topmenu > li:last-child:after {
		  background: none;
		  box-shadow: none;
		}
		.topmenu > li > a {
		  padding: 12px 26px;
		  color: #767676;
		  text-transform: uppercase;
		  font-weight: bold;
		  letter-spacing: 1px;
		  font-family: 'Exo 2', sans-serif;
		}
		.topmenu li a:hover { color: #c0a97a; }
		.submenu {
		  position: absolute;
		  left: 50%;
		  top: 100%;
		  width: 210px;
		  margin-left: -105px;
		  background: #fafafa;
		  border: 1px solid #ededed;
		  z-index: 5;
		  visibility: hidden;
		  opacity: 0;
		  transform: scale(.8);
		  transition: .4s ease-in-out;
		}
		.submenu li a {
		  padding: 10px 0;
		  margin: 0 10px;
		  border-bottom: 1px solid #efefef;
		  font-size: 12px;
		  color: #484848;
		  font-family: 'Kurale', serif;
		}
		.topmenu > li:hover .submenu {
		  visibility: visible;
		  opacity: 1;
		  transform: scale(1);
		}
		
	</style>
	
	
</head>

<body>

<header class = "container-fluid" >
	<table width = "100%" >
	
	<td width = "50%" >
		<a href = "index.php" ><img src = "img/HP.png" style = "border-radius : 50px ; margin : 10px " width = "36%" ></a>
	</td>
	
	<td>
	<nav style = "border-radius : 50px" >
	  <ul class="topmenu">
			<li><a href="news.php">Новости</a>
			<ul class="submenu">
			<li><a href="js.php">Люди</a></li>
			<li><a href="python.php">Роботы</a></li>
			<li><a href="cpp.php">Программы</a></li>
			<li><a href="cs.php">Технологии</a></li>
			</ul>
			</li>
			
			<li><a href="languageselect.php">Язык</a>
			<ul class="submenu">
			<li><a href="js.php">JAVASCRIPT</a></li>
			<li><a href="python.php">PYTHON</a></li>
			<li><a href="cpp.php">C++</a></li>
			<li><a href="cs.php">C#</a></li>
			</ul>
			</li>
			
			<li><a href="profile.php">Профиль</a>
			<ul class="submenu">
			<li><a href="">Языки</a></li>
			<li><a href="">Баллы</a></li>
			<li><a href="">Достяжения</a></li>
			<li><a href="user.php">Редактирование</a></li>
			</ul>
			</li>
			
			<li><a href="comunicate.php">Связь</a>
			<ul class="submenu">
			<li><a href="">Тех.Поддержка</a></li>
			<li><a href="">Author</a></li>
			<li><a href="">Archive</a></li>
			<li><a href="https://vk.com/dead_zxc_inside">Разработчик</a></li>
			</ul>
			</li>
	
		</ul>
	</nav>
	</td>
	
	</table>
</header>

<div class = "container" style = " border-radius : 20px ; margin-top : 30px ; opacity : 70%" >

	<p class = "bold" style = " padding-bottom : 20px ; padding-top : 20px ; font-size : 27px  ; opacity : 100%" align = "center" >На нашем сайте вы найдете</p>
	
</div>

<div class = "container" style = " border-radius : 20px ; margin-top : 30px ; background-color : #6DDADA  ; opacity : 70% ; padding-top : 15px" >
	
	<table width = "100%" >
	
	<td align = "center" width = "50%" >
		<p class="variant" >Различные языки программирования</p>
		<p class="variant" >Практикум в виде задач</p>
		<p class="variant" >Популярные новости в сфере IT</p>
		<p class="variant" >Онлайн учебники по языкам программирования</p>
		<p class="variant" >Балльную систему оценивания материала</p>
		<p class="variant" >Таблицу успеваемости</p>
	</td>
	
	<td align = "center" width = "50%" >
		<p class="variant" >Систему профилей</p>
		<p class="variant" >Онлайн чат между всеми пользователями</p>
		<p class="variant" >Форум для обсуждений</p>
		<p class="variant" >Онлайн компиляторы для различных языков</p>
		<p class="variant" >Задания личного направления</p>
		<p class="variant" >Пробные заказы на фрилансе</p>
	</td>
		
	</table>

</div>

<div align = "center" style = "padding : 20px" >
	<a href = "languageselect.php" ><img src = "img/select.png" style = "border-radius : 50px ; opacity : 70%" width = "20%" ></a>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>