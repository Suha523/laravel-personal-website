@extends('layouts.backend.master')
@section('title')Portfolio @endsection
@section('header')Portfolio @endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-dark">
                           <div class="d-flex justify-content-between">
                               <h3 class="text-warning">My Portfolio</h3>
                               <button id="add" type="button" class="btn btn-warning" data-toggle="modal" data-target="#create">
                                <i class="fa fa-plus mr-1"></i> Add New Portfolio
                              </button>
                                                           </div>
                           @include('layouts.backend.portfolio.create')
                           {{-- @include('layouts.backend.skills.edit') --}}

                    </div>
                    <div class="card-body p-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection
