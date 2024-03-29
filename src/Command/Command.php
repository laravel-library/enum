<?php

declare(strict_types=1);

namespace Elephant\Enums\Command;

use Illuminate\Console\GeneratorCommand;
use Override;

class Command extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:enum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new enum.';

    protected $type = 'enum';

    #[Override]
    protected function getDefaultNameSpace($rootNamespace): string
    {
        return $rootNamespace . '\\' . 'Enums';
    }

    #[Override]
    protected function getStub(): string
    {
        return __DIR__ . '/' . $this->type . '.stub';
    }
}