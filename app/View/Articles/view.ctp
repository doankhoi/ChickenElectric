<?php 
	$this->assign('title', h($article->title));
	$this->start('intro_author');
	echo $author;
	$this->end();
?>

<h1 class="blog-post-title"><?= h($article->title)?></h1>
<p class="blog-post-meta"><?=$article->created->format(DATE_RFC850)?></p>
<p><?= $article->body?></p>
