    {{-- For entity droupdown depends on country --}}
    <option selected>Now Select Country</option>
@foreach ($entity_types as $entity_type)
    <option value="{{ $entity_type->id }}">{{ $entity_type->entity_types_name }}</option>
@endforeach

    {{-- For state droupdown depends on entity --}}

{{-- @foreach ($states as $state)
    <option value="{{ $state->id }}">{{ $state->state_name }}</option>
@endforeach --}}

