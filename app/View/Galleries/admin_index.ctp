
<?php 
$this->assign('title', 'Danh sách ảnh slideshow');
$this->assign('sub_header','Danh sách ảnh slideshow');

$this->start('sidebar_dashboard');
?>

<?=$this->element('sidebar_slideshow')?>

<?php 
$this->end();
?>

<style type="text/css">
    td{
        height: 100px;
        vertical-align: middle;
    }

    td img{
        width: 150px;
        height: 100px;
    }

</style>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th><?= $this->Paginator->sort('title', 'Tiêu đề') ?></th>
                <th><?= $this->Paginator->sort('ordered', 'Thứ tự') ?></th>
                <th><?= $this->Paginator->sort('images', 'Hình ảnh')?></th>
                <th><?= $this->Paginator->sort('created', 'Ngày tạo') ?></th>
                <th>Thao tác</th>
            </tr>
        </thead>

        <tbody>
            <?php $stt=1; foreach ($galleries as $gallery): ?>
            <tr>
                <td><?= $stt ?></td>
                <td><?= h($gallery['Gallery']['title'])?></td>
                <td><?= h($gallery['Gallery']['ordered']) ?></td>
                <td><?= $this->Html->image('gallery/'.$gallery['Gallery']['images'], ['alt'=>'Hình ảnh minh họa'])?></td>
                <td><?= h($gallery['Gallery']['created'])?></td>
                <td>
                    <?=$this->Html->link('chỉnh sửa | ', ['controller'=>'galleries', 'action'=>'edit', $gallery['Gallery']['id']])?>
                    <?=$this->Form->postLink('delete', ['controller'=>'galleries', 'action'=>'delete', $gallery['Gallery']['id']], ['confirm'=>'Bạn chắn chắn muốn xóa ?'])?>
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
