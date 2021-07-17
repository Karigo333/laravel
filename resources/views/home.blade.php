@extends('layout')

@section('content')
<div class="row">
    @forelse ($ads as $ad)
{{--        <div><img src="/storage/images/ads" alt=""/>{{ $ad->image }}</div>--}}
        <p>{{ $ad->title }}</p>
        <p>{{ $ad->description }}</p>
        <p>{{ $ad->price }}</p>
        <p>{{ $ad->user->name }}</p>
        <hr>

    @empty
        <p>No ads</p>
    @endforelse
    {{ $ads->links() }}
</div>
@endsection
