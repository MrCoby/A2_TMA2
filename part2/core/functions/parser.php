<?php
libxml_use_internal_errors(true);

function spit_xml_content($xml_string){
   $xml_array = array();

   if(empty($xml_string) === false){
      $xml_array = simplexml_load_string($xml_string);
      if($xml_string === false){
         foreach(libxml_get_errors() as $error){
            $errors [] = 'Failed loading xml' . $error->message . '<br>';
         }
      }
   }

   return (empty($xml_array) === false) ? $xml_array : false;
}

?>