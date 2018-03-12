<?PHP
$domain="192.168.0.190";
$host = "localhost:3306";
$user = "root";
$password = "123456";
$databasename = "fota";
$baseurl = "http://192.168.0.190/fota/";
$basesslurl = "http://192.168.0.190/fota/";
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
