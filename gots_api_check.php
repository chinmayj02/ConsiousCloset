<?php

// // Set the URL to the GOTS database API
// $url = "https://api.global-standard.org/database/v2/certified/";

// // Set the brand name to check
// $brand_name = "Everlane";

// // Set the country code of the brand (optional)
// // $country_code = "US";

// // Create the query string
// $query_string = "name=" . urlencode($brand_name);
// if (!empty($country_code)) {
//   $query_string .= "&country_code=" . urlencode($country_code);
// }
// $query_string .= "&limit=1"; // Set limit to 1 to only return the first result

// // Make the API call
// $response = file_get_contents($url . "?" . $query_string);


// // $url.="?" . $query_string;
// // $data = false;
// // $method="GET";

// //     $curl = curl_init();

// //     switch ($method)
// //     {
// //         case "POST":
// //             curl_setopt($curl, CURLOPT_POST, 1);

// //             if ($data)
// //                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
// //             break;
// //         case "PUT":
// //             curl_setopt($curl, CURLOPT_PUT, 1);
// //             break;
// //         default:
// //             if ($data)
// //                 $url = sprintf("%s?%s", $url, http_build_query($data));
// //     }

    

// //     $result = curl_exec($curl);
// //     echo $result;

// //     curl_close($curl);

// //    echo $result;


// // Parse the response as JSON
// $data = json_decode($response, true);

// // Check if there is a result and if the result is certified
// if (!empty($data['certified_entities']) && $data['certified_entities'][0]['certification_status'] == "certified") {
//   echo $brand_name . " is GOTS certified.";
// } else {
//   echo $brand_name . " is not GOTS certified.";
// }


$product_code="SHAO085199";
  $url = 'https://www.oeko-tex.com/en/our-standards/certifications/certificate-data/?certificate=' . $product_code;
  $response = file_get_contents($url);
  if ($response !== false) {
      if (strpos($response, 'This certificate is valid') !== false) {
      }
  }

?>


<!-- https://www.oeko-tex.com/en/label-check?tx_avsite_validitycheck%5Baction%5D=check&tx_avsite_validitycheck%5Bcontroller%5D=Validity&cHash=07353bd4b930f358743a3f1b45bf9364#c9 -->


<!-- https://www.oeko-tex.com/en/label-check?tx_avsite_validitycheck%5Baction%5D=check&tx_avsite_validitycheck%5Bcontroller%5D=Validity&cHash=07353bd4b930f358743a3f1b45bf9364#c9 -->