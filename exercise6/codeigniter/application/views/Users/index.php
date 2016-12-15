<html lang = "en">
 
	<head>
	<title>My Home Page</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/Style.css"/>


<body> 


 <center>
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>home address</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Cellphone number</strong></td>
        <td><strong>Comment</strong></td>
        <td><strong>Action</strong></td>
        
    </tr>
<?php foreach ($users as $users_item): ?>
        <tr>
            <td><?php echo $users_item['name']; ?></td> 
            <td><?php echo $users_item['nickname']; ?></td>
            <td><?php echo $users_item['email']; ?></td>
            <td><?php echo $users_item['hadd']; ?></td>
            <td><?php echo $users_item['gender']; ?></td>
            <td><?php echo $users_item['cpnum']; ?></td>
            <td><?php echo $users_item['comment']; ?></td>
            

            <td>
                <a href="<?php echo site_url('users/'.$users_item['slug']); ?>">View</a> 
                <a href="<?php echo site_url('users/edit/'.$users_item['id']); ?>">Edit</a> 
                <a href="<?php echo site_url('user_controller/delete/'.$users_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>

</center>
<div>
   </body>
	
</html>