
<!DOCTYPE html>
<html>
<head>
	<title>Nicholas Porter</title>
	<link rel="stylesheet" type="text/css" href="resume/css/index.css" />
	<link rel="stylesheet" href="resume/css/printable.css" type="text/css" media="print" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35136392-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<center>
	
<div id="header">
<a href ="http://www.porternick.com"><span class="header_name">Nicholas Porter</span></a><br />
<p><span id="resume_subtitle" class="subtitle">505.750.8362 | <a href="mailto:nick@porternick.com">nick@porternick.com</a>
<span id="print_subtitle">505.750.8362 | <a href="mailto:nick@porternick.com">nick@porternick.com</a></span></span></p>
</div>

<div id="content">

<?php

$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
        403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
        404 => array('404', 'These are not the droids your looking for. Move Along.'),
        405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
        408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
        500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
        502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
        504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.')
        );
        
$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
    $message = 'Please supply a valid status code.';
}

echo '<p><h1>' . $title . '</h1></p>' . 
     '<p>' . $message . '</p>'; 

 
?>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
</div>

</center>
</body>
</html>