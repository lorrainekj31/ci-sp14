<?php
//views/mailing_list/view_mailing_list.php
//an add form to add an item to the table
/*
JohnDoe
userid: 1
first_name: John
last_name: 1
email: Doe
address: 1
state_code: 123 Any Street
zip_postal: 98111
username: johnd
bio: Hi! I'm John, and here's my Bio!
interests: golf,hiking,billiards
num_tours: 1
*/


echo'<p></p>';
echo validation_errors();

?>
<h1>Add to Mailing List</h1>
<?=form_open('mailing_list/insert');?>


<?php
//firstname
$firstname = array(
'name' => 'first_name',
'id' => 'first_name',
);
echo form_label('First Name','first_name') . ': ';
echo form_input($firstname). '<br />';
//last name
$lastname = array(
'name' => 'last_name',
'id' => 'last_name',
);
echo form_label('Last Name','last_name') . ': ';
echo form_input($lastname). '<br />';
//email
$email = array(
'name' => 'email',
'id' => 'email',
);
echo form_label('Email','email') . ': ';
echo form_input($email). '<br />';
//address
$address = array(
'name' => 'address',
'id' => 'address',
);
echo form_label('Address','address') . ': ';
echo form_input($address). '<br />';
//state code
$state_code = array(
'name' => 'state_code',
'id' => 'state_code',
);
echo form_label('State code','state_code') . ': ';
echo form_input($state_code). '<br />';
//zip
$zip_postal = array(
'name' => 'zip_postal',
'id' => 'zip_postal',
);
echo form_label('Zip postal','zip_postal') . ': ';
echo form_input($zip_postal). '<br />';
//user name
$username = array(
'name' => 'username',
'id' => 'username',
);
echo form_label('username','username') . ': ';
echo form_input($username). '<br />';
//password
$password = array(
'name' => 'password',
'id' => 'password',
);
echo form_label('password','password') . ': ';
echo form_input($password). '<br />';
//bio 
$bio = array(
'name' => 'bio',
'id' => 'bio',
);
echo form_label('bio','bio') . ': ';
echo form_textarea($bio). '<br />';

//interests
$interests = array(
'backpack_cal' => 'backpack california',
'cycle_cal' => 'cycle california',
'nature_watch' => 'nature watch',
);
echo form_label('interests','interests') . ': ';
echo form_multiselect('interests',$interests). '<br />';

/*
$interests = array(
'name' => 'interests',
'id' => 'interests',
);
*/




$num_tours1 = array(
'name' => 'num_tours',
'id' => 'num_tours1',
'value' => '0',
);

$num_tours2 = array(
'name' => 'num_tours',
'id' => 'num_tours2',
'value' => '1-3',
);

$num_tours3 = array(
'name' => 'num_tours',
'id' => 'num_tours3',
'value' => '4-6',
);

echo form_label('None','num_tours1') . ': ';
echo form_radio($num_tours1). '<br />';
echo form_label('1-3','num_tours2') . ': ';
echo form_radio($num_tours2). '<br />';
echo form_label('4-6','num_tours3') . ': ';
echo form_radio($num_tours3). '<br />';


?>

<?=form_submit('submit', 'Add to mailing List');?>
<?=form_close('');?>
