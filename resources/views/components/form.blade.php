@props([
    'action',
    'method'=>'POST',
])
<form action="{{$action}}" method="{{$method==='GET'?'GET':'POST'}}"   class="col-md-6 border p-2 mt-3">
    @csrf
    @unless (in_array($method,['GET','POST']))
        @method($method)
    @endunless
    {{$slot}}

</form>