<div>
    <div class = "flex ">
        <input wire:model = "currentDate" type="date" id="start" name="search-data" />
        <input wire:model = "group" type="text" value ="k1N1"> 
        <button wire:click="search()">найти</button>
    </div>
        
    <table>
        <tr>
            <td>
                дата
            </td>
            <td>
               место
            </td>
            <td>
                дисциплина
            </td>
            <td>
                время
            </td>
            <td>
                перподаватель
            </td>
        </tr>
    @foreach($data as $enddata)
        <tr>
            <td>
                {{$enddata->date}}
            </td>
            <td>
                {{$enddata->lesson_place}}
            </td>
            <td>
                {{$enddata->discipline}}
            </td>
            <td>
                {{$enddata->time}}
            </td>
            <td>
                {{$enddata->teacher}}
            </td>
        </tr>
    @endforeach
    </table>
    {{-- {{dd($data)}} --}}
    
</div>
