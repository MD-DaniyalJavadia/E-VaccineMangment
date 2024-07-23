@extends("parent/dashboard/master")

@section('dashbord-page-content')
@if(session()->has('success'))
                                    <div class="alert alert-warning">
                                        {{session()->get('success')}}
                                    </div>
                                @endif 
@endsection