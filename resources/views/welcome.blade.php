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
            
            <div class="top-right links">
                <a href="/session">Profile</a>
                <a href="/session/buat">Login</a>
                <a href="/session/hapus">Logout</a>
            </div>
            

            <div class="content">
                <div class="title m-b-md">
                    Chicken
                </div>

                <div class="links">
                    <a href="/blog">Template</a>
                     | 
                    <a href="/pegawai">CRUD & Search</a>
                     | 
                    <a href="/input">Form Validasi</a>
                     | 
                    <a href="/employee">Eloquent</a>
                     | 
                    <a href="/guru">Soft Deletes</a>
                     | 
                    <a href='/pesan'>Notifikasi</a>
                     |
                     <a href='/form'>Multi Bahasa</a>
                    <br>
                    <a href="/pengguna">One to One</a>
                     | 
                    <a href="/article">One to Many</a>
                     | 
                    <a href="/anggota">Many to Many</a>
                </div>
            </div>
        </div>
    </body>
</html>
