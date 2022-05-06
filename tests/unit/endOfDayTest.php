<?php

    namespace unit;

    use app\Work;
    use PHPUnit\Framework\TestCase;

    class endOfDayTest extends TestCase
    {
        public function testEndWeekDayTime8()
        {
            $work = new Work();
            $result = $work->endOfWorkingDay("2022-05-03 08:00");

            $this->assertEquals("2022-05-03 18:00", $result, $result);
        }

        public function testEndWeekDayTime12()
        {
            $work = new Work();
            $result = $work->endOfWorkingDay("2022-05-03 12:00");

            $this->assertEquals("2022-05-03 18:00", $result, $result);
        }

        public function testEndWeekDayTime20()
        {
            $work = new Work();
            $result = $work->endOfWorkingDay("2022-05-03 20:00");

            $this->assertEquals("2022-05-04 18:00", $result, $result);
        }

        public function testEndWeekDaySatTime8()
        {
            $work = new Work();
            $result = $work->endOfWorkingDay("2022-05-07 08:00");

            $this->assertEquals("2022-05-07 14:00", $result, $result);
        }

        public function testEndWeekDaySatTime12()
        {
            $work = new Work();
            $result = $work->endOfWorkingDay("2022-05-07 12:00");

            $this->assertEquals("2022-05-07 14:00", $result, $result);
        }

        public function testEndWeekDaySatTime20()
        {
            $work = new Work();
            $result = $work->endOfWorkingDay("2022-05-07 20:00");

            $this->assertEquals("2022-05-09 18:00", $result, $result);
        }
    }
