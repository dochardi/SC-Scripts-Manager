<?
 
                       $new_conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                       $quries=file_get_contents("update.sql");
                       $res=mysqli_multi_query($new_conn,$quries);
                       $oldinstall = '../install';
                       $newinstall = '../install_'.time().'';
                       rename($oldinstall, $newinstall);
                       $oldUpdate = '../update';
                       $newUpdate = '../update_'.time().'';
                       rename($oldUpdate, $newUpdate);

?>
<h2>update erfolgreich</h2>
<p>Sie sind nun auf der neusten Version Sie können sich nun einlogen</p>
<p><a href="../admin" class="btn btn-outline-success">Login als Admin Jetzt</a>.</p>

