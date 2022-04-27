<?php

Route::get('ic', function () {
    echo 'Hello from the ic package!';
});
Route::get('get_dob/{ic}', 'Nazfitri\MalaysianIc\MalaysianIcController@get_dob');
Route::get('get_birthplace/{ic}', 'Nazfitri\MalaysianIc\MalaysianIcController@get_birthplace');
Route::get('get_gender/{ic}', 'Nazfitri\MalaysianIc\MalaysianIcController@get_gender');