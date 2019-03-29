<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?= __('Company XYZ Custom Portal') ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
      <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
      <!--
      <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
      <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
      <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
      <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
       -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if (!$authUser) { ?>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><?= $this->Html->link('<span class="glyphicon glyphicon-log-in"></span> ' . __('Login'), ['controller' => 'Users', 'action' => 'login'], ['escape' => false]) ?></li>
      <?php } else { ?>
        <li><?= $this->Html->link('<span class="glyphicon glyphicon-log-in"></span> ' . __('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?></li>
      <?php } ?>
    </ul>
  </div>
</nav>
