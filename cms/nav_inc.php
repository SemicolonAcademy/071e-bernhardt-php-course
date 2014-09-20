<?php while ($menu_row = mysql_fetch_assoc($menus_result)) { ?>

<a href="<?php echo $menu_row['href'];?>">
	<?php echo $menu_row['name'];?>
</a>

<?php } ?>
