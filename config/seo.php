<?php

return [

    'brand' => env('APP_NAME', 'F&K Pentele'),

    'alternate_name' => 'Piactéri Kulcsmásoló',

    'url' => env('APP_URL', 'https://kulcsmasoloduna.hu'),

    'locale' => 'hu_HU',

    'city' => 'Dunaújváros',

    'street_address' => env('BUSINESS_STREET', 'szolgáltatóház 1'),

    'postal_code' => env('BUSINESS_POSTAL_CODE', '2400'),

    'address' => env('BUSINESS_ADDRESS', 'Dunaújváros, szolgáltatóház 1, 2400'),

    'geo' => [
        'latitude' => 46.9598336,
        'longitude' => 18.9349077,
    ],

    'phone' => env('BUSINESS_PHONE', '0670 416 3794'),

    'email' => env('BUSINESS_EMAIL', 'info@kulcsmasoloduna.hu'),

    'google_maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2723.094483307335!2d18.9349077!3d46.9598336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474217804d088141%3A0x2074bc3160cce364!2zUGlhYyB0w6lyaSBLdWxjc23DoXNvbMOzLCBGICYgSyBQZW50ZWxlIEtmdC4!5e0!3m2!1shu!2shu!4v1783322199274!5m2!1shu!2shu',

    'facebook' => 'https://www.facebook.com/profile.php?id=100084339594955',

    'default_description' => 'Kulcsmásolás, gravírozás és cipőjavítás Dunaújvárosban. Lakás-, autó- és biztonsági kulcsok, chipek, beléptető biléták, élezés – gyors, megbízható kiszolgálás.',

    'og_image' => '/storage/images/hero-2.png',

    'twitter_handle' => null,

    'opening_hours' => [
        'weekdays' => ['open' => '08:00', 'close' => '17:00'],
        'saturday' => ['open' => '08:00', 'close' => '12:00'],
    ],

];
