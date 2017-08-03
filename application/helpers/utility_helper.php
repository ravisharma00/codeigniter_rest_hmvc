<?php 
function normalize_str($str) {    
    $invalid = array('â€™'=>"'", 'â€˜' => "'", '’' => '\'', '‘'=>'\'', '“' => "\"", '”' => "\"", '—' => '-');        
    $str = str_replace(array_keys($invalid), array_values($invalid), $str);        
    return html_entity_decode($str);    
}

function slugify($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    if (empty($text)) { return 'n-a'; }
    return $text;
}



?>
