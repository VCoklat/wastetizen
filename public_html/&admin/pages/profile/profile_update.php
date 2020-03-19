 <?php
require_once('../../check_update.php');
$email   = clean_email($_POST['email']);
$wa      = clean($_POST['wa']);
$name    = clean($_POST['name']);
$address = clean($_POST['address']);


if (isset($_FILES['pictures'])) {
    
    $folderName         = "uploads";
    $optionalPermission = "rwx r-x r-x";
    $image              = new Bulletproof\Image($_FILES);
    $image->setLocation($folderName, $optionalPermission);
    if ($image["pictures"]) {
        $upload = $image->upload();
        
        if ($upload) {
            $picture = $upload->getFullPath(); // uploads/cat.gif
            $data    = Array(
                'email' => $email,
                'wa' => $wa,
                'name' => $name,
                'address' => $address,
                'picture' => $picture
            );
        } else {
            $data = Array(
                'email' => $email,
                'wa' => $wa,
                'name' => $name,
                'address' => $address
            );
            //echo $image->getError();
        }
    }
    
}
$email_lama = $_SESSION['email'];
$db->where('email', $email_lama);
if ($db->update('user', $data)) {
    header("Location: menu.php?menu=profile&status=1");
    die();
} else {
    echo 'update failed: ' . $db->getLastError();
} 