<table>
    @foreach($users as $user)
        <tr>{{$user->name}}</tr>
    @endforeach
</table>
