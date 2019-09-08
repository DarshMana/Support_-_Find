$(document).ready(function(){
    $('#type').on('change',function(){
        var type= $(this).val();
        if(type==0){
            $('#offerSec').slideDown('slow');
        }else{
            $('#offerSec').slideUp('slow');
        }
    });

    $('#proficient_type').on('change',function(){
        var type= $(this).val();

        if(type==0){
            $('#category .pro').removeClass('hide');
            $('#category .non').addClass('hide');
        }else if(type==1){
            $('#category .non').removeClass('hide');
            $('#category .pro').addClass('hide');
        }
    });
});