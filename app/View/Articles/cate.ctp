
<?php 
	$this->start('intro_author');
	if(isset($author))
		echo $author;
	$this->end();
?>

<?php foreach ($articles as $article): ?>
	<div class="blog-post">
		<h2 class="blog-post-title"><?=$this->Html->link($article->title, ['action'=>'view', $article->id])?></h2>
		<p class="blog-post-meta"><?=$article->created->format(DATE_RFC850)?></p>
		<p>
			<?=$article->body?>
		</p>
	</div>
<?php endforeach;?>

