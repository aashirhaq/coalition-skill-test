@if(session('success'))
    <x-toast title='Success' :message="session('success')" type='success' />
@endif
