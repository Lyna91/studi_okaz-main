<?php

function getListings(): array
{
    return [
        ["title" => "test1", "price" => 30, "image" => "/crystal.jpg", "description" => "Test description"],
        ["title" => "test2", "price" => 50, "image" => "crystal.jpg", "description" => "Test description"],
        ["title" => "test3", "price" => 10, "image" => "crystal.jpg", "description" => "Test description"],
    ];
}

function getListingById(int $id): array
{
    $listings = getListings();
    return $listings[$id];
}
