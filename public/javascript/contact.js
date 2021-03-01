$('input[type=file]').change(function(){
    if($('input[type=file]').val()==''){
        $('input').attr('disabled',true)
    }
    else{
        $('input').attr('disabled',false);
    }
})