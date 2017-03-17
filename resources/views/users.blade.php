

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <table>
        @if ($users)

            @foreach($users as $user)

                <tr>
                    <td>id:</td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td>name:</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Регион:</td>
                    <td>{{ $user->region }}</td>
                </tr>
                <tr>
                    <td>Город:</td>
                    <td>{{ $user->city }}</td>
                </tr>
                <tr>
                    <td>Должность</td>
                    <td>{{ $user->position }}</td>
                </tr>
                <tr>
                    <td>Отдел</td>
                    <td>{{ $user->departament }}</td>
                </tr>
                <tr>
                    <td>Руководитель</td>
                    <td>{{ $user->parent_user }}</td>
                </tr>
                @endforeach
            @endif
        </table>
    </div>
        </div>
</div>