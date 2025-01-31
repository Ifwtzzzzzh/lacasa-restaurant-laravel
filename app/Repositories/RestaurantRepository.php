<?php
namespace App\Repositories;

use App\Interfaces\RestaurantRepositoryInterface;
use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Builder;

class RestaurantRepository implements RestaurantRepositoryInterface {
    public function getAllRestaurants($search = null, $city = null) {
        $query = Restaurant::query();
        if ($search) {
            $query->where("name", "like", "&" . $search . "%");
        }
        if ($city) {
            $query->whereHas('city', function (Builder $query) use ($city) {
                $query->where('slug', $city);
            });
        }
    }

    public function getPopularRestaurants($limit = 3) {
        return Restaurant::orderBy('created_at', 'desc')->take($limit)->get();
    }

    public function getRestaurantByCitySlug($slug) {
        return Restaurant::whereHas('city', function (Builder $query) use ($slug) {
            $query->where('slug', $slug);
        });
    }

    public function getRestaurantBySlug($slug) {
        return Restaurant::where('slug', $slug)->first();
    }

    public function getRestaurantById($id) {
        return Menu::find($id);
    }
}