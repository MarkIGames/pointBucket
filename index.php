<?php 

	$id = 1;

	$array = array(
		'1' => array( 
			'name'     => 'Mark',
			'fullName' => 'Mark Williams',
			'points'   => '2187'
		),
		'2' => array(
			'name'   => 'Bill',
			'fullName'   => 'Bill Ortell',
			'points' => '1138'		
		),
		'3' => array(
			'name'     => 'Ken',
			'fullName' => 'Ken Raisor',
			'points'   => '94'		
		),
	);

?>

<html>

<head>
<title>Pocket - Point Bucket</title>
<link rel="stylesheet" type="text/css" href="index.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
</head>

<body class="customFont">

<div id="header" class="blackBox">
	<div id="myStats">
		<span class="accent"><?php echo $array[$id]['fullName']; ?></span>
		-- 
		<span class="subTitle"><?php echo $array[$id]['points']; ?></span>	
	</div>
</div>

<div id="caption" class="bottomBlackBorder bottomCaption h3">
Pocket - Users
</div>

<div id="mainContainer">

	<?php foreach($array as $id=>$user) { ?>
	
		<div id="<?php echo $id; ?>"class="box user thinBlackBorder">
		
			<span id="name" class="accent h1">
				<?php echo $user['fullName']; ?>
			</span>
			<br />
			<span id="points" class="subTitle h2">
				<?php echo $user['points']; ?>
			</span>	
		
		</div>
		
	<?php } ?>
	
</div>

<div id="footer" class="blackBox">

</div>

</body>

</html>