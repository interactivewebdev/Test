<?php $array = json_decode('[{"email":"ajay@tis-ites.in","password":"12345678","password_confirm":"12345678","firstname":"Ajay","lastname":"kumar","dob":"28-06-2016","profession_id":"1","specialty_id":"1","country_id":"1","state_id":"1","license_number":"Test","dea_number":"test"},{"email":"rakesh@tis-ites.in","password":"12345698","password_confirm":"12345698","firstname":"Rakesh","lastname":"Pandey","dob":"28-06-2016","profession_id":"1","specialty_id":"1","country_id":"1","state_id":"1","license_number":"test","dea_number":"test"}]');

echo "<pre>";
print_r($array);

echo array_search('ajay@tis-ites.in',$array[0]);