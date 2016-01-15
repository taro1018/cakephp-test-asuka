<h1>掲示板</h1>
<br /><a href="/weeklyreport/boards/index">※一覧に戻る</a>
<br /><br />
<table>
	<?php
	echo "<tr><th>投稿者</th><td>{$data[0]['Personal']['name']}</td></tr>";
	echo "<tr><th>タイトル</th><td>{$data[0]['Board']['title']}</td></tr>";
	echo "<tr><th>内容</th><td>{$data[0]['Board']['content']}</td></tr>";
	$id = $data[0]['Board']['id'];
	?>
</table>
<br /><a href="/weeklyreport/boards/edit/<?php echo $id; ?>">
	※この投稿を編集する</a><br />
