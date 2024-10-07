<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>User Names</h1>
    <div class="container">
        <div class="row">
            <?php
            // Function to fetch user data from the JSONPlaceholder API
            function getUsers() {
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
            }
            
            //Get the list of users
            $users = getUsers();
            $totalUsers = count($users);
            
            for ($i = 0; $i < count($users); $i++) {
                echo '
                    <div class="card col-md-3 m-1">
                        <div class="card-body">                        
                            <h5 class="card-title">' . $users[$i]['name'] . '</h5>
                            <p class="card-text">' . $users[$i]['username'] . '</p>
                            <p class="card-text">' . $users[$i]['email'] . '</p>
                            <p class="card-text">' . $users[$i]['phone'] . '</p>
                            <p class="card-text">' . $users[$i]['website'] . '</p>
                            <a href="#" class="btn btn-primary">Visit Website</a> 
                        </div>
                    </div>';
            }

            ?>      
         </div>   
    </div>        

    
        
     
</body>
</html>