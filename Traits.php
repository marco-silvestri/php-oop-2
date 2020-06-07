<?php

trait Excerpt {
    public function getExcerpt(){
        if ($this->discount > 0){
        echo "Buy $this->brand $this->name with $this->discount% discount";
        } else {
            echo "Buy $this->brand $this->name";
        }
    }
} 