<?php
$content='';

foreach($_POST as $key=> $value){
    if($value){
        $content.="<b>$key</b>:<i>$value</i>\n";
    }
}

if(trim($content)){
    $content="<b>Message from site:</b>\n".$content;

    $apiToken="6362658634:AAHqTliif7VCvZNy4Auqy38JXmlmRdwotk4";
    $data=[
        'chat_id'=>'',
        'text'=>$content,
        'parse_mode'=>'HTML',

    ];
    $response=file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
}


?>