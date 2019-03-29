<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?= __('Company XYZ Custom Portal') ?></a>
    </div>
    <!-- <ul class="nav navbar-nav">
      <li><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
      <li><?= $this->Html->link('<span class="glyphicon glyphicon-user"></span> ' . __('Users'), ['controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?></li>

      <li><?= $this->Html->link(__('Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
      <li><?= $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> ' . __('Articles'), ['controller' => 'Articles', 'action' => 'index'], ['escape' => false]) ?></li>

      <li><?= $this->Html->link(__('Tags'), ['controller' => 'Users', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link('<span class="glyphicon glyphicon-tags"></span> ' . __('Tags'), ['controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?></li>
    </ul> -->
    <ul class="nav navbar-nav navbar-right">
      <li><?= $this->Html->link('<span class="glyphicon glyphicon-user"></span> ' . __('Users'), ['controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?></li>
      <li><?= $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span> ' . __('Articles'), ['controller' => 'Articles', 'action' => 'index'], ['escape' => false]) ?></li>
      <li><?= $this->Html->link('<span class="glyphicon glyphicon-tags"></span> ' . __('Tags'), ['controller' => 'Tags', 'action' => 'index'], ['escape' => false]) ?></li>
      <li> | </li>
      <?php if (!$authUser) { ?>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><?= $this->Html->link('<span class="glyphicon glyphicon-log-in"></span> ' . __('Login'), ['controller' => 'Users', 'action' => 'login'], ['escape' => false]) ?></li>
      <?php } else { ?>
        <li><?= $this->Html->link('<span class="glyphicon glyphicon-log-in"></span> ' . __('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?></li>
      <?php } ?>
    </ul>
  </div>
</nav>
