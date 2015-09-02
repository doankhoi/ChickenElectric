<?php 
	$this->assign('title', 'Quản lý bài viết');
	$this->assign('sub_header', 'Danh sách bài viết');

	$this->start('sidebar_dashboard');
	echo $this->element('sidebar_article');
	$this->end();
?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Stt</th>
                <th><?= $this->Paginator->sort('title', 'Tiêu đề') ?></th>
                <th><?= $this->Paginator->sort('category_id', 'Thể loại') ?></th>
                <th><?= $this->Paginator->sort('created', 'Ngày tạo') ?></th>
                <th><?= $this->Paginator->sort('modified', 'Ngày chỉnh sửa') ?></th>
                <th>Thao tác</th>
            </tr>
        </thead>

        <tbody>
            <?php $stt = 1; foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($stt) ?></td>
                <td><?= h($article->title)?></td>
                <td><?= h($article->created) ?></td>
                <td><?= h($article->modified) ?></td>
                <td>
                    <?=$this->Html->link(
                        $this->Html->tag('span','',['class'=>'glyphicon glyphicon-pencil']),
                        ['controller'=>'articles', 'action'=>'edit', h($article->id)],
                        ['escape'=>false, 'title'=>'Chỉnh sửa bài viết']);
                    ?>
                    <?=$this->Html->link(
                        $this->Html->tag('span', '',['class'=>'glyphicon glyphicon-eye-open']),
                        ['prefix'=>false, 'controller'=>'articles', 'action'=>'view', h($article->id)],
                        ['escape' => false, 'title'=>'Xem chi tiết'])?>
                    <?=$this->Form->postLink(
                        $this->Html->tag('span','',['class'=>'glyphicon glyphicon-remove']),
                        ['controller'=>'articles', 'action'=>'delete', h($article->id)],
                        ['escape'=>false, 'title'=>'Xóa bài viết', 'confirm'=>'Bạn chắc chắn muốn xóa ?']);
                    ?>
                </td>
            </tr>
            <?php $stt++; endforeach; ?>
        </tbody>
    </table>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
    </div>
</div>
