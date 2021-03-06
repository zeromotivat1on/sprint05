<?php

    class Anonymous {
        private $name;
        private $alias;
        private $affiliation;

        function __construct($name, $alias, $affiliation) {
            $this->name = $name;
            $this->alias = $alias;
            $this->affiliation = $affiliation;
        }

        public function getName() {
            return $this->name;
        }

        public function getAlias() {
            return $this->alias;
        }

        public function getAffiliation() {
            return $this->affiliation;
        }
    }

    function get_anonymous($name, $alias, $affiliation) {
        $anonymous = new Anonymous($name, $alias, $affiliation);
        return $anonymous;
    }

    /*
    $mandarin= get_anonymous("Unknown", "Mandarin", "Ten Rings");
    print(implode("\n", array("name" => $mandarin->getName(),"alias" => $mandarin->getAlias(),"affiliation" => $mandarin->getAffiliation())));
    */
    
?>