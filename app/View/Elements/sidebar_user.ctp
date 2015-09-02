<ul class="nav nav-sidebar">
    <li class="active"><?=$this->Html->link('Quản lý người dùng', ['controller'=>'users', 'action'=>'index'])?></li>
    <li><?=$this->Html->link('Danh sách mới đăng kí', ['controller'=>'users', 'action'=>'newuser'])?>
    <li><?=$this->Html->link('Danh sách tài khoản deactive', ['controller'=>'users', 'action'=>'listdeactive'])?></li>
    <li><?=$this->Html->link('Thêm người dùng', ['controller'=>'users', 'action'=>'register'])?></li>
</ul>

<?=$this->Html->script('sidebaractive.js')?>
