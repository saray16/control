<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Inscripcion;
use App\Policies\CertificadoPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Inscripcion::class => CertificadoPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('view-certificado', [CertificadoPolicy::class, 'viewCertificado']);
    }
}
