<x-layout>
    <x-slot name="title">Show User</x-slot>
    <table class="table table-bordered mt-4">
      <tr><td>Name:</td><td>{{$user->name}}</td></tr>
      <tr><td>Email:</td><td>{{$user->email}}</td></tr>
      <tr><td><a href="{{route('user.index')}}" class="btn btn-sm btn-secondary">Back</a></td></tr>
    </table>
</x-layout>