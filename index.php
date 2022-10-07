<?php
$pagegdata = array();
$pagedata['index'] = array(
 'title'=>'Fitness Club',
);
$pagedata['about'] = array(
 'title'=>'What is this page abput',
);
$pagedata['courses'] = array(
 'title'=>'Title for Images',
);
$pagedata['blogs'] = array(
    'title'=>'Title for Images',
);
$pagedata['contacts'] = array(
    'title'=>'Title for Images',
);


$pagename = isset($_GET['pg']) ? trim(strip_tags($_GET['pg'])) : 'index';

$title = $pagedata[$pagename]['title'];

// set header for utf-8 encode
header('Content-type: text/html; charset=utf-8');
?>
<!doctype html>
<html>
<head>
 <meta charset="utf-8" />
 <title><?php echo $title; ?></title>
 <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 <style><!--
 body {
 margin:0;
 text-align:center;
 padding:0 1em;
 }
 header, footer, section, aside, nav, article { display: block; }
 #posts{
 position:relative;
 width:99%;
 margin:0.5em auto;
 background:#fdfefe;
 } 
.nav ul {
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 
@media screen and (min-width: 600px) {
  .nav li {
    width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
  }

  .nav li {
    display: inline-block;
    margin-right: -4px;
  }
 
}
 #article {
 margin:0 1em 0 16em;
 background:#efeffe;
 border:1px solid #01da02;
 padding:0.2em 0.4em;
 }
 #footer {
 clear:both;
 position:relative;
 background:#edfeed;
 border:1px solid #dada01;
 width:99%;
 margin:2em auto 0.5em auto;
 }
 --></style>
</head>
<body>

<header id="header">
 <h1><?php echo $title; ?></h1>
</header>


<div class="nav">
 <ul>
 <li><a href="index.php" title="Home page">Home</a></li>
 <li><a href="index.php?pg=about" title="About">About</a></li>
 <li><a href="index.php?pg=courses" title="Images">courses</a></li>
 <li><a href="index.php?pg=blogs" title="Images">blogs</a></li>
 <li><a href="index.php?pg=contacts" title="Images">contacts</a></li>
 </ul>
</div>
<section id="posts">
 <article id="article"><?php echo file_get_contents('pages/'. $pagename. '.html'); ?></article>
</section>

<footer id="footer">
 <p>From: <a href="https://coursesweb.net/php-mysql/" title="Free PHP-MySQL course">PHP-MySQL Course</a></p>
</footer>

</body>
</html>