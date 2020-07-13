<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>ASRAHS Batch-2011 Portal | Login Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">
	       <center><img src="bismillahirrahmanirrahim.png" height=81 width=160 alt="welcome"></center>
	    <img src="logo.png" height=123 width=126 alt="ASRAHS LOGO">
		<h2>ASRAHS Batch-2011 Portal | Login Panel</h2>
		<marquee> Abdus Sobhan Rahat Ali High School is a secondary school established in the zero point of Patiya City, Patiya, Chittagong in 1914. Initially, it was established as a 'Religious Institute', later it was upgraded to a 'Higher English School'. An educationalist and social worker named Moulana Abdus Sobhan founded the school for Muslim students on the eve of British rule. Today children of all religions and tribes study at this high school. Due to the devastating defeat in the war of 'Palashi' Battle of Plassey in 1757, the position of Muslims deteriorated in such a way that living independently became very challenging in the subcontinent, especially in Bangladesh (Ex-East Pakistan, Ex-British India). Against this backdrop, Sir Syed Ahmed Khan, Nawab Abdul Latif, Barrister Syed Ameer Ali, Nawab Mohsin-ul-Mulk, Maniruzzaman Islamabadi and Master Kazem Ali became known as the champions of the Muslims in this subcontinent. All of these scholars believed that the only way to recover the lost valor and glory of the Muslim nation was to introduce them to modern education. <a href="https://en.wikipedia.org/wiki/Abdus_Sobhan_Rahat_Ali_High_School">Read more..</a> </marquee>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	<p align="center">&copy 2019 | Version 1.0 | Developed by <a href="https://facebook.com/fahad.cseit">Engr. Fahad Bin Aziz</a></p>


</body>
</html>