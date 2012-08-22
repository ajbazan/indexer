<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Edit user</title>
</head>
<body>
	<?php $this->load->view("menu");

	echo form_open('users/edit_user');?>
		<input name="id" type="hidden" value="<?php echo $user->id?>"/>
	    User Name&nbsp;
	    <input name="username" type="text" value="<?php echo $user->username?>"/><br/><br/>
	    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input name="name" type="text" value="<?php echo $user->name?>"/><br/><br/>
		Surname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name="surname" type="text" value="<?php echo $user->surname?>"/><br/><br/>
		<input type="submit" value="Save" name="" class="button" />
    </form>
</body>
</html>