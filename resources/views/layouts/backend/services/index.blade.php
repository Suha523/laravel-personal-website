@extends('layouts.backend.master')

@section('title')Services @endsection
@section('header')Services @endsection
@section('content')

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header bg-dark">
                               <div class="d-flex justify-content-between">
                                   <h3 class="text-warning">All Services</h3>
                                   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#create">
                                    <i class="fa fa-plus mr-1"></i> Add New Service
                                  </button>
                                                               </div>
                               @include('layouts.backend.services.create')
                               @include('layouts.backend.services.edit')

                        </div>
                        <div class="card-body p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
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



        </div><!-- /.container-fluid -->
    </section>
@endsection
