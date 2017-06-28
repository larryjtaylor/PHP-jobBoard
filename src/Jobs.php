<?php
    class Jobs
    {

        private $title;
        private $time;
        private $location
        private $description;

        function _constructor($title, $time, $location, $description)
        {
            $this->title = $new_title;
            $this->time = $new_time;
            $this->location = $new_location;
            $this->description = $new_description;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setTitle()
        {
            $this->title = (string)$new_title;
        }

        function getTime()
        {
            return $this->time;
        }

        function setTime()
        {
            $this->time = (string)$new_time;
        }

        function getLocation()
        {
            return $this->location;
        }
        function setLocation()
        {
            $this->location = (string)$new_location;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setDescription()
        {
            $this->description = (string)$new_description;
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
