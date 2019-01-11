<?php

namespace Forrence\MigrateMake;

use Illuminate\Console\Command;

class MigrateMakeCommand extends Command
{
    protected $signature = 'migrate:make  {name : The name of the migration}
        {--create= : The table to be created}
        {--table= : The table to migrate}
        {--path= : The location where the migration file should be created}
        {--realpath : Indicate any provided migration file paths are pre-resolved absolute paths}';

    protected $description = 'Create a new migration file by aliasing to make:migration';

    public function handle()
    {
      $this->line('Aliasing to make:migration...');
      $passthru = ['name' => $this->argument('name')];

      foreach ($this->options() as $key => $value) {
          if ($value) {
              $passthru['--' . $key] = $value;
          }
      }
      $this->call('make:migration', $passthru);
    }
}
