$(function() {

    var dates = $( "#from, #to" ).datepicker({
        minDate: '01.08.2014',
        //minDate: new Date(),
        changeMonth: false,
        numberOfMonths: 1,
        dateFormat: 'dd.mm.yy',
        nextText: "Vor",
        prevText: "Zurück",
        dayNamesMin: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
        dayNamesShort: ["Son", "Mon", "Die", "Mit", "Don", "Fre", "Sam"],
        monthNames: ["Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember"],
        monthNamesShort: ["Jan","Feb","Mär","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Dez"],
        onSelect: function( selectedDate ) {
                var option = this.id === "from" ? "minDate" : "maxDate",
                        instance = $( this ).data( "datepicker" );
                        date = $.datepicker.parseDate(
                                instance.settings.dateFormat ||
                                $.datepicker._defaults.dateFormat,
                                selectedDate, instance.settings );
                dates.not( this ).datepicker( "option", option, date );
        }
    });

});