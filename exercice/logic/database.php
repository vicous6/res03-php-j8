
<?php 
// getcwd();
    require "models/User.php";
     require "models/Post.php";
      require "models/PostCategory.php";
    
    
    // Ma doue beniget, pourquoi j'ai du code qui flotte tout seul sans scope ? dans vos fonctions les lignes allez !



function loadUser(string $email):? User{
    

    $db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=victoroustiakine_phpj8.',
    'victoroustiakine',
    'c6aaac523840dc2129f6449e52582bf0'
);


$query = $db->prepare('SELECT * FROM users WHERE email = :email');

	
	$parameters = [
    'email' => $email,
	];
	
$query->execute($parameters);

$soloUser = $query->fetch(PDO::FETCH_ASSOC);

if($soloUser === false){
    
    return null;
}


$newUser = new User($soloUser["first_name"],$soloUser["last_name"],$soloUser["email"],$soloUser["password"]);
$newUser-> setId($soloUser["id"]);
// var_dump($newUser);

return $newUser;
    
};

function saveUser(User $user): User{
    
        
$db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=victoroustiakine_phpj8.',
    'victoroustiakine',
    'c6aaac523840dc2129f6449e52582bf0'
);
    

$query = $db->prepare('INSERT INTO users VALUES (null, :firstName,:lastName,:email,:password)');

	
	$parameters = [
    'firstName' => $user -> getFirstName(),
    'lastName' => $user -> getLastName(),
    'email' => $user -> getEmail(),
    'password' => $user -> getPassword(),
    
    	];
$query->execute($parameters);
$soloUser = $query->fetchAll(PDO::FETCH_ASSOC);

// var_dump($soloUser);

return loadUser($user -> getEmail());
}

// function loadAllPost(){
   
//     $db = new PDO(
//     'mysql:host=db.3wa.io;port=3306;dbname=victoroustiakine_phpj8',
//     'victoroustiakine',
//     'c6aaac523840dc2129f6449e52582bf0'
// );

// $query = $db->prepare('SELECT * FROM posts' );

	
// 	$parameters = [
   
// 	];
	
// $query->execute($parameters);

// $allPosts = $query->fetchAll(PDO::FETCH_ASSOC);

// $tabObject= [];
// foreach($allPosts as $post){
    
//     // public function __construct(string $title,string $content,User $author,PostCategory $category)
//     $objet = new Post($post["title"],$post["content"],$post['author'])
    
// }
// }
function loadPostCategorys(): array{
    
    $db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=victoroustiakine_phpj8',
    'victoroustiakine',
    'c6aaac523840dc2129f6449e52582bf0'
);

$query = $db->prepare('SELECT * FROM post_categories');

	
	$parameters = [
  
	];
	
$query->execute($parameters);

$allCategorys = $query->fetchAll(PDO::FETCH_ASSOC);



    $newAllPostCategory = [];

    foreach($allCategorys as $postCat)
    {
        $newPostCategory = new PostCategory($postCat["name"], $postCat["description"]);
           $newPostCategory->setId($postCat["id"]);
        $newAllPostCategory[]= $newPostCategory;
    }
// var_dump($newAllPostCategory);
    return $newAllPostCategory;
    
}
function loadPosts(): array{
    
    $db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=victoroustiakine_phpj8',
    'victoroustiakine',
    'c6aaac523840dc2129f6449e52582bf0'
);

$query = $db->prepare('SELECT * FROM posts');

	
	$parameters = [
  
	];
	
$query->execute($parameters);

$allPosts = $query->fetchAll(PDO::FETCH_ASSOC);


// var_dump($allPosts);
    $newAllPostCategory = [];

    foreach($allPosts as $post)
    {
        $newPostCategory = new Post($post["title"], $post["content"], $post["author"], $post["category"]);
        $newPostCategory->setId($post["id"]);
        $newAllPostCategory[]= $newPostCategory;
        
    }
// var_dump($newAllPostCategory);

// var_dump($newAllPostCategory);
    return $newAllPostCategory;
    
}

// $userrrr = new User("erfze","zeezrf","vierverfez@free.fr","ergfe");

// $saveResult= saveUser($userrrr);

// var_dump($saveResult);

;
// $load = loadUser("vicous@free.fr");
// var_dump($load);
// echo "voici le user demandé";




// je veux créer une fonction qui récupère toutes les catégories de ma base de données et les renvoie
?>

