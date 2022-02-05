<?php

// Create Class to Handle New Employee Objects
class Employee {
    
    private $empID;
    private $empTitle;
    private $empFirst;
    private $empLast;
    private $empCV;
    private $empDesc;
    private $empImg;
    
    // ID ----------------------
    public function set_empID($empID) {$this->empID = $empID;}
    public function get_empID() { return $this->empID;}
    // Title ----------------------
    public function set_empTitle($empTitle) {$this->empTitle = $empTitle;}
    public function get_empTitle() { return $this->empTitle;}
    // First Name ----------------------
    public function set_empFirst($empFirst) {$this->empFirst = $empFirst;}
    public function get_empFirst() { return $this->empFirst;}
    // Last Name ----------------------
    public function set_empLast($empLast) {$this->empLast = $empLast;}
    public function get_empLast() { return $this->empLast;}
    // CV ----------------------
    public function set_empCV($empCV) {$this->empCV = $empCV;}
    public function get_empCV() { return $this->empCV;}
    // Description ----------------------
    public function set_empDesc($empDesc) {$this->empDesc = $empDesc;}
    public function get_empDesc() { return $this->empDesc;}
    // Image ----------------------
    public function set_empImg($empImg) {$this->empImg = $empImg;}
    public function get_empImg() { return $this->empImg;}
    
    // Constructor
    public function __construct($empID, $empTitle, $empFirst, $empLast, $empCV, $empDesc, $empImg)
    {
        $this->empID = $empID;
        $this->empTitle = $empTitle;
        $this->empFirst = $empFirst;
        $this->empLast = $empLast;
        $this->empCV = $empCV;
        $this->empDesc = $empDesc;
        $this->empImg = $empImg;  
    }
}

// ---------------------- Main Scripting ---------------------- //
    include 'tranquilconnect.php'; // connect
    $sql = "SELECT * FROM Temployee;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $empDataArray = array();
    
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Put results into array for access
            $empDataArray[] = $row;
        }
    }
    
    // Variables to access on the DOM for output
    $emp1_ID = $empDataArray[0]['employeeID'];
    $emp1_Title = $empDataArray[0]['employeeTitle'];
    $emp1_First = $empDataArray[0]['employeeFirst'];
    $emp1_Last = $empDataArray[0]['employeeLast'];
    $emp1_CV = $empDataArray[0]['employeeCV'];
    $emp1_Des = $empDataArray[0]['employeeDesc'];
    $emp1_Img = $empDataArray[0]['employeeImage'];
    
    $emp2_ID = $empDataArray[1]['employeeID'];
    $emp2_Title = $empDataArray[1]['employeeTitle'];
    $emp2_First = $empDataArray[1]['employeeFirst'];
    $emp2_Last = $empDataArray[1]['employeeLast'];
    $emp2_CV = $empDataArray[1]['employeeCV'];
    $emp2_Des = $empDataArray[1]['employeeDesc'];
    $emp2_Img = $empDataArray[1]['employeeImage'];
    
    $emp3_ID = $empDataArray[2]['employeeID'];
    $emp3_Title = $empDataArray[2]['employeeTitle'];
    $emp3_First = $empDataArray[2]['employeeFirst'];
    $emp3_Last = $empDataArray[2]['employeeLast'];
    $emp3_CV = $empDataArray[2]['employeeCV'];
    $emp3_Des = $empDataArray[2]['employeeDesc'];
    $emp3_Img = $empDataArray[2]['employeeImage'];
    
    $emp4_ID = $empDataArray[3]['employeeID'];
    $emp4_Title = $empDataArray[3]['employeeTitle'];
    $emp4_First = $empDataArray[3]['employeeFirst'];
    $emp4_Last = $empDataArray[3]['employeeLast'];
    $emp4_CV = $empDataArray[3]['employeeCV'];
    $emp4_Des = $empDataArray[3]['employeeDesc'];
    $emp4_Img = $empDataArray[3]['employeeImage'];

?>