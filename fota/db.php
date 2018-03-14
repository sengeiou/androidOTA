<?PHP
$domain="120.76.47.120";
$host = "localhost:3306";
$user = "root";
$password = "huayingtekmysql20160709";
$databasename = "fota";
$baseurl = "http://120.76.47.120/fota/";
$basesslurl = "http://120.76.47.120/fota/";
// $baseurl="http://127.0.0.1/";
// $basesslurl="https://127.0.0.1/";
$upload_version_dir = '/var/www/OTA/';
$upload_delta_dir = '/var/www/OTA/';
// $upload_version_dir="C:/OTA/version/";
// $upload_delta_dir="C:/OTA/version/";
function connect_database() {
    global $host, $user, $password, $databasename;
    $db = mysql_connect ( $host, $user, $password );
    $tb = mysql_select_db ( $databasename );
    if ($tb) {
        return true;
    } else {
        return false;
    }
}
?>
