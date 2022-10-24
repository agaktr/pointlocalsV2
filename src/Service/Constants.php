<?php


namespace App\Service;


class Constants
{

    const POPULAR_SEARCHES = [
        'Stationery Shop' => 'Stationary.svg',
        'Hair Salon' => 'Saloon.svg',
        'Restaurant' => 'Restaurant.svg',
        'Mobile Shop' => 'mobiles.svg',
        'Meat Shop' => 'Meat Shops.svg',
        'Jewellery Shop' => 'Jewellery.svg',
        'Hospital' => 'Hospital.svg',
        'Hardware Shop' => 'Hardware.svg',
        'Fitness Centre' => 'Gym.svg',
        'Groceries Shop' => 'Groceries.svg',
        'Fuel Stations' => 'Fuel.svg',
        'Footwear Shop' => 'Footwear.svg',
        'College' => 'Education.svg',
        'Clothing Shop' => 'Clothing.svg',
        'Clinic' => 'Clinic.svg',
        'Beauty Parlour' => 'Beauty Parlour.svg',
        'Bank' => 'Bank.svg',
        'ATM' => 'atm.svg',
    ];


    const IMAGE_SIZES = [
      [200,150],
      [400,300]
    ];

    /* Starting Point and Ending point should be same so it can be like circle.
    * First Always latitude and then comma(,) and then longitude 
    */
    const POLYGON_POINTS  = array(
      "17.278202228181513,78.64631652832033", // Starting  Point 
      "17.341790242483995,78.66004943847658",
      "17.386190458118914,78.68442535400392",
      "17.451869902862526,78.66760253906251",
      "17.567120176650945,78.62091064453126",
      "17.607047779170635,78.44444274902345",
      "17.56122847261106,78.3757781982422",
      "17.53700500883248,78.23707580566408",
      "17.421735634153865,78.26866149902345",
      "17.258531382835685,78.37989807128906",
      "17.20606554249907,78.39088439941408",
      "17.278202228181513,78.64631652832033" // Ending Point
    );
}