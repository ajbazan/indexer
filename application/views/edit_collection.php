<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Edit collection</title>
</head>
<body>
	<?php $this->load->view("menu");

	echo form_open('collections/edit_collection');?>
	
		<input name="id" type="hidden" value="<?php echo $collection->id?>"/>
	    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input name="name" type="text" value="<?php echo $collection->name?>"/><br/><br/>
	    Description&nbsp;&nbsp;
	    <input name="description" type="text" value="<?php echo $collection->description?>"/><br/><br/>
	    Shards&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input name="shards" type="text" value="<?php echo $collection->shards?>"/><br/><br/>
	    Replicates&nbsp;&nbsp;&nbsp;&nbsp;
	    <input name="replicates" type="text" value="<?php echo $collection->replicates?>"/><br/><br/>
	   <input type="submit" value="Save" name="" class="button" />
    </form>
</body>
</html>