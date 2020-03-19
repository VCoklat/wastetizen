 <?php
require_once('../../check_update.php');
$user_id   = clean($_POST['id']);
$plastik      = clean($_POST['plastik']);
$token    = clean($_POST['token']);
$manggrove = clean($_POST['manggrove']);

            $data    = Array(
                'plastik' => $plastik,
                'token' => $token,
                'manggrove' => $manggrove
            );
$db->where('id', $user_id);
if ($db->update('user', $data)) {
    header("Location:../../menu.php?menu=dashboard&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
} 