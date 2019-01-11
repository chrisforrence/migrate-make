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

    protected $description = 'Does not create a new migration file';

    public function handle()
    {
        $this->error("I'm sorry, Dave. I'm afraid I can't do that.");
    }
}
