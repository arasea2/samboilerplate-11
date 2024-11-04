@props(['data'])

<br>
<table  class="table table-hover table-condensed">
    <tbody>
        <tr>
            <th  style="width: 250px;"  scope="col" class="bg-secondary text-white">Created At</th>
            <td>{{ $data->created_at->isoFormat('dddd, D MMMM Y - HH:mm:ss') }}
                <br/> by {{ $data->created_by}}
            </td>
        </tr>
        <tr>
            <th scope="col" class="bg-secondary text-white">Updated At</th>
            <td>{{ $data->updated_at->isoFormat('dddd, D MMMM Y - HH:mm:ss') }}
                <br/> by {{ $data->updated_by}}
            </td>
        </tr>
    </tbody>
</table>