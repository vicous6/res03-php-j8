<?php 

class PostCategory {

    // private attribute
    private int $id;
    private string $name ;
      private string $description ;
    private array $posts;
   
    


    // public constructor
    public function __construct(string $name,string $description)
    {
        $this->id = -1;
        $this->name = $name;
        $this->description = $description;
        $this->posts = [];
       
        
    }

    // public getter
     public function getId() : int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
     public function getDescription() : string
    {
        return $this->description;
    }
     public function getPostsList() : Post
    {
        return $this->posts;
    }
  

    // public setter
        public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function SetName(string $name) : void
    {
        $this->name= $name;
    }
     public function setDescription(string $description) : void
    {
        $this->content = $description;
    }
       public function setPostsList(Post $posts) : void
    {
        $this->posts = $posts;
    }
//   creer les methodes
    
    public function addPost(Post $post) : array {
        $this->posts[] = $post;
    }

    public function  removePost(Post $post) : array
    {
        $newPosts = [];

        for($i = 0; $i < count($this->posts); $i++) {
            if($this->posts[$i]->getId() !== $post->getId())
            {
                $newPosts[] = $this->posts[$i];
            }
        }

        $this->posts = $newPosts;

        return $this->posts;
    }

}  

?>