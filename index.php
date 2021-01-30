<?php
	$url = file_get_contents("link.txt");
	$url_arr = explode("\n" , $url);
    echo '<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="python.css">
        <title>ARTH TASK-9</title>
    </head>
    <body>
        
        
        <div class="heading">
            <img  class="py_img" src="' . $url_arr[0] . '" alt="Girl in a jacket" width="100px" height="70px">
            <h1>Welcome to Python automation Web App </h1>
        </div>
        <div class="container">
            <div class="block">
                <a href="hadoop.html">
                    <div class="block1">
                        <div class="block1_1">
                        <img class="img1" src="' . $url_arr[1] . '" alt="Girl in a jacket" width="100px" height="70px">
                        <h3 class="li1">HADOOP</h3>
                        <br>
                        <li>Install hadoop</li>
                        <li>Name Node</li>
                        <li>Data Node</li>
                        <li>Hadoop Report</li>
                        <li>Start/stop Nodes</li>
                        </div>
                        <div class="mn1">
                            <div class="text">
                                <img  src="' . $url_arr[1] . '" alt="Girl in a jacket" width="100px" height="70px">
                                <h4>Click for Hadoop Menu</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="docker.html">
                    <div class="block2">
                        <div class="block2_1">
                            <img class="img1" src="' . $url_arr[2] . '" alt="Girl in a jacket" width="100px" height="70px">
                            <h3 class="li2">DOCKER</h3>
                            <br>
                            <li>Install Docker</li>
                            <li>Launch Container</li>
                            <li>Start/stop Container</li>
                            <li>Docker Images</li>
                            <li>Attach to container</li>
                        </div>
                        <div class="mn2">
                            <div class="text">
                                <img src="' . $url_arr[2] . '" alt="Girl in a jacket" width="100px" height="70px">
                                <h4>Click for Docker Menu</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="block">
                <a href="aws.html">
                    <div class="block3">
                        <div class="block3_1">
                        <img class="img1" src="' . $url_arr[3] . '" alt="Girl in a jacket" width="100px" height="70px">
                        <h3 class="li1">AWS</h3>
                        <br>
                        <li>Key Pair</li>
                        <li>Security Grp</li>
                        <li>EC2 Instance</li>
                        <li>EBS Volume</li>
                        <li>AWS S3</li>
                        </div>
                        <div class="mn3">
                            <div class="text">
                                <img  src="' . $url_arr[3] . '" alt="Girl in a jacket" width="100px" height="70px">
                                <h4>Click for AWS Menu</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="aws.html">
                    <div class="block4">
                        <div class="block4_1">
                        <img class="img1" src="' . $url_arr[4] . '" alt="Girl in a jacket" width="100px" height="70px">
                        <h3 class="li2">LINUX</h3>
                        <br>
                        <li>Webserver</li>
                        <li>Start/Stop service</li>
                        <li>Static Partition</li>
                        <li>Dynamic Partition [LVM]</li>
                        <li>SCP file transfer & SSH Login</li>
                        </div>
                        <div class="mn4">
                            <div class="text">
                                <img src="' . $url_arr[4] . '" alt="Girl in a jacket" width="100px" height="70px">
                                <h4>Click for Linux Menu</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </body>
    </html>';

?>