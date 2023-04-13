<?php
namespace Mostafa0alii\DashboardBuilder\Facades;
use Illuminate\Support\Facades\Facade;
class DashboardBuilder extends Facade {
    protected static function getFacadeAccessor() {
        return 'dashboard-builder';
    }
}