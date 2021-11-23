$(document).ready(function(){
    $('select[name="id_country"]').on('change', function(){
        changeSelect( $(this).val() );
        changeCountry();
        // $('select').trigger('refresh'); //для стилизированного селекта
    });

    var user_country = location.search;
    user_country = user_country.match(/g\=([0-9]{1,3})/i);
    user_country = user_country[1];

    changeSelect(user_country);
    changeCountry();
    lastpack(10)

});


function changeSelect( user_country ){

    $('select[name="id_country"] option').removeAttr('selected');
    switch (user_country) {
    case "1":
        $('select[name="id_country"] option[value="1"]').prop('selected', true );
        break;
    case "2":
        $('select[name="id_country"] option[value="2"]').prop('selected', true );
        break;
    case "3":
        $('select[name="id_country"] option[value="3"]').prop('selected', true );
        break;
    case "4":
        $('select[name="id_country"] option[value="4"]').prop('selected', true );
        break;
    case "5":
        $('select[name="id_country"] option[value="5"]').prop('selected', true );
        break;
    case "6":
        $('select[name="id_country"] option[value="6"]').prop('selected', true );
        break;
    case "7":
        $('select[name="id_country"] option[value="7"]').prop('selected', true );
        break;
    case "8":
        $('select[name="id_country"] option[value="8"]').prop('selected', true );
        break;
    case "9":
        $('select[name="id_country"] option[value="9"]').prop('selected', true );
        break;
    case "10":
        $('select[name="id_country"] option[value="10"]').prop('selected', true );
        break;
    case "11":
        $('select[name="id_country"] option[value="11"]').prop('selected', true );
        break;
    case "12":
        $('select[name="id_country"] option[value="12"]').prop('selected', true );
        break;
    case "13":
        $('select[name="id_country"] option[value="13"]').prop('selected', true );
        break;
    case "14":
        $('select[name="id_country"] option[value="14"]').prop('selected', true );
        break;
    case "15":
        $('select[name="id_country"] option[value="15"]').prop('selected', true );
        break;
    case "16":
        $('select[name="id_country"] option[value="16"]').prop('selected', true );
        break;
    case "17":
        $('select[name="id_country"] option[value="17"]').prop('selected', true );
        break;
    case "18":
        $('select[name="id_country"] option[value="18"]').prop('selected', true );
        break;
    case "19":
        $('select[name="id_country"] option[value="19"]').prop('selected', true );
        break;
    case "20":
        $('select[name="id_country"] option[value="20"]').prop('selected', true );
        break;
    case "21":
        $('select[name="id_country"] option[value="21"]').prop('selected', true );
        break;
    case "22":
        $('select[name="id_country"] option[value="22"]').prop('selected', true );
        break;
    case "23":
        $('select[name="id_country"] option[value="23"]').prop('selected', true );
        break;
    case "24":
        $('select[name="id_country"] option[value="24"]').prop('selected', true );
        break;
    case "25":
        $('select[name="id_country"] option[value="25"]').prop('selected', true );
        break;
    case "26":
        $('select[name="id_country"] option[value="26"]').prop('selected', true );
        break;
    case "27":
        $('select[name="id_country"] option[value="27"]').prop('selected', true );
        break;
    case "28":
        $('select[name="id_country"] option[value="28"]').prop('selected', true );
        break;
    case "29":
        $('select[name="id_country"] option[value="29"]').prop('selected', true );
        break;
    case "30":
        $('select[name="id_country"] option[value="30"]').prop('selected', true );
        break;
    case "31":
        $('select[name="id_country"] option[value="31"]').prop('selected', true );
        break;
    case "32":
        $('select[name="id_country"] option[value="32"]').prop('selected', true );
        break;
    case "33":
        $('select[name="id_country"] option[value="33"]').prop('selected', true );
        break;
    case "34":
        $('select[name="id_country"] option[value="34"]').prop('selected', true );
        break;
    case "35":
        $('select[name="id_country"] option[value="35"]').prop('selected', true );
        break;
    case "36":
        $('select[name="id_country"] option[value="36"]').prop('selected', true );
        break;
    case "37":
        $('select[name="id_country"] option[value="37"]').prop('selected', true );
        break;
    case "38":
        $('select[name="id_country"] option[value="38"]').prop('selected', true );
        break;
    case "39":
        $('select[name="id_country"] option[value="39"]').prop('selected', true );
        break;
    case "40":
        $('select[name="id_country"] option[value="40"]').prop('selected', true );
        break;
    case "41":
        $('select[name="id_country"] option[value="41"]').prop('selected', true );
        break;
    case "42":
        $('select[name="id_country"] option[value="42"]').prop('selected', true );
        break;
    case "43":
        $('select[name="id_country"] option[value="43"]').prop('selected', true );
        break;
    case "44":
        $('select[name="id_country"] option[value="44"]').prop('selected', true );
        break;
    case "45":
        $('select[name="id_country"] option[value="45"]').prop('selected', true );
        break;
    case "46":
        $('select[name="id_country"] option[value="46"]').prop('selected', true );
        break;
    case "47":
        $('select[name="id_country"] option[value="47"]').prop('selected', true );
        break;
    case "48":
        $('select[name="id_country"] option[value="48"]').prop('selected', true );
        break;
    case "49":
        $('select[name="id_country"] option[value="49"]').prop('selected', true );
        break;
    case "50":
        $('select[name="id_country"] option[value="50"]').prop('selected', true );
        break;
    case "51":
        $('select[name="id_country"] option[value="51"]').prop('selected', true );
        break;
    case "52":
        $('select[name="id_country"] option[value="52"]').prop('selected', true );
        break;
    case "53":
        $('select[name="id_country"] option[value="53"]').prop('selected', true );
        break;
    case "54":
        $('select[name="id_country"] option[value="54"]').prop('selected', true );
        break;
    case "55":
        $('select[name="id_country"] option[value="55"]').prop('selected', true );
        break;
    case "56":
        $('select[name="id_country"] option[value="56"]').prop('selected', true );
        break;
    case "57":
        $('select[name="id_country"] option[value="57"]').prop('selected', true );
        break;
    case "58":
        $('select[name="id_country"] option[value="58"]').prop('selected', true );
        break;
    case "59":
        $('select[name="id_country"] option[value="59"]').prop('selected', true );
        break;
    case "60":
        $('select[name="id_country"] option[value="60"]').prop('selected', true );
        break;
    case "61":
        $('select[name="id_country"] option[value="61"]').prop('selected', true );
        break;
    case "62":
        $('select[name="id_country"] option[value="62"]').prop('selected', true );
        break;
    case "63":
        $('select[name="id_country"] option[value="63"]').prop('selected', true );
        break;
    case "64":
        $('select[name="id_country"] option[value="64"]').prop('selected', true );
        break;
    case "65":
        $('select[name="id_country"] option[value="65"]').prop('selected', true );
        break;
    case "66":
        $('select[name="id_country"] option[value="66"]').prop('selected', true );
        break;
    case "67":
        $('select[name="id_country"] option[value="67"]').prop('selected', true );
        break;
    case "68":
        $('select[name="id_country"] option[value="68"]').prop('selected', true );
        break;
    case "69":
        $('select[name="id_country"] option[value="69"]').prop('selected', true );
        break;
    case "70":
        $('select[name="id_country"] option[value="70"]').prop('selected', true );
        break;
    case "71":
        $('select[name="id_country"] option[value="71"]').prop('selected', true );
        break;
    case "72":
        $('select[name="id_country"] option[value="72"]').prop('selected', true );
        break;
    case "73":
        $('select[name="id_country"] option[value="73"]').prop('selected', true );
        break;
    case "74":
        $('select[name="id_country"] option[value="74"]').prop('selected', true );
        break;
    case "75":
        $('select[name="id_country"] option[value="75"]').prop('selected', true );
        break;
    case "76":
        $('select[name="id_country"] option[value="76"]').prop('selected', true );
        break;
    case "77":
        $('select[name="id_country"] option[value="77"]').prop('selected', true );
        break;
    case "78":
        $('select[name="id_country"] option[value="78"]').prop('selected', true );
        break;
    case "79":
        $('select[name="id_country"] option[value="79"]').prop('selected', true );
        break;
    case "80":
        $('select[name="id_country"] option[value="80"]').prop('selected', true );
        break;
    case "81":
        $('select[name="id_country"] option[value="81"]').prop('selected', true );
        break;
    case "82":
        $('select[name="id_country"] option[value="82"]').prop('selected', true );
        break;
    case "83":
        $('select[name="id_country"] option[value="83"]').prop('selected', true );
        break;
    case "84":
        $('select[name="id_country"] option[value="84"]').prop('selected', true );
        break;
    case "85":
        $('select[name="id_country"] option[value="85"]').prop('selected', true );
        break;
    case "86":
        $('select[name="id_country"] option[value="86"]').prop('selected', true );
        break;
    case "87":
        $('select[name="id_country"] option[value="87"]').prop('selected', true );
        break;
    case "88":
        $('select[name="id_country"] option[value="88"]').prop('selected', true );
        break;
    case "89":
        $('select[name="id_country"] option[value="89"]').prop('selected', true );
        break;
    case "90":
        $('select[name="id_country"] option[value="90"]').prop('selected', true );
        break;
    case "91":
        $('select[name="id_country"] option[value="91"]').prop('selected', true );
        break;
    case "92":
        $('select[name="id_country"] option[value="92"]').prop('selected', true );
        break;
    case "93":
        $('select[name="id_country"] option[value="93"]').prop('selected', true );
        break;
    case "94":
        $('select[name="id_country"] option[value="94"]').prop('selected', true );
        break;
    case "95":
        $('select[name="id_country"] option[value="95"]').prop('selected', true );
        break;
    case "96":
        $('select[name="id_country"] option[value="96"]').prop('selected', true );
        break;
    case "97":
        $('select[name="id_country"] option[value="97"]').prop('selected', true );
        break;
    case "98":
        $('select[name="id_country"] option[value="98"]').prop('selected', true );
        break;
    case "99":
        $('select[name="id_country"] option[value="99"]').prop('selected', true );
        break;
    case "100":
        $('select[name="id_country"] option[value="100"]').prop('selected', true );
        break;
    case "101":
        $('select[name="id_country"] option[value="101"]').prop('selected', true );
        break;
    case "102":
        $('select[name="id_country"] option[value="102"]').prop('selected', true );
        break;
    case "103":
        $('select[name="id_country"] option[value="103"]').prop('selected', true );
        break;
    case "104":
        $('select[name="id_country"] option[value="104"]').prop('selected', true );
        break;
    case "105":
        $('select[name="id_country"] option[value="105"]').prop('selected', true );
        break;
    case "106":
        $('select[name="id_country"] option[value="106"]').prop('selected', true );
        break;
    case "107":
        $('select[name="id_country"] option[value="107"]').prop('selected', true );
        break;
    case "108":
        $('select[name="id_country"] option[value="108"]').prop('selected', true );
        break;
    case "109":
        $('select[name="id_country"] option[value="109"]').prop('selected', true );
        break;
    case "110":
        $('select[name="id_country"] option[value="110"]').prop('selected', true );
        break;
    case "111":
        $('select[name="id_country"] option[value="111"]').prop('selected', true );
        break;
    case "112":
        $('select[name="id_country"] option[value="112"]').prop('selected', true );
        break;
    case "113":
        $('select[name="id_country"] option[value="113"]').prop('selected', true );
        break;
    case "114":
        $('select[name="id_country"] option[value="114"]').prop('selected', true );
        break;
    case "115":
        $('select[name="id_country"] option[value="115"]').prop('selected', true );
        break;
    case "116":
        $('select[name="id_country"] option[value="116"]').prop('selected', true );
        break;
    case "117":
        $('select[name="id_country"] option[value="117"]').prop('selected', true );
        break;
    case "118":
        $('select[name="id_country"] option[value="118"]').prop('selected', true );
        break;
    case "119":
        $('select[name="id_country"] option[value="119"]').prop('selected', true );
        break;
    case "120":
        $('select[name="id_country"] option[value="120"]').prop('selected', true );
        break;
    case "121":
        $('select[name="id_country"] option[value="121"]').prop('selected', true );
        break;
    case "122":
        $('select[name="id_country"] option[value="122"]').prop('selected', true );
        break;
    case "123":
        $('select[name="id_country"] option[value="123"]').prop('selected', true );
        break;
    case "124":
        $('select[name="id_country"] option[value="124"]').prop('selected', true );
        break;
    case "125":
        $('select[name="id_country"] option[value="125"]').prop('selected', true );
        break;
    case "126":
        $('select[name="id_country"] option[value="126"]').prop('selected', true );
        break;
    case "127":
        $('select[name="id_country"] option[value="127"]').prop('selected', true );
        break;
    case "128":
        $('select[name="id_country"] option[value="128"]').prop('selected', true );
        break;
    case "129":
        $('select[name="id_country"] option[value="129"]').prop('selected', true );
        break;
    case "130":
        $('select[name="id_country"] option[value="130"]').prop('selected', true );
        break;
    case "131":
        $('select[name="id_country"] option[value="131"]').prop('selected', true );
        break;
    case "132":
        $('select[name="id_country"] option[value="132"]').prop('selected', true );
        break;
    case "133":
        $('select[name="id_country"] option[value="133"]').prop('selected', true );
        break;
    case "134":
        $('select[name="id_country"] option[value="134"]').prop('selected', true );
        break;
    case "135":
        $('select[name="id_country"] option[value="135"]').prop('selected', true );
        break;
    case "136":
        $('select[name="id_country"] option[value="136"]').prop('selected', true );
        break;
    case "137":
        $('select[name="id_country"] option[value="137"]').prop('selected', true );
        break;
    case "138":
        $('select[name="id_country"] option[value="138"]').prop('selected', true );
        break;
    case "139":
        $('select[name="id_country"] option[value="139"]').prop('selected', true );
        break;
    case "140":
        $('select[name="id_country"] option[value="140"]').prop('selected', true );
        break;
    case "141":
        $('select[name="id_country"] option[value="141"]').prop('selected', true );
        break;
    case "142":
        $('select[name="id_country"] option[value="142"]').prop('selected', true );
        break;
    case "143":
        $('select[name="id_country"] option[value="143"]').prop('selected', true );
        break;
    case "144":
        $('select[name="id_country"] option[value="144"]').prop('selected', true );
        break;
    case "145":
        $('select[name="id_country"] option[value="145"]').prop('selected', true );
        break;
    case "146":
        $('select[name="id_country"] option[value="146"]').prop('selected', true );
        break;
    case "147":
        $('select[name="id_country"] option[value="147"]').prop('selected', true );
        break;
    case "148":
        $('select[name="id_country"] option[value="148"]').prop('selected', true );
        break;
    case "149":
        $('select[name="id_country"] option[value="149"]').prop('selected', true );
        break;
    case "150":
        $('select[name="id_country"] option[value="150"]').prop('selected', true );
        break;
    case "151":
        $('select[name="id_country"] option[value="151"]').prop('selected', true );
        break;
    case "152":
        $('select[name="id_country"] option[value="152"]').prop('selected', true );
        break;
    case "153":
        $('select[name="id_country"] option[value="153"]').prop('selected', true );
        break;
    case "154":
        $('select[name="id_country"] option[value="154"]').prop('selected', true );
        break;
    case "155":
        $('select[name="id_country"] option[value="155"]').prop('selected', true );
        break;
    case "156":
        $('select[name="id_country"] option[value="156"]').prop('selected', true );
        break;
    case "157":
        $('select[name="id_country"] option[value="157"]').prop('selected', true );
        break;
    case "158":
        $('select[name="id_country"] option[value="158"]').prop('selected', true );
        break;
    case "159":
        $('select[name="id_country"] option[value="159"]').prop('selected', true );
        break;
    case "160":
        $('select[name="id_country"] option[value="160"]').prop('selected', true );
        break;
    case "161":
        $('select[name="id_country"] option[value="161"]').prop('selected', true );
        break;
    case "162":
        $('select[name="id_country"] option[value="162"]').prop('selected', true );
        break;
    case "163":
        $('select[name="id_country"] option[value="163"]').prop('selected', true );
        break;
    case "164":
        $('select[name="id_country"] option[value="164"]').prop('selected', true );
        break;
    case "165":
        $('select[name="id_country"] option[value="165"]').prop('selected', true );
        break;
    case "166":
        $('select[name="id_country"] option[value="166"]').prop('selected', true );
        break;
    case "167":
        $('select[name="id_country"] option[value="167"]').prop('selected', true );
        break;
    case "168":
        $('select[name="id_country"] option[value="168"]').prop('selected', true );
        break;
    case "169":
        $('select[name="id_country"] option[value="169"]').prop('selected', true );
        break;
    case "170":
        $('select[name="id_country"] option[value="170"]').prop('selected', true );
        break;
    case "171":
        $('select[name="id_country"] option[value="171"]').prop('selected', true );
        break;
    case "172":
        $('select[name="id_country"] option[value="172"]').prop('selected', true );
        break;
    case "173":
        $('select[name="id_country"] option[value="173"]').prop('selected', true );
        break;
    case "174":
        $('select[name="id_country"] option[value="174"]').prop('selected', true );
        break;
    case "175":
        $('select[name="id_country"] option[value="175"]').prop('selected', true );
        break;
    case "176":
        $('select[name="id_country"] option[value="176"]').prop('selected', true );
        break;
    case "177":
        $('select[name="id_country"] option[value="177"]').prop('selected', true );
        break;
    case "178":
        $('select[name="id_country"] option[value="178"]').prop('selected', true );
        break;
    case "179":
        $('select[name="id_country"] option[value="179"]').prop('selected', true );
        break;
    case "180":
        $('select[name="id_country"] option[value="180"]').prop('selected', true );
        break;
    case "181":
        $('select[name="id_country"] option[value="181"]').prop('selected', true );
        break;
    case "182":
        $('select[name="id_country"] option[value="182"]').prop('selected', true );
        break;
    case "183":
        $('select[name="id_country"] option[value="183"]').prop('selected', true );
        break;
    case "184":
        $('select[name="id_country"] option[value="184"]').prop('selected', true );
        break;
    case "185":
        $('select[name="id_country"] option[value="185"]').prop('selected', true );
        break;
    case "186":
        $('select[name="id_country"] option[value="186"]').prop('selected', true );
        break;
    case "187":
        $('select[name="id_country"] option[value="187"]').prop('selected', true );
        break;
    case "188":
        $('select[name="id_country"] option[value="188"]').prop('selected', true );
        break;
    case "189":
        $('select[name="id_country"] option[value="189"]').prop('selected', true );
        break;
    case "190":
        $('select[name="id_country"] option[value="190"]').prop('selected', true );
        break;
    case "191":
        $('select[name="id_country"] option[value="191"]').prop('selected', true );
        break;
    case "192":
        $('select[name="id_country"] option[value="192"]').prop('selected', true );
        break;
    case "193":
        $('select[name="id_country"] option[value="193"]').prop('selected', true );
        break;
    case "194":
        $('select[name="id_country"] option[value="194"]').prop('selected', true );
        break;
    case "195":
        $('select[name="id_country"] option[value="195"]').prop('selected', true );
        break;
    case "196":
        $('select[name="id_country"] option[value="196"]').prop('selected', true );
        break;
    case "197":
        $('select[name="id_country"] option[value="197"]').prop('selected', true );
        break;
    case "198":
        $('select[name="id_country"] option[value="198"]').prop('selected', true );
        break;
    case "199":
        $('select[name="id_country"] option[value="199"]').prop('selected', true );
        break;
    case "200":
        $('select[name="id_country"] option[value="200"]').prop('selected', true );
        break;
    case "201":
        $('select[name="id_country"] option[value="201"]').prop('selected', true );
        break;
    case "202":
        $('select[name="id_country"] option[value="202"]').prop('selected', true );
        break;
    case "203":
        $('select[name="id_country"] option[value="203"]').prop('selected', true );
        break;
    case "204":
        $('select[name="id_country"] option[value="204"]').prop('selected', true );
        break;
    case "205":
        $('select[name="id_country"] option[value="205"]').prop('selected', true );
        break;
    case "206":
        $('select[name="id_country"] option[value="206"]').prop('selected', true );
        break;
    case "207":
        $('select[name="id_country"] option[value="207"]').prop('selected', true );
        break;
    case "208":
        $('select[name="id_country"] option[value="208"]').prop('selected', true );
        break;
    case "209":
        $('select[name="id_country"] option[value="209"]').prop('selected', true );
        break;
    case "210":
        $('select[name="id_country"] option[value="210"]').prop('selected', true );
        break;
    case "211":
        $('select[name="id_country"] option[value="211"]').prop('selected', true );
        break;
    case "212":
        $('select[name="id_country"] option[value="212"]').prop('selected', true );
        break;
    case "213":
        $('select[name="id_country"] option[value="213"]').prop('selected', true );
        break;
    case "214":
        $('select[name="id_country"] option[value="214"]').prop('selected', true );
        break;
    case "215":
        $('select[name="id_country"] option[value="215"]').prop('selected', true );
        break;
    case "216":
        $('select[name="id_country"] option[value="216"]').prop('selected', true );
        break;
    case "217":
        $('select[name="id_country"] option[value="217"]').prop('selected', true );
        break;
    case "218":
        $('select[name="id_country"] option[value="218"]').prop('selected', true );
        break;
    case "219":
        $('select[name="id_country"] option[value="219"]').prop('selected', true );
        break;
    case "220":
        $('select[name="id_country"] option[value="220"]').prop('selected', true );
        break;
    case "221":
        $('select[name="id_country"] option[value="221"]').prop('selected', true );
        break;
    case "222":
        $('select[name="id_country"] option[value="222"]').prop('selected', true );
        break;
    case "223":
        $('select[name="id_country"] option[value="223"]').prop('selected', true );
        break;
    case "224":
        $('select[name="id_country"] option[value="224"]').prop('selected', true );
        break;
    case "225":
        $('select[name="id_country"] option[value="225"]').prop('selected', true );
        break;
    case "226":
        $('select[name="id_country"] option[value="226"]').prop('selected', true );
        break;
    case "227":
        $('select[name="id_country"] option[value="227"]').prop('selected', true );
        break;
    case "228":
        $('select[name="id_country"] option[value="228"]').prop('selected', true );
        break;
    case "229":
        $('select[name="id_country"] option[value="229"]').prop('selected', true );
        break;
    case "230":
        $('select[name="id_country"] option[value="230"]').prop('selected', true );
        break;
    case "231":
        $('select[name="id_country"] option[value="231"]').prop('selected', true );
        break;
    case "232":
        $('select[name="id_country"] option[value="232"]').prop('selected', true );
        break;
    case "233":
        $('select[name="id_country"] option[value="233"]').prop('selected', true );
        break;
    case "234":
        $('select[name="id_country"] option[value="234"]').prop('selected', true );
        break;
    case "235":
        $('select[name="id_country"] option[value="235"]').prop('selected', true );
        break;
    case "236":
        $('select[name="id_country"] option[value="236"]').prop('selected', true );
        break;
    case "237":
        $('select[name="id_country"] option[value="237"]').prop('selected', true );
        break;
    case "238":
        $('select[name="id_country"] option[value="238"]').prop('selected', true );
        break;
    case "239":
        $('select[name="id_country"] option[value="239"]').prop('selected', true );
        break;
    case "240":
        $('select[name="id_country"] option[value="240"]').prop('selected', true );
        break;
    case "241":
        $('select[name="id_country"] option[value="241"]').prop('selected', true );
        break;
    case "242":
        $('select[name="id_country"] option[value="242"]').prop('selected', true );
        break;
    default:
         $('select[name="id_country"] option[value="0"]').prop('selected', true );
        break;         
    }
}


function changeCountry()
{
    var obj = $('select[name="id_country"]').eq(0);
    var country = $(obj).val();
    switch (parseInt(country))
    {
   case 0:
			$('.oldprice').text('2590 руб.');
			$('.newprice').text('990 руб.');
			$('.itog').text('1290 руб.');						
			break;
		case 1:
			$('.oldprice').text('798 грн');
			$('.newprice').text('399 грн');
			$('.itog').text('449 гривен');			
			break;
		case 2:
			$('.oldprice').text('11000 ТГ');
			$('.newprice').text('5390 ТГ');
			$('.itog').text('5390 тенге');			
			break;
		case 3:
			$('.oldprice').text('580 000 р.');
			$('.newprice').text('290 000 р.');
			$('.itog').text('330 000 руб. ');			
			break;
		case 4:
			$('.oldprice').text('598 лей');
			$('.newprice').text('299 лей');
			$('.itog').text('598 лей');			
			break;
		case 6:
			$('.oldprice').text('189 т.сум');
			$('.newprice').text('99 т.сум');
			$('.itog').text('99 т.сум');			
			break;
case 10:
			$('.oldprice').text('27980дрм');
			$('.newprice').text('13990дрм');
			$('.itog').text('13990дрм');			
			break;
		default:
			break;
    }
}


function lastpack(last)
{
    if (last > 5)
    {
        last--;
        $('.lastpack').html(last);
        setTimeout(lastpack, 60000, last);
    }
}