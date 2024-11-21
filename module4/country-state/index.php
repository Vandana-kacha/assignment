<?php 
$conn = new mysqli("localhost", "root", "root", "test");

// Check connection
if ($conn->connect_errno) {
	echo "Failed to connect to MySQL: " . $conn->connect_error;
	exit();
}

$query  = "SELECT * FROM country";
$result = mysqli_query($conn, $query);
?>
<html>
<head>
<title>Find State using Ajax Dropdown</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
function getstate(val) {
	jQuery.ajax({
		type: "POST",
		url: "findState.php",
		data:'country='+val,
		success: function(data){
			jQuery("#statediv").html(data);
		}
	});
}
</script>

<style type="text/css">
body {font-family: Arial, "Trebuchet MS";font-size: 17px;color: #52B6EB; }
table {margin-top:20px;border: 1px solid #BBBBBB;padding:25px;height: 35px;}
a {font-weight: bold;letter-spacing: -1px;color: #52B6EB;text-decoration:none;}
a:hover {color: #99A607;text-decoration:underline;}
#top {width:43%;margin-top: 25px; height:60px; padding:10px;}
#tutorialHead {width:43%;margin-top: 12px; height:30px; border:1px solid #BBBBBB; padding:11px;}
.tutorialTitle {width:95%;float:left;color:#99A607}
.tutorialTitle  a {float:right;margin-left:20px;}
.tutorialLink {float:right;}
</style>
</head>
<body>
	<form method="post" action="" name="form1">
		<center>
			<table width="45%" cellspacing="0" cellpadding="0">
			  <tr>
			    <td width="75">Country</td>
			    <td width="50">:</td>
			    <td width="150">
			    	<select name="country" onChange="getstate(this.value)">
						<option value="">Select Country</option>
						<?php while ($row = mysqli_fetch_array($result)) { ?>
							<option value="<?php echo $row['id']?>"><?php echo $row['country']?></option>
						<?php } ?>
					</select>
				</td>
			  </tr>
			  <tr>
			    <td style="padding-top:35px;">State</td>
			    <td style="padding-top:35px;" width="50">:</td>
			    <td style="padding-top:35px;">
			    	<div id="statediv">
			    		<select name="state">
							<option>Select State</option>
			        	</select>
			        </div>
			    </td>
			  </tr>
			</table>
		</center>
	</form>
</body>
</html>
