<?php
    /*
        class wrapping methods for accessing location. Mainly done because I could not
        get gettext running so for now I have switched to simple arrays.
        Later I will redo it to gettext
    */
    class L10n {
        // variable to hold selected location messages
        private static $localization;

        // must be called at the beginning
        public static function initialize($locale) {
            if (!isset($locale)){
                // no localization is set so choose english as default
                $locale = 'en_US';
            } else {
                $locale = $locale;
            }

            $path = self::getPath($locale);
            // try to include the messages from the requested locale
            $success = include $path;
            if ($success === false) {
                // if include fails then it means that locale is not implemented or missspelled
                // revert to default
                $path = self::getPath('en_US');
                include $path;
            }
            self::$localization = $messages;
        }

        // get absolute path for the target translated messages file
        private static function getPath($locale) {
            // __DIR__ is path to the directory of this file
            $path = __DIR__ . '/' . $locale . '/messages.php';
            return $path;
        }

        // method to retrieve localized message for given $key
        public static function trans($key) {
            $return = $key;
            if (self::$localization == null) {
                throw new Exception("Localization is not initialized! First call L10n::initialize().");
            }

            // get localized value
            $value = self::$localization[$key];

            if ($value != null) {
                $return = $value;
            }

            echo $return;
        }
    }
?>