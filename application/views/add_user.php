<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Add user</title>
</head>
<body>
	<?php $this->load->view("menu");

	echo form_open('users/add_user');?>
	    User Name&nbsp;<input name="username" type="text" value=""/><br/><br/>
	    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="name" type="text" value=""/><br/><br/>
		Surname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="surname" type="text" value=""/><br/><br/>
		<input type="submit" value="Save" name="" class="button" />
    </form>
</body>
</html>