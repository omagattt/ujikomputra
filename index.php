<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css?version=<?= filemtime("css/style.css")?>" >

</head>
<body>
<form method="POST" action="ceklogin.php">
 	<?php if (isset($_GET['msg'])) : ?>
						<div class="alert" role="alert">
							<small class="text-danger"><?= $_GET['msg'];  ?></small>
						</div>
					<?php endif ?>

          <body>
        <div class="container">
            <h1>PUTSON LAUNDRY</h1>
            <hr>
            <label for="username">
                <input type="username" name="username" placeholder="Username" required/>
            </label>
            <label for="password">
                <input type="password" name="password" placeholder="Password" required/>
            </label>
            <label for="submit">
                <input type="submit" id="submit" value="Login">
            </label>
        </div>
    </body>