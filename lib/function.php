<?php
## print pre ##

function print_pre($expression, $wrap = false) {
   $css = 'border:1px dashed #06f;background:#69f;padding:1em;text-align:left;z-index:99999;font-size:12px;position:relative;color:white';
   if ($wrap) {
      $str = '<p style="' . $css . '"><tt>' . str_replace(
                      array('  ', "\n"),
                      array('&nbsp; ', '<br />'),
                      htmlspecialchars(print_r($expression, true))
              ) . '</tt></p>';
   } else {
      $str = '<pre style="' . $css . '">' . print_r($expression, true) . '</pre>';
   }
   echo $str;
}

function dateFormatReal($DateTime, $type = true)
{
   //#################################################
   global $core_session_language;
   if ($DateTime == "0000-00-00 00:00:00") {
      $valReturnData = "";
   } else {
      $DateTime = date("Y-m-d H:i", strtotime($DateTime));

      if ($DateTime != "") {
         $DateTimeArr = explode(" ", $DateTime);
         $Date = $DateTimeArr[0];
         $Time = $DateTimeArr[1];

         $DateArr = explode("-", $Date);

         if ($core_session_language == "Thai")
            $DateArr[0] = ($DateArr[0] + 543);
         $valReturnData = $DateArr[2] . "/" . $DateArr[1] . "/" . $DateArr[0];
      } else {
         $valReturnData = "-";
      }
   }
   return $valReturnData;
}

function callhtml($valhtml) {
   if (is_file($valhtml)) {
      $fd = @fopen($valhtml, "r");
      $contents = @fread($fd, @filesize($valhtml));
      @fclose($fd);
      echo txtReplaceHTML($contents);
   }
}

function txtReplaceHTML($data)
{
   ####################################################
   $dataHTML = str_replace("\\", "", $data);
   return $dataHTML;
}

function QueryDB($valCoreDB = null, $valSqlQuery = null)
{
   ################## Set Up Function ###############################
   global $db;
   $valQueryDB = $db->execute($valSqlQuery);
   return $valQueryDB;
}

################## Num Rows DB ##########################

function NumRowsDB($valCoreDB = null, $valQueryDB = null)
{
   ################## Set Up Function ###############################
   return $valQueryDB->_numOfRows;
}

################## Fetch Array DB ##########################

function FetchArrayDB($valCoreDB = null, $valQueryDB = null)
{
   //################## Set Up Function ###############################
   return $valQueryDB->FetchRow();
}

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

function getProvince($valProvince = null)
{
   ############################################
   global $coreLanguageSQL;
   $tb_help = "province";
   $sql = "SELECT " . $tb_help . "_name FROM " . $tb_help . " WHERE " . $tb_help . "_id = ".$valProvince."";
   $Query = QueryDB($coreLanguageSQL, $sql);
   return ($Query);
}
