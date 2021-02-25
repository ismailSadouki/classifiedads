@extends('layouts.app')

@section('title', __('titles.myFav_title'))

@section('content')

<div class="col-lg-8">
    <p><h2>تفضيلاتي  </h2></p>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>التاريخ</th>
        <th>عنوان الإعلان</th>
        <th>السعر</th>
      </tr>
    </thead>
    <tbody>
    @foreach($userFav as $ad)
      <tr>
        <td>{{$ad->pivot->created_at}}</td>
        <td><h5>{{$ad->title}}</h5></td>
        <td>{{$ad->price}}</td>
        <td>
            <div class="btn-group" role="group" >
                <a  class="btn-sm btn-primary" href="/ad/{{$ad->id}}/{{$ad->slug}}" role="button" ><i class="glyphicon glyphicon-remove-sign"></i>عرض</a>
            </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection