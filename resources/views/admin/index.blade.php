@foreach($admin as $admins)
    {{$admins->name}}
    {{$admins->surname}}
    {{$admins->email}}
    {{$admins->phone}}
@endforeach