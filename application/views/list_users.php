<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login</title>
</head>
<body>
	<?php $this->load->view("menu");?>
    <table cellpadding="0" cellspacing="0" border="0" width="967" >
		<tr>
			<td>ID</td>
            <td>User Name</td>
			<td>Name</td>
			<td>Surname</td>
      		<td>&nbsp;</td>
		</tr>
		<?php foreach ($users as $user){?>
		<tr>
			<td><?php echo $user->id ?></td>
      		<td><a href="users/edit_user/<?php echo $user->id?>"><?php echo $user->username ?></a></td>
			<td><?php echo $user->name ?></td>
	        <td><?php echo $user->surname ?></td>
	        <td>
				<a href="users/edit_user/<?php echo $user->id?>">Edit</a>
				<a href="users/delete_user/<?php echo $user->id?>">Delete</a>
			</td>
		</tr>
		<?php }?>
    </table>
</body>
</html>



