<h3>Contact Page: </h3>

{{-- @if($nm =='Sadnan')
<h3>Name not found {{$nm}}</h3>
@endif --}}

{{-- @if($nm == 'juwel')
<h3>Hello there {{$nm}}</h3>
@else
<h3>Not Fouud</h3>
@endif --}}

{{-- @if($nm == 'juwel')
<h3>You have the access {{$nm}}</h3>
@elseif($nm == 'ahmed')
<h3>You also have that access {{$nm}}</h3>
@else
<h3>Sorry you do not have any access</h3>
@endif --}}

{{-- @unless ($nm == 'juwel')
    <h3>You are not admin</h3>
@endunless --}}

{{-- @isset($nm)
    <h3>Variable is declared</h3>
@endisset --}}

{{-- @empty($nm)
    <h3>Hello null</h3>
@endempty --}}

{{-- @production
   <h3>Production Mode is on</h3> 
@endproduction --}}

{{-- @env('local')
   <h3>Local Mode</h3> 
@endenv --}}

{{-- @switch(55)
    @case(1)
        <h2>First</h2>
        @break
    @case(2)
        <h2>Second</h2>
        @break
    @case(3)
        <h2>Third</h2>
        @break
    @case(4)
        <h2>Fourth</h2>
        @break
    @default
    <h3>No match Found</h3>
@endswitch --}}

{{-- @for($i = 1; $i<=10; $i++)
<h3>{{$i}}
@endfor  --}}

{{-- @foreach ($sdt as $stu)
    <h3>{{$stu}}</h3>
@endforeach --}}

{{-- @forelse ($sdt as $stu)
    <h3>{{$stu}}</h3>
@empty
    <h3>No students</h3>
@endforelse --}}

{{-- @while(true)
 <h3>Hello There</h3>   
@endwhile --}}

{{-- @foreach ($sdt as $stu)
    @if($stu=='kaka')
        @break
            @endif
    <h3>{{$stu}}</h3>
@endforeach --}}

@foreach ($sdt as $stu)
    @if($stu=='ronaldo')
        @continue
            @endif
    <h3>{{$stu}}</h3>
@endforeach