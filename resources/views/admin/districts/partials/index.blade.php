@if($districts)
  <option value="" disabled="true" selected="true">Select District</option>
    @foreach ($districts as $key => $district)
      <option value="{{ $key }}">
        {{ $district }}
      </option>
     @endforeach
   @else
  <option value="" disabled="true" selected="true">No District Found</option>
 @endif
