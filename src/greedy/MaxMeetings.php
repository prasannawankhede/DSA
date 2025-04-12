<?php
namespace App\Greedy;

class MaxMeetings
{
    public int $start;
    public int $end;
    public int $pos;

    public function __construct($start = 0, $end = 0, $pos = 0)
    {
        $this->start = $start;
        $this->end   = $end;
        $this->pos   = $pos;
    }

    public function findMaxMeetings(array $start, array $end): array
    {
        $n        = count($start);
        $meetings = [];

        for ($i = 0; $i < $n; $i++) {
            $meetings[] = new MaxMeetings($start[$i], $end[$i], $i + 1);
        }

        usort($meetings, function ($m1, $m2) {
            if ($m1->end === $m2->end) {
                return $m1->pos <=> $m2->pos;
            }
            return $m1->end <=> $m2->end;
        });

        $answer   = [];
        $answer[] = $meetings[0]->pos;
        $limit    = $meetings[0]->end;

        for ($i = 1; $i < $n; $i++) {
            if ($meetings[$i]->start > $limit) {
                $limit    = $meetings[$i]->end;
                $answer[] = $meetings[$i]->pos;
            }
        }

        return $answer;
    }
}
