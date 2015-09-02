

<?php 
$this->assign('title', 'Thêm người dùng');
$this->assign('sub_header', 'Thêm người dùng');
$this->start('sidebar_dashboard');
?>

<?=$this->element('sidebar_user')?>

<?php 
$this->end();
?>

<?=$this->Form->create(null, ['role'=>'form-group'])?>
    <div class="form-group">
        <label for="username" class="control-label">Tên người dùng</label>
        <?=$this->Form->input('username', ['class'=>'form-control', 'placeholder'=>'Enter username', 'label'=>false])?>
    </div>

    <div class="form-group">
        <label for="password" class="control-label">Mật khẩu</label>
        <?=$this->Form->input('password', ['class'=>'form-control', 'placeholder'=>'Enter password', 'label'=>false])?>
    </div>

    <div class="form-group">
        <label for="repassword" class="control-label">Xác nhận mật khẩu</label>
        <?=$this->Form->input('repassword', ['type'=>'password','class'=>'form-control', 'placeholder'=>'Enter repassword', 'label'=>false])?>
    </div>

    <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <?=$this->Form->input('email', ['class'=>'form-control', 'placeholder'=>'Enter email', 'label'=>false])?>
    </div>

    <div class="form-group">
        <label for="type" class="control-label">Quyền người dùng</label>
        <?=$this->Form->input('type',['class'=>'form-control','options'=>['admin'=>'Admin', 'author'=>'Author'], 'empty'=>'==Select==', 'label'=>false])?>
    </div>

    <!-- <button type="submit" class="btn btn-default">Thêm mới</button> -->
    <?= $this->Form->button(__('Thêm mới'), ['class'=>'btn btn-default']) ?>
<?=$this->Form->end()?>
