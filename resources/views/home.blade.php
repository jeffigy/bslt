@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-pause-circle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pending Contracts</span>
                <span class="info-box-number">{{ $countPending->count() }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-chevron-circle-right"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ongoing Contracts</span>
                <span class="info-box-number">{{ $countOnGoing->count() }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-primary"><i class="fas fa-check-circle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Finished Contracts</span>
                <span class="info-box-number">{{ $countFinished->count() }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          

         
        </div>
        
        
    </div>

    
    
    
</section>

@endsection
