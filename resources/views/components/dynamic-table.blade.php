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
                                $jsonType = explode('.', $jsonKey)[0];
                                $jsonData = $component->getJsonColumnData($row, $jsonType);
                                $value = $component->getJsonValue($jsonData, substr($jsonKey, strlen($jsonType) + 1));
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
