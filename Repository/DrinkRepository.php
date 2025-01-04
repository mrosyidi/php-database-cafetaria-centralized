<?php 

    namespace Repository 
    {
        use Entity\Drink;

        interface DrinkRepository 
        {
            public function findAll(): array;
            public function save(Drink $drink): void;
            public function remove(string $name): bool;
        }

        class DrinkRepositoryImpl implements DrinkRepository 
        {
            private \PDO $connection;

            public function __construct(\PDO $connection)
            {
                $this->connection = $connection;
            }

            public function findAll(): array
            {
                $sql = "SELECT name, price FROM drinks";
                $statement = $this->connection->prepare($sql);
                $statement->execute();
                $drinks = [];

                foreach($statement as $row)
                {
                    $drink = new Drink();
                    $drink->setName($row['name']);
                    $drink->setPrice($row['price']);
                    $drinks[] = $drink;
                }

                return $drinks;
            }

            public function save(Drink $drink): void
            {
                $sql = "INSERT INTO drinks(name,price) VALUES(?,?)";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$drink->getName(),$drink->getPrice()]);
            }

            public function remove(string $name): bool
            {
                $sql = "SELECT name FROM drinks WHERE name=?";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$name]);

                if($statement->fetch())
                {
                    $sql = "DELETE FROM drinks WHERE name=?";
                    $statement = $this->connection->prepare($sql);
                    $statement->execute([$name]);
                    return true;
                }else
                {
                    return false;
                }
            }
        }
    }