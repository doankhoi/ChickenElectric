
<?php 
	$this->start('intro_author');
	if(isset($author))
		echo $author;
	$this->end();
?>

<?php foreach ($articles as $article): ?>
	<div class="blog-post">
		<h2 class="blog-post-title"><?=$this->Html->link($article['Article']['title'], ['controller'=>'frontends','action'=>'view', $article['Article']['id']])?></h2>
		<p class="blog-post-meta"><?=$article['Article']['created']?></p>
		<p>
			<?=$article['Article']['body']?>
		</p>
	</div>
<?php endforeach;?>

<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('<< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >>') ?>
        </ul>
    </div>