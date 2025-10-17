@if(session('error'))
    <x-toast title='Error' :message="session('error')" type='error' />
@endif
