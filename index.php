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
<?php echo file_get_contents('pages/'. $pagename. '.html'); ?>
