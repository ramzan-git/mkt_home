@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>

                    <div class="card-body">
                      
                        <form action="{{route('frontpage')}}" method="get">
                            <a class="list-group-item list-group-item-action" href="/">Back</a>
                            <input type="submit" value="Vegetarian" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Nonvegetarian" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Traditional" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Peri peri chicken" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Garlic PRAWN" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Chicken & Camembert" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Loaded pepperoni" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Spicy peppy paneer" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Spicy pepperoni" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Vegi pepperoni" name="category" class="list-group-item list-group-item-action">
                        </form>
                    
                       
                    </div>

                </div>
                  <div class="card card-body mt-3">
                  Hey guys, Please support me by giving 5 star.
                  if you want to learn Laravel by developing other real world projects then check out my other laravel course.
                  <a href="https://www.udemy.com/user/4f9778a0-ecef-4eac-84ce-bf0522c23e4a/" target="_blank">
                  See courses
                  </a>
                  If you need discount coupons please message on udemy.

                  Subscribe my youtube channel for new course free coupons and free laravel php videos
                  <a href=" <a href="https://www.youtube.com/channel/UCTeyfGKHPCXLNQHuY3Yb3gA" target="_blank">
                  Youtube
                  </a>"
                  </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Header</div>

                    <div class="card-body">

                        <div class="row">
                           
                                <p>nothing to show</p>

                           

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        a.list-group-item {
            font-size: 18px;
        }

        a.list-group-item:hover {
            background-color: red;
            color: #fff;
        }

        .card-header {
            background-color: blue;
            color: #fff;
            font-size: 20px;
        }

    </style>
@endsection
