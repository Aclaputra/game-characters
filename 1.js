
function hitungVoucher(Voucher,uangBelanja){
    minimalBelanjaJos = 50000;
    minimalBelanjaMantap = 80000;

    if (Voucher == "DumbwaysJos" && uangBelanja > 50000){
        document.write("==============================================<br>");
        document.write("<p>Selamat anda mendapatkan potongan sebesar 21,1% </p>");
        document.write("==============================================<br>");
        DiskonJos = (uangBelanja/100)*21.1;
        
        KembalianJos = uangBelanja - DiskonJos
        
        
        document.write("Uang yang harus dibayar: " + minimalBelanjaJos + "<br>");
        document.write("Diskon (21.1%): "+ DiskonJos +"<br>");
        document.write("==============================================<br>");
        document.write("Kembalian: "+ KembalianJos +"<br>");
        document.write("<br><br>");

    }else if (Voucher == "DumbwaysMantap" && uangBelanja > 80000){
        document.write("<p>Selamat anda mendapatkan potongan sebesar 30%</p><br>" );

        DiskonMantap = (uangBelanja/100)*30;
        
        KembalianMantap = uangBelanja - DiskonMantap
        
        document.write("==============================================<br>");
        document.write("Uang yang harus dibayar: " + minimalBelanjaMantap + "<br>");
        document.write("Diskon (30%): "+ DiskonMantap +"<br>");
        document.write("==============================================<br>");
        
        document.write("Kembalian: "+ KembalianMantap +"<br>");
        document.write("<br><br>");
    }else{
        document.write("Jika voucher salah atau Uang kurang muncul notif dibawah ini: <br>")
        document.write("==============================================<br>");
        document.write("<p style='color: red;'>Maaf Voucher anda salah atau minimal uang belanja tidak cukup<br></p>");
    }
}


(hitungVoucher("DumbwaysJos",60000));

(hitungVoucher("DumbwaysMantap",90000));
document.write("<br><br>");
document.write("==============================================<br>");
(hitungVoucher("DumbwaysJos",30000));
document.write("==============================================<br>");
document.write("<br><br>");
