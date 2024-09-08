<form method="GET" action="{{ route('kelas.index') }}">
    @foreach($columns as $column)
        @if(isset($column['filter']) && $column['filter'])
            <label for="filter_{{ $column['key'] }}">{{ $column['label'] }}</label>
            @if(isset($column['filter_dropdown']) && $column['filter_dropdown'])
                <select id="filter_{{ $column['key'] }}" name="filter[{{ $column['key'] }}]">
                    <option value="">Select</option>
                    @foreach($column['dropdown_options'] as $option)
                        <option value="{{ $option['value'] }}" {{ request('filter.' . $column['key']) == $option['value'] ? 'selected' : '' }}>
                            {{ $option['label'] }}
                        </option>
                    @endforeach
                </select>
            @elseif(isset($column['filter_type']) && $column['filter_type'] === 'date_range')
                <input type="date" id="filter_{{ $column['key'] }}_start" name="filter[{{ $column['key'] }}][start]" value="{{ request('filter.' . $column['key'] . '.start') }}">
                <input type="date" id="filter_{{ $column['key'] }}_end" name="filter[{{ $column['key'] }}][end]" value="{{ request('filter.' . $column['key'] . '.end') }}">
            @else
                <input type="text" id="filter_{{ $column['key'] }}" name="filter[{{ $column['key'] }}]" value="{{ request('filter.' . $column['key']) }}">
            @endif
        @endif
    @endforeach
    <button type="submit">Search</button>
</form>

<form method="GET" action="{{ route('kelas.export') }}">
    @foreach($columns as $column)
        @if(isset($column['filter']) && $column['filter'])
            @if(isset($column['filter_type']) && $column['filter_type'] === 'date_range')
                <input type="hidden" name="filter[{{ $column['key'] }}][start]" value="{{ request('filter.' . $column['key'] . '.start') }}">
                <input type="hidden" name="filter[{{ $column['key'] }}][end]" value="{{ request('filter.' . $column['key'] . '.end') }}">
            @else
                <input type="hidden" name="filter[{{ $column['key'] }}]" value="{{ request('filter.' . $column['key']) }}">
            @endif
        @endif
    @endforeach
    <button type="submit">Export to Excel</button>
</form>

<table>
    <thead>
        <tr>
            @foreach($columns as $column)
                <th>{{ $column['label'] }}</th>
            @endforeach
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($rows as $row)
            <tr>
                @foreach($columns as $column)
                    <td>
                        @if (strpos($column['key'], 'json.') === 0)
                            @php
                                $jsonKey = substr($column['key'], 5); // Remove 'json.' prefix
                                $jsonData = $this->getJsonColumnData($row, $jsonKey);
                                $value = $this->getJsonValue($jsonData, $jsonKey);
                            @endphp
                            {{ $value }}
                        @else
                            {{ $row[$column['key']] }}
                        @endif
                    </td>
                @endforeach
                <td>
                    <a href="{{ $baseDetailUrl . '/' . $row['id'] }}">View Details</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="{{ count($columns) + 1 }}">No data found</td>
            </tr>
        @endforelse
    </tbody>
</table>
