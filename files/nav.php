<?php 
$LD_startup_name = 'L&D Start-up';
$LD_startup_url = '/L&D_startup';
$oneview_name = 'OneView';
$oneview_url = '/oneview';
$financial_name = 'Wireframes';
$financial_url = '/financial_app';
$pioneer_name = 'The Pioneer';
$pioneer_url = '/the_pioneer';

if ($page == 'L&DStartup' ) {
	$next = $oneview_name;
	$next_link = $oneview_url;
} else if ($page == 'oneview') {
	$prev = $LD_startup_name;
	$prev_link = $LD_startup_url;
	$next = $financial_name;
	$next_link = $financial_url;
} else if ($page == 'financial') {
	$prev = $oneview_name;
	$prev_link = $oneview_url;
	$next = $pioneer_name;
	$next_link = $pioneer_url;
} else if ($page == 'pioneer') {
	$prev = $financial_name;
	$prev_link = $financial_url;
}

?>


<nav>
<?php if (isset($prev)) { ?>
<a href="<?php echo $prev_link ?>" id="prev"><i class="fa fa-angle-left"></i> Prev<span>: <?php echo $prev ?></span></a>
<?php } ?>

<div id="center"><a href="/home" id="home"><i class="fa fa-home"></i> Home</a></div>

<?php if (isset($next)) { ?>
<a href="<?php echo $next_link ?>" id="next">Next<span>: <?php echo $next ?></span> <i class="fa fa-angle-right"></i></a>
<?php } ?>

</nav>


