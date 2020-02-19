<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
                
        <!-- META TAGS -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="Parken, Fliegen, Flughafen, Flug, Hannover, Airport" />
	<meta name="description" content="Parken" />
	<meta name="robots" content="follow,index" />
	<meta name="country" content="Germany" />
	<meta name="state" content="Niedersachsen" />
	<meta name="geo.region" content="DE-NDS" />
        
        <!-- JAVASCRIPT -->
        <script src="sources/js/jquery-1.4.4.min.js"></script>       
        
                <script type="text/javascript" src="sources/js/jquery-ui-1.8.9.custom.min.js"></script>
                <link rel="stylesheet" href="sources/css/jquery-ui-1.8.9.custom.css" media="screen" /> 
        <script type="text/javascript" src="sources/js/route.js"></script>        
           
           <script type="text/javascript" src="sources/js/jquery-ui-timepicker.js"></script>
           <script type="text/javascript" src="sources/js/jquery-ui-timepicker-custom.js"></script>        
            <script type="text/javascript" src="sources/js/jquery.validate.js"></script>
            <link rel="stylesheet" href="sources/css/validate.css" media="screen" />        
            <script type="text/javascript" src="sources/js/validate-booking.js"></script>            
            
        <!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="sources/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="sources/css/print.css" media="print" />

        <!-- SEITENTITEL -->
        <title>Park-And-Fly-Hannover.de - Parken auf Parkplatz Flughafen Hannover</title>        
        <script>
          // validate the comment form when it is submitted
	        $("#booking").validate();
        </script>

    </head>

    <body>
        <div id="top">
            <div id="topInner"><!--<div class="floatleft"><img src="sources/img/list-head.png" alt="" /></div> <div class="floatleft" style="margin: 3px 0 0 5px; font-size: 15px;">Jetzt hier <b>registrieren</b> und sparen!</div> <div class="floatright" style="margin-top: -3px;"><input type="text" name="user" value="Benutzername" class="" onblur="if(this.value==\"\") this.value=\"Benutzername\";" onfocus="if(this.value==\"Benutzername\") this.value=\"\";" /> <input type="password" name="pass" value="Passwort" class="" onblur=\"if(this.value=="") this.value="Passwort";\" onfocus=\"if(this.value=="Passwort") this.value="";\" /> <input type="submit" name="login" value="LogIn" /></div>--><br class="clear" /></div>
        </div>

        <div id="menu">
            <div id="menuInner"><a href="index.php">Startseite</a> <a href="info.php">Unser Service</a> <a href="prices.php">Preise</a> <a href="contact.php">Kontakt</a><br class="clear" /></div>
        </div>

        <div id="mainBackground">
        
            <div id="head">
                <div id="logo">
        <a href="index.php"><img src="sources/img/logo.png" alt="Park-and-Fly.de" /></a>
    </div>

    <ul>
        <li>Günstig parken am Flughafen Hannover</li>
        <li>Kostenloser Tag & Nacht Shuttle-Bus-Service</li>
        <li>Beleuchteter Parkplatz</li>
    </ul>

    <br class="clear" />            </div>

            <div id="main">
                <form action="booking-send.php" method="post" id="booking" name="booking">
                <div id="booking">
                    <div id="bookingleft" class="floatleft borderright">

                        <h1>Buchungsformular! Step 1 von 3</h1>
                        <br /><br />
                        <u>Ihre persönlichen Daten</u>
                        <table class="booking">
                            <tr><td width="150"><b>Anrede</b></td><td><select name="title" id="title"><option value=""></option><option value="Herr">Herr</option><option value="Frau">Frau</option></select></td></tr>
                            <tr><td><b>Vorname <em>*</em></b></td><td><input type="text" name="firstname" class="required" required="required" /></td></tr>
                            <tr><td><b>Nachname <em>*</em></b></td><td><input type="text" name="lastname" class="required" required="required" /></td></tr>
                        </table>
                        <br /><br />
                        <!--
                        <u>Firmendaten (für Geschäftskunden)</u>                        
                        <table class="booking">
                            <tr><td width="150"><b>Firma</b></td><td><input type="text" name="company" /></td></tr>
                            <tr><td><b>UstID</b><br /><span>(Nur für Deutschland und EU!)</span></td><td><input type="text" name="ustid" /></td></tr>
                            <tr><td><b>Steuernummer</b></td><td><input type="text" name="taxno" /></td></tr>
                        </table>
                       
                        <br /><br />
                        -->
                        <u>Ihre Adresse</u>
                        <table class="booking">
                            <tr><td width="150"><b>Straße <em>*</em></b></td><td><input type="text" name="street" required="required" /></td></tr>
                            <!--<tr><td><b>Stadtteil</b></td><td><input type="text" name="zone" /></td></tr>-->
                            <tr><td><b>Postleitzahl <em>*</em></b></td><td><input type="text" name="zipcode" required="required" /></td></tr>
                            <tr><td><b>Stadt <em>*</em></b></td><td><input type="text" name="city" required="required" /></td></tr>
                            <tr><td><b>Land <em>*</em></b></td><td><select name="countries"><option value="AF">Afghanistan</option><option value="EG">Ägypten</option><option value="AX">Åland</option><option value="AL">Albanien</option><option value="DZ">Algerien</option><option value="UM">Amerikanisch-Ozeanien</option><option value="AS">Amerikanisch-Samoa</option><option value="VI">Amerikanische Jungferninseln</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarktis</option><option value="AG">Antigua und Barbuda</option><option value="GQ">Äquatorialguinea</option><option value="AR">Argentinien</option><option value="AM">Armenien</option><option value="AW">Aruba</option><option value="AZ">Aserbaidschan</option><option value="ET">Äthiopien</option><option value="AU">Australien</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesch</option><option value="BB">Barbados</option><option value="BY">Belarus (Weißrussland)</option><option value="BE">Belgien</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivien</option><option value="BA">Bosnien und Herzegowina</option><option value="BW">Botswana</option><option value="BV">Bouvetinsel</option><option value="BR">Brasilien</option><option value="VG">Britische Jungferninseln</option><option value="IO">Britisches Territorium im Indischen Ozean</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgarien</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CL">Chile</option><option value="CN">China, Volksrepublik</option><option value="CK">Cookinseln</option><option value="CR">Costa Rica</option><option value="DK">Dänemark</option><option value="DE" selected="selected">Deutschland</option><option value="DM">Dominica</option><option value="DO">Dominikanische Republik</option><option value="DJ">Dschibuti</option><option value="EC">Ecuador</option><option value="SV">El Salvador</option><option value="CI">Elfenbeinküste</option><option value="ER">Eritrea</option><option value="EE">Estland (Reval)</option><option value="FK">Falklandinseln (Malwinen)</option><option value="FO">Färöer</option><option value="FJ">Fidschi</option><option value="FI">Finnland</option><option value="FR">Frankreich</option><option value="GF">Französisch-Guayana</option><option value="PF">Französisch-Polynesien</option><option value="TF">Französische Süd- und Antarktisgebiete</option><option value="GA">Gabun</option><option value="GM">Gambia</option><option value="GE">Georgien</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Grenada</option><option value="GR">Griechenland</option><option value="GL">Grönland</option><option value="GB">Großbritannien und Nordirland</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey (Kanalinsel)</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard- und McDonald-Inseln</option><option value="HN">Honduras</option><option value="HK">Hongkong</option><option value="IN">Indien</option><option value="ID">Indonesien</option><option value="IM">Insel Man</option><option value="IQ">Irak</option><option value="IR">Iran</option><option value="IE">Irland</option><option value="IS">Island</option><option value="IL">Israel</option><option value="IT">Italien</option><option value="JM">Jamaika</option><option value="JP">Japan</option><option value="YE">Jemen</option><option value="JE">Jersey (Kanalinsel)</option><option value="JO">Jordanien</option><option value="KY">Kaimaninseln</option><option value="KH">Kambodscha</option><option value="CM">Kamerun</option><option value="CA">Kanada</option><option value="CV">Kap Verde</option><option value="KZ">Kasachstan</option><option value="QA">Katar</option><option value="KE">Kenia</option><option value="KG">Kirgisistan</option><option value="KI">Kiribati</option><option value="CC">Kokosinseln (Keelinginseln)</option><option value="CO">Kolumbien</option><option value="KM">Komoren</option><option value="CD">Kongo</option><option value="HR">Kroatien</option><option value="CU">Kuba</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettland</option><option value="LB">Libanon</option><option value="LR">Liberia</option><option value="LY">Libyen</option><option value="LI">Liechtenstein</option><option value="LT">Litauen</option><option value="LU">Luxemburg</option><option value="MO">Macao</option><option value="MG">Madagaskar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Malediven</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marokko</option><option value="MH">Marshallinseln</option><option value="MQ">Martinique</option><option value="MR">Mauretanien</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MK">Mazedonien</option><option value="MX">Mexiko</option><option value="FM">Mikronesien</option><option value="MD">Moldawien</option><option value="MC">Monaco</option><option value="MN">Mongolei</option><option value="MS">Montserrat</option><option value="MZ">Mosambik</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NC">Neukaledonien</option><option value="NZ">Neuseeland</option><option value="NI">Nicaragua</option><option value="NL">Niederlande</option><option value="AN">Niederländische Antillen</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="KP">Nordkorea</option><option value="MP">Nördliche Marianen</option><option value="NF">Norfolkinsel</option><option value="NO">Norwegen</option><option value="OM">Oman</option><option value="AT">Österreich</option><option value="PK">Pakistan</option><option value="PS">Palästinensische Autonomiegebiete</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua-Neuguinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippinen</option><option value="PN">Pitcairninseln</option><option value="PL">Polen</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="CG">Republik Kongo</option><option value="RE">Réunion</option><option value="RW">Ruanda</option><option value="RO">Rumänien</option><option value="RU">Russische Föderation</option><option value="SB">Salomonen</option><option value="ZM">Sambia</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">São Tomé und Príncipe</option><option value="SA">Saudi-Arabien</option><option value="SE">Schweden</option><option value="CH">Schweiz</option><option value="SN">Senegal</option><option value="CS">Serbien und Montenegro</option><option value="SC">Seychellen</option><option value="SL">Sierra Leone</option><option value="ZW">Simbabwe</option><option value="SG">Singapur</option><option value="SK">Slowakei</option><option value="SI">Slowenien</option><option value="SO">Somalia</option><option value="ES">Spanien</option><option value="LK">Sri Lanka</option><option value="SH">St. Helena</option><option value="KN">St. Kitts und Nevis</option><option value="LC">St. Lucia</option><option value="PM">St. Pierre und Miquelon</option><option value="VC">St. Vincent und die Grenadinen</option><option value="ZA">Südafrika</option><option value="SD">Sudan</option><option value="GS">Südgeorgien und die Südl. Sandwichinseln</option><option value="KR">Südkorea</option><option value="SR">Suriname</option><option value="SJ">Svalbard und Jan Mayen</option><option value="SZ">Swasiland</option><option value="SY">Syrien</option><option value="TJ">Tadschikistan</option><option value="TW">Taiwan</option><option value="TZ">Tansania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad und Tobago</option><option value="TD">Tschad</option><option value="CZ">Tschechische Republik</option><option value="TN">Tunesien</option><option value="TR">Türkei</option><option value="TM">Turkmenistan</option><option value="TC">Turks- und Caicosinseln</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="HU">Ungarn</option><option value="UY">Uruguay</option><option value="UZ">Usbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatikanstadt</option><option value="VE">Venezuela</option><option value="AE">Vereinigte Arabische Emirate</option><option value="US">Vereinigte Staaten von Amerika</option><option value="VN">Vietnam</option><option value="WF">Wallis und Futuna</option><option value="CX">Weihnachtsinsel</option><option value="EH">Westsahara</option><option value="CF">Zentralafrikanische Republik</option><option value="CY">Zypern</option></select></td></tr>
                        </table>
                        <br /><br />

                        <u>Ihre Kontaktdaten</u>
                        <table class="booking">
                            <tr><td width="150"><b>Telefon</b></td><td><input type="text" name="phone" /></td></tr>
                            <tr><td><b>Mobil <em>*</em></b></td><td><input type="text" name="mobil" id="mobil" class="required" required="required" /></td></tr>
                            <tr><td><b>E-Mail <em>*</em></b></td><td><input type="text" name="email" value="" required="required" /></td></tr>
                        </table>

                        <br />
                     </div>

                     <div class="floatright">
                        <!--
                        <div class="colorbox lightblue">
                            <h3>Registrieren <i class="small">Falls gewünscht</i></h3>
                            <br /><hr /><br />
                            <table class="bookingReg" cellpadding="5" cellspacing="5">
                                <tr><td><b>E-Mail</b></td><td><input type="text" name="regEmail" value="" /></td></tr>
                                <tr><td><b>Passwort</b></td><td><input type="password" name="regPass" /></td></tr>
                                <tr><td valign="top"><b>Agentur</b></td><td><input type="checkbox" name="regAgency" value="agency" id="regAgency" /><br /><label for="regAgency"><small>Um Sie als Agentur freizuschalten, ist ein Nachweis erforderlich.</small></label></td></tr>
                            </table>
                        </div>

                        <br />
                        -->
                        <div>
                            <b>Zeitraum:</b>
                            <br /><br />
                            <div id="auswahl">Vom: <input type="text" id="from" name="from" value="" required="required" readonly="readonly" /> bis: <input type="text" id="to" name="to" value="" required="required"  readonly="readonly" /></div>
                            <br />
                            <div class="colorboxSmall lightgray">
                            <b>Ihre Ankunft bei uns am Parkplatz.</b><br /><small>Bitte beachten Sie, dass Sie frühzeitig bei uns sind, damit wir Sie pünktlich zum Flughafen bringen können:</small>
                            <table>
                                <tr>
                                  <td width="80">Uhrzeit <em>*</em></td>
                                  </tr>
                                  <tr>
                                  <td>
                                                                      Stunde: <select name="arrivalparkinghour" style="width: 80px;" required="required"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select> Minute: <select name="arrivalparkingminute" style="width: 80px;" required="required"><option value="00">00</option><option value="05">05</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option><option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option></select>
                                    <!--<input type="text" name="arrivalparking" id="arrivalparking" style="width: 195px;" readonly="readonly" required="required" />-->
                                    </td>
                                </tr>
                            </table>
                            </div>
                            <br />
                            <div class="colorboxSmall lightgray">
                            <b>Abflug Hannover:</b>
                            <table>                                
                                <tr><td>Datum<em>*</em></td><td><input type="text" name="abflug" id="abflug" style="width: 195px;" required="required" /></td></tr>
                                <tr><td>Uhrzeit<em>*</em></td><td><table>
                                
                                  <tr>
                                  <td>
                                                                      Stunde: <select name="abflughour" style="width: 50px;" required="required"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select> Minute: <select name="abflugminute" style="width: 50px;" required="required"><option value="00">00</option><option value="05">05</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option><option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option><option value="00">00</option><option value="05">05</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option><option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option></select>
                                    <!--<input type="text" name="arrivalparking" id="arrivalparking" style="width: 195px;" readonly="readonly" required="required" />-->
                                    </td>
                                </tr>
                            </table></td></tr>
                                <tr><td width="80">FlugNr</td><td><input type="text" name="FlightNoDeparture" id="FlightNoDeparture" style="width: 195px;" /></td></tr>
                            </table>
                            </div>
                            <br />
                            <div class="colorboxSmall lightgray">
                            <b>Ankunft Hannover:</b>
                            <table>
                                <tr><td>Datum<em>*</em></td><td><input type="text" name="ankunft" id="ankunft" style="width: 195px;" required="required" /></td></tr>
                                 <tr><td>Uhrzeit<em>*</em></td><td><table>
                                
                                  <tr>
                                  <td>
                                                                      Stunde: <select name="ankunfthour" style="width: 50px;" required="required"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select> Minute: <select name="ankunftminute" style="width: 50px;" required="required"><option value="00">00</option><option value="05">05</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option><option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option><option value="00">00</option><option value="05">05</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option><option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option><option value="00">00</option><option value="05">05</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option><option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option></select>
                                    <!--<input type="text" name="arrivalparking" id="arrivalparking" style="width: 195px;" readonly="readonly" required="required" />-->
                                    </td>
                                </tr>
                            </table></td></tr>
                                <tr><td width="80">FlugNr</td><td><input type="text" name="FlightNoArrival" id="FlightNoArrival" style="width: 195px;" /></td></tr>
                            </table>
                            </div>
                            <br />
                            
                            <div class="colorboxSmall lightgray">
                            <b>Allgemeine Angaben:</b>

                            <table cellpadding="5" cellspacing="5">
                                <tr><td width="90">KFZ-Zeichen <em>*</em></td><td>Autos <em>*</em></td><td>Personen <em>*</em></td><td>Sperrgepäck</td></tr>
                                <tr><td><input type="text" id="kfz" name="kfz" value="" style="width: 75px" /></td><td><select name="cars" id="cars" style="width: 40px;"><option></option><option value="1" selected="selected">1</option><option value="2">2</option></select></td><td><select name="personCount" id="personCount" style="width: 40px;"><option></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select></td><td><select name="luggage" style="width: 80px;"><option value="0" selected="selected">Nein</option><option value="1">Ja</option></select></td></tr>
                            </table>
                            <small>Größere Fahrzeuge auf Anfrage</small>
                            </div>
                            
                            <div class="colorboxSmall lightgray required">
                            Ich bin mit den <a href="agb.php" target="_blank" style="text-decoration: underline;">AGB</a> von Park-And-Fly-Hannover einverstanden <em>*</em>
                            <table>
                                <tr><td><input type="checkbox" name="agb" id="agb" class="required" required="required" /></td></tr>
                            </table>
                            </div>
                        </div>

                        <br />
                        <input type="hidden" name="zone" />
                        <input type="submit" class="submitColorbox lightgreen block noDeco dark aligncenter big" name="sendBooking" value="Nächster Schritt &raquo;" />

                    </div>

                    <br class="clear" />

                </div>
               </form>
            </div>
        </div>
        
        
        <div id='footerBackground'>
            <div id='footer'>
                <div clasS='floatleft'>
                        <iframe width="418" height="326" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.de/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=M%C3%BChlenfeld+27,+DE-30853+Langenhagen+&amp;sll=51.151786,10.415039&amp;sspn=21.808492,67.631836&amp;ie=UTF8&amp;hq=&amp;hnear=M%C3%BChlenfeld+27,+Langenhagen+30853+Langenhagen,+Region+Hannover,+Niedersachsen&amp;ll=52.454519,9.733114&amp;spn=0.003217,0.013604&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.de/maps?f=q&amp;source=embed&amp;hl=de&amp;geocode=&amp;q=M%C3%BChlenfeld+27,+DE-30853+Langenhagen+&amp;sll=51.151786,10.415039&amp;sspn=21.808492,67.631836&amp;ie=UTF8&amp;hq=&amp;hnear=M%C3%BChlenfeld+27,+Langenhagen+30853+Langenhagen,+Region+Hannover,+Niedersachsen&amp;ll=52.454519,9.733114&amp;spn=0.003217,0.013604&amp;z=15&amp;iwloc=A">Größere Kartenansicht</a></small>
                        <div style='margin-top: 10px'>
                            <p>
                                <b>Routenplaner</b>
                            </p>
                            <div class='routePlanner'>
                                <form action="http://maps.google.com/maps" method="get" target="_blank" onsubmit="submit_route(this);return false;">
                                    <input type="text" size="25" name="address" id="address" value="Adresse" onblur="if(this.value=='') this.value='Adresse';" onfocus="if(this.value=='Adresse') this.value='';" />
                                    <input type="text" size="25" name="city" id="city" value="Stadt" onblur="if(this.value=='') this.value='Stadt';" onfocus="if(this.value=='Stadt') this.value='';" />
                                    <input type="text" size="25" name="country" id="country" value="Land" onblur="if(this.value=='') this.value='Land';" onfocus="if(this.value=='Land') this.value='';" />
                                        <input class="button_menu5" value="Route Anzeigen" type="submit" style="margin-top: 2px;" onclick="wayback=0;" />
                                    <input type="hidden" name="saddr" value="" />
                                    <input type="hidden" name="daddr" value="" />
                               </form>
                               </div>
                            </div>
                    </div>
                </div>

                 <!-- <div class='floatleft' style='margin: 0px 0 0 65px; background: #004272; border: 1px solid black; padding: 50px;'>
                  <p class='white parkplaces'>
                        Noch
                        <b class='superBig'></b>
                        Parkplätze frei.
                    </p>
                    
                </div>-->

                <div class='floatleft' style='margin-left: 50px; background: #fff; border: 1px solid #999;'><iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FPark-Fly-Hannover%2F157351004315884&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:427px;" allowTransparency="true"></iframe></div>


                <br class='clear' />
            </div>
        </div>
        <div id='copyright'>&copy; 2020 ParkAndFlyHannover.de | <a href='impressum.php'>Impressum</a> | <a href='agb.php'>AGB</a></div>
        
        
    </body>
</html>
