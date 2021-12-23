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
                    <th>Date</th>
                    <th>Quantity</th>
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
            action_url = "/admin/items/"
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

    var item_id;
    // Delete
    $(document).on('click', '.delete', function() {
        item_id = $(this).attr('id');
        $('#confirmModal').modal('show');
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
                    data: 'created_at'
                    , name: 'created_at'
                }, {
                    data: 'quantity'
                    , name: 'quantity'
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
