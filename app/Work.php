<?php

    namespace app;

    class Work
    {
        private array $workHours = [ // 9 - first is silent (9-18)
            "Mon" => [10, 11, 12, 13, 14, 15, 16, 17, 18],
            "Tue" => [10, 11, 12, 13, 14, 15, 16, 17, 18],
            "Wed" => [10, 11, 12, 13, 14, 15, 16, 17, 18],
            "Thu" => [10, 11, 12, 13, 14, 15, 16, 17, 18],
            "Fri" => [10, 11, 12, 13, 14, 15, 16, 17, 18],
            "Sat" => [10, 11, 12, 13, 14],
        ];
        private array $weekends = ["Sun"];
        private array $holidays = ["2022-05-28"];

        public function addHours($date, $hours): string
        {
            $time = strtotime($date);

            while ($hours--) {
                $this->addHour($time);
                //echo "\n" . $hours . "\n";
            }

            return date("Y-m-d H:i", $time);
        }

        private function addHour(&$time): void
        {
            do {
                $time += 3600;
            } while ($this->isWeekend($time) || $this->isNotWorkTime($time) || $this->isHoliday($time));
        }

        public function isNotWorkTime($time): bool
        {
            $day = date("D", $time);

            return !in_array(date("G", $time), $this->workHours[$day]);
        }

        public function isWeekend($time): bool
        {
            //echo date("D", $time) . "--";
            return in_array(date("D", $time), $this->weekends);
        }

        public function isHoliday($time): bool
        {
            //echo date("Y-m-d", $time) . "--";
            return in_array(date("Y-m-d", $time), $this->holidays);
        }
    }

    //    $time = time();
    //    $wh = new Work();
    //    $date_from = "2022-05-01 20:00:00";
    //    $date_till = $wh->addHours($date_from, 3);
    //    echo $date_from . " => " . $date_till . "\n";
