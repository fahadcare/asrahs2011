<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>ASRAHS Batch-2011 Portal</title>
	<meta property="og:image" content="banner-asrahs-groups.jpg" />
	<meta property="og:description" content="Abdus Sobhan Rahat Ali High School 2011 Batch" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div class="header">
	    <center><img src="bismillahirrahmanirrahim.png" height=81 width=160 alt="welcome"></center>
	    <img src="logo.png" height=123 width=126 alt="ASRAHS LOGO">
		<h2>Abdus Sobhan Rahat Ali High School<br> Patiya, Chittagong-4370.<br> Batch-2011 Portal</h2>
		<h5>Note: Type in English</h5>
		<marquee behavior="alternate" direction="left">Portal is under construction | Plz stay updated through <a href="https://facebook.com/groups/asrahs2011">Facebook Group</a> </marquee>
		<marquee>Fillup correctly; Enter your desired username and password.</marquee>
	</div>

	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Fathers Name</label>
			<input type="text" name="fathersname" value="<?php echo $fathersname; ?>">
		</div>
		<div class="input-group">
			<label>Mobile No.</label>
			<input type="mobile" name="mobile" value="<?php echo $mobile; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="address" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<label>Workplace</label>
			<input type="workplace" name="workplace" value="<?php echo $workplace; ?>">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="username" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
		
			<center><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fasrahspatiya&tabs=about&width=640&height=250&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=469965690077669" width="640" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center>
		<center><table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;"><tr style=""><td height="28" style="line-height:28px;">&nbsp;</td></tr><tr><td style=""><table border="0" width="280" cellspacing="0" cellpadding="0" style="border-collapse:separate;background-color:#ffffff;border:1px solid #dddfe2;border-radius:3px;font-family:Helvetica, Arial, sans-serif;margin:0px auto;"><tr style="padding-bottom: 8px;"><td style=""><img class="img" src="https://scontent.fdac10-1.fna.fbcdn.net/v/t31.0-0/c0.0.1385.1428a/s526x296/13528126_894404217355933_7346087274277069574_o.jpg?_nc_cat=103&amp;_nc_sid=ca434c&amp;_nc_eui2=AeGA1Wzh_7e-5VZ_4t7ctkyBJWFl8foq4gMlYWXx-iriAyRYs-CoxpiKRAzOtgYyjTqEGU1maUgYIpvAiMbQjKed&amp;_nc_ohc=bG_oqBrDtNEAX8tiq0N&amp;_nc_ht=scontent.fdac10-1.fna&amp;oh=9caa388d1a4a0eb802df57fe9a8edcde&amp;oe=5F334703" width="280" height="146" alt="" /></td></tr><tr><td style="font-size:14px;font-weight:bold;padding:8px 8px 0px 8px;text-align:center;">Abdus Sobhan Rahat Ali High School (Batch-2011)</td></tr><tr><td style="color:#90949c;font-size:12px;font-weight:normal;text-align:center;">Private group · 134 members</td></tr><tr><td style="padding:8px 12px 12px 12px;"><table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:100%;"><tr><td style="background-color:#4267b2;border-radius:3px;text-align:center;"><a style="color:#3b5998;text-decoration:none;cursor:pointer;width:100%;" href="https://web.facebook.com/plugins/group/join/popup/?group_id=1441520339440054&amp;source=email_campaign_plugin" target="_blank" rel="noopener"><table border="0" cellspacing="0" cellpadding="3" align="center" style="border-collapse:collapse;"><tr><td style="border-bottom:3px solid #4267b2;border-top:3px solid #4267b2;color:#FFF;font-family:Helvetica, Arial, sans-serif;font-size:12px;font-weight:bold;">Join Group</td></tr></table></a></td></tr></table></td></tr><tr><td style="border-top:1px solid #dddfe2;font-size:12px;padding:8px 12px;">পটিয়া সদরের শূন্য কিলোমিটারে ১৯১৪ সালে আবদুস সোবহান রাহাত আলী উচ্চ বিদ্যালয় প্রতিষ্ঠিত হয়। প্রথমে এটি একটি ধর্মীয় মক্তব হিসেবে প্রতিষ্ঠিত হলেও সময়ের প...</td></tr></table></td></tr><tr style=""><td height="28" style="line-height:28px;">&nbsp;</td></tr></table></center>
		
		<p align="center">&copy 2019 | Version 1.0 | Developed by <a href="https://facebook.com/fahad.cseit">Engr. Fahad Bin Aziz</a></p>
	</form>
	
</body>
</html>