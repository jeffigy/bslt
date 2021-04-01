


@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Finished Contracts</h3>
            </div>
                            
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Customers Name</th>
                            <th>Project Name</th>
                            <th>Date Created</th>
                            <th>Date Finished</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse($finishedContracts as $finished)
                            <td>{{$finished->to}}</td>
                            <td>{{$finished->project}}</td>
                            <td>{{$finished->date}}</td>
                            <td>{{$finished->updated_at}}</td>
                            <td>
                                <button type="button" class="btn btn-info"> 
                                    <a href="/contracts/ongoings/{{$finished->id}}" style="color: #ffffff;">View Details</a>
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