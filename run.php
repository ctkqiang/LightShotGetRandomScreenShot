<?php
    class ScreenShotGrabber
    {
        public static function random_char($length= 2)
        {
            $characters = 'abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';

            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        public static function random_integer($length= 4)
        {
            return rand(
                ((int) str_pad(1, $length, 0, STR_PAD_RIGHT)),
                ((int) str_pad(9, $length, 9, STR_PAD_RIGHT))
            );
        }

        public static function get_screenshot()
        {
            $a = new ScreenShotGrabber();
            
            $r_char = $a::random_char();
            $r_int = $a::random_integer();

            $url = "https://prnt.sc/";
            $execute = $url.$r_char.$r_int;

            for ($i =0; $i < 5; $i++)
            {
                shell_exec("start ".$execute);
            }  
        }
    }

    $screenshot_grabber = new ScreenShotGrabber();
    $screenshot_grabber::get_screenshot();
?>