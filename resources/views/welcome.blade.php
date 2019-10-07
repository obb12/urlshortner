<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="container">
        <h2>API Project: URL Shortener Microservice</h2>
        <h3>User Story: </h3>
        <ol>
          <li>I can POST a URL to <code>[project_url]/api/shorturl/new</code> and I will receive a shortened URL in the JSON response.<br>Example : <code>{"original_url":"www.google.com","short_url":1}</code></li>
          <li>If I pass an invalid URL that doesn't follow the <code>http(s)://www.example.com(/more/routes)</code> format, the JSON response will contain an error like <code>{"error":"invalid URL"}</code><br>
          HINT: to be sure that the submitted url points to a valid site you can use the function <code>dns.lookup(host, cb)</code> from the <code>dns</code> core module.</li>
          <li>When I visit the shortened URL, it will redirect me to my original link.</li>
        </ol>

        <h3>Short URL Creation </h3>
        <p>
          example: <code>POST [project_url]/api/shorturl/new</code> - <code>https://www.google.com</code>
        </p>
        <form action="api/shorturl/new" method="POST">
          <label for="url_input">URL to be shortened</label>
          <input id="url_input" type="text" name="url" value="https://www.freecodecamp.org">
          <input type="submit" value="POST URL">
        </form>
        <h3>Example Usage:</h3>
        <a href="/api/shorturl/1">
          [this_project_url]/api/shorturl/1
        </a>

        <h3>Will Redirect to:</h3>
        <p>https://wwww.google.fi/</p>
      </div>
        </div>
    </body>
</html>
