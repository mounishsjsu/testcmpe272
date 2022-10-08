<?php
$pagegdata = array();
$pagedata['index'] = array(
 'title'=>'Fitness Club',
);
$pagedata['about'] = array(
 'title'=>'What is this page about',
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
</head>
<body>

<header id="header">
 <h1><?php echo $title; ?></h1>
</header>


<section>
 <nav>
 <ul>
 <li><a href="index.php?" title="Home page">Home</a></li>
 <li><a href="index.php?pg=about" title="About">About</a></li>
 <li><a href="index.php?pg=courses" title="Images">courses</a></li>
 <li><a href="index.php?pg=blogs" title="Images">blogs</a></li>
 <li><a href="index.php?pg=contacts" title="Images">contacts</a></li>
 </ul>
 <article id="article"><?php echo htmlentities(file_get_contents('pages/'. $pagename. '.html')); ?></article>
</section>

<footer id="footer">
 <p>From: <a href="https://coursesweb.net/php-mysql/" title="Free PHP-MySQL course">PHP-MySQL Course</a></p>
</footer>

</body>
</html>