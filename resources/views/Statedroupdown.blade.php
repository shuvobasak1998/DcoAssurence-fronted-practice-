
    {{-- For state droupdown depends on entity --}}
    <option selected>Now Select State</option>
@foreach ($states as $state)
    <option value="{{ $state->id }}">{{ $state->state_name }}</option>
@endforeach