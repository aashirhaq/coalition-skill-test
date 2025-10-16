if (message) {
    var timerInterval;
    Swal.fire({
        title: title,
        icon: type,
        html: message,
        timer: type == 'error' ? 20000 : 2000,
        customClass: {
            confirmButton: 'btn btn-primary'
        },
        buttonsStyling: false,
        // willOpen: function () {
        //     Swal.showLoading();
        //     timerInterval = setInterval(function () {
        //         Swal.getHtmlContainer().querySelector('strong').textContent = Swal.getTimerLeft();
        //     }, 100);
        // },
        willClose: function () {
            clearInterval(timerInterval);
        }
    }).then(function (result) {
        if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.timer
        ) {
            console.log('I was closed by the timer');
        }
    });
}
