const mySelect = document.getElementById("mySelect");
const firstSelect = document.createElement("select");
const newSelect = document.createElement("select");
let newOption = new Option('Select Package..', '4');
let secondOption = new Option('GOTV SUPA - ₦ 5,500/Month', '5');
let thirdOption = new Option('GOTV MAX - ₦ 4,150/Month', '6');
let fourthOption = new Option('GOTV JOLLI - ₦ 2,800/Month', '7');
let fifthOption = new Option('GOTV JINJA - ₦ 1,900/Month', '8');
let sixthOption = new Option('GOTV SMALLIE', '9');
let seventhOption = new Option('DSTV PREMIUM - 21,000/Month', '10');
let eightOption = new Option('DSTV COMPACT PLUS - ₦ 14,250/Month', '11');
let ninthOption = new Option('DSTV COMPACT - ₦ 9,000/Month', '12');
let tenthOption = new Option('DSTV CONFAM - ₦ 5,300/Month', '13');
let eleventhOption = new Option('DSTV YANGA - ₦ 2,950/Month', '14');
let twelvethOption = new Option('DSTV PADI - ₦ 2,150/Month', '15');
function myFunction(){
    if(document.getElementById("multichoiceselect").value == 2){
        document.getElementById("inputBox").appendChild(firstSelect);
        newSelect.remove();
        mySelect.remove();
        firstSelect.appendChild(newOption);
        firstSelect.appendChild(secondOption);
        firstSelect.appendChild(thirdOption);
        firstSelect.appendChild(fourthOption);
        firstSelect.appendChild(fifthOption);
        firstSelect.appendChild(sixthOption);
        document.getElementById("demo").innerHTML = "REMINDER: GOTV SMALLIE - ₦ 900/Month, ₦ 2,400/Quarter, ₦ 7,000/Annum"
    }
    if(document.getElementById("multichoiceselect").value == 3){
        document.getElementById("inputBox").appendChild(newSelect);
        firstSelect.remove();
        mySelect.remove();
        newSelect.appendChild(newOption);
        newSelect.appendChild(seventhOption);
        newSelect.appendChild(eightOption);
        newSelect.appendChild(ninthOption);
        newSelect.appendChild(tenthOption);
        newSelect.appendChild(eleventhOption);
        newSelect.appendChild(twelvethOption);
        document.getElementById("demo").innerHTML = "";
    };
};

function secondFunction(){
    if(firstSelect.value == 5){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayforgotvsupa.php";
    }
    if(firstSelect.value == 6){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayforgotvmax.php";
    }
    if(firstSelect.value == 7){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayforgotvjolli.php";
    }
    if(firstSelect.value == 8){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayforgotvjinja.php";
    }
    if(firstSelect.value == 9){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayforgotvsmallie.php";
    }
    if(newSelect.value == 10){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayfordstvpremium.php";
    }
    if(newSelect.value == 11){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayfordstvcompactplus.php";
    }
    if(newSelect.value == 12){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayfordstvcompact.php";
    }
    if(newSelect.value == 13){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayfordstvconfam.php";
    }
    if(newSelect.value == 14){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayfordstvyanga.php";
    }
    if(newSelect.value == 15){
        window.location.href="/GOTV and DSTV stuff/paymentgatewayfordstvpadi.php";
    };
};