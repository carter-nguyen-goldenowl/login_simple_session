<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <title>Login using Session</title>
</head>
<body>
<?php
    $msg = "";

    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
    {
        if($_POST['username'] == 'loginSession' && $_POST['password'] == '12345' ){
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'loginSession';

            $msg = 'You have entered valid use name and password';

        }
    }else{
        $msg = 'Wrong username or password';
    }

?>
<section class="h-screen">
    <div class="container px-6 py-12 h-full">
        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
            <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
                <img
                        src="logo.svg"
                        class="w-full"
                        alt="Phone image"
                />
            </div>
            <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
                <form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
                ?>" method = "post">
                    <h4> <?php echo $msg; ?></h4>
                    <div class="mb-6">
                        <input
                                type="text"
                                name="username"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder=" = username = loginSession"
                        />
                    </div>

                    <div class="mb-6">
                        <input
                                type="password"
                                name="password"
                                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Password = 12345"
                        />
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <div class="form-group form-check">
                            <input
                                    type="checkbox"
                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    id="exampleCheck3"
                                    checked
                            />
                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                            >Remember me</label
                            >
                        </div>
                        <a
                                href="#!"
                                class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out"
                        >Forgot password?</a
                        >
                    </div>

                    <button
                            type="submit"
                            name="login"
                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                    >
                        Login
                    </button>

                    <div
                            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
                    >
                        <p class="text-center font-semibold mx-4 mb-0">OR</p>
                    </div>

                    <a
                            class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3"
                            style="background-color: #3b5998"
                            href="logout.php"
                            role="button"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                    >
                        Clear Session
                    </a>

                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
