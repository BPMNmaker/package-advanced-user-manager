# Processmaker Advanced User Manager
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/advanced-user-manager.git
cd advanced-user-manager
php rename-project.php advanced-user-manager
composer install
npm install
npm run dev
```

## Installation
* Use `composer require BPMNmaker/advanced-user-manager` to install the package.
* Use `php artisan advanced-user-manager:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Skeleton Package` from the administrative sidebar

## Uninstall
* Use `php artisan advanced-user-manager:uninstall` to uninstall the package
* Use `composer remove BPMNmaker/advanced-user-manager` to remove the package completely
