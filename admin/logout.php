<?php
include("./lib/session.php");
###################### Start insert logs ##################
###################### End logs ##################

$_SESSION[ "core_session_id"] = 0;
$_SESSION[ "core_session_name"] = "";
$_SESSION[ "core_session_level"] = "";
$_SESSION[ "core_session_permission"] = "";
$_SESSION[ "core_session_logout"] = "";
?>
<script language="JavaScript"  type="text/javascript">
    document.location.href = "./index.php";
</script>
