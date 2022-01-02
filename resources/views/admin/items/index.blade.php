@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="container  p-5">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 ">
            </div>
            <div class="col-md-2">
                <button class="btn btn-outline-success  mb-3 " id="createRecord">Create Record</button>
            </div>
        </div>
        <table class="table table-bordered item-data-table">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="itemFormModal" tabindex="-1">
            <div class="modal-dialog  modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <span id="form_result"></span>
                            <form method="post" id="sample_form" class="form-horizontal" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-4"> Name : </label>
                                    <div>
                                        <input type="text" name="name" id="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Description: </label>
                                    <div>
                                        <input class="form-control" type="text" name="description" id="description">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Category </label>
                                    <div>
                                        <select name="category" id="category" class="form-control">
                                            @foreach ($categories as $x)
                                            <option value="{{$x->id}}">{{$x->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group" align="center">
                                    <input type="hidden" name="action" id="action" value="Add" />
                                    <input type="hidden" name="hidden_id" id="hidden_id" />
                                    <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Add" />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center align-items-center">
                        <i class="fa fa-times-circle-o fa-4x" style="color: red;"></i>

                    </div>
                    <div class="modal-body">
                        <h1 class="text-center">Are You Sure?</h1>
                        <p class="text-center ">Do you really want to delete this records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" name="ok_button" id="ok_button" class="btn btn-outline-danger">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- show info modal --}}
        <div class="modal fade" id="showInfoModal" tabindex="-1">
            <div class="modal-dialog  modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <span id="form_result"></span>
                            <form method="post" id="sample_form" class="form-horizontal" autocomplete="off">
                                <div class="form-group">
                                    <label class="control-label col-md-4"> Item Name : </label>
                                    <div>
                                        <input type="text" name="info_itemName" id="info_itemName" class="form-control" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Description: </label>
                                    <div>
                                        <input class="form-control" type="text" name="info_description" id="info_description" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Category </label>
                                    <div>
                                        <input class="form-control" type="text" name="info_category" id="info_category" disabled>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <label class="control-label col-md-4">Quantity </label>
                                    <div>
                                        <input class="form-control" type="text" name="info_quantity" id="info_quantity" disabled>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- edit modal --}}
        <div class="modal fade" id="editModal" tabindex="-1" data-backdrop="static">
            <div class="modal-dialog  modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <span id="edit_form_result"></span>
                            <form method="post" id="edit_form" class="form-horizontal" autocomplete="off">
                                @csrf
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                    <label class="control-label col-md-4"> Item Name : </label>
                                    <div>
                                        <input type="text" name="edit_itemName" id="edit_itemName" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Description: </label>
                                    <div>
                                        <textarea class="form-control" name="edit_description" id="edit_description" rows="5">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Category </label>
                                    <div>
                                        <select name="edit_category" id="edit_category" class="form-control">
                                            @foreach ($categories as $x)
                                            <option value="{{$x->id}}">{{$x->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <label class="control-label col-md-4">Quantity </label>
                                    <div>
                                        <input class="form-control" type="number" name="edit_quantity" id="edit_quantity">
                                    </div>
                                </div><br />
                                <div class="form-group" align="center">
                                    <input type="hidden" name="action" id="action" value="edit" />
                                    <input type="hidden" name="hidden_id" id="hidden_id" />
                                    <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Update" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

@section('footer-scripts')
<script type="text/javascript">
    var Toast = Swal.mixin({
        toast: true
        , position: 'top'
        , showConfirmButton: false
        , timer: 6000
        , width: '800px'
        , customClass: 'sweetalert-lg'


    });
    $('#createRecord').on('click', function() {
        $('#form_result').html(' ');
        $('#itemFormModal').modal('show');
    });

    $('#sample_form').on('submit ', function(event) {
        event.preventDefault();
        var action_url = '';
        if ($('#action').val() == 'Add') {
            action_url = "{{route('items.store')}}";
            $.ajax({
                url: action_url
                , method: "POST"
                , data: $(this).serialize()
                , dataType: "json"
                , success: function(data) {
                    var html = '';
                    if (data.errors) {
                        html = " <div class=' alert alert-danger'> ";
                        for (var count = 0; count < data.errors.length; count++) {
                            html += '<p>' + data.errors[count] + '</p>';
                        }
                        html += "</div>";
                    }
                    if (data.success) {
                        html = " <div class=' alert alert-success'> " + data.success + "</div>";
                        $('#sample_form')[0].reset();
                        $('.item-data-table').DataTable().ajax.reload();
                    }
                    $('#form_result').html(html);
                }
            });
        }
    });
    $('#edit_form').on('submit ', function(event) {
        event.preventDefault();
        var action_url = '';
        action_url = "/admin/items/" + item_id + "";
        $.ajax({
            url: action_url
            , method: "PUT"
            , data: $(this).serialize()
            , dataType: "json"
            , success: function(data) {
                console.log(data)
                var html = '';
                console.log(data.errors)
                if (data.errors) {
                    html = " <div class=' alert alert-danger'> ";
                    for (var count = 0; count < data.errors.length; count++) {
                        html += '<p>' + data.errors[count] + '</p>';
                    }
                    html += "</div>";
                }
                if (data.success) {
                    $('#editModal').modal('hide');
                    $('#edit_form')[0].reset();
                    $('.item-data-table').DataTable().ajax.reload();
                }
                $('#edit_form_result').html(html);
            }
        });
    });

    $('.close').on('click', function() {
        $('#edit_form_result').html(' ');
    });

    var item_id;
    // Delete
    $(document).on('click', '.delete', function() {
        item_id = $(this).attr('id');
        $('#confirmModal').modal('show');
    });
    $(document).on('click', '.info', function() {
        item_id = $(this).attr('id');
        console.log(item_id)
        event.preventDefault();
        var action_url = '';
        action_url = "/admin/items/" + item_id + "";
        $.ajax({
            url: action_url
            , method: "GET"
            , data: $(this).serialize()
            , dataType: "json"
            , success: function(data) {
                $item = data['item']
                $('#info_itemName').val($item['name']);
                $('#info_description').val($item['description']);
                $('#info_category').val(data['category']);
                $('#info_quantity').val($item['quantity']);
            }
        });
        $('#showInfoModal').modal('show');
    });

    // edit button on click
    $(document).on('click', '.edit', function() {
        item_id = $(this).attr('id');
        // console.log(item_id)
        event.preventDefault();
        var action_url = '';
        action_url = "/admin/items/" + item_id + "";
        $.ajax({
            url: action_url
            , method: "GET"
            , data: $(this).serialize()
            , dataType: "json"
            , success: function(data) {

                var select = document.getElementById('edit_category');
                // console.log(typeof(data['category_id']))
                // console.log(data['category_id'])
                // console.log(select)
                const options = Array.from(select.options);
                options.forEach((option, i) => {
                    // console.log(typeof(+option.value))
                    if (+option.value === data['category_id']) {
                        select.selectedIndex = i;
                    }
                });
                $item = data['item']
                $('#edit_itemName').val($item['name']);
                $('#edit_description').val($item['description']);
                $('#edit_quantity').val($item['quantity']);
            }
        });
        $('#editModal').modal('show');
    });

    $('#ok_button').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/admin/items/" + item_id
            , method: "delete"
            , beforeSend: function() {
                $('#ok_button').text('Deleting...');
            }
            , success: function(data) {
                setTimeout(function() {
                    $('#confirmModal').modal('hide');
                    table = $('.item-data-table').DataTable().clear().draw();

                    // နှစ်ခုလုံးအလုပ်လုပ်တယ်
                    // table = $('.item-data-table').DataTable().ajax.reload();

                    Toast.fire({
                        icon: 'success'
                        , title: 'Deleted Successfully.'
                    });
                    $('#ok_button').text('OK');

                }, 100);

            }
        })
    });



    $(function() {
        var table = $('.item-data-table').DataTable({
            "paging": true
            , "lengthChange": false
            , "searching": true
            , "ordering": true
            , "info": false
            , "autoWidth": false
            , "responsive": true
            , processing: true
            , serverSide: true
            , ajax: "{{ route('items.index') }}"
            , columns: [{
                    data: 'DT_RowIndex'
                    , name: 'DT_RowIndex'
                }
                , {
                    data: 'name'
                    , name: 'name'
                }
                , {
                    data: 'quantity'
                    , name: 'quantity'
                }, {
                    data: 'category_id'
                    , name: 'category_id'
                }
                , {
                    data: 'created_at'
                    , name: 'created_at'
                }
                , {
                    data: 'updated_at'
                    , name: 'updated_at'
                }
                , {
                    data: 'action'
                    , name: 'action'
                    , orderable: false
                    , searchable: false
                }
            , ]
        });
    });

</script>

@endsection
