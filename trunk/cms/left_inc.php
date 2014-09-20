
<div class="left_box">
	<h4>Latest News</h4>
	<p>
	
		<?php while ($news_row = mysql_fetch_assoc($news_result)) {?>
		
		<a href="news.php?news_id=<?php echo $news_row['id'];?>">
			<?php echo $news_row['title'];?><br/>
			<span><?php echo substr($news_row['content'],0,80);?>, 
			<?php echo date("Y/m/d", $news_row['created_at']); ?></span>
		</a>
		
		<?php } ?>

	</p>
</div>
