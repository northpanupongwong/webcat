function checkLoginUser() {

    var TYPE = "POST";
    var URL = "./login.php";

    var dataSet = jQuery("#myFormLogin").serialize();
        jQuery.ajax({
        type: TYPE,
        url: URL,
        data: dataSet,
        success: function(html) {
            // alert("login success");
            jQuery("#loadCheckComplete").html(html);
        }
    });
}

function checkLogoutUser() {

    var TYPE = "POST";
    var URL = "./logout.php";

    var dataSet = {};
    jQuery.ajax({
        type: TYPE,
        url: URL,
        data: dataSet,
        success: function(html) {
            jQuery("#loadCheckComplete").html(html);
        }
    });
}