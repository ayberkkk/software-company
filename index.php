<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>
     Software Company
   </title>
</head>
<? include 'assets/assets.php'; ?>
<div id="overlay">
   <div class="spinner"></div>
</div>
<!-- Top Button -->
<i id="topButton" class="icon icon-up3 over-top-i" style="opacity:0;"></i>
<!-- Top Button End -->

<body class="main">
   <? include 'modules/layouts/header.php'; ?>
   <main>
      <content class="content">
         <? include 'modules/headline.php'; ?>
         <? include 'modules/what_we_do.php'; ?>
         <? include 'modules/community.php'; ?>
         <? include 'modules/slider.php'; ?>
         <? include 'modules/perfect.php'; ?>
         <? include 'modules/choose.php'; ?>
         <? include 'modules/customers.php'; ?>
         <? include 'modules/contact.php'; ?>
      </content>
   </main>
   <? include 'modules/layouts/footer.php'; ?>
   <div id="closeToggle" style="display: none;"></div>

</body>

</html>