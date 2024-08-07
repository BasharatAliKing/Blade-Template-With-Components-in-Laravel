<x-layout>
  <x-slot name="title">
     Add Data
  </x-slot>
    <x-form action="{{route('user.store')}}" method="POST">
        <div class="mb-2">
            <label for="">Name:</label>
        <input type="text" name="name" class="form-control mt-1 @error('name') is-invalid @enderror ">
        @error('name')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-2">
            <label for="">Email:</label>
        <input type="text" name="email" class="form-control mt-1 @error('name') is-invalid @enderror ">
        @error('email')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="mb-2">
            <label for="">Password:</label>
        <input type="text" name="password" class="form-control mt-1 @error('name') is-invalid @enderror ">
          @error('password')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        <button class="btn btn-sm btn-success">Add User</button>
    </x-form>
</x-layout>