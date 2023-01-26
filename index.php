<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>

<body>
    <?php
    class Products
    {

        public $name;
        public $description;
        public $price;
        public $category;

        public function __construct($name, $description, $price, $category)
        {
            $this->setName($name);
            $this->setCategory($category);
            $this->setDescription($description);
            $this->setPrice($price);

        }

    public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  // metodo per categoria
  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  // metodo per descrizione
  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  // metodo per prezzo
  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getHtml()
  {
      return "<h3>" . "Nome: " . $this->name . "<br>" .
          "Descrizione: " . $this->description . "<br>" .
          "Prezzo: " . $this->price . "<br>" .
          "Categoria: " . $this->category . "</h3>";
  }
   
    }



    class Toy extends Products
    {

        public function __construct($name, $description, $price, $category, )
        {
            parent::__construct($name, $description, $price, $category);
        }

        public function getHtml()
        {
            return parent::getHtml();
        }

    }

    class Food extends Products
    {
        public $expirationDate;

        public function __construct($name, $description, $price, $category, $expirationDate)
        {
            $this->expirationDate = $expirationDate;
            parent::__construct($name, $description, $price, $category);

        }

        public function getHtml()
        {
            return parent::getHtml() .
                $this->getVarFoodHtml();
        }

        public function getVarFoodHtml()
        {
            return "<h3>" . "Data di scadenza:" . $this->expirationDate . "</h3>";
        }
    }

    class Accessory extends Products
    {
        public function __construct($name, $description, $price, $category)
        {
            parent::__construct($name, $description, $price, $category);

        }

        public function getHtml()
        {
            return parent::getHtml();
        }

    }


    $toy1 = new Toy("Trixie corda", "Corda gioco con nodi di Trixie per cani, in diverse misure, perfetta per il tira e molla", "4.00", "cane");
    $toy2 = new Toy("Hagen Catit Design Senses Track", "Gioco d’intelligenza per gatti, allungabile e combinabile a piacimento per allenare reattività e destrezza del gatto e assecondarne l’istinto alla caccia.", "10.50", "gatto");
    $food1 = new Food("Royal Canin Maxi Adult Crocchette per cani", "Crocchette Royal Canin Maxi Adult di misura XL per cani di tg grande", "45.00", "cane", "12-06-2023");
    $food2 = new Food("Royal Canin Sterilised 37 Crocchette per gatti", "Crocchette Royal Canin Sterilised 37 per gatti castrati/sterilizzati tendenti al sovrappeso", "38.00", "gatto", "30-04-2024");
    $accessory1 = new Accessory("Letto Cozy Kingdom", "Comodo Letto Cozy Kingdom per gatti e cani di piccola taglia, con bordo alto", "22.00", "gatto");
    $accessory2 = new Accessory("Letto Basic", "Letto per cani in morbida finta pelliccia rivestito esternamente con resistente tessuto", "34.00", "cane");

    echo $food1->getHtml();
    echo $toy1->getHtml();
    echo $accessory1->getHtml();
    echo $toy2->getHtml();
    echo $food2->getHtml();
    echo $accessory2->getHtml();

    ?>
</body>

<style>
    body{
        background-color: olive;
    }
    h3{
        color: white;
    }
</style>

</html>