<?php

class Animal {
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah {$this->nama} jenis {$this->jenis}.";
    }
}

class Cat extends Animal {
    public function getInfo() {
        return parent::getInfo() . " Kucing adalah hewan yang suka bermain dan bersih.";
    }
}

class Dog extends Animal {
    public function getInfo() {
        return parent::getInfo() . " Anjing adalah hewan yang setia dan cerdas.";
    }
}

// Membuat objek dari class Animal, Cat, dan Dog
$animal = new Animal("Harimau", "karnivora");
$cat = new Cat("Kitty", "kucing"); // Tambahkan argumen "kucing"
$dog = new Dog("Buddy", "anjing"); // Tambahkan argumen "anjing"

// Memanggil method getInfo() untuk masing-masing objek
echo $animal->getInfo() . "<br>\n";
echo $cat->getInfo() . "<br>\n";
echo $dog->getInfo() . "<br>\n";



