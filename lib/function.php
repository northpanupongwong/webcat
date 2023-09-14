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