<?php
try {
    $dbConncet=new PDO('mysql:host=localhost;dbname=ecommerce',"root","" );
    }
    catch(PDOException $con_error) {
    //echo "Bağlantı Hataları ".$con_error->getMessage();
    die();
    }
    $settingQuery=             $dbConncet->prepare("SELECT *FROM settings LIMIT 1");
    $settingQuery ->execute();
    $countOfSetting =          $settingQuery->rowCount();
    $setting        =          $settingQuery->fetch(PDO::FETCH_ASSOC);

    if ($countOfSetting>0){

        $siteName=$setting["siteName"];
        $siteTitle=$setting["siteTitle"];
        $siteDescription=$setting["siteDescription"];
        $siteKeywords=$setting["siteKeywords"];
        $siteCopyright=$setting["siteCopyright"];
        $siteLogo=$setting["siteLogo"];
        $siteMail=$setting["siteMail"];
        $sitePassword=$setting["sitePassword"];


    }
    else{
        echo "Bağlantı Hatası ";
        die();
    }

    //------------------ end of Setting------------------
$AgreementsQuery = $dbConncet->prepare("SELECT *FROM agreement_text LIMIT 1");
$AgreementsQuery->execute();
$countOfagreementsTxt = $AgreementsQuery->rowCount();
$agreementsTxt = $AgreementsQuery->fetch(PDO::FETCH_ASSOC);

if ($countOfagreementsTxt > 0) {
    $aboutus=$agreementsTxt["aboutus"] ;
    $img_aboutus=$agreementsTxt["img_aboutus"] ;
    $membershipAgreement=$agreementsTxt["membershipAgreement"] ;
    $img_membershipAgreement=$agreementsTxt["img_membershipAgreement"] ;
    $termOfUse=$agreementsTxt["termOfUse"] ;
    $img_termOfUse=$agreementsTxt["img_termOfUse"] ;
    $privacyPolicy=$agreementsTxt["privacyPolicy"] ;
    $img_privacyPolicy=$agreementsTxt["img_privacyPolicy"] ;
    $distanceSellingAgreement=$agreementsTxt["distanceSellingAgreement"] ;
    $img_distanceSellingAgreement=$agreementsTxt["img_distanceSellingAgreement"] ;
    $Delivery=$agreementsTxt["Delivery"] ;
    $img_Delivery=$agreementsTxt["img_Delivery"] ;
    $returnExchange=$agreementsTxt["returnExchange"] ;
    $img_returnExchange=$agreementsTxt["img_returnExchange"] ;
    $faq=$agreementsTxt["faq"] ;
    $img_faq=$agreementsTxt["img_faq"] ;
} else {
    echo "OfagreementsTxt Hatası ";
    die();
}





?>