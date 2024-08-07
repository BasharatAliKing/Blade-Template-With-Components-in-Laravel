<x-layout>
    <x-slot name="title">
        Update User
    </x-slot>
    <x-form action="{{route('user.update',$user->id)}}" method="PUT">
        <div class="mb-2">
            <label for="">Name:</label>
        <input type="text" value="{{$user->name}}" name="name" class="form-control mt-1 @error('name') is-invalid @enderror ">
        @error('name')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-2">
            <label for="">Email:</label>
        <input type="text" value="{{$user->email}}" name="email" class="form-control mt-1">
        @error('email')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        {{-- <div class="mb-2">
            <label for="">Password:</label>
        <input type="text" value="{{$user->password}}" name="password" class="form-control mt-1">
          @error('password')<p class="text-danger">{{$message}}</p>@enderror
        </div> --}}
        <button class="btn btn-sm btn-warning">Update User</button>
    </x-form>
</x-layout>