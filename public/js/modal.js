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
