<select
    name="per_page"
    class="block focus:ring-sky-500 focus:border-sky-500 min-w-max shadow-sm text-sm border-gray-300 rounded-md"
    @change="table.updateQuery('perPage', $event.target.value)"
  >
    @foreach($table->allPerPageOptions() as $perPage)
        <option value="{{ $perPage }}" @selected($perPage === $table->perPage())>
            {{ $perPage }} {{ __('per page') }}
        </option>
    @endforeach
</select>
