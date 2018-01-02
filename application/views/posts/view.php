<h2><?= $post['title']; ?></h2>
<small class="post-date">Posted on: <?= $post['created_at']; ?></small>

<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>


<a href="edit/<?php echo $post['slug']; ?>" class="btn btn-default pull-left">Edit</a>

<?php echo form_open('index.php/posts/delete/' . $post['id']); ?>

	<input type="submit" value="Delete" class="btn btn-danger">
</form>
