<?php 
class Post {

    // private attribute
    private int $id;
    private string $title ;
    private string $content;
    private User $author;
    private PostCategory $category;


    // public constructor
    public function __construct(string $title,string $content,User $author,PostCategory $category)
    {
        $this->id = -1;
        $this->titleName = $title;
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
     public function getAuthor() : User
    {
        return $this->author;
    }
    public function getCategory() : PostCategory
    {
        return $this->category;
    }

    // public setter
        public function setId(int $id) : void
    {
        $this->id = $id;
    }
    public function SetFirstName(string $firstName) : void
    {
        $this->firstName= $firstName;
    }
     public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
       public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
       public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
       public function setPosts(array $posts) : void
    {
        $this->posts = $posts;
    }
    
    
    
//     addPost(Post $post) : array qui ajoute le $post au tableau des posts et renvoie le tableau.
// removePost(Post $post) : array qui retire le $post au tableau des posts et renvoie le tableau.

}  

?>