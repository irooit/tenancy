<?php

declare(strict_types=1);

namespace Stancl\Tenancy\Traits;

trait DealsWithMigrations
{
    protected function getMigrationPaths()
    {
        if ($this->input->hasOption('path') && $this->input->getOption('path')) {
            return parent::getMigrationPaths();
        }

        return database_path('migrations/tenant');
    }
}
