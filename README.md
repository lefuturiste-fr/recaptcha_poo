# recaptcha_poo
Use this class for have use Google recaptcha api.
Use this class for your MVC architecture.

###Instalation

1. Download this class.

###Usage

###### A - Server Instalation
1. Require this class.
2. Initialise class
```php
  <?php
  $captcha = new recaptcha('YOUR PUBLIC KEY GOOGLE API', 'YOUR SECRET KEY GOOGLE API');
  ?>
```
3. Verify if empty `$_POST['g-recaptcha-response']` key
```php
  <?php
  if (empty($_POST['g-recaptcha-response'])){
    //error
  }
  else{
    //continue script
  }
  ?>
```
4. Verify api response
```php
  <?php
  if ($captcha->isSuccess($_POST['g-recaptcha-response']) == false) {
	  //error
  } else { 
    //successs
  }
  ?>
```
###### B - Client Instalation
1. Include script's file :
```html
  <script type="text/javascript" src="https://cdn.stail.eu/jquery/jquery.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
```
2. Get html div :
```php
  $dataTheme = 'light';
  //$dataTheme = 'dark';
  <?= $captcha->getHtml($dataTheme) ?>
```
Light or Dark display posibility.
