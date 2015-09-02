
<?php 
$this->assign('title', 'Chỉnh sửa thông tin cá nhân');
$this->assign('sub_header', 'Chỉnh sửa thông tin');
$this->start('sidebar_dashboard');
?>

<?=$this->element('sidebar_user')?>
<?php 
$this->end();
?>

<?=$this->Form->create(['role'=>'form-group'])?>
    <div class="form-group">
        <label for="username" role="control-label">Tên người dùng</label>
        <?=$this->Form->input('username', 
            [   'class'=>'form-control', 
                'placeholder'=>'Enter username', 
                'value'=>$user['User']['username'],
                'label'=>false
            ]
        )?>
    </div>

    <div class="form-group">
        <label for="email" role="control-label">Email</label>
        <?=$this->Form->input('email', 
            [   'class'=>'form-control', 
                'placeholder'=>'Enter email',
                'value'=>$user['User']['email'],
                'label'=>false
            ]
        )?>
    </div>
    <div class="form-group">
        <label for="type" role="control-label">Quyền người dùng</label>
        <?=$this->Form->input('type',
            [   'class'=>'form-control',
                'options'=>['admin'=>'Admin', 'author'=>'Author'], 
                'value'=>$user['User']['type'],
                'empty'=>'==Select==',
                'label'=>false
            ]
        )?>
    </div>

    <!-- <button type="submit" class="btn btn-default">Thêm mới</button> -->
    <?= $this->Form->button(__('Hoàn tất'), ['class'=>'btn btn-default']) ?>
<?=$this->Form->end()?>
