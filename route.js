var wayback = 0;
function submit_route( formObj )
{
    if (formObj.address.value == '' || formObj.address.value == 'Adresse' ||
       formObj.city.value == '' || formObj.city.value == 'Stadt' || formObj.country.value == '')
    {
        alert("Bitte tragen Sie eine reale Adresse ein!");
        return;
    }
    ourAdr = 'Mühlenfeld 27, 30853 Langenhagen, Deutschland';
    yourAdr = formObj.address.value+', '+formObj.city.value+', '+formObj.country.value;
    if (wayback) {
        formObj.saddr.value = yourAdr;
        formObj.daddr.value = ourAdr;
    } else {
        formObj.saddr.value = ourAdr;
        formObj.daddr.value = yourAdr;
    }
    formObj.submit();
}