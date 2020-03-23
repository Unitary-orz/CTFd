
<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
include "../flag.php";
include "../test2.php";
   show_source(__FILE__);
class TokenStorage {
    public function performAction($action, $data) {
        switch ($action) {
            case 'create':
                $this->createToken($data);
                break;
            case 'delete':
                $this->clearToken($data);
                break;
            default:
                throw new Exception('Unknown action');
        }
    }

    public function createToken($seed) {
        $token = md5($seed);
        file_put_contents('/tmp/tokens/' . $token, '...data');
    }

    public function clearToken($token) {
        $file = preg_replace("/[^a-z.-_]/", "", $token);
        unlink($file);
    }
}

$storage = new TokenStorage();
$storage->performAction($_GET['action'], $_GET['data']);


include "foot.php";
