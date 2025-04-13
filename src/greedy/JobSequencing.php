<?php
namespace App\Greedy;

class JobSequencing
{
    public int $deadline;
    public int $profit;

    public function __construct(int $deadline, int $profit)
    {
        $this->deadline = $deadline;
        $this->profit   = $profit;
    }

    public function maxProfit(array $jobs): array
    {
        usort($jobs, function ($j1, $j2) {
            return $j2->profit <=> $j1->profit;
        });

        $maxDeadline = 0;

        foreach ($jobs as $job) {
            $maxDeadline = max($maxDeadline, $job->deadline);
        }

        $slots = array_fill(0, $maxDeadline + 1, false);

        $countJobs   = 0;
        $totalProfit = 0;

        foreach ($jobs as $job) {
            for ($j = $job->deadline; $j > 0; $j--) {
                if ($slots[$j] === false) {
                    $slots[$j] = true;
                    $countJobs++;
                    $totalProfit += $job->profit;
                    break;
                }
            }
        }

        return [$countJobs, $totalProfit];
    }

}
