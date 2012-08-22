<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Add collection</title>
</head>
<body>
	<?php $this->load->view("menu");

	echo form_open('collections/add_collection');?>
	    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="name" type="text" value=""/><br/><br/>
	    Description&nbsp;<input name="description" type="text" value=""/><br/><br/>
		Shards&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="shards" type="text" value=""/><br/><br/>
		Replicates&nbsp;&nbsp;&nbsp;<input name="replicates" type="text" value=""/><br/><br/>
		<input type="submit" value="Save" name="" class="button" />
    </form>
</body>
</html>