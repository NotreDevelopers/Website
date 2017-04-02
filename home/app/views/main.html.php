	<?php if (!$has_pagination['prev']):?>
		<div class="expand">
			<button type="button" class="btn1 collapsed" data-toggle="collapse" data-target="#welcome" style="width:94%; margin: 20px 3% 0 3%">WELCOME TO NDEVS!</button>
			<div class="collapse" id="welcome" style="width:94%; background: #CCCCCC; margin-left:auto; margin-right:auto; border:2px solid #0C2340">
				<p style="width:95%; font-size:20px; text-align:center"><?php echo config('aside.welcome') ?></p>
			</div>
		</div>
	<?php endif;?>

	<aside>

		<h1 style="margin-top:0">Club Project</h1>

		<div class="post" style="margin-bottom:100px; border:0">

			<h3><a href="<?php echo config('aside.project.link') ?>"><?php echo config('aside.project.title') ?></a></h3>

			<p><?php echo config('aside.project.description') ?></p>
		</div>

<!-- This is for using posts/markdown files to store the current event description hosted on the main page. Changes should be made if it is kept, but due to how complicated it is, it might not be kept. -->

        	<?php  $p = find_post(config('aside.event.year'), config('aside.event.month'), config('aside.event.name')) ?>

		<h1>Next Event</h1>

            	<div class="post" style="border:0">

                	<h3><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></h3>

                	<div class="date"><?php echo date('d F Y', $p->date)?></div>

                	<p><?php echo $p->body?></p>

		</div>
	</aside>

	<section id="content">

	<?php if (!$has_pagination['prev']):?>
		<h1>Announcements</h1>
	<?php endif;?>

		<?php foreach($posts as $p):?>
		<div class="post">
			<h3><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></h3>

			<div class="date"><?php echo date('d F Y', $p->date)?></div>

			<p><?php echo $p->body?><p>

		</div>
		<?php endforeach;?>

		<?php if ($has_pagination['prev']):?>
			<a href="?page=<?php echo $page-1?>" class="pagination-arrow newer">Newer</a>
		<?php endif;?>

		<?php if ($has_pagination['next']):?>
			<a href="?page=<?php echo $page+1?>" class="pagination-arrow older">Older</a>
		<?php endif;?>

	</section>