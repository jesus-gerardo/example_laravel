<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sqlite:file {name=database : name of the file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea el archivo sqlite';

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
        $name = $this->argument('name');
        $exist = file_exists("{$this->dir}{$name}.{$this->extension}");
        if ($exist){
            $this->error("Ya existe un archivo creado con el nombre {$name}");
            return 0;
        }

        $file = fopen("{$this->dir}{$name}.{$this->extension}", 'x');
        if ($file == false){
            $this->error('No se pudo crear la base datos, verifique los parametros y permisos de la carpeta');
            return 0;
        }

        fclose($file);

        $this->info("Se ha creado el archivo sqlite con el nombre de {$name}");
        return 0;
    }
}
