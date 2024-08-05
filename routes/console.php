<?php

use Illuminate\Support\Facades\Schedule;
use Spatie\Health\Commands\DispatchQueueCheckJobsCommand;
use Spatie\Health\Commands\RunHealthChecksCommand;
use Spatie\Health\Commands\ScheduleCheckHeartbeatCommand;

// Horizon
Schedule::command('horizon:snapshot')->everyFiveMinutes()->sentryMonitor();

// Health
Schedule::command(ScheduleCheckHeartbeatCommand::class)->everyMinute()->sentryMonitor();
Schedule::command(DispatchQueueCheckJobsCommand::class)->everyMinute()->sentryMonitor();
Schedule::command(RunHealthChecksCommand::class)->everyMinute()->sentryMonitor();
