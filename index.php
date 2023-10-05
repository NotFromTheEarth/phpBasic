<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function call_php()
        {
            logMovies();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200)
                {
                    // MANAGE THE RESPONSE
                    var response = this.responseText;
                    const p = document.getElementById('php_response');
                    p.textContent = response;
                }
            }
            xmlhttp.open("GET", 'get_content.php', true);
            xmlhttp.send();
        }

        async function logMovies()
        {
            const response = await fetch("https://jsonplaceholder.typicode.com/todos/");
            const movies = await response.json();
            console.log(movies);
        }
    </script>
</head>
<body>
    <h1>Hello</h1>
    <a href="register.php">Register</a><br>
    <a href="admin/panel.php">Go to Admin Panel</a><br>
    <button onclick="call_php()">Click me</button>
    <p id="php_response"></p>
</body>
</html>




