<?php

namespace App\GraphQL\Type\Laptop;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;
use App\Models\Laptop\General;
use App\Models\Laptop\Storage;
use App\Models\Laptop\Connectivity;
use App\Models\Laptop\Memory;
use App\Models\Laptop\Multimedia;
use App\Models\Laptop\Ports;
use App\Models\Laptop\Periperhals;
use App\Models\Laptop\Performance;

 // tabel

class Laptop extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Laptop'
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'general'		=> 	[
								'name' 	=> 'general', 		
								'type' 	=> Type::listOf(GraphQL::type('General')),
							],
			'display'		=> 	[
								'name' 	=> 'display', 		
								'type' 	=> Type::listOf(GraphQL::type('DisplayLaptop')),
                            ],
             'performance'		=> 	[
								'name' 	=> 'performance', 		
								'type' 	=> Type::listOf(GraphQL::type('Performance')),
                            ],
            'memory'		=> 	[
								'name' 	=> 'memory', 		
								'type' 	=> Type::listOf(GraphQL::type('Memory')),
                            ],
             'multimedia'		=> 	[
								'name' 	=> 'multimedia', 		
								'type' 	=> Type::listOf(GraphQL::type('Multimedia')),
                            ],
            'peripherals'		=> 	[
								'name' 	=> 'peripherals', 		
								'type' 	=> Type::listOf(GraphQL::type('Peripherals')),
                            ],
            'connectivity'		=> 	[
								'name' 	=> 'connectivity', 		
								'type' 	=> Type::listOf(GraphQL::type('ConnectivityLP')),
                            ],
            'storage'		=> 	[
								'name' 	=> 'storage', 		
								'type' 	=> Type::listOf(GraphQL::type('Storage')),
                            ],
            'ports'		=> 	[
								'name' 	=> 'ports', 		
								'type' 	=> Type::listOf(GraphQL::type('Ports')),
                            ],
          
                            
                       
		];
		[
			'id_general' => [
				'type' => Type::nonNull(Type::int()),
			],
			'id_display' => [
				'type' => Type::nonNull(Type::int()),
			],
			'id_performance' => [
				'type' => Type::nonNull(Type::int()),
			],
			'id_memory' => [
				'type' => Type::nonNull(Type::int()),
			],
			'id_multimedia' => [
				'type' => Type::nonNull(Type::int()),
			],
			'id_peripherals' => [
				'type' => Type::nonNull(Type::int()),
			],
			'id_connectivity' => [
			  'type' => Type::nonNull(Type::int()),
			],
			'id_storage' => [
				 'type' => Type::nonNull(Type::int()),
			],
			'id_ports' => [
				'type' => Type::nonNull(Type::int()),
			]
		];
		
	}
    
     //resolve yang di sini untuk mendapatkan nilai dari IDisplay
     public function resolveGeneralField($root, $args)
     {
		return General::where('id', $root->id_general)->get();
    
     }

     public function resolveDisplayField($root, $args)
     {
		return Display::where('id', $root->id_general)->get();
    
	 }

	 public function resolvePerformanceField($root, $args)
     {
		return Performance::where('id', $root->id_performance)->get();
    
	 }
	 
	 public function resolveMemoryField($root, $args)
     {
		return Memory::where('id', $root->id_memory)->get();
    
	 }

	 public function resolveMultimediaField($root, $args)
     {
		return Multimedia::where('id', $root->id_multimedia)->get();
    
	 }

	 public function resolvePeripheralsField($root, $args)
     {
		return Peripherals::where('id', $root->id_peripherals)->get();
    
	 }

	 public function resolveConnectivityField($root, $args)
     {
		return Connectivity::where('id', $root->id_connectivity)->get();
    
	 }
	 public function resolveStorageField($root, $args)
     {
		return Storage::where('id', $root->id_storage)->get();
    
	 }
	 public function resolvePortsField($root, $args)
     {
		return Ports::where('id', $root->id_ports)->get();
    
	 }
	 



}

