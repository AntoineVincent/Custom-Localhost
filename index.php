<html>
	<head>
		<title>Localhost - Accueil test</title>
		<link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

		<style>
			h1 {
				text-align: center;
				color: #674172;
				font-family:'Amatic SC';
				font-size:60px;
			}
			body {
				background:url(bcg.jpg) fixed;
				background-size: cover;
				background-repeat:no-repeat;
				font-family:'Amatic SC';
				font-size:30px;
			}
			a {
				color: white;
				text-decoration: none;
			}	
			a:hover {
				color: #674172;
			}
		</style>

	</head>

	<body>



		<div class="col-md-12" style="background-color:rgba(0,0,0,0.7);">
			<h1>Localhost</h1>
				<?php
					if ($handle = opendir('.')) {
					while (false !== ($file = readdir($handle))) {
						if ( ($file != "." && $file != ".." )  && (is_dir($file)) &&  (!ereg("^_",$file)) ){
							echo '<div class="col-md-3" style="text-align:center;padding-top:150px;">
									<div class="col-md-12">
										<a href="./'.$file.'/">
											<img src="ico.png">
										</a>
									</div>
								';
							echo '	<div class="col-md-12">
										<a href="./'.$file.'/" title="visionner '.$file.'" class="navigateur"></a>
									</div>
								';
							echo '	<div class="col-md-12"><strong>
										<a href="./'.$file.'/" title="visionner '.$file.'">'.$file.'</a></strong>
									</div>
								';
							echo '	<div class="col-md-12">
										<span style="color:white;">Derniere modification</span> 
									</div>
									<div class="col-md-12"> 
										<span style="color: white;">'. date ("Y-m-d H:i:s.", filemtime($file)).'</span>
									</div>
								</div>
								';
							}
					}
					closedir($handle);
					}
				?>
			
		</div>

	</body>
</html> 
