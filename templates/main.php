<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="/SUS.png">
    <meta charset="utd-8">
    <link rel="stylesheet" href="/templates/style.css">
    <meta name="description" content="Fun Unblocked Games and Unblocked Tools!">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6FPXPXF7G1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-6FPXPXF7G1');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5481938699787394" crossorigin="anonymous"></script>

    
    <msbody>
        <gamesheader id="header">
          <div class="container">
               <div id="name">
                  <h1>SusGames.org</h1>
               </div>
               <nav>   
                   <ul>
                       <li><a href="https://sus.grayjn.com">Home</a></li>
                       <li class="current"><a href="https://sus.grayjn.com/Games">Games</a></li>
                       <li><a href="https://sus.grayjn.com/Tools">Tools</a></li>
                       <li><a href="https://sus.grayjn.com/More">More</a></li>
                   </ul>
               </nav>
           </div>  
       </gamesheader>
    </msbody>

<title>SusGames.org | Proxy</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;
	background-color:#FFC8C8;
	
	border:1px solid #818181;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

</head>

<body>


<div id="container">

	<div style="text-align:center;">
		<h1 style="color:blue;">SusGames.org PHP Proxy</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo strip_tags($error_msg); ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
			<input type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>

<div id="footer">
	Powered by <a href="//www.php-proxy.com/" target="_blank">PHP-Proxy</a> <?php echo $version; ?>
</div>


</body>
</html>