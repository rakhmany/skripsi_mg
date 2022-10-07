{{-- <head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

         body{
            position: relative;
            min-height: 100vh;
            width: 100%;
            background: #e7e9f5;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 300px;
            background: #ffff;
            padding: 6px 16px;
            height: 100%;
            box-shadow: 5px 0px 30px rgba(0,0,0,.1);
        }
        
        .sidebar .logo_content .logo{
            display: flex;
            color: blue;
            height: 50%;
            width: 100%;
            font-size: 30px;
            margin-left: 5px;
            align-items: center;
            pointer-events: none;
            opacity: 1;
        }

        .sidebar .logo_content .logo .logo_name {
            font-size: 23px;
            font-weight: 600;
            margin: 0 10px;
        }

        .sidebar #btn {
            position: absolute;
            color: #b3b3b3;
            left: 90%;
            top: 0px;
            font-size: 20px;
            height: 50px;
            width: 50px;
            text-align: center;
            line-height: 50px;
            transform: translate(-50%)

        }

        .sidebar .src {
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .sidebar .src input {
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            border-radius: 20px;
            border:none;
            background: blue;
            padding-left: 50px;
            font-size: 15px;
            color: #ffffff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        } 

        .sidebar .src .bx-search {
            position: absolute;
            z-index: 99;
            font-size: 22px;
            color: white;
        }

        .sidebar .src .bx-search:hover {
            color: #b3b3b3;
        
        }
        .sidebar .src .bx-search:hover ~ input{
            color: white;
        }

        .sidebar i {
            height: 50px;
            min-width: 50px;
            border-radius: 12px;
            line-height: 50px;
            text-align: center;
            font-size: 25px;
        }

        .sidebar ul {
            margin-top: 20px;
            /* margin-left: -40px; */
            margin-left: -15%;
        }

        .sidebar ul li {
            position: relative;
            height: 50px;
            width: 100%;
            margin: 0;
            list-style: none;
            line-height: 50px;
        }
    </style>
</head> --}}

<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <i class='bx bxs-heart'></i>
            <div class="logo_name">Hello MiniGold</div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>

    <div class="src">
        <i class='bx bx-search' ></i>
        <input type="text" placeholder="search..">
    </div>

    <ul>
        <li>
            <a href="#">
                {{-- icon nav --}}
                <i class='bx bx-bar-chart-alt-2'></i>
                <span class="link_name">Dashboard</span>
            </a>
            {{-- <span class="tooltip">Dashboard</span> --}}
        </li>
        <li>
            <a href="#">
                {{-- icon nav --}}
                <i class='bx bx-bar-chart-alt-2'></i>
                <span class="link_name">Profile</span>
            </a>
            {{-- <span class="tooltip">Profile</span> --}}
        </li>
        <li>
            <a href="#">
                {{-- icon nav --}}
                <i class='bx bxl-paypal'></i>
                <span class="link_name">Order</span>
            </a>
            {{-- <span class="tooltip">Order</span> --}}
        </li>
    </ul>
</div>

{{-- <div class="home_content">
    <div class="text">Home Content</div>
</div> --}}

