<?php 
$this->assign('title', "Quản lý chủ đề bài viết");
$this->assign('sub_header', 'Quản lý chủ đề bài viết');

$this->start('sidebar_dashboard');
echo $this->element('sidebar_categories');
$this->end();
?>


<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th><?= $this->Paginator->sort('name', 'Tên') ?></th>
                <th><?= $this->Paginator->sort('status','Xuất bản')?></th>
                <th><?= $this->Paginator->sort('created', 'Ngày tạo') ?></th>
                <th><?= $this->Paginator->sort('modified', 'Ngày chỉnh sửa') ?></th>
                <th>Thao tác</th>
            </tr>
        </thead>

        <tbody>
            <?php $stt = 1; foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($stt) ?></td>
                <td><?= h($category['Category']['name'])?></td>
                <td>
                    <?php 
                        if($category['Category']['status'] == 1){
                            echo $this->Form->postLink('Ẩn', ['controller'=>'categories', 'action'=>'showhide', $category['Category']['id']]);
                        }else{
                            echo $this->Form->postLink('Hiện', ['controller'=>'categories', 'action'=>'showhide', $category['Category']['id']]);
                        }
                    ?>
                </td>
                <td><?= $category['Category']['created']  ?></td>
                <td><?= $category['Category']['modified']  ?></td>
                <td>
                    <?=$this->Html->link('chỉnh sửa | ',
                        ['controller'=>'categories', 'action'=>'edit', h($category['Category']['id'])]
                    );
                    ?>
                    <?=$this->Form->postLink('deactive',
                        ['controller'=>'categories', 'action'=>'delete', h($category['Category']['id'])],
                        ['confirm'=>'Bạn chắc chắn muốn xóa ?']);
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
