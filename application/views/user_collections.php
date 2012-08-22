<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My collections</title>
</head>
<body>
	<?php $this->load->view("menu");?>
    <table cellpadding="0" cellspacing="0" border="0" width="967" >
		<tr>
			<td>ID</td>
            <td>Name</td>
			<td>Description</td>
			<td>Shards</td>
			<td>Replicates</td>
			<td>&nbsp;</td>
		</tr>
		<?php foreach ($cols as $col){?>
		<tr>
			<td><?php echo $col->id ?></td>
      		<td><a href="../../collections/edit_collection/<?php echo $col->id?>"><?php echo $col->name ?></a></td>
			<td><?php echo $col->description ?></td>
	        <td><?php echo $col->shards ?></td>
	        <td><?php echo $col->replicates ?></td>
	        <td>
				<a href="../../collections/edit_collection/<?php echo $col->id?>">Edit</a>
				<a href="../../collections/delete_collection/<?php echo $col->id?>">Delete</a>
			</td>
		</tr>
		<?php }?>
    </table>
</body>
</html>