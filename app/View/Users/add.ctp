<h3>add users</h3>

<?php
echo $this->Form->create('User', array('action' => 'add'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Add');
?>
