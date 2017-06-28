<?php
    class Jobs
    {

        private $title;
        private $time;
        private $location;
        private $description;

        function __constructor($new_title, $new_time, $new_location, $new_description)
        {
            $this->title = $new_title;
            $this->time = $new_time;
            $this->location = $new_location;
            $this->description = $new_description;
        }

        function setTitle($new_title)
        {
            $this->title = (string)$new_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setTime($new_time)
        {
            $this->time = (string)$new_time;
        }

        function getTime()
        {
            return $this->time;
        }

        function setLocation($new_location)
        {
            $this->location = (string)$new_location;
        }

        function getLocation()
        {
            return $this->location;
        }

        function setDescription($new_description)
        {
            $this->description = (string)$new_description;
        }

        function getDescription()
        {
            return $this->description;
        }

        function save()
        {
            array_push($_SESSION['list_of_jobs'], $this);
        }
        static function getAll()
        {
            return $_SESSION['list_of_jobs'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_jobs'] = array();
        }
    }
?>
