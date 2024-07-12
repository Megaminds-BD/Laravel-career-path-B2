<?php
// use DTO (Data Transfer Object)

function updateAddress($user, Address $address)
{
    // Update the address
}

class User
{
}

// DTO (Data Transfer Object)
class Address
{
    public function __construct(public string $country, public string $city, public string $street, public string $house)
    {
    }
}

$address = new Address(
    country: 'Bangladesh',
    city: 'Dhaka',
    street: 'Mirpur',
    house: '1'
);

updateAddress(new User(), $address);

