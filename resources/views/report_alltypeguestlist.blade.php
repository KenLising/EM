
@extends('layouts.app')
@push('title') 
  ALL TYPE GUEST LIST
@endpush

@push('sidebar')
  @include('layouts.sidebar')
@endpush

@section('content')
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
    <li class="breadcrumb-item active">Report</li>
    <form action="" method="get">
      <button id="print" class="btn btn-primary btn-sm float-right" style="width: 150px; margin-left: 1%; margin-right: 1%;">Print</button>
    </form>
    <form action="" method="get">
      <button id="excel" class="btn btn-primary btn-sm float-right" style="width: 150px; margin-left: 1%; margin-right: 1%;">Excel</button>
    </form>
  </div>
</ul>

	<div class="container" style="padding-top: 3%;">
		
		<div class="col-md-12" style="width: 100%;">
          <div class="card">
          	
            <div class="card-close">
          	  
          	</div>
      			
            <div class="card-header d-flex align-items-center">
      			  
      			</div>

            <div class="card-body">
              <div class="table-responsive">
                <table id="mytable" class="table" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile Number</th>
                      <th class="none">Designation</th>
                      <th>Company</th>
                      <th class="none">Office Tel#</th>
                      <th class="none">Office Address</th>
                      <th class="none">Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
	</div>

@endsection

@push('scripts')
<script type="text/javascript">
  $(function() {
          var table = $('#mytable').DataTable({
             dom: 'Btpi',
             processing: true,
             serverSide: true,
             colReorder: true,
             responsive: true,
             // lengthChange: false,
             buttons: [
                { extend: 'print', className: 'd-none', title:'Guest List', exportOptions:{ columns:[0, 1, 2, 3, 4, 5, 6, 7]} },
                { extend: 'excel', className: 'd-none', title:'Guest List', exportOptions:{ columns:[0, 1, 2, 3, 4, 5, 6, 7]} },
                'pageLength',
             ],
             
             ajax: "{{ route('admin.report.alltypeguestlist.api') }}",
             columnDefs: [
                 { "width": "40%", "targets": 0 },
                 { "width": "30%", "targets": 1 },
                 { "width": "20%", "targets": 2 },
                 { "width": "20%", "targets": 3 }
             ],
             columns: [
               {data: 'name', name: 'name'},
               {data: 'email', name: 'email'},
               {data: 'mobilenumber', name: 'mobilenumber'},
               {data: 'designation', name: 'designation'},
               {data: 'companyname', name: 'companyname'},
               {data: 'officetelnumber', name: 'officetelnumber'},
               {data: 'officeaddress', name: 'officeaddress'},
               {data: 'type', name: 'type'},
             ]
         });
         $(document).on('click', '#print', function(){
            $(".buttons-print")[0].click();
         });
         $(document).on('click', '#excel', function(){
            $(".buttons-excel")[0].click();
         });
         $('#searchInput').on( 'keyup', function () {
             table.search( this.value ).draw();
         } );

     });

</script>
@endpush