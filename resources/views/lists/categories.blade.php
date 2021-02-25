@foreach($categories as $item)
    <option value="{{ $item->id }}" >{{ $item->category_name }}</option>
@endforeach 
