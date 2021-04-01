@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pending Contracts</h3>
            </div>
                            
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Customers Name</th>
                            <th>Date Created</th>
                            <th>Project Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse($pendingContracts as $pendingContract)
                            <td>{{$pendingContract->to}}</td>
                            <td>{{$pendingContract->date}}</td>
                            <td>{{$pendingContract->project}}</td>
                            <td>
                                <button type="button" class="btn btn-info"> 
                                    <a href="/contracts/pendings/{{$pendingContract->id}}" style="color: #ffffff;">View Details</a> 
                                </button>
                                <button type="button" class="btn btn-success"> 
                                    <a href="/contracts/pendings/approve/{{$pendingContract->id}}" style="color: #ffffff;">Approve Contract</a> 
                                </button>
                                
                               
                            </td>
                            
                        </tr>
                        @empty
                        <center><p>no data</p></center>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            $(function() {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
    </script>
    </div>
</div>

@endsection()
