@if(session()->has('message'))
<div class="fixed top-0 transform bg-laravel text-white px-48 py-4">
{{session('message')}}
</div>
@endif
