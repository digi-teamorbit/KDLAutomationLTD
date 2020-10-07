@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">What We Do #{{ $whatwedohome->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/what-we-do-home') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $whatwedohome->id }}</td>
                            </tr>
                            <tr><th> Title </th><td> {{ $whatwedohome->title }} </td></tr><tr><th> Short Description </th><td><?= html_entity_decode($whatwedohome->short_description) ?></td></tr><tr><th> Long Description </th><td><?= html_entity_decode($whatwedohome->long_description) ?></td></tr>
                            <tr><th>Image</th><td><img src="{{asset($whatwedohome->image)}}" style="width: 30%;"></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

