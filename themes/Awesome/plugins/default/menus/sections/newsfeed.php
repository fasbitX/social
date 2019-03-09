<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$menus = $params['menu'];
?>
 <?php                        
foreach ($menus as $name => $menu) {
	$section = 'menu-section-'.OssnTranslit::urlize($name).' ';
	$items = 'menu-section-items-'.OssnTranslit::urlize($name).' ';
	$item = 'menu-section-item-'.OssnTranslit::urlize($menu['text']).' ';
	
	$expend = '';
	$icon = "fa-angle-right";
	if($name == 'links'){
		$expend = 'show';
		$icon = "fa-newspaper-o";
	}
	if($name  == 'groups'){
		$icon = "fa-users";
	}
	$hash = md5($name);
	if($name == 'links'){
		foreach ($menu as $data) {
			$class = 'menu-section-item-'.OssnTranslit::urlize($data['name']);
			$data['class'] = 'menu-section-item-a-'.OssnTranslit::urlize($data['name']) . ' nav-link '. $class;
			unset($data['name']);
			unset($data['icon']);
			unset($data['section']);
			unset($data['parent']);
			
			$link = ossn_plugin_view('output/url', $data);		
			echo "<li class='nav-item'>{$link}</li>";
			unset($class);
    	}
		break;
	}
	?>
 		 <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo $section;?>" id="<?php echo $hash;?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               	<?php if($name  !== 'groups'){ ?>
                <i class="fa fa-angle-right fa-lg"></i>
				<?php } ?>
				<?php echo ossn_print($name);?>
                </a>
              	<div class="dropdown-menu" aria-labelledby="<?php echo $hash;?>">
	<?php
	if(is_array($menu)){
	    foreach ($menu as $data) {
			$class = 'menu-section-item-'.OssnTranslit::urlize($data['name']);
			$data['class'] = 'menu-section-item-a-'.OssnTranslit::urlize($data['name']) . ' dropdown-item '. $class;
			unset($data['name']);
			unset($data['icon']);
			unset($data['section']);
			unset($data['parent']);
			
			$link = ossn_plugin_view('output/url', $data);		
			echo $link;
			//echo "<a class='{$class} dropdown-item'>{$link}</a>";
			unset($class);
    	}
		echo "</div></li>";
	}
}
?>
<li class="nav-item dropdown-submenu">
		<a class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bars"></i></a>
 		<ul class="dropdown-menu dropdown-menu-oa">
<?php
foreach ($menus as $name => $menu) {
	$section = 'menu-section-'.OssnTranslit::urlize($name).' ';
	$items = 'menu-section-items-'.OssnTranslit::urlize($name).' ';
	$item = 'menu-section-item-'.OssnTranslit::urlize($menu['text']).' ';
	
	$expend = '';
	$icon = "fa-angle-right";
	if($name == 'links'){
		$expend = 'show';
		$icon = "fa-newspaper-o";
	}
	if($name  == 'groups'){
		$icon = "fa-users";
	}
	$hash = md5($name);
	if($name == 'links'){
		continue;
	}
	?>
 		 <li class="dropdown-item dropdown-submenu dropdown">
                <a class="dropdown-toggle <?php echo $section;?>" id="<?php echo $hash;?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               	<?php if($name  !== 'groups'){ ?>
                <i class="fa fa-angle-right fa-lg"></i>
				<?php } ?>
				<?php echo ossn_print($name);?>
                </a>
               <ul class="dropdown-menu" aria-labelledby="<?php echo $hash;?>">
	<?php
	if(is_array($menu)){
	    foreach ($menu as $data) {
			$class = 'menu-section-item-'.OssnTranslit::urlize($data['name']);
			$data['class'] = 'menu-section-item-a-'.OssnTranslit::urlize($data['name']) . ' dropdown-item '. $class;
			unset($data['name']);
			unset($data['icon']);
			unset($data['section']);
			unset($data['parent']);
			
			$link = ossn_plugin_view('output/url', $data);		
			echo $link;
			//echo "<a class='{$class} dropdown-item'>{$link}</a>";
			unset($class);
    	}
		echo "</ul></li>";
	}
}
?>
</ul>
</li>