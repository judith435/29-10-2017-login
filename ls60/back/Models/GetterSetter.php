<?php
    abstract class GetterSetter
    {
        public function __get($name)
        {
            $method = sprintf('get%s', ucfirst($name));

            if (!method_exists($this, $method)) {
                throw new Exception();
            }

            return $this->$method();
        }

        public function __set($name, $v)
        {
            $method = sprintf('set%s', ucfirst($name));

            if (!method_exists($this, $method)) {
                throw new Exception();
            }

            $this->$method($v);
        }
    }
?>