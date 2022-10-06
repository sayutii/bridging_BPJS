@extends('layouts.master')
@section('heading')
    <section class="content-header">
        <h1>
            say
            {{-- <small>Control panel</small> --}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
  </section>
@endsection
@section('content')

<div class="col">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Cari Diagnosa</h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <form action="" method="post">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama / kode Diagnosa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama / Kode">
          </div>
          
        </div><!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div><!-- /.box -->

    

  </div>
@endsection