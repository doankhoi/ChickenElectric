
<?php 
$this->assign('title', 'Thông tin người dùng -'.$user['User']['username']);

$this->start('sub_header');
echo "Thông tin - <b>".$user['User']['username']."</b>";
$this->end();

$this->start('sidebar_dashboard');
?>

<?=$this->element('sidebar_user')?>

<?php 
$this->end();
?>

<?=$this->Html->css('user_view.css')?>

    <div class="row wrapter-user-info">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <p class="title-user-info">Tên người dùng</p>
            </div>
            <div class="col-xs-6 col-md-9">
                <p class="content-user-info"><?=h($user['User']['username'])?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-3">
                <p class="title-user-info">Email</p>
            </div>
            <div class="col-xs-6 col-md-9">
                <p class="content-user-info"><?=$user['User']['email']?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-3">
                <p class="title-user-info">Trạng thái</p>
            </div>
            <div class="col-xs-6 col-md-9">
                <p class="content-user-info"><?php if($user['User']['status'] == 1) echo 'Working...'; else echo 'Waitting...';?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-3">
                <p class="title-user-info">Quyền</p>
            </div>
            <div class="col-xs-6 col-md-9">
                <p class="content-user-info"><?=$user['User']['type']?></p>
            </div>
        </div>

    </div>
