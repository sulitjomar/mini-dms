<select class="form-select" {{ $attributes }}>
    @foreach($options as $value => $label)
        <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
</select>