@extends('layouts.app')

@section('content')
<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div class="page-title-icon">
<i class="pe-7s-drawer icon-gradient bg-happy-itmeo"></i>
</div>
<div>Leads From Contact US
<div class="page-title-subheading">Check new Messages</div>
</div>
</div>

</div>
</div> <div class="row">





<div class="col-lg-12">
<div class="main-card mb-3 card">
<div class="card-body">
<h5 class="card-title">Table responsive</h5>
<div class="table-responsive">
<table class="mb-0 table">
    
@if(Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                    {{ Session::get('success') }}
                    </div>
                    
    @endif

    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                    </div>
    @endif
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Response</th>
<th>Action</th>
</tr>
</thead>
<tbody>

    @foreach ($data as $index=>$datas )
    <tr>
    <th scope="row">{{ $index+1 }}</th>
    
    <td>{{ $datas->name }}</td>
    <td>{{ $datas->email }}</td>
    <td>{{$datas->message}}</td>
    @if($datas->status==0)
    <td>Not Answerd Yet</td>
    @else
    <td>Answered</td>
    @endif
    <td>
        @if($datas->status == 0)
    <form action="/updateContact/{{$datas->id}}" method="POST" enctype= multipart/form-data>
    @csrf
    <button class="mb-2 mr-2 btn-hover-shine btn btn-shadow btn-success"><i class="lnr-license btn-icon-wrapper"> </i>Update Response</button>
    </form>
    @endif
</td>

</tr>
    @endforeach



</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

@endsection
