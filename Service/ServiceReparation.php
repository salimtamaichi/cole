<?php

class ServiceReparation {
    private $db; // PDO object for database connection

    public function connect() {
        // Load database configuration from ini file
        $config = parse_ini_file('../db_config.ini');

        // Establish a database connection using PDO
        try {
            $this->db = new PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']}",
                $config['username'],
                $config['password']
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle connection errors here
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insertReparation(Reparation $reparation) {
        try {
            // Prepare the SQL query for inserting a reparation record
            $query = "INSERT INTO Reparation (name_workshop, register_date, license_plate, photo) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);

            // Bind parameters and execute the query
            $stmt->bindParam(1, $reparation->getNameWorkshop());
            $stmt->bindParam(2, $reparation->getRegisterDate());
            $stmt->bindParam(3, $reparation->getLicensePlate());
            $stmt->bindParam(4, $reparation->getPhoto());

            $stmt->execute();

            return true; // Return true if insertion is successful
        } catch (PDOException $e) {
            // Handle insertion errors here
            echo "Error inserting reparation: " . $e->getMessage();
            return false; // Return false on failure
        }
    }

    public function getReparation($id) {
        try {
            // Prepare the SQL query for selecting a reparation record based on id
            $query = "SELECT * FROM Reparation WHERE id = ?";
            $stmt = $this->db->prepare($query);

            // Bind parameters and execute the query
            $stmt->bindParam(1, $id);
            $stmt->execute();

            // Fetch the result set as an associative array
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result; // Return the fetched records
        } catch (PDOException $e) {
            // Handle selection errors here
            echo "Error getting reparation: " . $e->getMessage();
            return []; // Return an empty array on failure
        }
    }
}
?>

