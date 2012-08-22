<?php if($this->session->userdata('user_type')=='admin'){?>
	<a class="addUser" href="<?php echo base_url();?>/index.php/users/add_user">
		Add user
	</a>
	&nbsp;|&nbsp;
	<a class="listUsers" href="<?php echo base_url();?>/index.php/users">
		List users
	</a>&nbsp;
<?php }
else {?>
	<a class="ListCols" href="<?php echo base_url();?>/index.php/collections">
		My collections
	</a>
	&nbsp;|&nbsp;
	<a class="addCol" href="<?php echo base_url();?>/index.php/collections/add_collection">
		Add collection
	</a>&nbsp;
<?php }?>

<br/>

<a class="logOut" style="float:right; position:absolute; left: 700px; top:5px;" href="<?php echo base_url();?>/index.php/main/logout">
	Loguot
</a>
<br/>