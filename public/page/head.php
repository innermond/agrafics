<!DOCTYPE html>
<html lang="en" class="no-js loading">
<head>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta charset="utf-8">
<title>Agrafics - <?=$params[0]?></title>
<style>
html {
-webkit-transition: background-color 2s;
transition: background-color 2s;
}
html, body {
/* For the loading indicator to be vertically centered ensure */
/* the html and body elements take up the full viewport */
min-height: 100%;
}
html.loading {
/* Replace #333 with the background-color of your choice */
/* Replace loading.gif with the loading image of your choice */
background: white url("/images/827.gif") no-repeat 50% 40% fixed;

/* Ensures that the transition only runs in one direction */
-webkit-transition: background-color 0;
transition: background-color 0;
}
html.no-js.loading{background-image: none;background-color:white;}
body {
-webkit-transition: opacity 2s ease-in;
transition: opacity 2s ease-in;
}
html.loading body {
/* Make the contents of the body opaque during loading */
opacity: 0;

/* Ensures that the transition only runs in one direction */
-webkit-transition: opacity 0;
transition: opacity 0;
}
html.no-js.loading body {
/* Make the contents of the body opaque during loading */
opacity: 1;

/* Ensures that the transition only runs in one direction */
-webkit-transition: opacity 1;
transition: opacity 1;
}
</style>
<script>
  document.documentElement.classList.remove("no-js");
</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

