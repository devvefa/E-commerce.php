<?php
$IP_adres =$_SERVER["REMOTE_ADDR"];
$timeNow=time();
$date_time=date("d.m.Y H:i:s",$timeNow);


function onlyNumberCleanAllChars($datas){
    $actin= preg_replace("/[^0-9]/","",$datas);
    $result=$actin;
    return $result;
}
function returnConverted($datas){// döüşümler geridöndür

    $returnRS=htmlspecialchars_decode($datas,ENT_QUOTES);
    $result=$returnRS;
    return $result;
}

function security($datas){
    $deleteSpace=trim($datas);
    $deleteTags = strip_tags($deleteSpace);
    $convertSpecialchas  =htmlspecialchars($deleteTags);
    $result=$convertSpecialchas;
    return $result;

}
function filterChosenContent($datas){// seçiliiçierikleri filtirele
    $deleteSpace=trim($datas);
    $deleteTags = strip_tags($deleteSpace);
    $convertSpecialchas  =htmlspecialchars($deleteTags);
    $cleans= onlyNumberCleanAllChars($convertSpecialchas);
    $result=$cleans;
    return $result;
}


?>