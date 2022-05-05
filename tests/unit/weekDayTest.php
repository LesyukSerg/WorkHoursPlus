<?php

    namespace unit;

    use app\Work;
    use PHPUnit\Framework\TestCase;

    class weekDayTest extends TestCase
    {
        public function testPlus3HoursTime8()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-02 08:00", 3);

            $this->assertEquals("2022-05-02 12:00", $result, $result);
        }

        public function testPlus3HoursTime12()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-02 12:00", 3);

            $this->assertEquals("2022-05-02 15:00", $result, $result);
        }

        public function testPlus3HoursTime20()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-03 20:00", 3);

            $this->assertEquals("2022-05-04 12:00", $result, $result);
        }

        public function testPlus12HoursTime8()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-05 08:00", 12);

            $this->assertEquals("2022-05-06 12:00", $result, $result);
        }

        public function testPlus12HoursTime12()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-06 12:00", 12);

            $this->assertEquals("2022-05-09 10:00", $result, $result);
        }

        public function testPlus12HoursTime20()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-07 20:00", 12);

            $this->assertEquals("2022-05-10 12:00", $result, $result);
        }
    }
