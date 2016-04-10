<?php
echo "<HTML><head><title>Home Page</title></head>"; 
echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>";
echo "<link rel =\"stylesheet\" type=\"text/css\" href=\"Table.css\">";

echo "<body>
          <button type=\"button\" class=\"btn btn-primary btn-lg\" id=\"signup\">Signup</button>
          <button type=\"button\" class=\"btn btn-primary btn-lg\" id=\"login\">Login</button>
        <div class = \"header\">
          <p>
            Marist Solutions
          </p>
        </div>
        <div class = \"container\" >
          <br />
           <table>
             <p id = \"results\">Results<p>
              <tbody> 
                <tr>
                  <th>Header 1</th>
                  <th>Header 2</th>
                  <th>Header 3</th>
                </tr>
                <tr>
                  <td>Data 1</td>
                  <td>Data 2</td>
                  <td>Data 3</td>
                </tr>  
                <tr>
                  <td>Data 1</td>
                  <td>Data 2</td>
                  <td>Data 3</td>
                </tr>  
                <tr>
                  <td>Data 1</td>
                  <td>Data 2</td>
                  <td>Data 3</td>
                </tr>  
                <tr>
                  <td>Data 1</td>
                  <td>Data 2</td>
                  <td>Data 3</td>
                </tr>  
              </tbody>
           </table>
        </div>
          <a href=\"About.php\"><button type=\"button\" class=\"btn btn-primary btn-lg $dropdown\" id=\"about\">About Us</button></a>
      </body>";
?>