<?php
	include "core/functions.php";
?>

<html>
	<head>
		<title>users</title>
		<link rel="icon" href="core/meiware.png?ts=<?php echo time(); ?>">
		<link rel="stylesheet" href="core/stylesheet.css?ts=<?php echo time(); ?>">
	</head>

	<header>
		<a href="index.php"><img src="core/meiware.png?ts=<?php echo time(); ?>" style="width: 8vh; height: 8vh; line-height: 10vh;">eiware</a>
	</header>

	<div id="spacer"></div>

	<nav>
		<a href="users.php">users</a><?php echo (IsValidSession()) ? '<a href="settings.php">settings</a><a href="logout.php">logout</a>' : '[<a href="login.php">login</a>/<a href="register.php">register</a>]'; ?>
	</nav>

	<div id="spacer"></div>

	<body>
		<div id="content">
			<div id="spacer"></div>

			<table>
				<?php
					$sta = $con->prepare("SELECT * FROM profiles");
					$sta->execute();

					while($row = $sta->fetch())
					{
						echo '<tr><td><a href="profile.php?uid=' . $row["uid"] . '">' . $row["profilename"] . '</a></td></tr>';
 					}
				?>
			</table>

			<div id="spacer"></div>
		</div>
	</body>

	<div id="spacer"></div>

	<footer>
		&copy; <?php echo date("Y") . " Meiware"; ?>
	</footer>
</html>