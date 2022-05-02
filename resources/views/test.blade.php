{{-- {{ $obj['questions'][0]['description'] }} --}} --}}

{{-- {{-- @foreach ($obj['questions'] as $item)
    
    <li>{{ $item["description"] }}</li>
    
@endforeach --}}


@foreach ($uneCertif["questions"] as $item)
    {{ $item["description"] }}
@endforeach