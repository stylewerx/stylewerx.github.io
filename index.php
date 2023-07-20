<?
if (stristr($_SERVER['HTTP_ACCEPT'],'application/xhtml+xml')) {
	$contenttype = 'application/xhtml+xml; charset=UTF-8';
	$langdef = 'xml:lang';
	$xhtmlversion = 'XHTML 1.1';
	header('Content-Type: '.$contenttype);
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">\n";
}
else {
	$contenttype = 'text/html; charset=UTF-8';
	$langdef = 'lang';
	$xhtmlversion = 'XHTML 1.0 Strict';
	header('Content-Type: '.$contenttype);
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" <?=$langdef?>="de">

<head>
	<meta http-equiv="Content-Type" content="<?=$contenttype?>" />
	<meta name="robots" content="index, follow" />
	<meta name="content-language" content="de" />
	<title>stylewerx.de | 2001 - 2008</title>
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<style type="text/css">
	/* <![CDATA[ */
		html, body {
			color: #000;
			font: normal 12px/1.5em "Lucida Grande", "Trebuchet MS", Verdana, Geneva, Helvetica, sans-serif; 
		}
		h1 {
			background: url(/stylewerx.de.jpg) top left no-repeat;
			height: 165px;
			margin: 200px auto 20px;
			width: 154px;
		}
		h1 span {
			display: none;
		}
		p {
			text-align: center;
		}
		a { 
			color: #485c5a;
		}
		a:visited {
			color: #8c9c9a; 
		}
		a:hover { 
			color: #a31e39; 
		}
		a[href^="http:"] {
			background: url(/external.jpg) center right no-repeat;
			padding-right: 12px;
		}
	/* ]]> */
	</style>
</head>

<body>

	<h1><span>stylewerx.de</span></h1>
	<p>war ein Projekt von</p>
	<p><!--a href="http://markusbauer.info"-->Markus Bauer<!--/a--> &amp; <!--a href="/bernd.jpg"-->Bernd Kießling<!--/a--></p>
	<p>... und es hat Spaß gemacht!</p>

</body>
</html>