<?php
function recursive($arr){
    foreach($arr as $subArr){
        if(isset($subArr['subCategories'])){
            echo "<option disabled value=''>{$subArr['name']}</option><li>\n";
            recursive($subArr['subCategories']);
            echo "<\li>";
        }else{
            echo "<ul><option value='{$subArr['name']}'>&nbsp&nbsp&nbsp&nbsp&nbsp- {$subArr['name']} </option></ul>\n\n";
        }   
    }
}

$categories=array(
  array(
    'name' => 'Academics',
    'subCategories' => array(
      array(
        'name'=>'Accounting'),
      array(
        'name'=>'American Studies'),
      array(
        'name'=>'Applied Mathematics'),
      array(
        'name'=>'Athletic Traning'),
      array(
        'name'=>'Biochemistry'),
      array(
        'name'=>'Biology'),
      array(
        'name'=>'Biology Education'),
      array(
        'name'=>'Biomedical Sciences'),
      array(
        'name'=>'Business Administration'),
      array(
        'name'=>'Chemistry'),
      array(
        'name'=>'Communication'),
      array(
        'name'=>'Computer Science/Game Design'),
      array(
        'name'=>'Criminal Justice'),
      array(
        'name'=>'Digital Media'),
      array(
        'name'=>'Economics'),
      array(
        'name'=>'English'),
      array(
        'name'=>'Envrionmental Science'),
      array(
        'name'=>'Fashion Design'),
      array(
        'name'=>'Fashion Marchandising'),
      array(
        'name'=>'Fine Arts'),
      array(
        'name'=>'History'),
      array(
        'name'=>'Information Technology and Systems'),
      array(
        'name'=>'Mathematics'),
      array(
        'name'=>'Media Studies and Production'),
      array(
        'name'=>'Medical Technology'),
      array(
        'name'=>'Modern Languages and Cultures'),
      array(
        'name'=>'Philosophy'),
      array(
        'name'=>'Political Science'),
      array(
        'name'=>'International Studies'),
      array(
        'name'=>'Public Affairs'),
      array(
        'name'=>'Psychology'),
      array(
        'name'=>'Psychology/Dual Certification'),
      array(
        'name'=>'Social Work'),
      ),
    ),
    array(
      'name'=>'Admissions',
      'subCategories'=>array(
        array(
          'name'=>'Undergraduate'),
        array(
          'name'=>'Graduate'),
        array(
          'name'=>'Pre-College'),
        array(
          'name'=>'Transfer Students'),
        array(
          'name'=>'International Students'),
        array(
          'name'=>'Adult Students'),
        array(
          'name'=>'Military Students'),
        array(
          'name'=>'Part-Time'),
      ),
    ),
    array(
      'name'=>'Athletics',
      'subCategories'=>array(
        array(
          'name'=>'Basketball'),
        array(
          'name'=>'Baseball'),
        array(
          'name'=>'Football'),
        array(
          'name'=>'Softball'),
        array(
          'name'=>'Soccer'),
        array(
          'name'=>'Lacrosse'),
        array(
          'name'=>'Cross Country'),
        array(
          'name'=>'Track & Field'),
        array(
          'name'=>'Swimming & Diving'),
        array(
          'name'=>'Water Polo'),
        array(
          'name'=>'Volleyball'),
        array(
          'name'=>'Tennis'),
        array(
          'name'=>'Crew'),
        array(
          'name'=>'Ultimate Frisbee'),
      ),
    ),
    array(
      'name'=>'Maintenance',
      'subCategories' => array(
        array('name'=>'Maintenance'),)
    ),
    array(
      'name'=>'Health Services',
      'subCategories' => array(
        array('name'=>'Health Services'),)
    ),
    array(
      'name'=>'Dining',
      'subCategories' => array(
        array('name'=>'Dining'),)
    ),
    array(
      'name'=>'Housing',
      'subCategories' => array(
        array('name'=>'Housing'),)
    ),
    array(
      'name'=>'Registration',
      'subCategories' => array(
        array('name'=>'Registration'),)
    ),
    array(
      'name'=>'Clubs/Organizations',
      'subCategories'=>array(
        array(
          'name'=>'Buisness Club'),
        array(
          'name'=>'Computer Society'),
        array(
          'name'=>'Marist Game Society'),
        array(
          'name'=>'Math Club'),
        array(
          'name'=>'Campus Ministry'),
        array(
          'name'=>'Student Government Association'),
        array(
          'name'=>'Marist Band'),
        array(
          'name'=>'ARCO'),
        array(
          'name'=>'Black Student Union'),
        array(
          'name'=>'Asian Alliance'),
        array(
          'name'=>'Greek Life'),
        array(
          'name'=>'Marist Singers'),
      ),
    ),
    array(
      'name'=>'Priority Points',
      'subCategories'=>array(
        array(
         'name'=>'Behavior'),
        array(
         'name'=>'Clubs/Community Service/Intramurals'),
        array(
         'name'=>'Room'),
        array(
         'name'=>'Grades'),
      ),
    ),
    array(
      'name'=>'Special Services',
      'subCategories' => array(
        array('name'=>'Special Services'),)
    ),
    array(
      'name'=>'Counseling Services',
      'subCategories' => array(
        array('name'=>'Counseling Services'),)
    ),
    array(
      'name'=>'Security',
      'subCategories' => array(
        array('name'=>'Security')),
    ),
    array(
      'name'=>'Intramurals',
      'subCategories'=>array(
        array(
         'name'=>'Badminton'),
        array(
         'name'=>'Basketball'),
        array(
         'name'=>'Dodgeball'),
        array(
         'name'=>'Flag Football'),
        array(
         'name'=>'Lacrosse'),
        array(
         'name'=>'Soccer'),
        array(
         'name'=>'Softball'),
        array(
         'name'=>'Tennis'),
        array(
         'name'=>'Ultimate Frisbee'),
        array(
         'name'=>'Volleyball'),
      ),
    ),
  );
  

?>