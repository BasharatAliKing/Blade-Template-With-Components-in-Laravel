<x-layout>
    <x-slot name="title">
       View Data
    </x-slot>
    <a href="{{route('user.create')}}" class="btn btn-sm btn-success m-2">Add User</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Update</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
        @foreach ($users as $user )
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-warning">Update</a></td>
            <td><a href="{{route('user.show',$user->id)}}" class="btn btn-sm btn-success">View</a></td>
            <td>
                <x-form class="m-0" action="{{route('user.destroy',$user->id)}}" method="DELETE">
                    <button class="btn btn-sm btn-danger">Delete</button>
                </x-form>
            </td>
        </tr>
        @endforeach
    </table>
</x-layout>