<?php
//------------------- BotInfo ------------------------//
$BotToken = "--EitaaBotToken--";
$BotMainURL = "https://eitaayar.ir/api/" . $BotToken;
define('BotMainAPI', $BotMainURL);
//---------------------- BotInfo -------------------//

//////////////////// - Developed by AGC007 - ////////////////////

//---------------------- Function -------------------//
function sendMessage($ChatID, $MassegeText) ///// sendMessage /////
{
    file_get_contents(BotMainAPI . "/sendMessage?chat_id=" . $ChatID . "&text=" . $MassegeText);
}

function sendDocument($ChatID, $FileID) ///// deleteMessage /////
{
    file_get_contents(BotMainAPI . "/sendDocument?chat_id=" . $ChatID . "&file=" . $FileID);
}

function getMe($ChatID) ///// getMe /////
{
    file_get_contents(BotMainAPI . "/getMe?chat_id=" . $ChatID);
}

//////////////////// - Developed by AGC007 - ////////////////////

?>

