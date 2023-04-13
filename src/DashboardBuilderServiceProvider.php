<?php
namespace Mostafa0alii\DashboardBuilder;
use Illuminate\Support\ServiceProvider;
use Mostafa0alii\DashboardBuilder\Facades\DashboardBuilder;
use Mostafa0alii\DashboardBuilder\Dash\DashboardBuilderInstallCommand;
class DashboardBuilderServiceProvider extends ServiceProvider {
    public function register() {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DashboardBuilderInstallCommand::class,
            ]);
        }

        $this->app->bind('dashboard-builder', function () {
            return new DashboardBuilder();
        });
    }
    
    public function boot() {
        //
    }
}