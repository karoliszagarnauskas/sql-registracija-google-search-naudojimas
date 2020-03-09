<?php


// print_r($_GET);


// echo "Labas <br> $_GET[vardas]" . "<br> $_GET[pavarde] <br> $_GET[tel] <hr> ";
include 'doctors.php';
// getDoctorByName($_GET['vardas']);
$gydytojas = getDoctorByName($_GET['vardas']);
// print_r ( $gydytojas);   //test
// echo " daktaro pavarde yra: " . $gydytojas["lastname"];

// $url = "https://google.com";
if ($gydytojas != null) {
  echo "array key exists";
}else {


  echo "array key doesnt exist" . "<br> Redirecting to google search in 3....2....1......";
  ?>
  <script type="text/javascript">
  var val = "<?php echo $_GET['vardas'] ?>";
  setTimeout(function () {
     window.location.replace("https://google.com?q=" + val); // the redirect goes here

  },3000);
  // window.location.replace("https://google.com?q=" + val);
  </script>
  <?php

}





  // if ("vardas" > 0) {
  //   return  $vardas("lname"); //  gaaaaaal
  //   echo $vardas("lname");
  // }
// createDoctor("$_GET[vardas]","$_GET[pavarde]","$_GET[tel]");
// if (getDoctorByName() = "Ona") {
//   echo "string";
// }$_GET['vardas'] = getDoctor(1);
// echo"  ";


 ?>
