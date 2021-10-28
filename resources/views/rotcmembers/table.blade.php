<div class="table-responsive">
    <table class="table" id="rotcmembers-table">
        <thead>
            <tr>
                <th>Fname</th>
        <th>Lname</th>
        <th>Birthday</th>
        <th>Rank</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rotcmembers as $rotcmember)
            <tr>
                <td>{{ $rotcmember->fname }}</td>
            <td>{{ $rotcmember->lname }}</td>
            <td>{{ $rotcmember->birthday }}</td>
            <td>{{ $rotcmember->rank }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['rotcmembers.destroy', $rotcmember->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rotcmembers.show', [$rotcmember->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('rotcmembers.edit', [$rotcmember->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
