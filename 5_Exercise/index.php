<!-- /*
 5. Sukurkite formą, kuri leistų pridėti failą ir vėliau jį išsaugotų serveryje su formoje nurodytu failo pavadinimu (name). (3 balai)
*/

//    File forma: 
//    Name: [laboras.txt]
//    File: [browse]
-->
<html>
<head>
    <style>
        body {
            background-image: url(https://images.pexels.com/photos/93405/pexels-photo-93405.jpeg);
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            margin: 10px;
            padding: 10px;
        }

        main {
            background-color: #709bbb7d;
            max-width: 310px;
            margin-top: 20px;
            margin-left: 20px;
            padding: 40px;
        }

        form input {
            margin: 3px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        button {
            margin: 3px;
            background-color: #618aa9;
            color: white;
            width: 87px;
            cursor: pointer;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <main>
        <h1>Please, Add Your File!</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="filename" placeholder="Type suggested file name"><br>
            <input type="file" name="my_file"><br>
            <button type="submit">Upload</button>
        </form>
    </main>
</body>
</html>