<div class="well well-sm">
<p>Tarikh:<span id="dates" style="padding:3px 0px 2px 0px; border-radius:0px;"></span>
Masa:<span id="clock" style="margin-left:1px; padding:3px 4px 2px 4px; border-radius:0px;"></span>&nbsp;</p>    
<?php
if(isset($_SESSION['login']))
{
	$user_role = $_SESSION['user_role'];
	
	if($user_role == "admin")
	{
		include "sidebar_admin.php";
	}
	elseif($user_role == "jururawat" || $user_role == "doktor")
	{
	
	}
	elseif($user_role == "pesakit")
	{
	
	}
}
?>
</div>