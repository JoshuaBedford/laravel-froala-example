<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet" type="text/css">

        @include('froala/includes/_froala-css')

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
			.fixed-nav-bar {
			    position: fixed;
			    top: 0;
			    left: 0;
			    z-index: 9999;
			    width: 100%;
			    height: 50px;
			    background-color: #000;
			    color: #fff;
			    overflow: hidden;
			}
			.fixed-nav-bar ul{
				list-style-type: none;
				margin: 0 auto;
				padding: 0;
				overflow: hidden;
			}
			.fixed-nav-bar li{
				float: left;
			}
			.fixed-nav-bar li a{
				display: block;
				color: #fff;
				font-weight: 300;
				font-size: 20px;
				padding-left: 1em;
				padding-top: 1em;
			}
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                margin-top: 50px;
            }
            .form{
                display: block;
            }
            .title {
                font-size: 125px;
            }
            .subtitle {
                font-size: 32px;
            }
            .article{
                font-size: 1.5em;
            }
            .articles > li > .title{
                font-size: 30px;
                color: #F4645F;
            }
            input{
            	width: 100%;
			    font-size: 2em;
            }
        </style>
    </head>