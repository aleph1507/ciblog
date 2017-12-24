<h2><?= $post['title']; ?></h2>
<small class="post-date">Posted on: <?= $post['created_at']; ?></small>

<div class="post-body">
	<?php echo $post['body']; ?>
</div>