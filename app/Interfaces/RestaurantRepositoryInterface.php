<?php
namespace App\Interfaces;
interface RestaurantRepositoryInterface {
    public function getAllRestaurants($search = null, $city = null);
    public function getPopularRestaurants($limit = 3);
    public function getRestaurantByCitySlug($slug);
    public function getRestaurantBySlug($slug);
    public function getRestaurantById($id);
}
