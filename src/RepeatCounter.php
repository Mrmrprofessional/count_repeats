<?php
    class RepeatCounter
    {
        function countRepeats($check_word, $string)
        {
            $counter = 0;
            $string_words = explode(" ", $string);
            foreach($string_words as $word)
            {
                if ( $check_word == $word)
                {
                    $counter++;
                }
            }
            return $counter;
        }
    }
?>
