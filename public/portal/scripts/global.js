$(function() {
    $(document).ready(function() {
        $('.toast').toast('show');
        setTimeout(function() {
            $('.toast').toast('hide')
        }, 5000)
    });

    $('form').on('submit', function(e) {
        $(this).find("button#save-btn").attr('disabled', 'disabled');
    })
})

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
