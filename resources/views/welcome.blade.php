<h1> {{$heading}}</h1>

@foreach ($listings as $list)
<p>{{ $list['id'] }}.
   
        {{$list['title']}} -

    
        {{$list['description']}}
    </p>
@endforeach