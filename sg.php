<pre>
    <?php
        include "libs/load.php";
        Sesssion::start();
        // session_start();
        
        setcookie("testcookie", "testvalue", time() + (86400 * 40), "/");
        // print("_SERVER\n");
        // print_r($_SERVER);
        // print("_GET\n");
        // print_r($_GET);
        // print("_POST\n");
        // print_r($_POST);
        // print("_FILES\n");
        // print_r($_FILES);
        // print("_COOKIE\n");
        // print_r($_COOKIE);
        print("_SESSION\n");
        print_r($_SESSION); //we can persist data across request.


        // print("set a value a=100\n");
        // $a = 100;
        if(isset($_GET['clear'])) {
            printf("Clearing the session...\n");
            Session::unset();
        }

        if(Session::isset('a')) {
            // print("A already exist... Value: $_SESSION[a]\n");
            print("A already exist... Value: " . Session::get('a'). "\n");

        } else {
            Session::set('a', time());
            // $_SESSION['a'] = time();
            print("Assigning new value... Value: $_SESSION[a]\n");
        }


        if(Session::isset('destroy')) {
            printf("Destroying the session...\n");
            Session::destroy();
        }
    ?>
</pre>
