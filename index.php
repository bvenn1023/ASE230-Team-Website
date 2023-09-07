<?php 
$data=[

	['firstname'=>'Hunter',
	'lastname'=>'Perry',
	'title'=>'Member',
    'summary' => 'Motivated informatics student seeking an internship in Cybersecurity or Networking to gain hands-on experience while finishing college. Self-Motivated, good communication skills with a desire to learn and succeed.',
	'experience company'=>'FedEx Freight',
	'experience' => 'Forklift Operator	',
	'experience years' => '2022-present',
	'experience des'=>'As a team worker for FedEx Freight, we establish team work with allowing ourselves to communicate with one another and to move freight to its destination.',
	'experienceacc1'=>'Collaborate with supervisor and other warehouse staff to coordinate work.',
	'email'=>'perryh@mymail.nku.edu',
	'number'=>'012345678',
	'linkedin'=>'linkedln.com/hunter-perry',
	'github'=>'github.com/hunter-perry',
	'website'=>'hunterperry.com',
	'achievements' => '',
	'education' => '',
	'education year' => '',
	'school' => 'Northern Kentucky University',
	'awards' => '',
	'interests' => '',
	'languages' => '',
	'ex1_tech1' => '',
	'ex1_tech2' => '',
	'ex1_tech3' => '',
	'ex1_tech4' => '',
	'ex1_tech5' => '',
	'ex2_tech1' => '',
	'ex2_tech2' => '',
	'ex2_tech3' => '',
	'ex2_tech4' => '',
	'ex2_tech5' => '',
	'dob' => ''
	],
	
	['firstname'=>'Brady',
	'lastname'=>'Venneman',
	'title'=>'Member',
	'summary'=>'Detail-oriented with proven experience in analyzing and implementing effective security measures. Skilled in conducting risk assessments, developing security policies and procedures, and detecting and mitigating potential threats. Strong knowledge of network security, vulnerability management, and incident response. Looking to leverage my skills and expertise in a challenging and rewarding role in cybersecurity ',
	'experience'=>'Information Security Analyst',
	'experience des'=>'As an Information Security Analyst, I\'ve conducted comprehensive vulnerability assessments, developed and enforced security policies in line with industry standards, and effectively managed security incident response plans to safeguard against cyber threats.',
	'experience years'=>'2023-present',
	'experience company'=>'Cintas',
	'experienceacc1'=>'Conducted thorough vulnerability assessments, identifying critical security flaws, and supplying actionable recommendations that mitigated potential risks',
	'email'=>'vennemanb1@mymail.nku.edu',
	'number'=>'012345678',
	'linkedin'=>'linkedln.com/brady-venneman',
	'github'=>'github.com/brady-venneman',
	'website'=>'bradyvenneman.com',
	'achievements' => 'Actively pursuing CompTIA Security+ certificate',
	'education' => 'Bachelors in Cybersecurity with minors in Computer Science and Computer Information Technology',
	'education year' => '2020-2024',
	'school' => 'Northern Kentucky University',
	'awards' => 'Pursuing Certifications',
	'interests' => 'Movies, TryHackMe, Basketball',
	'languages' => 'English',
	'ex1_tech1' => 'CrowdStrike',
	'ex1_tech2' => 'Proofpoint',
	'ex1_tech3' => 'Qualys',
	'ex1_tech4' => 'Incident Response',
	'ex1_tech5' => 'Zerofox',
	'ex2_tech1' => 'Cabling',
	'ex2_tech2' => 'Troubleshooting',
	'ex2_tech3' => 'Configuration',
	'ex2_tech4' => 'Security Policies',
	'ex2_tech5' => 'Time Management',
	'dob' => '04/02/2002'
	],
	
	['firstname'=>'Will',
	'lastname'=>'Cuthbert',
	'title'=>'Member',
	'summary'=>'Current Cybersecurity student with experiences in hardware salvage and Python development. Seeking
a remote or on-site Cybersecurity/IT internship in the Cincinnati metropolitan area.',
	'experience'=>'Grocery Store Clerk',
	'experience des'=>'Provide excellent customer service, lead and train junior associates, manage and remove inventory',
	'experience years'=>'2020-2021, 2022-present',
	'experience company'=>'Kroger',
	'experienceacc1'=>'Over one year of service',
	'ex1_tech1'=>'inStock',
	'experience2'=>'High School Tech Aide',
	'experience2 des'=>'Tear-down outdated computer labs, update outdated systems, manage and remove inventory',
	'email'=>'cuthbertw@mymail.nku.edu',
	'number'=>'012345678',
	'linkedin'=>'linkedlin.com/will-cuthbert',
	'github'=>'github.com/will-cuthbert',
	'website'=>'willcuthbert.com',
	'achievements' => '',
	'education' => 'B.S. in Cybersecurity',
	'education year' => '2021-2025',
	'school' => 'Northern Kentucky University',
	'awards' => 'Deans List',
	'interests' => 'Hiking',
	'languages' => 'English',
	'ex1_tech1' => 'inStock',
	'ex1_tech2' => 'TransView',
	'ex1_tech3' => '',
	'ex1_tech4' => '',
	'ex1_tech5' => '',
	'ex2_tech1' => 'Windows',
	'ex2_tech2' => '',
	'ex2_tech3' => '',
	'ex2_tech4' => '',
	'ex2_tech5' => '',
	'dob' => ''
	]
];
?>



<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo 'Our amazing team'; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center"><?php 'OUR AMAZING TEAM'; ?></h1>
			
			<?php for($i=0;$i<count($data);$i++){?>
				
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <!-- <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$data[$i]['firstname']; ?> </h1>
							    <div class="title mb-3"><?=$data[$i]['title'];?></div> -->
								<div class="title mb-3"><?=displayMemberCard($data, $i);?></div>
								<a href="detail.php?name=<?=$i;?>" class="btn btn-secondary"><?php echo 'See full profile'; ?></a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
				    </div><!--//col--> 
			    </div><!--//row-->
		    </header>
			<?php }
			function displayMemberCard($data, $i) {
    
				if (isset($data[$i]['firstname'], $data[$i]['lastname'], $data[$i]['title'])) {
					$firstname = $data[$i]['firstname'];
					$lastname = $data[$i]['lastname'];
					$title = $data[$i]['title'];
			
					echo '<div class="member-card">';
					echo "<p>Name: $firstname $lastname</p>";
					echo "<p>Title: $title</p>";
					echo '</div>';
				} else {
					echo "Invalid member information for member #$i.";
				}
			}?>
					    
	    </div>
    </article> 


    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?php echo 'Designed with'; ?> <span class="sr-only"><?php echo ' love '; ?></span><i class="fas fa-heart"></i><?php echo 'Hunter, Brady, Will'; ?></small>
    </footer>

    

</body>
</html> 

