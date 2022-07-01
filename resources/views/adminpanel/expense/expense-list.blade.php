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
                    <h4 class="page-title">Expense List</h4>
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
                                <form class="search-bar position-relative mb-sm-0 mb-2">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                </form>                          
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end">
                                    <a href="expense-add.html" class="btn btn-primary waves-effect waves-light mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add Expense</a>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                <thead class="table-light">
                                    <tr>                                                        
                                        <th>Exense Category</th>
                                        <th>Amount</th>
                                        <th>Expense Date</th>	
                                        <th>Description</th>														
                                        <th>Added On</th>
                                        <th>Status</th>
                                        <th style="width: 82px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Payroll</td>
                                        <td><a href="#" class="text-gray-800 text-hover-primary mb-1">$500</a></td>
                                        <td>Apr 10, 2020</td>   
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, sed.</td>                                                    
                                        <td>Apr 15, 2020</td>                                                       
                                        <td><div class="badge badge-soft-success">Active</div></td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Food</td>
                                        <td><a href="#" class="text-gray-800 text-hover-primary mb-1">$400</a></td>
                                        <td>Apr 12, 2020</td>   
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, sed.</td>                                                     
                                        <td>Apr 25, 2020</td>                                                       
                                        <td><div class="badge badge-soft-success">Active</div></td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Payroll</td>
                                        <td><a href="#" class="text-gray-800 text-hover-primary mb-1">$500</a></td>
                                        <td>Apr 10, 2020</td>  
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, sed.</td>                                                      
                                        <td>Apr 15, 2020</td>                                                       
                                        <td><div class="badge badge-soft-success">Active</div></td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Food</td>
                                        <td><a href="#" class="text-gray-800 text-hover-primary mb-1">$400</a></td>
                                        <td>Apr 12, 2020</td>    
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, sed.</td>                                                    
                                        <td>Apr 25, 2020</td>                                                       
                                        <td><div class="badge badge-soft-success">Active</div></td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Payroll</td>
                                        <td><a href="#" class="text-gray-800 text-hover-primary mb-1">$500</a></td>
                                        <td>Apr 10, 2020</td>  
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, sed.</td>                                                      
                                        <td>Apr 15, 2020</td>                                                       
                                        <td><div class="badge badge-soft-success">Active</div></td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Food</td>
                                        <td><a href="#" class="text-gray-800 text-hover-primary mb-1">$400</a></td>
                                        <td>Apr 12, 2020</td>   
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, sed.</td>                                                     
                                        <td>Apr 25, 2020</td>                                                       
                                        <td><div class="badge badge-soft-success">Active</div></td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>

                        <ul class="pagination pagination-rounded justify-content-end my-2">
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection