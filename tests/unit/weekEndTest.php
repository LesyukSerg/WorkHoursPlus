<?php

    namespace unit;

    use app\Work;
    use PHPUnit\Framework\TestCase;

    class weekEndTest extends TestCase
    {
        public function testPlus3HoursSatTime13()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-07 13:00", 3);

            $this->assertEquals("2022-05-09 11:00", $result, $result);
        }

        public function testPlus3HoursSatTime20()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-07 20:00", 3);

            $this->assertEquals("2022-05-09 12:00", $result, $result);
        }

        public function testPlus3HoursSunTime13()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-08 13:00", 3);

            $this->assertEquals("2022-05-09 12:00", $result, $result);
        }

        public function testPlus3HoursSunTime20()
        {
            $work = new Work();
            $result = $work->addHours("2022-05-08 20:00", 3);

            $this->assertEquals("2022-05-09 12:00", $result, $result);
        }
    }
