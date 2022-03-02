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
               'latitude' => '42.098295',
				'longitude' => '11.781202'
            ], [
               'name' => 'Nice',
               'country' => 'France',
               'latitude' => '43.693733',
				'longitude' => '7.284006'
            ], [
               'name' => 'Lisbon',
               'country' => 'Portugal',
               'latitude' => '38.713408',
				'longitude' => '-9.121540'
            ], [
               'name' => 'Miami',
               'country' => 'USA',
               'latitude' => '25.778196',
				'longitude' => '-80.173239'
            ], [
               'name' => 'St. John',
               'country' => 'U.S. Virgin Islands',
               'latitude' => '18.332365',
				'longitude' => '-64.797043'
            ], [
               'name' => 'Marigot',
               'country' => 'Saint Martin',
               'latitude' => '18.068572',
				'longitude' => '-63.092385'
            ], [
               'name' => 'Gustavia',
               'country' => 'St. Barts',
               'latitude' => '17.899931',
				'longitude' => '-62.854097'
            ], [
               'name' => 'Virgin Gorda',
               'country' => 'British Virgin islands',
               'latitude' => '18.451785',
				'longitude' => '-64.439957'
            ], [
               'name' => 'Basseterre',
               'country' => 'St. Kitts',
               'latitude' => '17.290101',
				'longitude' => '-62.722887'
            ], [
               'name' => 'St. Johns',
               'country' => 'Antigua',
               'latitude' => '17.121311',
				'longitude' => '-61.847923'
            ], [
               'name' => 'Hong Kong',
               'country' => 'China',
               'latitude' => '22.294739',
				'longitude' => '114.167187'
            ], [
               'name' => 'Singapore',
               'country' => 'Singapore',
               'latitude' => '1.262184',
				'longitude' => '103.818882'
            ], [
               'name' => 'Stockholm',
               'country' => 'Sweden',
               'latitude' => '59.344874',
				'longitude' => '18.128597'
            ], [
               'name' => 'Southampton',
               'country' => 'England',
               'latitude' => '50.900839',
				'longitude' => '-1.417650'
            ], [
               'name' => 'Helsinki',
               'country' => 'Finland',
               'latitude' => '60.163801',
				'longitude' => '24.955933'
            ], [
               'name' => 'St. Petersburg',
               'country' => 'Russia',
               'latitude' => '59.932842',
				'longitude' => '30.286744'
            ], [
               'name' => 'Copenhagen',
               'country' => 'Denmark',
               'latitude' => '55.689472',
				'longitude' => '12.600065'
            ], [
               'name' => 'Amsterdam',
               'country' => 'Netherlands',
               'latitude' => '52.394210',
				'longitude' => '4.818018'
            ], [
               'name' => 'Zeebrugge',
               'country' => 'Belgium',
               'latitude' => '51.344540',
				'longitude' => '3.182048'
            ], [
               'name' => 'Tellinn',
               'country' => 'Estonia',
               'latitude' => '59.446299',
				'longitude' => '24.764483'
            ], [
               'name' => 'Barcelona',
               'country' => 'Spain',
               'latitude' => '41.371004',
				'longitude' => '2.182594'
            ], [
               'name' => 'Bordeau',
               'country' => 'France',
               'latitude' => '44.844139',
				'longitude' => '-0.569504'
            ], [
               'name' => 'St Peter Port',
               'country' => 'Quernsey',
               'latitude' => '49.455428',
				'longitude' => '-2.528440'
            ], [
               'name' => 'St. Jean de Lux',
               'country' => 'France',
               'latitude' => '43.395441',
				'longitude' => '-1.671416'
            ], [
               'name' => 'Bilbao',
               'country' => 'Spain',
               'latitude' => '43.339041',
				'longitude' => '-3.024852'
            ], [
               'name' => 'Porto',
               'country' => 'Portugal',
               'latitude' => '41.140125',
				'longitude' => '-8.610779'
            ], [
               'name' => 'Gibraltar',
               'country' => 'United Kingdom',
               'latitude' => '36.147455',
				'longitude' => '-5.366097'
            ], [
               'name' => 'Rome',
               'country' => 'Italy',
               'latitude' => '41.890124',
				'longitude' => '12.492342'
            ], [
               'name' => 'Bruge',
               'country' => 'Belgium',
               'latitude' => '51.208935',
				'longitude' => '3.224323'
            ], [
               'name' => 'Leixoes',
               'country' => 'Portugal',
               'latitude' => '41.178018',
				'longitude' => '-8.700373'
            ], [
               'name' => 'Lima',
               'country' => 'Peru',
               'latitude' => '-12.125130',
				'longitude' => '-77.040837'
            ], [
               'name' => 'Caldera',
               'country' => 'Costa Rica',
               'latitude' => '9.912540',
				'longitude' => '-84.719478'
            ], [
               'name' => 'San Juan Del Sur',
               'country' => 'Nicaragua',
               'latitude' => '11.255884',
				'longitude' => '-85.877132'
            ], [
               'name' => 'Acajutla',
               'country' => 'El Salvador',
               'latitude' => '13.574831',
				'longitude' => '-89.839825'
            ], [
               'name' => 'Punta Arenas',
               'country' => 'Chile',
               'latitude' => '-53.169372',
				'longitude' => '-70.906798'
            ], [
               'name' => 'San Diego',
               'country' => 'California',
               'latitude' => '32.718000',
				'longitude' => '-117.174954'
            ], [
               'name' => 'Cabo San Lucas',
               'country' => 'Mexico',
               'latitude' => '22.881383',
				'longitude' => '-109.897628'
            ],  [
               'name' => 'Manzanillo',
               'country' => 'Mexico',
               'latitude' => '19.057349',
				'longitude' => '-104.31316'
            ], [
               'name' => 'Puntarenas',
               'country' => 'Costa Rica',
               'latitude' => '9.970521',
				'longitude' => '-84.830631'
            ], [
               'name' => 'Puerto Quetzal',
               'country' => 'Quatemala',
               'latitude' => '13.924068',
				'longitude' => '-90.786052'
            ], [
               'name' => 'Buenos Aires',
               'country' => 'Argentina',
               'latitude' => '-34.581351',
				'longitude' => '-58.365829'
            ], [
               'name' => 'Pisco',
               'country' => 'Peru',
               'latitude' => '-13.801331',
				'longitude' => '-76.290650'
            ], [
               'name' => 'Montevideo',
               'country' => 'Uruguay',
               'latitude' => '-34.902648',
				'longitude' => '-56.214122'
            ], [
               'name' => 'Punta Del Esta',
               'country' => 'Uruguay',
               'latitude' => '-34.957736',
				'longitude' => '-54.949456'
            ], [
               'name' => 'Elba',
               'country' => 'Portoferraio,Italy',
               'latitude' => '42.811143',
				'longitude' => '10.323452'
            ], [
               'name' => 'Bastia',
               'country' => 'Corsica',
               'latitude' => '42.703718',
				'longitude' => '9.454413'
            ], [
               'name' => 'Florence/Pisa',
               'country' => 'Livorno,Italy',
               'latitude' => '43.551150',
				'longitude' => '10.300334'
            ], [
               'name' => 'Portofino',
               'country' => 'Italy',
               'latitude' => '44.303199',
				'longitude' => '9.209883'
            ], [
               'name' => 'St. Tropez',
               'country' => 'France',
               'latitude' => '43.274923',
				'longitude' => '6.632778'
            ], [
               'name' => 'Monte Carlo',
               'country' => 'Monaco',
               'latitude' => '43.735513',
				'longitude' => '7.430606'
            ], [
               'name' => 'Manila',
               'country' => 'Philippines',
               'latitude' => '14.581484',
				'longitude' => '120.970693'
            ], [
               'name' => 'Sandakan',
               'country' => 'Malaysia',
               'latitude' => '5.809644',
				'longitude' => '118.083841'
            ], [
               'name' => 'Palopo (Sulawesi)',
               'country' => 'Indonesia',
               'latitude' => '-2.984626',
				'longitude' => '120.208984'
            ], [
               'name' => 'Komodo',
               'country' => 'Indonesia',
               'latitude' => '-8.571941',
				'longitude' => '119.502802'
            ], [
               'name' => 'Benoa Bali',
               'country' => 'Indonesia',
               'latitude' => '-8.743252',
				'longitude' => '115.212353'
            ], [
               'name' => 'Semarang',
               'country' => 'Indonesia',
               'latitude' => '-6.944478',
				'longitude' => '110.423106'
            ], [
               'name' => 'Hanoi (Ha Long Bay)',
               'country' => 'Vietnam',
               'latitude' => '20.975346',
				'longitude' => '107.052786'
            ], [
               'name' => 'Hue (Danang)',
               'country' => 'Vietnam',
               'latitude' => '16.118473',
				'longitude' => '108.214405'
            ], [
               'name' => 'Ho Chi Minh City',
               'country' => 'Vietnam',
               'latitude' => '10.767165',
				'longitude' => '106.708086'
            ], [
               'name' => 'Bankok (Klong Toey)',
               'country' => 'Thailand',
               'latitude' => '13.702787',
				'longitude' => '100.577391'
            ], [
               'name' => 'Ko Samui',
               'country' => 'Thailand',
               'latitude' => '9.537866',
				'longitude' => '99.931399'
            ], [
               'name' => 'Yangon (Rangoon)',
               'country' => 'Myanmar',
               'latitude' => '16.668446',
				'longitude' => '96.247133'
            ], [
               'name' => 'Phuket',
               'country' => 'Thailand',
               'latitude' => '7.820582',
				'longitude' => '98.405574'
            ], [
               'name' => 'Lankawi',
               'country' => 'Malaysia',
               'latitude' => '6.258458',
				'longitude' => '99.735251'
            ], [
               'name' => 'Penang',
               'country' => 'Malaysia',
               'latitude' => '5.419838',
				'longitude' => '100.346162'
            ], [
               'name' => 'Port Klang',
               'country' => 'Malaysia',
               'latitude' => '2.986359',
				'longitude' => '101.335014'
            ], [
               'name' => 'Belawan',
               'country' => 'Sumatra',
               'latitude' => '3.788123',
				'longitude' => '98.698810'
            ], [
               'name' => 'Athens',
               'country' => 'Greece',
               'latitude' => '37.935919',
				'longitude' => '23.624266'
            ], [
               'name' => 'Sorrento',
               'country' => 'Italy',
               'latitude' => '40.630882',
				'longitude' => '14.377216'
            ], [
               'name' => 'Giardini Naxos Taormina',
               'country' => 'Sicily',
               'latitude' => '37.842384',
				'longitude' => '15.289369'
            ], [
               'name' => 'Siracusa',
               'country' => 'Sicily',
               'latitude' => '37.060928',
				'longitude' => '15.291240'
            ], [
               'name' => 'Katakolon',
               'country' => 'Greece',
               'latitude' => '37.645371',
				'longitude' => '21.324977'
            ], [
               'name' => 'Nauplion',
               'country' => 'Greece',
               'latitude' => '37.569456',
				'longitude' => '22.800536'
            ], [
               'name' => 'Valetta',
               'country' => 'Malta',
               'latitude' => '35.894529',
				'longitude' => '14.499168'
            ], [
               'name' => 'Mykonos',
               'country' => 'Greece',
               'latitude' => '37.449802',
				'longitude' => '25.323721'
            ], [
               'name' => 'Ephesus (Kusadasi)',
               'country' => 'Turkey',
               'latitude' => '37.948555',
				'longitude' => '27.369074'
            ], [
               'name' => 'Patmos',
               'country' => 'Greece',
               'latitude' => '37.323610',
				'longitude' => '26.545123'
            ], [
               'name' => 'Santorini',
               'country' => 'Greece',
               'latitude' => '36.416017',
				'longitude' => '25.423186'
            ], [
               'name' => 'Kotor',
               'country' => 'Montenegro',
               'latitude' => '42.425744',
				'longitude' => '18.767125'
            ], [
               'name' => 'Dubrovnik',
               'country' => 'Croatia',
               'latitude' => '42.640420',
				'longitude' => '18.114415'
            ], [
               'name' => 'Hvar',
               'country' => 'Croatia',
               'latitude' => '43.185183',
				'longitude' => '16.581297'
            ], [
               'name' => 'Opatija',
               'country' => 'Croatia',
               'latitude' => '45.348681',
				'longitude' => '14.325595'
            ], [
               'name' => 'Split',
               'country' => 'Croatia',
               'latitude' => '43.504581',
				'longitude' => '16.440931'
            ], [
               'name' => 'Venice',
               'country' => 'Italy',
               'latitude' => '45.429984',
				'longitude' => '12.322986'
            ], [
               'name' => 'Hamburg',
               'country' => 'Germany',
               'latitude' => '53.530572',
				'longitude' => '9.960295'
            ], [
               'name' => 'Bergen',
               'country' => 'Norway',
               'latitude' => '60.390338',
				'longitude' => '5.308625'
            ], [
               'name' => 'Flam',
               'country' => 'Norway',
               'latitude' => '60.866345',
				'longitude' => '7.125772'
            ], [
               'name' => 'Gudvangen',
               'country' => 'Norway',
               'latitude' => '60.881453',
				'longitude' => '6.842087'
            ], [
               'name' => 'Svolvaer (Lofoten)',
               'country' => 'Norway',
               'latitude' => '68.230784',
				'longitude' => '14.566524'
            ], [
               'name' => 'Trollfjord',
               'country' => 'Norway',
               'latitude' => '68.363817',
				'longitude' => '14.936933'
            ], [
               'name' => 'Olden',
               'country' => 'Norway',
               'latitude' => '61.843455',
				'longitude' => '6.810412'
            ], [
               'name' => 'Stavanger',
               'country' => 'Norway',
               'latitude' => '58.973562',
				'longitude' => '5.726505'
            ], [
               'name' => 'Tromso',
               'country' => 'Norway',
               'latitude' => '69.648721',
				'longitude' => '18.962950'
            ], [
               'name' => 'Honnigsvag',
               'country' => 'Norway',
               'latitude' => '70.980381',
				'longitude' => '25.968539'
            ], [
               'name' => 'Havana',
               'country' => 'Cuba',
               'latitude' => '23.137549',
				'longitude' => '-82.346889'
            ], [
               'name' => 'Panama Canal',
               'country' => 'Panama',
               'latitude' => '9.153267',
				'longitude' => '-79.811610'
            ], [
               'name' => 'Fuerte Amador (Panama City)',
               'country' => 'Panama',
               'latitude' => '8.914403',
				'longitude' => '-79.517936'
            ], [
               'name' => 'Golfito',
               'country' => 'Costa Rica',
               'latitude' => '8.635750',
				'longitude' => '-83.166170'
            ], [
               'name' => 'Quepos',
               'country' => 'Costa Rica',
               'latitude' => '9.430855',
				'longitude' => '-84.174089'
            ], [
               'name' => 'Papagayo',
               'country' => 'Costa Rica',
               'latitude' => '10.564357',
				'longitude' => '-85.706603'
            ], [
               'name' => 'Puerto Chiapas',
               'country' => 'Mexico',
               'latitude' => '14.707489',
				'longitude' => '-92.401988'
            ], [
               'name' => 'Huatulco',
               'country' => 'Mexico',
               'latitude' => '15.752774',
				'longitude' => '-96.129246'
            ], [
               'name' => 'Mazanillo',
               'country' => 'Mexico',
               'latitude' => '19.057258',
				'longitude' => '-104.313240'
            ], [
               'name' => 'Puerto Villarta',
               'country' => 'Mexico',
               'latitude' => '20.657747',
				'longitude' => '-105.242105'
            ], [
               'name' => 'Belfast',
               'country' => 'Northern Ireland',
               'latitude' => '54.616918',
				'longitude' => '-5.904557'
            ], [
               'name' => 'Reykjavik',
               'country' => 'Iceland',
               'latitude' => '64.155258',
				'longitude' => '-21.862103'
            ], [
               'name' => 'Isafjordur',
               'country' => 'Iceland',
               'latitude' => '66.067218',
				'longitude' => '-23.117865'
            ], [
               'name' => 'Akureyri',
               'country' => 'Iceland',
               'latitude' => '65.687489',
				'longitude' => '-18.075204'
            ], [
               'name' => 'Seydisfjordur',
               'country' => 'Iceland',
               'latitude' => '65.263539',
				'longitude' => '-14.006734'
            ], [
               'name' => 'Oban',
               'country' => 'Scotland',
               'latitude' => '56.415246',
				'longitude' => '-5.475846'
            ], [
               'name' => 'Dublin',
               'country' => 'Ireland',
               'latitude' => '53.347043',
				'longitude' => '-6.192952'
            ], [
               'name' => 'Waterford',
               'country' => 'Ireland',
               'latitude' => '52.267187',
				'longitude' => '-7.030222'
            ], [
               'name' => 'Fowey',
               'country' => 'England',
               'latitude' => '50.335453',
				'longitude' => '-4.630722'
            ], [
               'name' => 'Cartagena',
               'country' => 'Columbia',
               'latitude' => '10.404414',
				'longitude' => '-75.531594'
            ], [
               'name' => 'Salaverry (Trujillo)',
               'country' => 'Peru',
               'latitude' => '-8.227506',
				'longitude' => '-78.982976'
            ], [
               'name' => 'Antofagasta',
               'country' => 'Chile',
               'latitude' => '-23.649169',
				'longitude' => '-70.404898'
            ], [
               'name' => 'Valparaiso',
               'country' => 'Chile',
               'latitude' => '-33.036769',
				'longitude' => '-71.626519'
            ], [
               'name' => 'Puerto Montt',
               'country' => 'Chile',
               'latitude' => '-41.483662',
				'longitude' => '-72.956314'
            ], [
               'name' => 'Puerto Chacabuco',
               'country' => 'Chile',
               'latitude' => '-45.464249',
				'longitude' => '-72.825110'
            ], [
               'name' => 'Chilean Fjords',
               'country' => 'Chile',
               'latitude' => '0.0',
				'longitude' => '0.0'
            ], [
               'name' => 'Beagle Channel',
               'country' => 'Argentina',
               'latitude' => '-54.888341',
				'longitude' => '-67.844249'
            ], [
               'name' => 'Ushuaia',
               'country' => 'Argentina',
               'latitude' => '-54.810236',
				'longitude' => '-68.299152'
            ], [
               'name' => 'Sydney',
               'country' => 'Australia',
               'latitude' => '-33.861279',
				'longitude' => '151.188795'
            ], [
               'name' => 'Hobart',
               'country' => 'Tasmania',
               'latitude' => '-42.882604',
				'longitude' => '147.339137'
            ], [
               'name' => 'Melbourne',
               'country' => 'Australia',
               'latitude' => '-37.843925',
				'longitude' => '144.914801'
            ], [
               'name' => 'Milford Sound',
               'country' => 'New Zealand',
               'latitude' => '-44.660873',
				'longitude' => '167.911399'
            ], [
               'name' => 'Dunedin',
               'country' => 'New Zealand',
               'latitude' => '-45.813332',
				'longitude' => '170.625208'
            ], [
               'name' => 'Akaroa',
               'country' => 'New Zealand',
               'latitude' => '-43.808859',
				'longitude' => '172.959656'
            ], [
               'name' => 'Kaikoura',
               'country' => 'New Zealand',
               'latitude' => '-42.426812',
				'longitude' => '173.673481'
            ], [
               'name' => 'Napier',
               'country' => 'New Zealand',
               'latitude' => '-39.475664',
				'longitude' => '176.921460'
            ], [
               'name' => 'Tauranga',
               'country' => 'New Zealand',
               'latitude' => '-37.658495',
				'longitude' => '176.172934'
            ], [
               'name' => 'Auckland',
               'country' => 'New Zealand',
               'latitude' => '-36.841198',
				'longitude' => '174.765423'
            ], [
               'name' => 'At Sea',
               'country' => '',
               'latitude' => '0.0',
				'longitude' => '0.0'
            ], [
               'name' => 'Tokyo',
               'country' => 'Japan',
               'latitude' => '35.6481182',
				'longitude' => '139.770614'
            ], [
               'name' => 'Hakodate',
               'country' => 'Japan',
               'latitude' => '41.773529',
				'longitude' => '140.722645'
            ], [
               'name' => 'Akita',
               'country' => 'Japan',
               'latitude' => '39.758020',
				'longitude' => '140.055447'
            ], [
               'name' => 'Kanazawa',
               'country' => 'Japan',
               'latitude' => '36.608810',
				'longitude' => '136.618535'
            ], [
               'name' => 'Sakaminato',
               'country' => 'Japan',
               'latitude' => '35.536119',
				'longitude' => '133.251003'
            ], [
               'name' => 'Busan',
               'country' => 'South Korea',
               'latitude' => '35.117784',
				'longitude' => '129.052575'
            ], [
               'name' => 'Kitakyushu',
               'country' => 'Japan',
               'latitude' => '33.944899',
				'longitude' => '130.956048'
            ], [
               'name' => 'Cruising Inland Sea',
               'country' => 'Japan',
               'latitude' => '34.297311',
				'longitude' => '133.371027'
            ], [
               'name' => 'Hiroshima',
               'country' => 'Japan',
               'latitude' => '34.352319',
				'longitude' => '132.470455'
            ], [
               'name' => 'Takamatsu',
               'country' => 'Japan',
               'latitude' => '34.356122',
				'longitude' => '134.047975'
            ], [
               'name' => 'Kobe',
               'country' => 'Japan',
               'latitude' => '34.679265',
				'longitude' => '135.185475'
            ], [
               'name' => 'Shimizu',
               'country' => 'Japan',
               'latitude' => '35.468853',
				'longitude' => '139.694765'
            ], [
               'name' => 'Yokohama',
               'country' => 'Japan',
               'latitude' => '35.455282',
				'longitude' => '139.683118'
            ], [
               'name' => 'Portimao',
               'country' => 'Portugal',
               'latitude' => '37.127684',
				'longitude' => '-8.529748'
            ], [
               'name' => 'Seville',
               'country' => 'Spain',
               'latitude' => '37.373371',
				'longitude' => '-5.992136'
            ], [
               'name' => 'Palma De Mallorca',
               'country' => 'Spain',
               'latitude' => '39.552923',
				'longitude' => '2.632118'
            ], [
               'name' => 'Valencia',
               'country' => 'Spain',
               'latitude' => '39.438882',
				'longitude' => '-0.312724'
            ], [
               'name' => 'Mahon, Menorca',
               'country' => 'Spain',
               'latitude' => '39.890874',
				'longitude' => '4.265153'
            ], [
               'name' => 'Sete',
               'country' => 'France',
               'latitude' => '43.403725',
				'longitude' => '3.714709'
            ], [
               'name' => 'Marseilles',
               'country' => 'France',
               'latitude' => '43.298381',
				'longitude' => '5.361294'
            ], [
               'name' => 'Sanury Sur Mer',
               'country' => 'France',
               'latitude' => '43.114621',
				'longitude' => '5.802184'
            ], [
               'name' => 'Calvi Corsica',
               'country' => 'France',
               'latitude' => '42.566831',
				'longitude' => '8.760960'
            ], [
               'name' => 'Cannes',
               'country' => 'France',
               'latitude' => '43.546518',
				'longitude' => '7.018772'
            ], [
               'name' => 'Los Angeles',
               'country' => 'USA',
               'latitude' => '33.732450',
				'longitude' => '-118.276105'
            ], [
               'name' => 'Hilo',
               'country' => 'Hawaii',
               'latitude' => '19.730473',
				'longitude' => '-155.054335'
            ], [
               'name' => 'Lahaina, Maui',
               'country' => 'Hawaii',
               'latitude' => '20.869341',
				'longitude' => '-156.677102'
            ], [
               'name' => 'Honolulu, Oahu',
               'country' => 'Hawaii',
               'latitude' => '21.309402',
				'longitude' => '-157.871192'
            ], [
               'name' => 'Nawiliwili, Kuwai',
               'country' => 'Hawaii',
               'latitude' => '21.955115',
				'longitude' => '-159.352389'
            ], [
               'name' => 'Bora Bora',
               'country' => 'French Polynesia',
               'latitude' => '-16.508296',
				'longitude' => '-151.754866'
            ], [
               'name' => 'Moorea',
               'country' => 'French Polynesia',
               'latitude' => '-17.508583',
				'longitude' => '-149.855916'
            ], [
               'name' => 'Papeete, Tahiti',
               'country' => 'French Polynesia',
               'latitude' => '-17.539040',
				'longitude' => '-149.570421'
            ], [
               'name' => 'Rorotonga',
               'country' => 'Cook Islands',
               'latitude' => '-21.270907',
				'longitude' => '-159.781974'
            ], [
               'name' => 'Gisborne',
               'country' => 'New Zealand',
               'latitude' => '-38.674645',
				'longitude' => '178.024326'
            ], [
               'name' => 'Wellington',
               'country' => 'New Zealand',
               'latitude' => '-41.284445',
				'longitude' => '174.780118'
            ], [
               'name' => 'Picton',
               'country' => 'New Zealand',
               'latitude' => '-41.281067',
				'longitude' => '174.009205'
            ], [
               'name' => 'Nelson',
               'country' => 'New Zealand',
               'latitude' => '-41.281167',
				'longitude' => '173.207346'
            ], [
               'name' => 'New Plymouth',
               'country' => 'New Zealand',
               'latitude' => '-39.056832',
				'longitude' => '174.036023'
            ], [
               'name' => 'Cape Town',
               'country' => 'South Africa',
               'latitude' => '0.0',
				'longitude' => '0.0'
            ], [
               'name' => 'Lanzarote',
               'country' => 'Canary Islands',
               'latitude' => '0.0',
				'longitude' => '0.0'
            ], [
               'name' => 'Gran Canaria',
               'country' => 'Canary Islands',
               'latitude' => '0.0',
				'longitude' => '0.0'
            ], [
               'name' => 'Ko Panyee',
               'country' => 'Thailand',
               'latitude' => '8.335751',
				'longitude' => '98.503311'
            ], [
               'name' => 'Naples',
               'country' => 'Italy',
               'latitude' => '40.838580',
				'longitude' => '14.259462'
            ]

         ]);
    }
}
