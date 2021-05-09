<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            [
               'name' => 'Civitivecchia',
               'country' => 'Italy',
               'coords' => '42.098295, 11.781202'
            ], [
               'name' => 'Nice',
               'country' => 'France',
               'coords' => '43.693733, 7.284006'
            ], [
               'name' => 'Lisbon',
               'country' => 'Portugal',
               'coords' => '38.713408, -9.121540'
            ], [
               'name' => 'Miami',
               'country' => 'USA',
               'coords' => '25.778196, -80.173239'
            ], [
               'name' => 'St. John',
               'country' => 'U.S. Virgin Islands',
               'coords' => '18.332365, -64.797043'
            ], [
               'name' => 'Marigot',
               'country' => 'Saint Martin',
               'coords' => '18.068572, -63.092385'
            ], [
               'name' => 'Gustavia',
               'country' => 'St. Barts',
               'coords' => '17.899931, -62.854097'
            ], [
               'name' => 'Virgin Gorda',
               'country' => 'British Virgin islands',
               'coords' => '18.451785, -64.439957'
            ], [
               'name' => 'Basseterre',
               'country' => 'St. Kitts',
               'coords' => '17.290101, -62.722887'
            ], [
               'name' => 'St. Johns',
               'country' => 'Antigua',
               'coords' => '17.121311, -61.847923'
            ], [
               'name' => 'Hong Kong',
               'country' => 'China',
               'coords' => '22.294739, 114.167187'
            ], [
               'name' => 'Singapore',
               'country' => 'Singapore',
               'coords' => '1.262184, 103.818882'
            ], [
               'name' => 'Stockholm',
               'country' => 'Sweden',
               'coords' => '59.344874, 18.128597'
            ], [
               'name' => 'Southampton',
               'country' => 'England',
               'coords' => '50.900839, -1.417650'
            ], [
               'name' => 'Helsinki',
               'country' => 'Finland',
               'coords' => '60.163801, 24.955933'
            ], [
               'name' => 'St. Petersburg',
               'country' => 'Russia',
               'coords' => '59.932842, 30.286744'
            ], [
               'name' => 'Copenhagen',
               'country' => 'Denmark',
               'coords' => '55.689472, 12.600065'
            ], [
               'name' => 'Amsterdam',
               'country' => 'Netherlands',
               'coords' => '52.394210, 4.818018'
            ], [
               'name' => 'Zeebrugge',
               'country' => 'Belgium',
               'coords' => '51.344540, 3.182048'
            ], [
               'name' => 'Tellinn',
               'country' => 'Estonia',
               'coords' => '59.446299, 24.764483'
            ], [
               'name' => 'Barcelona',
               'country' => 'Spain',
               'coords' => '41.371004, 2.182594'
            ], [
               'name' => 'Bordeau',
               'country' => 'France',
               'coords' => '44.844139, -0.569504'
            ], [
               'name' => 'St Peter Port',
               'country' => 'Quernsey',
               'coords' => '49.455428, -2.528440'
            ], [
               'name' => 'St. Jean de Lux',
               'country' => 'France',
               'coords' => '43.395441, -1.671416'
            ], [
               'name' => 'Bilbao',
               'country' => 'Spain',
               'coords' => '43.339041, -3.024852'
            ], [
               'name' => 'Porto',
               'country' => 'Portugal',
               'coords' => '41.140125, -8.610779'
            ], [
               'name' => 'Gibraltar',
               'country' => 'United Kingdom',
               'coords' => '36.147455, -5.366097'
            ], [
               'name' => 'Rome',
               'country' => 'Italy',
               'coords' => '41.890124, 12.492342'
            ], [
               'name' => 'Bruge',
               'country' => 'Belgium',
               'coords' => '51.208935, 3.224323'
            ], [
               'name' => 'Leixoes',
               'country' => 'Portugal',
               'coords' => '41.178018, -8.700373'
            ], [
               'name' => 'Lima',
               'country' => 'Peru',
               'coords' => '-12.125130, -77.040837'
            ], [
               'name' => 'Caldera',
               'country' => 'Costa Rica',
               'coords' => '9.912540, -84.719478'
            ], [
               'name' => 'San Juan Del Sur',
               'country' => 'Nicaragua',
               'coords' => '11.255884, -85.877132'
            ], [
               'name' => 'Acajutla',
               'country' => 'El Salvador',
               'coords' => '13.574831, -89.839825'
            ], [
               'name' => 'Punta Arenas',
               'country' => 'Chile',
               'coords' => '-53.169372, -70.906798'
            ], [
               'name' => 'San Diego',
               'country' => 'California',
               'coords' => '32.718000, -117.174954'
            ], [
               'name' => 'Cabo San Lucas',
               'country' => 'Mexico',
               'coords' => '22.881383, -109.897628'
            ], [
               'name' => 'Puerto Vallarta',
               'country' => 'Mexico',
               'coords' => '20.657905, -105.242289'
            ], [
               'name' => 'Manzanillo',
               'country' => 'Mexico',
               'coords' => '19.057349, -104.31316'
            ], [
               'name' => 'Puntarenas',
               'country' => 'Costa Rica',
               'coords' => '9.970521, -84.830631'
            ], [
               'name' => 'Puerto Quetzal',
               'country' => 'Quatemala',
               'coords' => '13.924068, -90.786052'
            ], [
               'name' => 'Buenos Aires',
               'country' => 'Argentina',
               'coords' => '-34.581351, -58.365829'
            ], [
               'name' => 'Pisco',
               'country' => 'Peru',
               'coords' => '-13.801331, -76.290650'
            ], [
               'name' => 'Montevideo',
               'country' => 'Uruguay',
               'coords' => '-34.902648, -56.214122'
            ], [
               'name' => 'Punta Del Esta',
               'country' => 'Uruguay',
               'coords' => '-34.957736, -54.949456'
            ], [
               'name' => 'Elba',
               'country' => 'Portoferraio,Italy',
               'coords' => '42.811143, 10.323452'
            ], [
               'name' => 'Bastia',
               'country' => 'Corsica',
               'coords' => '42.703718, 9.454413'
            ], [
               'name' => 'Florence/Pisa',
               'country' => 'Livorno,Italy',
               'coords' => '43.551150, 10.300334'
            ], [
               'name' => 'Portofino',
               'country' => 'Italy',
               'coords' => '44.303199, 9.209883'
            ], [
               'name' => 'St. Tropez',
               'country' => 'France',
               'coords' => '43.274923, 6.632778'
            ], [
               'name' => 'Monte Carlo',
               'country' => 'Monaco',
               'coords' => '43.735513, 7.430606'
            ], [
               'name' => 'Manila',
               'country' => 'Philippines',
               'coords' => '14.581484, 120.970693'
            ], [
               'name' => 'Sandakan',
               'country' => 'Malaysia',
               'coords' => '5.809644, 118.083841'
            ], [
               'name' => 'Palopo (Sulawesi)',
               'country' => 'Indonesia',
               'coords' => '-2.984626, 120.208984'
            ], [
               'name' => 'Komodo',
               'country' => 'Indonesia',
               'coords' => '-8.571941, 119.502802'
            ], [
               'name' => 'Benoa Bali',
               'country' => 'Indonesia',
               'coords' => '-8.743252, 115.212353'
            ], [
               'name' => 'Semarang',
               'country' => 'Indonesia',
               'coords' => '-6.944478, 110.423106'
            ], [
               'name' => 'Hanoi (Ha Long Bay)',
               'country' => 'Vietnam',
               'coords' => '20.975346, 107.052786'
            ], [
               'name' => 'Hue (Danang)',
               'country' => 'Vietnam',
               'coords' => '16.118473, 108.214405'
            ], [
               'name' => 'Ho Chi Minh City',
               'country' => 'Vietnam',
               'coords' => '10.767165, 106.708086'
            ], [
               'name' => 'Bankok (Klong Toey)',
               'country' => 'Thailand',
               'coords' => '13.702787, 100.577391'
            ], [
               'name' => 'Ko Samui',
               'country' => 'Thailand',
               'coords' => '9.537866, 99.931399'
            ], [
               'name' => 'Yangon (Rangoon)',
               'country' => 'Myanmar',
               'coords' => '16.668446, 96.247133'
            ], [
               'name' => 'Phuket',
               'country' => 'Thailand',
               'coords' => '7.820582, 98.405574'
            ], [
               'name' => 'Lankawi',
               'country' => 'Malaysia',
               'coords' => '6.258458, 99.735251'
            ], [
               'name' => 'Penang',
               'country' => 'Malaysia',
               'coords' => '5.419838, 100.346162'
            ], [
               'name' => 'Port Klang',
               'country' => 'Malaysia',
               'coords' => '2.986359, 101.335014'
            ], [
               'name' => 'Belawan',
               'country' => 'Sumatra',
               'coords' => '3.788123, 98.698810'
            ], [
               'name' => 'Athens',
               'country' => 'Greece',
               'coords' => '37.935919, 23.624266'
            ], [
               'name' => 'Sorrento',
               'country' => 'Italy',
               'coords' => '40.630882, 14.377216'
            ], [
               'name' => 'Giardini Naxos Taormina',
               'country' => 'Sicily',
               'coords' => '37.842384, 15.289369'
            ], [
               'name' => 'Siracusa',
               'country' => 'Sicily',
               'coords' => '37.060928, 15.291240'
            ], [
               'name' => 'Katakolon',
               'country' => 'Greece',
               'coords' => '37.645371, 21.324977'
            ], [
               'name' => 'Nauplion',
               'country' => 'Greece',
               'coords' => '37.569456, 22.800536'
            ], [
               'name' => 'Valetta',
               'country' => 'Malta',
               'coords' => '35.894529, 14.499168'
            ], [
               'name' => 'Mykonos',
               'country' => 'Greece',
               'coords' => '37.449802, 25.323721'
            ], [
               'name' => 'Ephesus (Kusadasi)',
               'country' => 'Turkey',
               'coords' => '37.948555, 27.369074'
            ], [
               'name' => 'Patmos',
               'country' => 'Greece',
               'coords' => '37.323610, 26.545123'
            ], [
               'name' => 'Santorini',
               'country' => 'Greece',
               'coords' => '36.416017, 25.423186'
            ], [
               'name' => 'Kotor',
               'country' => 'Montenegro',
               'coords' => '42.425744, 18.767125'
            ], [
               'name' => 'Dubrovnik',
               'country' => 'Croatia',
               'coords' => '42.640420, 18.114415'
            ], [
               'name' => 'Hvar',
               'country' => 'Croatia',
               'coords' => '43.185183, 16.581297'
            ], [
               'name' => 'Opatija',
               'country' => 'Croatia',
               'coords' => '45.348681, 14.325595'
            ], [
               'name' => 'Split',
               'country' => 'Croatia',
               'coords' => '43.504581, 16.440931'
            ], [
               'name' => 'Venice',
               'country' => 'Italy',
               'coords' => '45.429984, 12.322986'
            ], [
               'name' => 'Hamburg',
               'country' => 'Germany',
               'coords' => '53.530572, 9.960295'
            ], [
               'name' => 'Bergen',
               'country' => 'Norway',
               'coords' => '60.390338, 5.308625'
            ], [
               'name' => 'Flam',
               'country' => 'Norway',
               'coords' => '60.866345, 7.125772'
            ], [
               'name' => 'Gudvangen',
               'country' => 'Norway',
               'coords' => '60.881453, 6.842087'
            ], [
               'name' => 'Svolvaer (Lofoten)',
               'country' => 'Norway',
               'coords' => '68.230784, 14.566524'
            ], [
               'name' => 'Trollfjord',
               'country' => 'Norway',
               'coords' => '68.363817, 14.936933'
            ], [
               'name' => 'Olden',
               'country' => 'Norway',
               'coords' => '61.843455, 6.810412'
            ], [
               'name' => 'Stavanger',
               'country' => 'Norway',
               'coords' => '58.973562, 5.726505'
            ], [
               'name' => 'Tromso',
               'country' => 'Norway',
               'coords' => '69.648721, 18.962950'
            ], [
               'name' => 'Honnigsvag',
               'country' => 'Norway',
               'coords' => '70.980381, 25.968539'
            ], [
               'name' => 'Havana',
               'country' => 'Cuba',
               'coords' => '23.137549, -82.346889'
            ], [
               'name' => 'Panama Canal',
               'country' => 'Panama',
               'coords' => '9.153267, -79.811610'
            ], [
               'name' => 'Fuerte Amador (Panama City)',
               'country' => 'Panama',
               'coords' => '8.914403, -79.517936'
            ], [
               'name' => 'Golfito',
               'country' => 'Costa Rica',
               'coords' => '8.635750, -83.166170'
            ], [
               'name' => 'Quepos',
               'country' => 'Costa Rica',
               'coords' => '9.430855, -84.174089'
            ], [
               'name' => 'Papagayo',
               'country' => 'Costa Rica',
               'coords' => '10.564357, -85.706603'
            ], [
               'name' => 'Puerto Chiapas',
               'country' => 'Mexico',
               'coords' => '14.707489, -92.401988'
            ], [
               'name' => 'Huatulco',
               'country' => 'Mexico',
               'coords' => '15.752774, -96.129246'
            ], [
               'name' => 'Mazanillo',
               'country' => 'Mexico',
               'coords' => '19.057258, -104.313240'
            ], [
               'name' => 'Puerto Villarta',
               'country' => 'Mexico',
               'coords' => '20.657747, -105.242105'
            ], [
               'name' => 'Belfast',
               'country' => 'Northern Ireland',
               'coords' => '54.616918, -5.904557'
            ], [
               'name' => 'Reykjavik',
               'country' => 'Iceland',
               'coords' => '64.155258, -21.862103'
            ], [
               'name' => 'Isafjordur',
               'country' => 'Iceland',
               'coords' => '66.067218, -23.117865'
            ], [
               'name' => 'Akureyri',
               'country' => 'Iceland',
               'coords' => '65.687489, -18.075204'
            ], [
               'name' => 'Seydisfjordur',
               'country' => 'Iceland',
               'coords' => '65.263539, -14.006734'
            ], [
               'name' => 'Oban',
               'country' => 'Scotland',
               'coords' => '56.415246, -5.475846'
            ], [
               'name' => 'Dublin',
               'country' => 'Ireland',
               'coords' => '53.347043, -6.192952'
            ], [
               'name' => 'Waterford',
               'country' => 'Ireland',
               'coords' => '52.267187, -7.030222'
            ], [
               'name' => 'Fowey',
               'country' => 'England',
               'coords' => '50.335453, -4.630722'
            ], [
               'name' => 'Cartagena',
               'country' => 'Columbia',
               'coords' => '10.404414, -75.531594'
            ], [
               'name' => 'Salaverry (Trujillo)',
               'country' => 'Peru',
               'coords' => '-8.227506, -78.982976'
            ], [
               'name' => 'Antofagasta',
               'country' => 'Chile',
               'coords' => '-23.649169, -70.404898'
            ], [
               'name' => 'Valparaiso',
               'country' => 'Chile',
               'coords' => '-33.036769, -71.626519'
            ], [
               'name' => 'Puerto Montt',
               'country' => 'Chile',
               'coords' => '-41.483662, -72.956314'
            ], [
               'name' => 'Puerto Chacabuco',
               'country' => 'Chile',
               'coords' => '-45.464249, -72.825110'
            ], [
               'name' => 'Chilean Fjords',
               'country' => 'Chile',
               'coords' => ''
            ], [
               'name' => 'Beagle Channel',
               'country' => 'Argentina',
               'coords' => '-54.888341, -67.844249'
            ], [
               'name' => 'Ushuaia',
               'country' => 'Argentina',
               'coords' => '-54.810236, -68.299152'
            ], [
               'name' => 'Sydney',
               'country' => 'Australia',
               'coords' => '-33.861279, 151.188795'
            ], [
               'name' => 'Hobart',
               'country' => 'Tasmania',
               'coords' => '-42.882604, 147.339137'
            ], [
               'name' => 'Melbourne',
               'country' => 'Australia',
               'coords' => '-37.843925, 144.914801'
            ], [
               'name' => 'Milford Sound',
               'country' => 'New Zealand',
               'coords' => '-44.660873, 167.911399'
            ], [
               'name' => 'Dunedin',
               'country' => 'New Zealand',
               'coords' => '-45.813332, 170.625208'
            ], [
               'name' => 'Akaroa',
               'country' => 'New Zealand',
               'coords' => '-43.808859, 172.959656'
            ], [
               'name' => 'Kaikoura',
               'country' => 'New Zealand',
               'coords' => '-42.426812, 173.673481'
            ], [
               'name' => 'Napier',
               'country' => 'New Zealand',
               'coords' => '-39.475664, 176.921460'
            ], [
               'name' => 'Tauranga',
               'country' => 'New Zealand',
               'coords' => '-37.658495, 176.172934'
            ], [
               'name' => 'Auckland',
               'country' => 'New Zealand',
               'coords' => '-36.841198, 174.765423'
            ], [
               'name' => 'At Sea',
               'country' => '',
               'coords' => ''
            ], [
               'name' => 'Tokyo',
               'country' => 'Japan',
               'coords' => '35.648118277024594, 139.7706139845724'
            ], [
               'name' => 'Hakodate',
               'country' => 'Japan',
               'coords' => '41.773529, 140.722645'
            ], [
               'name' => 'Akita',
               'country' => 'Japan',
               'coords' => '39.758020, 140.055447'
            ], [
               'name' => 'Kanazawa',
               'country' => 'Japan',
               'coords' => '36.608810, 136.618535'
            ], [
               'name' => 'Sakaminato',
               'country' => 'Japan',
               'coords' => '35.536119, 133.251003'
            ], [
               'name' => 'Busan',
               'country' => 'South Korea',
               'coords' => '35.117784, 129.052575'
            ], [
               'name' => 'Kitakyushu',
               'country' => 'Japan',
               'coords' => '33.944899, 130.956048'
            ], [
               'name' => 'Cruising Inland Sea',
               'country' => 'Japan',
               'coords' => '34.297311, 133.371027'
            ], [
               'name' => 'Hiroshima',
               'country' => 'Japan',
               'coords' => '34.352319, 132.470455'
            ], [
               'name' => 'Takamatsu',
               'country' => 'Japan',
               'coords' => '34.356122, 134.047975'
            ], [
               'name' => 'Kobe',
               'country' => 'Japan',
               'coords' => '34.679265, 135.185475'
            ], [
               'name' => 'Shimizu',
               'country' => 'Japan',
               'coords' => '35.468853, 139.694765'
            ], [
               'name' => 'Yokohama',
               'country' => 'Japan',
               'coords' => '35.455282, 139.683118'
            ], [
               'name' => 'Portimao',
               'country' => 'Portugal',
               'coords' => '37.127684, -8.529748'
            ], [
               'name' => 'Seville',
               'country' => 'Spain',
               'coords' => '37.373371, -5.992136'
            ], [
               'name' => 'Gibralter',
               'country' => 'United Kingdom',
               'coords' => '36.147605, -5.366040'
            ], [
               'name' => 'Palma De Mallorca',
               'country' => 'Spain',
               'coords' => '39.552923, 2.632118'
            ], [
               'name' => 'Valencia',
               'country' => 'Spain',
               'coords' => '39.438882, -0.312724'
            ], [
               'name' => 'Mahon, Menorca',
               'country' => 'Spain',
               'coords' => '39.890874, 4.265153'
            ], [
               'name' => 'Sete',
               'country' => 'France',
               'coords' => '43.403725, 3.714709'
            ], [
               'name' => 'Marseilles',
               'country' => 'France',
               'coords' => '43.298381, 5.361294'
            ], [
               'name' => 'Sanury Sur Mer',
               'country' => 'France',
               'coords' => '43.114621, 5.802184'
            ], [
               'name' => 'Calvi Corsica',
               'country' => 'France',
               'coords' => '42.566831, 8.760960'
            ], [
               'name' => 'Cannes',
               'country' => 'France',
               'coords' => '43.546518, 7.018772'
            ], [
               'name' => 'Los Angeles',
               'country' => 'USA',
               'coords' => '33.732450, -118.276105'
            ], [
               'name' => 'Hilo',
               'country' => 'Hawaii',
               'coords' => '19.730473, -155.054335'
            ], [
               'name' => 'Lahaina, Maui',
               'country' => 'Hawaii',
               'coords' => '20.869341, -156.677102'
            ], [
               'name' => 'Honolulu, Oahu',
               'country' => 'Hawaii',
               'coords' => '21.309402, -157.871192'
            ], [
               'name' => 'Nawiliwili, Kuwai',
               'country' => 'Hawaii',
               'coords' => '21.955115, -159.352389'
            ], [
               'name' => 'Bora Bora',
               'country' => 'French Polynesia',
               'coords' => '-16.508296, -151.754866'
            ], [
               'name' => 'Moorea',
               'country' => 'French Polynesia',
               'coords' => '-17.508583, -149.855916'
            ], [
               'name' => 'Papeete, Tahiti',
               'country' => 'French Polynesia',
               'coords' => '-17.539040, -149.570421'
            ], [
               'name' => 'Rorotonga',
               'country' => 'Cook Islands',
               'coords' => '-21.270907, -159.781974'
            ], [
               'name' => 'Gisborne',
               'country' => 'New Zealand',
               'coords' => '-38.674645, 178.024326'
            ], [
               'name' => 'Wellington',
               'country' => 'New Zealand',
               'coords' => '-41.284445, 174.780118'
            ], [
               'name' => 'Picton',
               'country' => 'New Zealand',
               'coords' => '-41.281067, 174.009205'
            ], [
               'name' => 'Nelson',
               'country' => 'New Zealand',
               'coords' => '-41.281167, 173.207346'
            ], [
               'name' => 'New Plymouth',
               'country' => 'New Zealand',
               'coords' => '-39.056832, 174.036023'
            ], [
               'name' => 'Cape Town',
               'country' => 'South Africa',
               'coords' => ''
            ], [
               'name' => 'Lanzarote',
               'country' => 'Canary Islands',
               'coords' => ''
            ], [
               'name' => 'Gran Canaria',
               'country' => 'Canary Islands',
               'coords' => ''
            ], [
               'name' => 'Ko Panyee',
               'country' => 'Thailand',
               'coords' => '8.335751, 98.503311'
            ], [
               'name' => 'Naples',
               'country' => 'Italy',
               'coords' => '40.838580, 14.259462'
            ]
   
         ]);
    }
}
