<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDataBase extends Command{

    /**
     * The name and signature of the console command.
     * por defecto si no se envia ningun parametro este se llamara database
     * @var string
     */
    protected $signature = 'sqlite:database {name=laravel : name of the database}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'crea una base de datos en el archivo sqlite';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    protected $extension = "sqlite";
    protected $dir = "./database/";

    public function handle(){
        try{
            $name = $this->argument('name');
            $crearbd = DB::connection($this->extension)->select("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = {$name}");
            if(empty($crearbd)) {
                $cot = "CHARACTER SET utf8 COLLATE utf8_general_ci";
                DB::connection($this->extension)->select("CREATE DATABASE {$name} {$cot}");
                $this->info("Se ha creado la base de datos con el nombre de {$name}");
            }else{
                $this->info("La Base de Datos con el nombre {$name} ya existe ! ");
            }
            
            return 0;
        }catch(Exception $e){
            $this->error("Se ha producido un error: {$e->getMessage()}");
            return 0;
        }
    }
}
