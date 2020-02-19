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
                <link rel="stylesheet" href="sources/css/jquery-ui-1.8.9.custom.css" media="screen" />        <script type="text/javascript" src="sources/js/route.js"></script>
        <!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="sources/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="sources/css/print.css" media="print" />

        <!-- SEITENTITEL -->
        <title>Park-And-Fly-Hannover.de - Parken auf Parkplatz Flughafen Hannover</title>
    </head>

    <body>
        <div id="top">
            <div id="topInner"><!--<div class="floatleft"><img src="sources/img/list-head.png" alt="" /></div> <div class="floatleft" style="margin: 3px 0 0 5px; font-size: 15px;">Jetzt hier <b>registrieren</b> und sparen!</div> <div class="floatright" style="margin-top: -3px;"><input type="text" name="user" value="Benutzername" class="" onblur="if(this.value==\"\") this.value=\"Benutzername\";" onfocus="if(this.value==\"Benutzername\") this.value=\"\";" /> <input type="password" name="pass" value="Passwort" class="" onblur=\"if(this.value=="") this.value="Passwort";\" onfocus=\"if(this.value=="Passwort") this.value="";\" /> <input type="submit" name="login" value="LogIn" /></div>--><br class="clear" /></div>
        </div>

        <div id="menu">
            <div id="menuInner"><a href="index.php">Startseite</a> <a href="info.php">Unser Service</a> <a href="prices.php">Preise</a> <a href="booking.php">Buchen</a> <a href="contact.php">Kontakt</a><br class="clear" /></div>
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
                                <form action="booking-end.php" method="post" id="booking" name="booking">
                <div id="booking" class="bookingcheck">
                    <div id="bookingleft" class="floatleft borderright">

                        <h1>Buchungsformular überprüfen! Step 2 von 3</h1>
                        <br />
                        <a href="javascript:history.back()"><img src="sources/img/arrow_left_48.png" alt="Zurück" /></a>
                        <br /><br />
                        <u>Ihre persönlichen Daten</u>
                        <table class="booking">
                            <tr><td width="150"><b>Anrede</b></td><td><input type="text" name="title" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Vorname <em>*</em></b></td><td><input type="text" name="firstname" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Nachname <em>*</em></b></td><td><input type="text" name="lastname" value="" readonly="readonly" /></td></tr>
                        </table>
                        <br /><br />

                        <u>Firmendaten (für Geschäftskunden)</u>
                        <table class="booking">
                            <tr><td width="150"><b>Firma</b></td><td><input type="text" name="company" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>UstID</b><br /><span>(Nur für Deutschland und EU!)</span></td><td><input type="text" name="ustid" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Steuernummer</b></td><td><input type="text" name="taxno" value="" readonly="readonly" /></td></tr>
                        </table>

                        <br /><br />

                        <u>Ihre Adresse</u>
                        <table class="booking">
                            <tr><td width="150"><b>Straße <em>*</em></b></td><td><input type="text" name="street" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Stadtteil</b></td><td><input type="text" name="zone" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Postleitzahl <em>*</em></b></td><td><input type="text" name="zipcode" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Stadt <em>*</em></b></td><td><input type="text" name="city" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Land <em>*</em></b></td><td><input type="text" name="countries" value="" readonly="readonly" /></td></tr>
                        </table>
                        <br /><br />

                        <u>Ihre Kontaktdaten</u>
                        <table class="booking">
                            <tr><td width="150"><b>Telefon <em>*</em></b></td><td><input type="text" name="phone" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Mobil</b></td><td><input type="text" name="mobil" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>Telefax</b></td><td><input type="text" name="fax" value="" readonly="readonly" /></td></tr>
                            <tr><td><b>E-Mail <em>*</em></b></td><td><input type="text" name="email" value="" readonly="readonly" /></td></tr>
                        </table>
                     </div>

                     <div class="floatright">
                          <!--
                         <div class="colorbox lightblue">
                             <h3>Vorteile der Registrierung</h3>
                             <br /><hr /><br />
                             <p>
                                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.
                                 <br /><br /><hr />
                                 <a href="javascript:history.back()"><img src="sources/img/arrow_left_24.png" alt="" style="position: relative; top: 8px;" /> Zurück</a>
                             </p>
                         </div> -->
                                                 <br />

                        <div>
                            <div id="auswahl">
                                
                                <b>Ihre Auswahl: <input type="text" name="duration" value="1" style="width: 25px;" /> Tag</b>
                                <br />
                                Vom: <input type="text" id="from" name="from" value="" readonly="readonly" /> bis: <input type="text" id="to" name="to" value="" readonly="readonly" />
                            </div>
                            <br />
                            <div class="colorboxSmall lightgray flightable">
                            <b>Abflug Hannover:</b>
                            <table>
                                <tr><td width="80">FlugNr <em>*</em></td><td><input type="text" name="FlightNoDeparture" id="FlightNoDeparture" value="" readonly="readonly" /></td></tr>
                                <tr><td>Abflug<em>*</em></td><td><input type="text" name="abflug" id="abflug" value=" :" readonly="readonly" /></td></tr>
                            </table>
                            </div>
                            <br />
                            <div class="colorboxSmall lightgray">
                            <b>Ankunft Hannover:</b>
                            <table>
                                <tr><td width="80">FlugNr <em>*</em></td><td><input type="text" name="FlightNoArrival" id="FlightNoArrival" value="" readonly="readonly" /></td></tr>
                                <tr><td>Ankunft <em>*</em></td><td><input type="text" name="ankunft" id="ankunft" value=" :" readonly="readonly" /></td></tr>
                            </table>
                            </div>
                            <br />
                            <div class="colorboxSmall lightgray">
                            <b>Ihre Ankunft bei uns:</b>
                            <table>
                                <tr><td width="80">Uhrzeit <em>*</em></td><td><input type="text" name="arrivalparking" id="arrivalparking" value=":" readonly="readonly" style="width: 35px;" />Uhr</td></tr>
                            </table>
                            </div>
                            <br />
                            <div class="colorboxSmall lightgray">
                            <b>Allgemeine Angaben:</b>
                            <table cellpadding="5" cellspacing="5">
                                <tr><td width="50">KFZ</td><td>Autos <em>*</em></td><td>Personen <em>*</em></td><td>Sperrgepäck</td></tr>
                                <tr><td><input type="text" id="kfz" name="kfz" value="" readonly="readonly" style="width: 70px;" /></td><td><input type="text" id="cars" name="cars" value="" style="width: 70px;" readonly="readonly" /></td><td><input type="text" id="personCount" name="personCount" value="" style="width: 70px;" readonly="readonly" /></td><td><input type="hidden" id="luggage" name="luggage" value="" style="width: 50px;" readonly="readonly" /></td></tr>
                            </table>
                            </div>
                        </div>

                        <br />

                                                            Wie möchten Sie die 0 &euro; bezahlen?
                                </p>
                                <br />
                               <div style="height: 139px;"><table><tr><td width="200"><label for="Barzahlung1">Barzahlung</label></td><td width="100"><img src="sources/img/04_48x48.png" alt="" /></td><td><input type="radio"  name="payment" value="Barzahlung" id="Barzahlung1" checked="checked" /></td></tr></table></div>
                        <br />
                        <input type="hidden" id="price" name="price" value="0" readonly="readonly" />
                        <input type="submit" class="submitColorbox lightgreen block noDeco dark aligncenter big" name="sendBooking" value="Jetzt BUCHEN &raquo;" />

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
