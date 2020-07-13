<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ASRAHS Batch-2011 Portal | Homepage</title>
	<meta property="og:image" content="banner-asrahs-groups.jpg" />
	<meta property="og:description" content="Abdus Sobhan Rahat Ali High School 2011 Batch" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div class="header">
	   <center><img src="bismillahirrahmanirrahim.png" height=81 width=160 alt="welcome"></center>
	    <img src="logo.png" height=123 width=126 alt="ASRAHS LOGO">
		<h2>ASRAHS Batch 2011 Portal | HomePage</h2>
		<marquee behavior="alternate" direction="left">Welcome to this portal | Stay updated through <a href="https://fb.com/groups/asrahs2011">facebook</a> </marquee>
		<marquee> Abdus Sobhan Rahat Ali High School is a secondary school established in the zero point of Patiya City, Patiya, Chittagong in 1914. Initially, it was established as a 'Religious Institute', later it was upgraded to a 'Higher English School'. An educationalist and social worker named Moulana Abdus Sobhan founded the school for Muslim students on the eve of British rule. Today children of all religions and tribes study at this high school. Due to the devastating defeat in the war of 'Palashi' Battle of Plassey in 1757, the position of Muslims deteriorated in such a way that living independently became very challenging in the subcontinent, especially in Bangladesh (Ex-East Pakistan, Ex-British India). Against this backdrop, Sir Syed Ahmed Khan, Nawab Abdul Latif, Barrister Syed Ameer Ali, Nawab Mohsin-ul-Mulk, Maniruzzaman Islamabadi and Master Kazem Ali became known as the champions of the Muslims in this subcontinent. All of these scholars believed that the only way to recover the lost valor and glory of the Muslim nation was to introduce them to modern education. <a href="https://en.wikipedia.org/wiki/Abdus_Sobhan_Rahat_Ali_High_School">Read more..</a> </marquee>
	</div>

	<div class="content">
<p><h3>Welcome to Abdus Sobhan Rahat Ali High School Batch-2011 Registration Portal</h3></p>
<center><img src="bismillahirrahmanirrahim.png" height=115 width=273 alt="welcome"></center>

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		<?php endif ?>
		<form action="upload.php" method="post" enctype="multipart/form-data">
    Upload your profile picture:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
		</p> 
		<center><img src="asrahs-batch-2011.jpg" alt="asrahs batch 2011" style="width:792px;height:468px;></center>
		<p align="center">&copy 2019 | Version 1.0 | Developed by <a href="https://fb.com/fahad.cseit">Engr. Fahad Bin Aziz</a></p>
	</div>
		
</body>
</html>