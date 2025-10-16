$( document ).on('click','.managedBy', function( e ){
    e.preventDefault();
    $("#Modalheading").empty();

    $('#usersDataTable').empty()
    var records = JSON.parse($(this).attr('data-records'));
    var html = null;
    var i =1;
    if(records.length){
        records.forEach(record => {
            const {name , email } = record;

            html += `<tr>
                        <td>${i}</td>
                        <td>${name}</td>
                        <td>${email}</td>
                    </tr>`
            i++;
    });
    }else{
        html += `<tr>
                    <td colspan="3"><center>No Users Found!</center></td>
                </tr>`
    }
    $('#editManagedBy').attr("href" , $(this).attr('data-link'))
    $('#Modalheading').append($(this).attr('data-heading'))
    $('#usersDataTable').append(html);
    $('#userModal').modal('show')
});
