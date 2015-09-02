
<?php 
$this->assign('title', 'Danh sách người dùng mới đăng ký');
$this->assign('sub_header','Danh sách người dùng mới đăng ký');

$this->start('sidebar_dashboard');
?>

<?=$this->element('sidebar_user')?>

<?php 
$this->end();
?>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th><?= $this->Paginator->sort('username', 'Tài khoản')?></th>
                <th><?= $this->Paginator->sort('type', 'Quyền') ?></th>
                <th><?= $this->Paginator->sort('email', 'Email')?></th>
                <th><?= $this->Paginator->sort('status', 'Trạng thái')?></th>
                <th><?= $this->Paginator->sort('created', 'Ngày tạo') ?></th>
                <th><?= $this->Paginator->sort('modified', 'Ngày chỉnh sửa') ?></th>
                <th>Thao tác</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php $stt=1; foreach ($users as $user): ?>
            <tr>
                <td><?= $stt ?></td>
                <td><?= h($user['User']['username'])?></td>
                <td><?= h($user['User']['type']) ?></td>
                <td><?= h($user['User']['email'])?></td>
                <td><?php if($user['User']['status'] == 1 ) echo 'Working...'; else echo 'Waiting...';?></td>
                <td><?= h($user['User']['created']) ?></td>
                <td><?= h($user['User']['modified']) ?></td>
                <td>
                    <?=$this->Html->link(
                        'chi tiết',
                        ['controller'=>'users', 'action'=>'view', h($user['User']['id'])]
                    )?>

                    <?php if(AuthComponent::user('type') == 'admin'):?>
                    <?=$this->Html->link(
                        'chỉnh sửa',
                        ['controller'=>'users', 'action'=>'edit', h($user['User']['id'])]
                    );
                    ?>
                    <?php if($user['User']['active'] == 1):?>
                    <?=$this->Form->postLink('deactive',
                        ['controller'=>'users', 'action'=>'delete', h($user['User']['id'])],
                        ['confirm'=>'Bạn chắc chắn muốn deactive người dùng?']);
                    ?>
                    <?php else: ?>
                    <?=$this->Form->postLink('active',
                        ['controller'=>'users', 'action'=>'delete', h($user['User']['id'])],
                        ['confirm'=>'Bạn chắc chắn muốn active người dùng?']);
                    ?>
                    <?php endif;?>
                    <?php endif;?>
                    
                </td>
                <td><?=$this->Form->postLink('Xác nhận', ['controller'=>'users', 'action'=>'confirm', h($user['User']['id'])], ['class'=>'btn btn-primary'])?></td>
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
