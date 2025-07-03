<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Formacion;

class FixDisponibleHoy extends Command
{
    protected $signature = 'fix:disponible-hoy';
    protected $description = 'Pone todas las formaciones en disponible_hoy = 0';

    public function handle()
    {
        // Actualiza solo las formaciones con disponible_hoy = 1
        $updated = Formacion::where('disponible_hoy', 1)
                  ->update(['disponible_hoy' => 0]);

        $this->info("¡Listo! Se actualizaron {$updated} formaciones.");
    }
}