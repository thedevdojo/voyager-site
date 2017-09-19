<div>

	<ul>
		<?php foreach($videos as $vid): ?>
			<li <?php if($vid->url == $video->url){ echo 'class="active" '; } ?><?php if($vid->number == $video->number && $include_ids){ echo 'id="vidli_' . $video->number . '"'; } ?>>
				<a href="<?= $vid->url ?>">
					<img style="float:left" src="/img/academy/thumbnail.png">
					<span class="info" style="float:left; width:50%; margin-top:29px;">
						<i style="display:block; font-style:normal;"><?php if(isset($vid->number)){ echo $vid->number . '. '; } ?><?= $vid->title ?></i>
						<small><?= $vid->time ?></small>		
					</span>
					<span style="clear:both"></span>
					<i class="playing-now">Now Playing</i>
				</a>
			</li>
		<?php endforeach; ?>
		
	</ul>

</div>