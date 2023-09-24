            <?php





function generateRandomPassword($length = 12) {
    // Define the character pool for the password
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+[]{}|;:,.<>?';
    
    // Get the total number of characters in the pool
    $pool_length = strlen($characters);
    
    // Initialize the password variable
    $password = '';
    
    // Generate random characters to build the password
    for ($i = 0; $i < $length; $i++) {
        $random_index = mt_rand(0, $pool_length - 1);
        $password .= $characters[$random_index];
    }
    
    return $password;
}



// Get the current URL
    $currenturl = $_SERVER['REQUEST_URI'];
    $languge_folder  = array('/install/index.php');
    $currenturl_en = str_replace($languge_folder,'',$currenturl); 
    $path = str_replace('/install/lib','',dirname( __FILE__ )); 



// Get the base URL
$baseUrl = ($_SERVER['HTTPS'] ?? 'http') . '://' . $_SERVER['HTTP_HOST'];

// Construct the full homepage URL with the path
$homepageUrl = $baseUrl . $currenturl_en.'/';
include('./settings.php');
?>
  <h2>Instalation & Configuration</h2>           



          <form method="post" action="?action=config">

                        
                        <input type="hidden" name="submit" value="step2" />  
                        <table class=text width="45%" border="0" cellspacing="0" cellpadding="2" class="main_text">
                        <tr>
                            <tr>
                                <td colspan=2><p>Hompage and Script info</p></td>
                            </tr>
                            <tr>
                                <td>&nbsp;Script Url:</td>
                                <td>
                                    <input type="text" class="form_text" name="script_host" value='<?=$homepageUrl?>' size="30">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;Websooked URL(WSS Only):</td>
                                <td>
                                    <input type="text" class="form_text" name="wsUri" value='<?=$wsUri?>' size="30">
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2><p>MYSQL INFORMATION</p></td>
                            </tr>

                            <tr>
                                <td>&nbsp;Database Host</td>
                                <td>
                                    <input type="text" class="form_text" name="database_host" value='<?= $database_host ?>' size="30">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;Database Name</td>
                                <td>
                                    <input type="text" class="form_text" name="database_name" size="30" value="<?= $database_name ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;Database Username</td>
                                <td>
                                    <input type="text" class="form_text" name="database_username" size="30" value="<?= $database_username ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;Database Password</td>
                                <td>
                                    <input type="text" class="form_text" name="database_password" size="30" value="<?= $database_password ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2><p>User & Admin Login</p></td>
                            </tr>

                            <tr>
                                <td>&nbsp;Admin Username</td>
                                <td>
                                    <input type="text" class="form_text" name="admin_username" size="30" value="<?= $admin_username ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;Admin Password</td>
                                <td>
                                    <input type="text" class="form_text" name="admin_password" size="30" value="<?= $admin_password ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>&nbsp;</td>
                            </tr>

                            <tr>
                                <td colspan=2 align='left'>
		                                    <input type="submit" class="btn btn-outline-success" name="btn_submit" value="Start INSTALATION">
                                </td>
                            </tr>
                        
                        </table>
                        </form> 