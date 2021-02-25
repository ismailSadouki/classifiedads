@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        <p><h2>تفضيلاتي</h2></p>
        <table class="table table-hover">
            <thead> 
               <tr> 
                 <th>التاريخ</th>
                 <th>عنوان الاعلان</th>
                 <th>السعر</th>
               </tr>
            </thead>
            <tbody>
                @foreach ($userfav as $ad)
                    <tr>
                        <td>{{$ad->pivot->created_at}}</td>
                        <td>{{$ad->title}}</td>
                        <td>{{$ad->price}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/ad/{{$ad->id}}/{{$ad->slug}}" role="button" class="btn-sm btn-primary"><i class="glyphicon glyphicon-remove-sign"></i>عرض</a>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection