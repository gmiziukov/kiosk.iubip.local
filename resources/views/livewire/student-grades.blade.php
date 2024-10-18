<div>
    <input type="text">
    <button>search</button>
    <table>
        <tr>
            <td>
                пердмет
            </td>
        </tr>
        @foreach ($data as $data1)
        <tr>
            <td>
                {{$data1->name}}
            </td>
            <td>
                {{$data1->grade}}
            </td>
            <td>
                {{$data1->type_name}}
            </td>
        </tr>
        @endforeach
    </table>
</div>