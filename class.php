<?php 
    class Product{
        // PROPERTY
        protected   $name,
                    $price,
                    $discount;

        public function __construct($name="nama", $price=0, $discount=0)
        {
            $this->name = $name;
            $this->price = $price;
            $this->discount = $discount;
        }

        // SETTER NAME
        public function setName($name){
            $this->name=$name;
        }
        // GETTER NAME
        public function getName(){
            return $this->name;
        }
        // SETTER PRICE
        public function setPrice($price){
            $this->price=$price;
        }
        // GETTER PRICE
        public function getPrice(){
            return $this->price - ($this->price*$this->discount/100);
        }
        // SETTER DISCOUNT
        public function setDiscount($discount){
            $this->discount=$discount;
        }
        // GETTER DISCOUNT
        public function getDiscount(){
            return $this->discount;
        }
        
    }

    class CDRack extends Product{
        private $capacity,
                $model;

        public function __construct($name="nama produk", $price=0, $discount=0, $capacity=0, $model="model" )
        {
            parent::__construct($name, $price, $discount);
            $this->capacity=$capacity;
            $this->model=$model;
        }

        public function setCapacity($capacity){
            $this->capacity=$capacity;
        }

        public function getCapacity(){
            return $this->capacity;
        }

        public function setModel($model){
            $this->model=$model;
        }

        public function getModel(){
            return $this->model;
        }
        
        public function getPrice(){
            return ($this->price+($this->price*0.15)) - ($this->price*($this->discount)/100);
        }
    }

    class CDMusic extends Product{
        private $artist,
                $genre;
        
        public function __construct($name="nama produk", $price=0, $discount=0, $genre="genre", $artist="artist")
        {
            parent::__construct($name, $price, $discount);
            $this->artist = $artist;
            $this->genre = $genre;
        }

        public function setArtist($artist){
            $this->artist=$artist;
        }

        public function getArtist(){
            return $this->artist;
        }

        public function setGenre($genre){
            $this->genre=$genre;
        }

        public function getGenre(){
            return $this->genre;
        }
        
        public function getPrice(){
            return ($this->price+($this->price*0.1)) - ($this->price*($this->discount+5)/100);
        }
    }
?>