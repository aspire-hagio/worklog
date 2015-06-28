<html>
<head>
<link href="<?php echo base_url(); ?>css/board.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$this->load->helper('form');
echo form_open('board/post');
echo form_textarea(['name' => 'body', 'id' => 'main-textarea']);
echo form_submit('submit', '書き込み');
echo form_close();
?>
<table>

<?php

foreach ($posts->result() as $row) {
	echo '<tr>';
	echo '<td class="post-date">' . $row->post_date . '</td>';
	echo '<td class="post-body">' . html_escape($row->body) . '</td>';
	echo '</tr>';
}

?>
</table>
</body>
</html>
