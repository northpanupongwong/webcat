<?php

function print_pre($expression, $wrap = false)
{
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

function get_real_ip()
{
   ############################################
   $ip = false;
   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
   }
   if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
      if ($ip) {
         array_unshift($ips, $ip);
         $ip = false;
      }
      for ($i = 0; $i < count($ips); $i++) {
         if (!preg_match("/^(10|172\.16|192\.168)\./i", $ips[$i])) {
            if (version_compare(phpversion(), "5.0.0", ">=")) {
               if (ip2long($ips[$i]) != false) {
                  $ip = $ips[$i];
                  break;
               }
            } else {
               if (ip2long($ips[$i]) != -1) {
                  $ip = $ips[$i];
                  break;
               }
            }
         }
      }
   }
   return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

############################################

function _getURL()
{
   ############################################
   $Parameter = (strlen($_SERVER["QUERY_STRING"]) > 0) ? "?" . $_SERVER["QUERY_STRING"] : "";
   return 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] . $Parameter; #$_SERVER['REQUEST_URI'];
}


function logs_access($actionType)
{
   global $db;

   $core_tb_log = "logs";
   $core_pathname_logs = "../../logs";
   $CurrentPath = $core_pathname_logs . "";
   if (!is_dir($CurrentPath)) {
      mkdir($CurrentPath, 0777);
   }

   $myDateNow = date("Y-m-d");
   $myTimeNow = date("H:i:s");

   ## section logs ##
   if (!is_dir($CurrentPath . "/access-action")) {
      mkdir($CurrentPath . "/access-action", 0777);
   } # ÊÃéÒ§ path

   $logsfile = $CurrentPath . "/access-action/" . $myDateNow . ".logs";

   if (!is_file($logsfile)) {
      $fp = @fopen($logsfile, 'w+');
      fwrite($fp, $actionType . "|:|" . session_id() . "|:|" . _getURL() . "|:|" . get_real_ip() . "|:|" . $myDateNow . " " . $myTimeNow . "\n");
      fclose($fp);
      chmod($logsfile, 0666);
   } else {
      $fp = @fopen($logsfile, 'a');
      fwrite($fp, $actionType . "|:|" . session_id() . "|:|" . _getURL() . "|:|" . get_real_ip() . "|:|" . $myDateNow . " " . $myTimeNow . "\n");
      fclose($fp);
   }


   /* ################## Start Insert Access User DB ########################## */

   $insert[$core_tb_log . "_action"] = "'" . $actionType . "'";
   $insert[$core_tb_log . "_sessid"] = "'" . session_id() . "'";
   $insert[$core_tb_log . "_ip"] = "'" . get_real_ip() . "'";
   $insert[$core_tb_log . "_time"] = "NOW()";
   $insert[$core_tb_log . "_type"] = "'Access Menu'";

   $insert[$core_tb_log . "_url"] = "'" . _getURL() . "'";


   $sqlLog = "INSERT INTO " . $core_tb_log . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
   $queryLog = $db->Execute($sqlLog);

   /* ################## End Insert Access User DB ########################## */
}

################## Query DB ##########################

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

//#################################################
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

//#################################################
function timeFormatReal($DateTime)
{
   //#################################################
   global $core_session_language;
   $DateTime = date("Y-m-d H:i", strtotime($DateTime));

   $DateTimeArr = explode(" ", $DateTime);
   $Date = $DateTimeArr[0];
   $Time = $DateTimeArr[1];

   $timeArr = explode(":", $Time);


   return $timeArr[0] . ":" . $timeArr[1];
}


