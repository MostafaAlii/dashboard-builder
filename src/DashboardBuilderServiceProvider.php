<?php
namespace Mostafa0alii\DashboardBuilder;
use Illuminate\Support\ServiceProvider;
use Mostafa0alii\DashboardBuilder\Facades\DashboardBuilder;
use Mostafa0alii\DashboardBuilder\DashboardBuilderInstallCommand;
class DashboardBuilderServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind('dashboard-builder', function () {
            return new DashboardBuilder();
        });
    }
    
    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DashboardBuilderInstallCommand::class,
            ]);
        }
    }
}