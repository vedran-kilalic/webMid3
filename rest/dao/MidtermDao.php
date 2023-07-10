<?php
require_once "BaseDao.php";

class MidtermDao extends BaseDao {

    public function __construct(){
        parent::__construct();
    }

    /** TODO
    * Implement DAO method used to add content to database
    */
    public function input_data($data){

    }

    /** TODO
    * Implement DAO method to return summary as requested within route /midterm/summary
    */
    public function summary(){
        $query = "SELECT COUNT(Country,Region,City) FROM locations ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;

    }

    /** TODO
    * Implement DAO method to return report as requested within route /midterm/report_per_country
    */
    public function report_per_country(){

    }

    /** TODO
    * Implement DAO method to return location as requested within route /midterm/search
    */
    public function search($from, $to){

    }
}
?>
