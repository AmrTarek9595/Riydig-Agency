@extends('layouts.app')

@section('content')
<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div class="page-title-icon">
<i class="pe-7s-graph text-success"></i>
</div>
<div>Display Services
<div class="page-title-subheading">Select Service What You want to Edit?</div>
</div>
</div>

</div>
</div> <div class="row">





<div class="col-lg-12">
<div class="main-card mb-3">
<div class="card-body">
<h5 class="card-title"></h5>
<div class="table-responsive">
    
@if(Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                    {{ Session::get('success') }}
                    </div>
                    
    @endif
<table class="mb-0 table">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Quotation</th>
<th>Image</th>
<th>Update</th>
<th>Delete</th>

</tr>
</thead>
<tbody>
@foreach ($data as $index =>$datas)


<tr>
<th scope="row">{{ $index+1 }}</th>
<td>{{ $datas->title_en }}</td>

<td>{{ $datas->quotation_en }}</td>

<td><img src="/images/{{$datas->image_name}}" style="width:100px;height:100px;"></td>
<td><a href="/updateServices/{{$datas->id}}" class="mb-2 mr-2 btn-hover-shine btn btn-shadow btn-success"><i class="lnr-license btn-icon-wrapper"> </i>Update</a></td>

<td>
    <form action="/deleteService/{{$datas->id}}" method="POST">
        @csrf
    <button onclick="return confirmDelete('Are you sure you want to delete this post?')" class="mb-2 mr-2 btn-hover-shine btn btn-shadow btn-danger"><i class="lnr-lighter btn-icon-wrapper"> </i>Delete</button></td>

    </form>
</tr>

@endforeach

</tbody>
</table>


</div>
</div>
</div>
<div class="col-lg-12">

<div class="main-card mb-3 card">
<div class="card-body">

@if ($data->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($data->onFirstPage())
            <li class="page-item disabled"><span class="page-link">Previous</span></li> 

        @else
            <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}">Previous</a></li>
        @endif 


        {{-- Next Page Link --}}
        @if ($data->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() 
 }}">Next</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">Next</span></li>
        @endif 

    </ul>
@endif
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
    function confirmDelete(message) {
        return confirm(message);
    }
</script>
@endsection
