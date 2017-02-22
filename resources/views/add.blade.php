@extends('app')


@section('addToMenu')
    <h2>Add to Menu</h2>
    <form class="menuSection">
        <input type="text" placeholder="Add Your Burger" id="burger">
        <input type="hidden" id="token" value="{{ csrf_token() }}">
        <button class="btn btn-primary" id="submitBtn"> Submit</button>
    </form>
@stop


@section('burgerOfTheDay')
    <h2>Burgers of the Day</h2>
    @foreach($burgers as $burger)
        @if($burger->ordered == 0)
            <section class="burgerSection">
                {{$burger->name}}
                <button class="orderBtn btn btn-primary" data-id="{{$burger->id}}" data-token="{{csrf_token()}}"> Order!</button>
            </section>
        @endif
    @endforeach

@stop


@section('yourOrder')
    <h2>Your Order</h2>
    @foreach($burgers as $burger)
        @unless($burger->ordered == 0)
        <section class="orderSection">
            {{$burger->name}}
            <button class="deleteBtn btn btn-primary" data-id="{{$burger->id}}" data-token="{{ csrf_token() }}">Delete!</button>
        </section>
        @endunless
    @endforeach
@stop

