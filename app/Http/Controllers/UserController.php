<?php

namespace App\Http\Controllers;

use App\Interfaces\RestaurantRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private RestaurantRepositoryInterface $restaurantRepository;

    public function __construct(RestaurantRepositoryInterface $restaurantRepository) {
        $this->restaurantRepository = $restaurantRepository;
    }

    public function dashboard() {
        return view('user.dashboard');
    }

    public function getRatingStar($rating) {
        $fullStars = floor($rating);
        $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
        $emptyStars = 5 - ($fullStars + $halfStar);
        return str_repeat('⭐', $fullStars) . str_repeat('⭐', $halfStar) . str_repeat('⭐', $emptyStars);
    }

    public function home() {
        $popularRestaurants = $this->restaurantRepository->getPopularRestaurants();

        foreach ($popularRestaurants as $popularRestaurant) {
            $popularRestaurant->ratingStars = $this->getRatingStar($popularRestaurant->rating);
        }

        return view('public.welcome', compact('popularRestaurants'));
    }

    public function index() {
        return view('layouts.base');
    }

    public function reservation() {
        return view('public.reservation');
    }

    public function restaurant() {
        return view('public.restaurant');
    }

    public function benefit() {
        return view('public.benefit');
    }

    public function article() {
        return view('public.article');
    }

    public function contact() {
        return view('public.contact');
    }
    public function test() {
        return view('public.test');
    }
}