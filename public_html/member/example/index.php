<?php
require_once('settings.php');
?>
<a href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>"><img border="0" alt="W3Schools" src="https://camo.githubusercontent.com/da18dfde046310c33010757e0b1d2a1f6c95b5d7/68747470733a2f2f646576656c6f706572732e676f6f676c652e636f6d2f6163636f756e74732f696d616765732f7369676e2d696e2d776974682d676f6f676c652e706e67" width="100%" ></a>
    