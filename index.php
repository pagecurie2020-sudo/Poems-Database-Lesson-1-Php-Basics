<?php 
 $pageTitle="";
include "includes/header.php"; ?>

<!--

$pageTitle ....

***HEADER.PHP HAS IN THE TOP INCLUDE_ONCE "UTILITIES.PHP"***
UTILITIES.PHP
function isProduction(){
// Provide way of knowing if the code is on production server


return false;

}


function isDebugMode(){
// Set to true if not on production
// You may want to provide other ways for setting debug mode


  return !isProduction();
  
}

if(isDebugMode()){

  error_reporting(E_ALL);
  ini_set('display_errors', '1');


}







-->
<main>
  <h1>Latest Poems</h1>
  <table>
    <thead>
      <tr>
        <th>Poem</th>
        <th>Category</th>
        <th>Author</th>
        <th>Published</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Carrots and Camels</td>
        <td>Funny</td>
        <td>LimerickMan</td>
        <td>01/11/2024</td>
      </tr>
      <tr>
        <td>Dancing Dogs in Dungarees</td>
        <td>Funny</td>
        <td>LimerickMan</td>
        <td>01/11/2024</td>
      </tr>
      <tr>
        <td>The Geriatric General</td>
        <td>Funny</td>
        <td>LimerickMan</td>
        <td>01/11/2024</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4"><a href="poems.php">More Poems</a></td>
      </tr>
    </tfoot>
  </table>
</main>
<?php include "includes/footer.php"; ?><!-- i am using include because this is only html  -->
</body>
</html>