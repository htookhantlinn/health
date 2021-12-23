function confirmItemDeleteModal(id) {
    $('#deleteModal').modal();
    $('#modal-btn-yes').html('<a class="btn btn-danger" onclick="deleteItem(' + id + ')">Delete</a>');
}
function confirmBlogDeleteModal(id) {
    $('#deleteModal').modal();
    $('#modal-btn-yes').html('<a class="btn btn-danger" onclick="deleteBlog(' + id + ')">Delete</a>');
}



function deleteBlog(id) {
    // do your stuffs with id
    var token = $("meta[name='csrf-token']").attr("content");
    console.log(id);

    $.ajax({
        type: "DELETE",
        url: "/admin/blogs/" + id,
        data: {
            'id': id,
            '_token': token,
        },
        success: function (response) {
            console.log(response);
            // toastr.info(response['success'])

            window.location = '/admin/blogs';



        }
    });

    $('#deleteModal').modal('hide'); // now close modal
}


function deleteItem(id) {
    // do your stuffs with id
    var token = $("meta[name='csrf-token']").attr("content");
    console.log(id);

    $.ajax({
        type: "DELETE",
        url: "/admin/items/" + id,
        data: {
            'id': id,
            '_token': token,
        },
        success: function (response) {
            toastr.info(response['success'])
            $('table#example2 tbody').html(' ');
            console.log($('.item-index-container'));
            $count = 1;


            response['items'].forEach(item => {
                $date = new Date(item['created_at']);
                $months = ['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                $tr = $('<tr/>');
                $($tr).append($('<td/>').text($count++));
                $($tr).append($('<td/>').text(item['name']));
                $($tr).append($('<td/>').text($date.getDate() + '-' + $months[$date.getMonth()] + $date.getFullYear()));

                $td = $('<td/>');

                // preview 
                $a = $('<a/>').attr('href', '#').addClass('btn btn-outline-warning m-1');
                $($a).html('<i class="fa fa-eye"></i>');
                $($td).append($a);
                // edit
                $a = $('<a/>').attr('href', '/admin/items/' + item["id"] + '/edit').addClass('btn btn-outline-info m-1');
                $($a).html('<i class="fas fa-edit  "></i>');
                $($td).append($a);
                // delete
                $a = $('<a/>').attr('href', '#').attr('onclick', 'confirmItemDeleteModal(' + item['id'] + ')').addClass('btn btn-outline-danger m-1');
                $($a).html('<i class="fa fa-trash"></i>');
                $($td).append($a);

                $($tr).append($td);

                $('table#example2 tbody').append($tr);
            });

        }
    });

    $('#deleteModal').modal('hide'); // now close modal
}

// $('#createRecord').on('click', function () {
//     $('#itemFormModal').modal('show');
// });

// $('#sample_form').on('submit ', function (event) {
//     event.preventDefault();
//     var action_url = '';
//     if ($('#action').val() == 'Add') {
//         action_url = "/admin/items/"
//         $.ajax({
//             url: action_url,
//             method: "POST",
//             data: $(this).serialize(),
//             dataType: "json",
//             success: function (data) {
//                 var html = '';
//                 if (data.errors) {
//                     html = " <div class=' alert alert-danger'> ";
//                     for (var count = 0; count < data.errors.length; count++) {
//                         html += '<p>' + data.errors[count] + '</p>';
//                     }
//                     html += "</div>";
//                 }
//                 if (data.success) {
//                     html = " <div class=' alert alert-success'> " + data.success + "</div>";
//                     $('#sample_form')[0].reset();
//                     $('#item-data-table').DataTable().ajax.reload();
//                 }
//                 $('#form_result').html(html);
//             }
//         });
//     }
// });

// var item_id;

// $(document).on('click', '.delete', function () {
//     item_id = $(this).attr('id');
//     $('#confirmModal').modal('show');
// });

// $('#ok_button').click(function () {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         url: "/admin/items/" + item_id,
//         method: "delete",
//         beforeSend: function () {
//             $('#ok_button').text('Deleting...');
//         },
//         success: function (data) {
//             setTimeout(function () {
//                 $('#confirmModal').modal('hide');
//                 table = $('#item-data-table').DataTable();
//                 alert('Data Deleted');
//                 $('#ok_button').text('OK');

//             }, 2000);

//         }
//     })
// });