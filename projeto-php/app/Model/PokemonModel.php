<?php
    class Pokemon
    {
        public static function getAll()
        {
            $con = Connection::getConn();

            $sql = "SELECT * FROM pokedex ORDER BY num";
            $sql = $con->prepare($sql);
            $sql->execute();

            $result = array();

			while ($row = $sql->fetchObject('Pokemon')) {
				$result[] = $row;
			}

			if (!$result) {
				throw new Exception("Não foi encontrado nenhum registro no banco");		
			}

			return $result;

        }

        public static function getById($id)
        {
            $con = Connection::getConn();

            $sql = "SELECT * FROM pokedex WHERE id = :id";
            $sql = $con->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            $result = $sql->fetchObject('Pokemon');

            if (!$result) {
				throw new Exception("Não foi encontrado nenhum registro no banco");		
            }
            
            return $result;
        }

        public static function getByName($data)
        {

            $query = $data['search'];
            $con = Connection::getConn();
            $sql = "SELECT * FROM pokedex WHERE name LIKE ?";
            $param = array("$query%");
            $sql = $con->prepare($sql);
            $sql->execute($param);

            $result = array();

			while ($row = $sql->fetchObject('Pokemon')) {
				$result[] = $row;
			}

            if (!$result) {
				throw new Exception("Não foi encontrado nenhum registro no banco");		
            }
            
            return $result;
        }

        public static function create($data)
        {
            if (empty($data['name']) OR empty($data['price']) OR empty($data['num']) OR empty($data['image'])) {
				throw new Exception("Preencha todos os campos");

				return false;
            }
            
            $con = Connection::getConn();

			$sql = $con->prepare('INSERT INTO pokedex (name, description, image, price, num) VALUES (:name, :description, :image, :price, :num)');
            $sql->bindValue(':name', $data['name']);
            $sql->bindValue(':description', $data['description']);
            $sql->bindValue(':image', $data['image']);
            $sql->bindValue(':price', $data['price']);
			$sql->bindValue(':num', $data['num']);
            $result = $sql->execute();
            
            if ($result == 0) {
				throw new Exception("Falha ao adicionar novo pokemon");

				return false;
			}

			return true;

        }

        public static function update($data)
        {
            $con = Connection::getConn();

            $sql = "UPDATE pokedex SET name = :name, description = :description, image = :image, price = :price, num = :num WHERE id = :id";
            $sql = $con->prepare($sql);
            $sql->bindValue(':name', $data['name']);
            $sql->bindValue(':description', $data['description']);
            $sql->bindValue(':image', $data['image']);
            $sql->bindValue(':price', $data['price']);
            $sql->bindValue(':num', $data['num']);
            $sql->bindValue(':id', $data['id']);
            $result =  $sql->execute();

            if ($result == 0) {
				throw new Exception("Falha ao editar pokemon");

				return false;
			}

			return true;
        }

        public static function delete($id)
        {
            
			$con = Connection::getConn();

			$sql = "DELETE FROM pokedex WHERE id = :id";
			$sql = $con->prepare($sql);
			$sql->bindValue(':id', $id);
			$result = $sql->execute();

			if ($result == 0) {
				throw new Exception("Falha ao deletar publicação");

				return false;
			}

			return true;
        }
    }