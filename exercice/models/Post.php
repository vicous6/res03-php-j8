<?php 
class Post {

    // private attribute
    private int $id;
    private string $title ;
    private string $content;
    private int $author;
    private int $category;


    // public constructor
    public function __construct(string $title,string $content,int $author,int $category)
    {
        $this->id = -1;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->category = $category;
        
    }

    // public getter
     public function getId() : int
    {
        return $this->id;
    }
    public function getTitle() : string
    {
        return $this->title;
    }
     public function getContent() : string
    {
        return $this->content;
    }
     public function getAuthor() : int
    {
        return $this->author;
    }
    public function getCategory() : int
    {
        return $this->category;
    }

    // public setter
        public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function SetTitleName(string $titleName) : void
    {
        $this->titleName= $titleName;
    }
     public function setContent(string $content) : void
    {
        $this->content = $content;
    }
       public function setAuthor(int $author) : void
    {
        $this->author = $author;
    }
    
       public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
       public function setCategory(int $category) : void
    {
        $this->posts = $category;
    }
    
    
    

}  

?>