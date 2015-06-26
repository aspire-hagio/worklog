<html>
<head>
</head>
<body>
<?php
$this->load->helper('form');
echo form_open('login/go');
echo form_label('ログインID', 'user_name');
echo form_input('user_name', '');
echo form_label('パスワード', 'password');
echo form_password('password', '');
echo form_submit('login', 'ログイン');
echo form_close();
?>
</body>
</html>
