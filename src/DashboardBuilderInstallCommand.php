<?php
namespace Mostafa0alii\DashboardBuilder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;
class DashboardBuilderInstallCommand extends Command {
    protected $signature = 'dashboard-builder:install';
    protected $description = 'Install the selected dashboard theme';
    public function handle() {
        $themes = ['webmain', 'modern-admin'];
        $defaultTheme = 'webmain';
        $selectedTheme = $this->choice('Which theme do you want to install?', $themes, $defaultTheme);
        $this->info('Installing ' . $selectedTheme . ' theme...');
        // Initialize ProgressBar
        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output);
        $progressBar->setFormat("%message%\n %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s%");
        $progressBar->setMessage('Copying assets and views...');
        $progressBar->start();
        // Copy app-assets if selected theme is modern-admin
        if($selectedTheme == 'modern-admin') {
            $this->info('Copying app-assets...');
            $appAssetsPath = __DIR__ . '/resources/' . $selectedTheme . '/app-assets';
            $publicPath = public_path('app-assets');
            File::copyDirectory($appAssetsPath, $publicPath);
            $progressBar->advance();
        }
        // Copy assets
        $this->info('Copying assets...');
        $assetsPath = __DIR__ . '/resources/' . $selectedTheme . '/assets';
        $publicPath = public_path('assets');
        File::copyDirectory($assetsPath, $publicPath);
        $progressBar->advance();
        
        // Copy views
        $this->copyViews($selectedTheme);
        $progressBar->finish();
        $this->info('Dashboard theme ' . ($selectedTheme == 'modern-admin' ? '{modern-admin}' : '{webmain}') . ' installed successfully!');
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