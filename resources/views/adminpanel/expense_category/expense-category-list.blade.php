@extends('layout.main') 

@push('title')
  Expense Category List
@endpush


@push('js-link')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $("input[name='search']").keyup(function(e){
        if(e.keyCode == 13)
        {
            // $(this).trigger("enterKey");
            $("#searchForm").submit();
        }
    });
</script>
@endpush


@section('main-section')
     <!-- Start Content-->
     <div class="container-fluid">
                        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        
                    </div>
                    <h4 class="page-title">Tenants List</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between mb-2">
                            <div class="col-auto">
                                <form action="" id="searchForm" class="search-bar position-relative mb-sm-0 mb-2">
                                    <input type="search" name="search" class="form-control" placeholder="Search..." value="{{$search}}">
                                    <span class="mdi mdi-magnify"></span>
                                </form>  
                                                      
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end">
                                    <a href="{{ route('expense_category_create')}}" class="btn btn-primary waves-effect waves-light mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add Expense Category</a>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                <thead class="table-light">
                                    <tr>     
                                        <th>Id</th>	                                                  
                                        <th>Name </th>														
                                        <th>Added On</th>
                                        <th>Status</th>
                                        <th style="width: 82px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($expenses as $expense)
                                        <tr>
                                            <td>{{$expense->id}}</td>
                                            <td><a href="{{route('expense_category_edit', ['id' => $expense->id ])}}" class="text-gray-800 text-hover-primary mb-1">{{$expense->name}}</a></td>
                                            <td>{{date('F d,Y', strtotime($expense->created_at))}}</td>
                                            <td>
                                                <div class="badge badge-soft-{{($expense->is_active == 1)? "success" : "danger"}}">{{($expense->is_active == 1)? "Active" : "Inactive"}}</div>
                                            </td>
                                            <td>
                                                <a href="{{route('expense_category_edit', ['id' => $expense->id ])}}" class="action-icon"> <i class="mdi mdi-square-edit-outline text-primary"></i></a>
                                                <a href="{{route('expense_category_delete', ['id' => $expense->id ])}}" class="action-icon delete-confirm"> <i class="mdi mdi-delete text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="row">
                                {{ $expenses->links('vendor.pagination.custom') }}
                            </div>
                        </div>

                        
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection