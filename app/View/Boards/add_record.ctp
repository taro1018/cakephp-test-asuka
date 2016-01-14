<h1>送信フォーム・サンプル</h1>

<?php
echo $this->Form->create(false,array('type'=>'post','action'=>'addRecord'));
echo $this->Form->text('Board.name');
echo $this->Form->error('Board.name');
echo $this->Form->text('Board.title');
echo $this->Form->error('Board.title');
echo $this->Form->text('Board.content');
echo $this->Form->error('Board.content');
echo $this->Form->submit("送信");
echo $this->Form->end();
?>