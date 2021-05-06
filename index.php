<!--In this next assignment, your application will be a single index.php file with some elements in HTML and some elements in PHP. This also verifies that you can do basic HTML and know how to use the 'pre' tag as well as understand how to switch between PHP and HTML when writing a PHP script. Make sure to save your screen shots JPG or PNG files and keep them less than 1MB. You must include the URL bar in all of your screen shots and the software must be running in your PHP server (i.e. file:// urls will not be accepted)

Your name must be in the <title> tag like 'Charles Severance PHP'
There should be an <h1> tag with your name and text like 'Charles Severance PHP'
You should use a <pre> tag to create ASCII art of the first letter of your name four spaces in from the left margin
Your code should use PHP to compute the SHA256 of your name and print it out like the sample application. You must compute this in your index.php file. The PHP code to achieve this for 'Charles Severance' is:
     print hash('sha256', 'Charles Severance');  -->
<html>
    <head>
        <title>Yash Mallik Loop cycle</title>
        </head>
    <body>
        <h1> Yash Mallik Loop cycle</h1>
        
        <?php 
            $name = "Yash mallik \n";
            $phpCompute = "SHA256 \n";
            echo "The SHA256 hash of \n".$name."is".hash("sha256", $name);
            ?>
            <pre>ASCII ART:
                    
            ***  ****************  ***     
            *****  ************  *****
            *******  ********  *******
            *********  ****  *********
            **********  **  **********
            ************  ************
            ************  ************
            ************  ************
            ************  ************
            ************  ************
            </pre> 
            <a href="check.php">Click here to check the error setting</a><br>
            
            <a href="fail.php">Click here to cause a traceback</a>
    </body> 
</html>
