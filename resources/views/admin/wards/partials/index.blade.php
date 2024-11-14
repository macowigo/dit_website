@if($wards)
<option value="" disabled="true" selected="true">Select Ward</option>
  @foreach ($wards as $key => $wards)
    <option value="{{ $key }}">
        {{ $wards }}
    </option>
  @endforeach
@else
<option value="" disabled="true" selected="true">No Ward Found</option>
@endif
