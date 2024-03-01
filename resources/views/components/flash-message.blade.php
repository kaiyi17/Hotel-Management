@if(session()->has('message'))

<div x-data="{show:true}" x-init="setTimeout(() => show = false, 3000)" x-show = "show" 
class="fixed top-0 left-50 translate-middle-x bg-dark text-white px-5 py-3">
<p>
  {{session('message')}}
</p>
</div>

@endif