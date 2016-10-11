<?php
$captcha = new recaptcha('PUBLIC KEY', 'SECRET KEY');

/*$_POST['g-recaptcha-response']*/
if ($captcha->isSuccess("g recaptcha reponse") == false) {

	//error

} else { 
	//successs
}

?>
<script type="text/javascript" src="https://cdn.stail.eu/jquery/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="g-recaptcha" data-sitekey="YOUR PUBLIC KEY" data-theme="light"></div>

