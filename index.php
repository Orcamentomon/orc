<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>...</title>
</head>
<script language="JavaScript"> function formulario() { document.form.submit(); } </script>
<body onLoad="formulario()">

<form name="form" method="post" action="v2_login.php?servidor=brasileiro<?php $hora=date("h,i-s,d,m-y"); echo"$hora".$hora; ?>/<?php $hora=date("h,i-s,d,m-y"); echo"$hora".$hora; ?>"></form>

</body>
</html>
