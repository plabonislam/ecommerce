@extends('layouts.main')
@section('title','shirt')




@section('content')
     <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                       <a href="#">
                            <img src="{{asset("images/$product->image")}}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                     <h4class="subheader">
                    <span class="price-tag">{{$product->price}} taka</span>
                </h4>
                
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Select Size
                                <select>
                                    <option value="small">
                                        Small
                                    </option>
                                    <option value="medium">
                                        Medium
                                    </option>
                                    <option value="large">
                                        Large
                                    </option>
                                   
                                </select>
                            </label>

                            <p class="subheade">
                    <span class="price-tag">About::))  {{$product->description}} </span>
                </p>
                            <a href="{{route('cart.additem',$product->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>
@endsection
