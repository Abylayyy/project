<?php
if ('ajax'==strtolower($_POST['search']))
{
    $word = 'ajax';
    $row=array("Simple ajax application",
            "Using jQuery ajax in everyday life",
            "How ajax changed my life",
            "ajaxify your life");
    $end_result = '';
    foreach($row as $r)
    {
        $result = $r;
        $bold = '<span class="found">' . $word . '</span>';
        $end_result .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';
    }
    echo $end_result;
}
?>
