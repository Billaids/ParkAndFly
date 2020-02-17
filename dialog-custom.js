// ANIMATION SPEED
$.fx.speeds._default = 450;

$(function() {

        $( "#opener" ).click(function() {
            $( "#dialog-modal" ).dialog( "open" );
                return false;
         });

        $( "#dialog:ui-dialog" ).dialog( "destroy" );

        $( "#dialog-modal" ).dialog({
                height: 300,
                width: 240,
                modal: true,
                autoOpen: false,
                resizable: false,

                // ANIMATION
                show: "clip",
                hide: "clip"
        });
});