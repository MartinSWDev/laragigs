<h1>{{$heading}}</h1>


@foreach($listings as $listing)
    <a href="listings/{{$listing['id']}}">{{$listing['title']}}</a>
    <p>{{$listing['description']}}</p>
@endforeach



