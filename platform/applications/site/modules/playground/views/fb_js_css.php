<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <style type="text/css">
        /*
        body {
            padding: 0;
            margin: 0;
            font-family: Helvetica, Sans-serif;
            font-size: 16px;
            color: #333;
            line-height: 1.5;
        }
        */

        .wrapper {
            width: 800px;
            margin: 60px auto;
            border: 1px solid #eee;
            background: #fcfcfc;
            padding: 0 20px 20px;
            box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        h1, h3 {
            text-align: center;
        }

        .login,
        .form {
            text-align: center;
        }

        .login button,
        input[type="submit"] {
            border: none;
            background: #2F5B85;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            margin: 20px auto;
            cursor: pointer;

            transition: background .6s ease;
        }

        .login button:hover,
        input[type="submit"]:hover {
            background: #999;
        }

        textarea {
            width: 96%;
            height: 200px;
            background: #fff;
            border: 1px solid #ccc;
            padding: 2%;
        }

        .form {display:none;}

        .note {
            font-size: 12px;
            color: #888;
        }
    </style>
