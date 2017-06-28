<?php
    class Jobs
    {

        private $title;
        private $time;
        private $location;
        private $description;

        function __construct($title, $time, $location, $description)
        {
            $this->title = $title;
            $this->time = $time;
            $this->location = $location;
            $this->description = $description;
        }

        function setTitle($title)
        {
            $this->title = (string)$title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setTime($time)
        {
            $this->time = (string)$time;
        }

        function getTime()
        {
            return $this->time;
        }

        function setLocation($location)
        {
            $this->location = (string)$location;
        }

        function getLocation()
        {
            return $this->location;
        }

        function setDescription($description)
        {
            $this->description = (string)$description;
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
