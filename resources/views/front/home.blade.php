@extends('layouts.main')


@section('content')

@if($flash=session('message'))
<div id="flash-message" class="alert alert-success" role
="alert">
{{$flash}}

@endif
        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                   welcome to Rangpurhut.com
                </strong>
            </h2>
            <br>
            <a href="{{url('pall')}}"><button class="button large">Check out Our Products</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Rangpur-Hut&rsquo;s Latest Product
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        <div class="row">
            @forelse($shirts->chunk(14) as $chunk)

            @foreach($chunk as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.additem',$shirt->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt',$shirt->id)}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                         {{$shirt->price}} taka
                    </h5>
                    <p>
                      {{$shirt->description}}
                    </p>
                </div>
            </div>

            @endforeach
             <div class="clearfix"></div>
            @empty
            <h2>no shirts</h2>
            @endforelse
           
            </div>
        <!-- Footer -->

    
b

        <br>
        @endsection