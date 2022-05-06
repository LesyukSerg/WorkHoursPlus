<?php

    namespace unit;

    use app\Work;
    use PHPUnit\Framework\TestCase;

    class countWorkHoursTest extends TestCase
    {
        public function testCountHoursOneDay()
        {
            $work = new Work();
            $result = $work->countWorkHours("2022-05-03 09:00", "2022-05-03 18:00");

            $this->assertEquals(9, $result, $result);
        }

        public function testCountHoursOneDayTime8()
        {
            $work = new Work();
            $result = $work->countWorkHours("2022-05-03 08:00", "2022-05-03 18:00");

            $this->assertEquals(9, $result, $result);
        }

        public function testCountHoursOneDayTime12()
        {
            $work = new Work();
            $result = $work->countWorkHours("2022-05-03 12:00", "2022-05-03 18:00");

            $this->assertEquals(6, $result, $result);
        }

        public function testCountHoursOneDayTime18()
        {
            $work = new Work();
            $result = $work->countWorkHours("2022-05-03 18:00", "2022-05-03 20:00");

            $this->assertEquals(0, $result, $result);
        }

        public function testCountHoursWeek()
        {
            $work = new Work();
            $result = $work->countWorkHours("2022-05-02 08:00", "2022-05-07 20:00");

            $this->assertEquals(50, $result, $result);
        }

        public function testCountHoursMonth()
        {
            $work = new Work();
            $result = $work->countWorkHours("2022-05-01 08:00", "2022-06-01 08:00");

            $this->assertEquals(218, $result, $result);
        }
    }
