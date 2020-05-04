<?php
// SCRIPT BY ADEK & THE_MASKER
// DILARANG MERENAME ULANG
// SKILL : PHP BASH SHELL CODEC
//
//
//
echo color("red"," INGIN MELANJUTKAN ?\n");
echo color("white","( Y/N ) :");
       $pilihy = trim(fgets(STDIN));
if($pilihy == "Y" || $pilihy == "y")
{
goto cetok;
}
else
{
Die ();
}
ceken:
sleep(2);
sleep(1);
echo color("red"," 🔺🔺🔺🔺🔺🔺🔺🔺🔺🔺🔺🔺 \n");
echo "🔵";
echo color("red","  AUTO INJECT TOKEN  🔵 \n");
echo color("red"," 🔻🔻🔻🔻🔻🔻🔻🔻🔻🔻🔻🔻 \n");
$token1 = trim(fgets($token));
$secret = ''.$token1.'';
${"G\x4c\x4f\x42\x41L\x53"}["\x63_\x6e\x70d\x64\x67\x7aq\x79h\x6ek\x76o\x5fn\x70g\x6f\x6d"]="\x68e\x61\x64e\x72";${"\x47L\x4fB\x41L\x53"}["r\x69\x71q\x73t\x62\x7ap\x5fg\x6ci\x79h\x6d_\x5fn\x75h\x74b\x69d\x7a\x5f\x65k\x63\x63\x68"]="\x74\x6f\x6b\x65\x6e";${"G\x4cO\x42A\x4c\x53"}["\x6a\x6b\x6ez\x6d\x79e\x74\x73i\x66s\x77\x76g\x76m\x77\x65e\x69\x73j\x73\x7aw\x6b\x71\x77\x6ey\x7ab\x5fe"]="p\x69\x6e";${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x63_\x6e\x70d\x64\x67\x7aq\x79h\x6ek\x76o\x5fn\x70g\x6f\x6d"]}=array();${${"\x47\x4cO\x42\x41L\x53"}["\x63_\x6e\x70d\x64\x67\x7aq\x79h\x6ek\x76o\x5fn\x70g\x6f\x6d"]}[]="C\x6fn\x74\x65n\x74\x2d\x54y\x70e\x3a \x61\x70p\x6ci\x63\x61\x74\x69\x6fn\x2fj\x73\x6fn";${${"\x47L\x4fB\x41L\x53"}["\x63_\x6e\x70d\x64\x67\x7aq\x79h\x6ek\x76o\x5fn\x70g\x6f\x6d"]}[]="\x58-\x41p\x70V\x65\x72s\x69o\x6e:\x203\x2e\x346\x2e\x32";${${"\x47L\x4f\x42A\x4c\x53"}["\x63_\x6e\x70d\x64\x67\x7aq\x79h\x6ek\x76o\x5fn\x70g\x6f\x6d"]}[]="X\x2dU\x6ei\x71u\x65I\x64\x3a\x20".time()."5\x37".mt_rand(1000,9999);${${"G\x4cO\x42A\x4c\x53"}["\x63_\x6e\x70d\x64\x67\x7aq\x79h\x6ek\x76o\x5fn\x70g\x6f\x6d"]}[]="\x58-\x4co\x63\x61t\x69o\x6e\x3a\x20i\x64_\x49D";${${"G\x4cO\x42\x41L\x53"}["\x63_\x6e\x70d\x64\x67\x7aq\x79h\x6ek\x76o\x5fn\x70g\x6f\x6d"]}[]="A\x75\x74\x68\x6fr\x69z\x61t\x69\x6fn\x3a \x42e\x61\x72\x65\x72\x20".${${"G\x4cO\x42A\x4cS"}["r\x69\x71q\x73t\x62\x7ap\x5fg\x6ci\x79h\x6d_\x5fn\x75h\x74b\x69d\x7a\x5f\x65k\x63\x63\x68"]};${${"G\x4c\x4fB\x41\x4cS"}["\x63_\x6e\x70d\x64\x67\x7aq\x79h\x6ek\x76o\x5fn\x70g\x6f\x6d"]}[]="p\x69n\x3a".${${"\x47L\x4f\x42\x41L\x53"}["\x6a\x6b\x6ez\x6d\x79e\x74\x73i\x66s\x77\x76g\x76m\x77\x65e\x69\x73j\x73\x7aw\x6b\x71\x77\x6ey\x7ab\x5fe"]}."";
//LOCK CODE
$info = curl('https://api.gojekapi.com/v1/chat/profile', null, $header);
    $verifs = json_decode($info[0]);
         $akun = $verifs->data->name;
         $nope = $verifs->data->phone;
   echo "\n";
   echo color("yellow","nama : ".$akun." \n");
   echo color("yellow","nomer : 0".$nope." \n");
//CHECKER SALDO GOPAY
$detail = curl('https://api.gojekapi.com/wallet/profile/detailed', null, $header);
         $saldoo = json_decode($detail[0]);
                $saldo = $saldoo->data->balance;
                    echo color("yellow","SALDO GOPAY = Rp. $saldo \n");
//CHECKER VOUCHER YANG ADA
$detail_voucher = curl('https://api.gojekapi.com/gopoints/v3/wallet/vouchers?limit=10&page=1', null, $header);
     $vouchers = json_decode($detail_voucher[0]);
     $total_voucher = $vouchers->voucher_stats->total_vouchers;
     $nama_voucher = $vouchers->data[0]->title;
 $batas_voucher = $vouchers->data[0]->expiry_date;
 $nama_voucher1 = $vouchers->data[1]->title;
 $batas_voucher1 = $vouchers->data[1]->expiry_date;
 $nama_voucher2 = $vouchers->data[2]->title;
 $batas_voucher2 = $vouchers->data[2]->expiry_date;
 $nama_voucher3 = $vouchers->data[3]->title;
 $batas_voucher3 = $vouchers->data[3]->expiry_date;
 $nama_voucher4 = $vouchers->data[4]->title;
 $batas_voucher4 = $vouchers->data[4]->expiry_date;
 $nama_voucher5 = $vouchers->data[5]->title;
 $batas_voucher5 = $vouchers->data[5]->expiry_date;
 $nama_voucher6 = $vouchers->data[6]->title;
 $batas_voucher6 = $vouchers->data[6]->expiry_date;
 $nama_voucher7 = $vouchers->data[7]->title;
 $batas_voucher7 = $vouchers->data[7]->expiry_date;
 $nama_voucher8 = $vouchers->data[8]->title;
 $batas_voucher8 = $vouchers->data[8]->expiry_date;
 $nama_voucher9 = $vouchers->data[9]->title;
 $batas_voucher9 = $vouchers->data[9]->expiry_date;
 $nama_voucher10 = $vouchers->data[10]->title;
 $batas_voucher10 = $vouchers->data[10]->expiry_date;
 $nama_voucher11 = $vouchers->data[11]->title;
 $batas_voucher11 = $vouchers->data[11]->expiry_date;
 $nama_voucher12 = $vouchers->data[12]->title;
 $batas_voucher12 = $vouchers->data[12]->expiry_date;
 $nama_voucher13 = $vouchers->data[13]->title;
 $batas_voucher13 = $vouchers->data[13]->expiry_date;
 $nama_voucher14 = $vouchers->data[14]->title;
 $batas_voucher14 = $vouchers->data[14]->expiry_date;
       if ($vouchers->success == true) {
       echo "
";
       echo color("blue","VOUCHER " . $total_voucher . " Tersedia
");
       echo "
";
       if ($total_voucher == 1) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 2) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 3) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 4) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 5) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 6) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 7) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 8) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 9) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 10) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 11) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 12) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 13) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 14) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher13 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher13 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 15) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher13 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher13 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher14 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher14 . '
';
        echo "
";
  }
  }
        echo color("blue"," CEK PAYLATER ?\n");
echo color("yellow","( Y/N ) :");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
echo "\n";
        echo color("yellow","Proses Mohon Di tunggu ...")."\n";
        sleep (5);
$paylater = curl('https://api.gojekapi.com/paylater/v1/user/profile', null, $header);
 $duit = json_decode($paylater[0]);
 $status = $duit->data->credit_nonfraud_eligible;
 $money = $duit->data->credit_limit;
    echo "\n".color("yellow","STATUS PAYLATER = ".$status." \n");
   echo color("yellow","LIMIT PAYLATER  = Rp".$money." \n");
 $transaksi = curl('https://api.gojekapi.com/paylater/v1/user/transactions', null, $header);
 $data = json_decode($transaksi[0]);
  if ($data->success == true) {
 $status1 = $data->transactions[0]->amount;
 $status2 = $data->transactions[0]->description;
    echo "\n".color("red","HUTANG = ".$status1." \n");
   echo color("red","TRANSAKSI DI = ".$status2." \n");
}else if($pilihan == "n" || $pilihan == "N"){
         die();
         }else{
echo "".color("Yellow","**SELALU RAHASIAKAN PIN ANDA** \n");
Die ();
}
}
//Done
 function nama()
	{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	// $rand = json_decode($rnd_get, true);
	preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
	return $name[2][mt_rand(0, 14) ];
	}

function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
	}
function color($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end    = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}
cetok:
include "intro.php";
${"G\x4c\x4fB\x41L\x53"}
["l\x63d\x75m\x70l\x6c\x74\x5fm\x62n\x77t\x6f\x5fv\x70b\x66\x71c\x75h\x72t\x70\x61\x65\x75v\x65n"]="\x73e\x63r\x65t";${"\x47L\x4f\x42A\x4cS"}["t\x73s\x6c\x69\x71h\x6cv\x74\x6a\x63\x68\x67k\x71u\x76t\x6b"]="f\x69";${"G\x4c\x4f\x42A\x4cS"}["w\x62\x77\x66k\x65c\x6fj\x68i\x6es\x77\x77_\x5f\x6dt\x6bq\x72g\x6ei\x6c\x6bs\x63f\x65a\x74s\x6al\x61"]="\x68\x65a\x64e\x72s";${${"\x47\x4cO\x42\x41L\x53"}["l\x63d\x75m\x70l\x6c\x74\x5fm\x62n\x77t\x6f\x5fv\x70b\x66\x71c\x75h\x72t\x70\x61\x65\x75v\x65n"]}="8\x334\x315\x640\x36-\x65c\x34e\x2d1\x31e\x36-\x614\x31b\x2d6\x634\x30\x308\x38a\x625\x31e";${${"\x47L\x4f\x42A\x4c\x53"}["t\x73s\x6c\x69\x71h\x6cv\x74\x6a\x63\x68\x67k\x71u\x76t\x6b"]}="j\x6e\x64\x74e\x61\x6d";${${"G\x4cO\x42\x41\x4cS"}["w\x62\x77\x66k\x65c\x6fj\x68i\x6es\x77\x77_\x5f\x6dt\x6bq\x72g\x6ei\x6c\x6bs\x63f\x65a\x74s\x6al\x61"]}=array();${${"G\x4cO\x42A\x4cS"}["w\x62\x77\x66k\x65c\x6fj\x68i\x6es\x77\x77_\x5f\x6dt\x6bq\x72g\x6ei\x6c\x6bs\x63f\x65a\x74s\x6al\x61"]}[]="C\x6f\x6et\x65n\x74-\x54\x79\x70e\x3a\x20a\x70p\x6ci\x63a\x74\x69o\x6e\x2fj\x73\x6f\x6e";${${"G\x4cO\x42\x41\x4cS"}["w\x62\x77\x66k\x65c\x6fj\x68i\x6es\x77\x77_\x5f\x6dt\x6bq\x72g\x6ei\x6c\x6bs\x63f\x65a\x74s\x6al\x61"]}[]="\x58-\x41\x70p\x56\x65r\x73i\x6f\x6e\x3a \x33.\x348\x2e2";${${"\x47L\x4f\x42A\x4c\x53"}["w\x62\x77\x66k\x65c\x6fj\x68i\x6es\x77\x77_\x5f\x6dt\x6bq\x72g\x6ei\x6c\x6bs\x63f\x65a\x74s\x6al\x61"]}[]="X\x2d\x55\x6ei\x71\x75\x65i\x64:\x20a\x639\x34e\x35d\x30\x65\x37\x663\x66".rand(111,999);${${"\x47\x4cO\x42\x41\x4cS"}["w\x62\x77\x66k\x65c\x6fj\x68i\x6es\x77\x77_\x5f\x6dt\x6bq\x72g\x6ei\x6c\x6bs\x63f\x65a\x74s\x6al\x61"]}[]="X\x2dL\x6f\x63\x61t\x69o\x6e\x3a \x69d\x5fI\x44";
echo "\e[92m♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨\n";
echo "\e[93m";	
echo color("white","🔴 MASUKAN USER ID :");
       ${"G\x4cO\x42\x41L\x53"}["\x66l\x72n\x6ba\x68\x6ec\x69o\x6bq\x5f\x6bu\x64h\x68\x6d_\x75\x6d\x66\x67y\x64\x66\x6dj"]="p\x69\x6ci\x68y";${${"G\x4cO\x42\x41\x4cS"}["\x66l\x72n\x6ba\x68\x6ec\x69o\x6bq\x5f\x6bu\x64h\x68\x6d_\x75\x6d\x66\x67y\x64\x66\x6dj"]}=trim(fgets(STDIN));if(${${"\x47L\x4fB\x41L\x53"}["\x66l\x72n\x6ba\x68\x6ec\x69o\x6bq\x5f\x6bu\x64h\x68\x6d_\x75\x6d\x66\x67y\x64\x66\x6dj"]}=="x64"||${${"G\x4cO\x42\x41L\x53"}["\x66l\x72n\x6ba\x68\x6ec\x69o\x6bq\x5f\x6bu\x64h\x68\x6d_\x75\x6d\x66\x67y\x64\x66\x6dj"]}=="x62")
echo "\e[92m♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨\n"; 
else
{
echo "\e[92m♨♨♨♨♨♨♨♨♨♨♨♨♨♨♨\n";
		echo "\e[91m❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌\n";
		echo "\e[92m[❌]  \e[91m BELUM PUNYA USER ID ? \n";
		echo "\e[92m[❌]  \e[91m CHAT ADMIN  \n";
		echo "\e[92m[❌]  \e[91m T.ME@The_Masker  \n";
		echo "\e[91m❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌\n";
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
Die ();
}
tulup:
echo "\n";
echo color("yellow","*MASUKKAN NOMOR YANG SUDAH TERDAFTAR**\n");
        echo color("blue","📲 LOGIN : ");
 $number = trim(fgets(STDIN));
 $login = curl('https://api.gojekapi.com/v3/customers/login_with_phone', '{"phone":"+' . $number . '"}', $headers);
 $logins = json_decode($login[0]);
 if ($logins->success == true) {
     otp:
         echo "📱 Kode OTP : ";
         $otp = trim(fgets(STDIN));
         $data1 = '{"scopes":"gojek:customer:transaction gojek:customer:readonly","grant_type":"password","login_token":"' . $logins->data->login_token . '","otp":"' . $otp . '","client_id":"gojek:cons:android","client_secret":"' . $secret . '"}';
         $verif = curl('https://api.gojekapi.com/v3/customers/token', $data1, $headers);
         $verifs = json_decode($verif[0]);
         if ($verifs->success == true) {
             $token = $verifs->data->access_token;
             $headers[] = 'Authorization: Bearer ' . $token;
             $live = "token.txt";
             $fopen1 = fopen($live, "a+");
             $fwrite1 = fwrite($fopen1, "TOKEN : " . $token . "
Nomor Hp : " . $number . "
");
             fclose($fopen1);
             echo "
";
             echo "TOKEN ⤵\n" . $token . "
";
             echo "";
             echo "↪📁 " . $live . " 
";
             echo "";
             echo color ("green","🤖START AUTO BOT🤖\n");
             echo "
";
goto ceken;
         } else {
             echo "
";
             echo "Kode OTP Salah !
";
             echo "
";
             goto otp;
         }
     } else {
         echo "
";
         echo "COBA NOMOR LAIN!! Yang Sudah Terdaftar Di GOJEK!
";
         echo "
";
goto tulup;
     }