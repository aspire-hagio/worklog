<html>
<head>
</head>
<body>
<?php
$this->load->helper('form');
echo form_open('board/post');
echo form_textarea('body');
echo form_submit('submit', '書き込み');
echo form_close();
?>
<table>

<?php

foreach ($posts->result() as $row) {
	echo '<tr>';
	echo '<td>' . $row->post_date . '</td>';
	echo '<td>' . html_escape($row->body) . '</td>';
	echo '</tr>';
}

?>
</table>
</body>
</html>
