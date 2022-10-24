<?php
$base_url = "http://localhost/nagarisupayang/admin";
date_default_timezone_set('Asia/Jakarta');
$server = "localhost";
$user = "root";
$password = "";
$database = "nagarisupayang";

$kon = new mysqli($server, $user, $password, $database) or die (mysqli_connect_error());


function clean_text($text)
  {
      return trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($text))))));
  }
function limit_word($string, $word_limit = 0)
  {     

      $words = explode(' ', $string);
      if (count($words) > $word_limit):
          $kata = "";

          for ($i=0;  $i < $word_limit ; $i++)  { 
              $kata .= " ".$words[$i];
          }

          // $kata = implode(' ', array_slice($words, 0, $word_limit));
          return clean_text(trim($kata))."...";
      else:
          $kata = $string;
          return clean_text($kata);
      endif;
  }
?>
