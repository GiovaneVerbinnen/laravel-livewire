<div class="">
    Show Tweets
    <hr>
    @foreach ($tweets ?? '' as $tweet)
    {{$tweet->user->name}} - {{$tweet->content}}
    @endforeach
</div>
