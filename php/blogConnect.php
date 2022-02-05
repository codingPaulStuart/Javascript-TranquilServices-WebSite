<?php

    // Create Class to Handle Blog Articles
    class BlogArticle {
    
    private $id;
    private $title;
    private $blogText;
    private $blogImg;
    
    public function set_id($id) {
        $this->id = $id;
    }
    public function get_id() {
        return $this->id;
    }
    public function set_title($title) {
        $this->id = $title;
    }
    public function get_title() {
        return $this->title;
    }
    public function set_blogText($blogText) {
        $this->id = $blogText;
    }
    public function get_blogText() {
        return $this->blogText;
    }
    public function set_blogImg($blogImg) {
        $this->id = $blogImg;
    }
    public function get_blogImg() {
        return $this->blogImg;
    }
    // Constructor
    public function __construct($id, $title, $blogText, $blogImg)
    {
        $this->id = $id;
        $this->title = $title;
        $this->blogText = $blogText;
        $this->blogImg = $blogImg;
    }
}
    // ---------------------- Main Scripting ---------------------- //
    include 'tranquilconnect.php'; // connect
    $sql = "SELECT * FROM TblogPost;"; // Fetch Blog article titles
    
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $dataArray = array();
    
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Put results into Array
            $dataArray[] = $row;    
        }
    }
    
    // Set up variables to place on DOM news page
    $blog1_ID = $dataArray[0]['blogID'];
    $blog1_Title = $dataArray[0]['blogName'];
    $blog1_Text = $dataArray[0]['blogText'];
    $blog1_Img = $dataArray[0]['blogImg'];
    
    $blog2_ID = $dataArray[1]['blogID'];
    $blog2_Title = $dataArray[1]['blogName'];
    $blog2_Text = $dataArray[1]['blogText'];
    $blog2_Img = $dataArray[1]['blogImg'];
    
    $blog3_ID = $dataArray[2]['blogID'];
    $blog3_Title = $dataArray[2]['blogName'];
    $blog3_Text = $dataArray[2]['blogText'];
    $blog3_Img = $dataArray[2]['blogImg'];
 

?>