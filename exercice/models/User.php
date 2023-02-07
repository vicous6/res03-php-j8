<?php 
class User {

    // private attribute
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private array $posts;

    // public constructor
    public function __construct(string $firstName,string $lastName,string $email,string $password)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
         $this->$posts = [];
    }

    // public getter
     public function getId() : int
    {
        return $this->id;
    }
    public function getFirstName() : string
    {
        return $this->firstName;
    }
     public function getLastName() : string
    {
        return $this->lastName;
    }
     public function getEmail() : string
    {
        return $this->email;
    }
    public function getPassword() : string
    {
        return $this->password;
    }
 public function getPosts() : array
    {
        return $this->posts;
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
    
    
    function addPost(Post $post): array{
     array_push($this->posts, $post) ; 
     
     return $this->posts;
    }
    
    
     function removePost(Post $post): array{
        
        $newTab =[];
        
        for($i = 0 ; i < $this->posts.length;$i++){
            
            if($this->posts[$i]["id"] !== $post -> getId()){
               array_push( $newTab, $post);  
            }
            
        }
        return $newTab;
    }
    
    
    // addPost(Post $post) : array qui ajoute le $post au tableau des posts et renvoie le tableau.
    // removePost(Post $post) : array qui retire le $post au tableau des posts et renvoie le tableau.

}  

?>