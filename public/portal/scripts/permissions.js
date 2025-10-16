$(document).on('click', '#customCheck-all', function(){
    if($(this).prop('checked')){
        $('.customCheck').prop('checked', true)
    }else{
        $('.customCheck').prop('checked', false)
    }
})

$(document).on('click','.customCheck', function(){
    let className = $(this).val()
    if($(this).prop('checked')){
        $('.'+className).prop('checked', true)
    }else{
        $('.'+className).prop('checked', false)
    }
})

$('form').on('submit', function(e){

    let isChecked = $('.customCheck:checked').length > 0
    if(permissionsRequired && !isChecked){
        let html = `<span class="invalid-feedback d-block" role="alert">
                <strong>Please select at-least one permission.</strong>
        </span>`
        e.preventDefault();
        $('#form-error').html(html)
        $(this).find("button#save-btn").removeAttr('disabled');
    }
})
