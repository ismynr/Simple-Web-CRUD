<?php
    include 'config.php';
    $query = $db->prepare("SELECT * FROM user");
    $query->execute();
    $data = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Delete With PDO</title>
</head>
<body bgcolor="#CCCCCC">
<h2><strong><p align="center">Data User</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="115" height="30" align="center" valign="middle" bgcolor="#00FFFF">Username</td>
    <td width="175" align="center" valign="middle" bgcolor="#00FFFF">Password</td>
    <td width="250" align="center" valign="middle" bgcolor="#00FFFF">Email</td>
    <td width="100" align="center" valign="middle" bgcolor="#00FFFF">TTL</td>
    <td width="100" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
    <td width="100" align="center" valign="middle" bgcolor="#00FFFF">Foto</td>
    <td width="100" align="center" valign="middle" bgcolor="#00FFFF">Action</td>
  </tr>
            <?php foreach ($data as $value): ?>
                <tr>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['username'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['password'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['email'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['ttl'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['alamat'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['foto'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF">
                        <a href="edit.php?nis=<?php echo $value['nis']?>">Edit</a>
                        <a href="delete.php?nis=<?php echo $value['nis']?>">Delete</a>
                    </td>
                </tr>
 </td>
  </tr>
<?php endforeach; ?>
</table>
</body>
</html>