<form action="" method="post">
	<input type="password" name="sifre" placeholder="Lütfen şifrenizi girin:" size="50" /><br /><br />
	<input type="submit" value="Giriş" />
</form>
<?php 
if(@$_POST["sifre"] == null OR md5(@$_POST["sifre"]) != "6a74a329f496320c720ea1521560b44a")
	exit;
else
?>
<table width="0" border="1" cellspacing="0" cellpadding="4">
