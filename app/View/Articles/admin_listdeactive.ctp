<?php 
	$this->assign('title', 'Quản lý bài viết');
	$this->assign('sub_header', 'Danh sách bài viết deactive');

	$this->start('sidebar_dashboard');
	echo $this->element('sidebar_article');
	$this->end();
?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th><?= $this->Paginator->sort('title', 'Tiêu đề') ?></th>
                <th><?= $this->Paginator->sort('category_id', 'Thể loại') ?></th>
                <th>Xuất bản</th>
                <th><?= $this->Paginator->sort('created', 'Ngày tạo') ?></th>
                <th><?= $this->Paginator->sort('modified', 'Ngày chỉnh sửa') ?></th>
                <th>Thao tác</th>
            </tr>
        </thead>

        <tbody>
            <?php $stt = 1; foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($stt) ?></td>
                <td><?= h($article['Article']['title'])?></td>
                <td><?= h($article['Category']['name'])?></td>
                <td>
                    <?php 
                        if($article['Article']['status'] == 1){
                            echo $this->Form->postLink('Ẩn', ['controller'=>'articles', 'action'=>'publish', $article['Article']['id']]);
                        }else{
                            echo $this->Form->postLink('Hiện', ['controller'=>'articles', 'action'=>'publish', $article['Article']['id']]);
                        }
                    ?>
                </td>
                <td><?= h($article['Article']['created']) ?></td>
                <td><?= h($article['Article']['modified']) ?></td>
                <td>
                    <?=$this->Html->link('chi tiết',
                        ['prefix'=>false, 'controller'=>'articles', 'action'=>'view', h($article['Article']['id'])],
                        ['title'=>'Xem chi tiết'])
                    ?>
                    <?=$this->Html->link('chỉnh sửa',
                        ['controller'=>'articles', 'action'=>'edit', h($article['Article']['id'])],
                        ['title'=>'Chỉnh sửa bài viết']);
                    ?>
                    <?=$this->Form->postLink('active',
                        ['controller'=>'articles', 'action'=>'delete', h($article['Article']['id'])],
                        ['confirm'=>'Bạn chắc chắn muốn active bài viết ?']);
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
