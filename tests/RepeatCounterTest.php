<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_noMatchWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $check_word = "hello";
            $string = "hi";

            $result = $test_RepeatCounter->countRepeats($check_word, $string);

            $this->AssertEquals(0, $result);
        }

        function test_countRepeats_matchWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $check_word = "hello";
            $string = "hello";

            $result = $test_RepeatCounter->countRepeats($check_word, $string);

            $this->AssertEquals(1, $result);
        }

        function test_countRepeats_matchWordInString()
        {
            $test_RepeatCounter = new RepeatCounter;
            $check_word = "hello";
            $string = "hello john";

            $result = $test_RepeatCounter->countRepeats($check_word, $string);

            $this->AssertEquals(1, $result);
        }

        function test_countRepeats_matchWordsInString()
        {
            $test_RepeatCounter = new RepeatCounter;
            $check_word = "hello";
            $string = "hello john hello diane";

            $result = $test_RepeatCounter->countRepeats($check_word, $string);

            $this->AssertEquals(2, $result);
        }
    }
 ?>
