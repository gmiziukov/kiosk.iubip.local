<div>
    <table>
        <tr>
            <td>
                группа(курс)
            </td>
            <td>
                время
            </td>
        </tr>
        @foreach($data as $enddata)
            
        <tr>
            <td class = "bg-gray-300">
                {{ $enddata->group }}
                ({{ $enddata->course}})
            </td>
            <td class = "bg-gray-300">
                <table>
                    <tr>
                        <td>
                            {{ $enddata->date }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ $enddata->time }}
                        </td>
                    </tr>
                </table>
            </td>
            <td>

            </td>
        </tr>
        @endforeach
    </table>
    {{-- {{dd($data)}} --}}
    
</div>