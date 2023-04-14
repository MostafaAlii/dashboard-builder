<?php
namespace Mostafa0alii\DashboardBuilder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class DashboardBuilderInstallCommand extends Command {
    protected $signature = 'dashboard-builder:install';
    protected $description = 'Install the selected dashboard theme';
    public function handle() {
        $themes = ['webmain', 'modern-admin'];
        $defaultTheme = 'webmain';
        $selectedTheme = $this->choice('Which theme do you want to install?', $themes, $defaultTheme);
        $this->info('Installing ' . $selectedTheme . ' theme...');
        // Copy app-assets if selected theme is modern-admin
        if($selectedTheme == 'modern-admin') {
            $this->info('Copying app-assets...');
            $appAssetsPath = __DIR__ . '/resources/' . $selectedTheme . '/app-assets';
            $publicPath = public_path('app-assets');
            File::copyDirectory($appAssetsPath, $publicPath);
        }
        // Copy assets
        $this->info('Copying assets...');
        $assetsPath = __DIR__ . '/resources/' . $selectedTheme . '/assets';
        $publicPath = public_path('assets');
        File::copyDirectory($assetsPath, $publicPath);
        
        // Copy views
        if($selectedTheme == 'modern-admin') {
            $this->copyViews($selectedTheme);
            $this->info('Dashboard theme {modern-admin} installed successfully!');
        } else {
            $this->copyViews($selectedTheme);
            $this->info('Dashboard theme {webmain} installed successfully!');
        }
    }

    protected function copyViews($selectedTheme) {
        $this->info('Copying views...');
        $viewsPath = __DIR__ . '/resources/' . $selectedTheme . '/views';
        $viewsTargetPath = resource_path('views');
        if(!File::isDirectory($viewsTargetPath))
            File::makeDirectory($viewsTargetPath);
        File::copyDirectory($viewsPath, $viewsTargetPath);
    }
}