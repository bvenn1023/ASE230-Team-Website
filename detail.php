<?php 
$data=[

	['firstname'=>'Hunter',
	'lastname'=>'Perry',
	'title'=>'Member',
	'summary' => 'Motivated informatics student seeking an internship in Cybersecurity or Networking to gain hands-on experience while finishing college. Self-Motivated, good communication skills with a desire to learn and succeed.',
	'experience company'=>'FedEx Freight',
	'experience' => 'Forklift Operator    ',
	'experience years' => '2022-present',
    	'experience des'=>'As a team worker for FedEx Freight, we establish team work with allowing ourselves to communicate with one another and to move freight to its destination.',
	'experienceacc1'=>'Collaborate with supervisor and other warehouse staff to coordinate work.',
	'email'=>'perryh2@mymail.nku.edu',
	'number'=>'012345678',
	'linkedin'=>'linkedln.com/hunter-perry01',
    	'github'=>'github.com/hunterperry21',
    	'website'=>'hunterperry.com',
    	'achievements' => 'Persuing Certifications',
   	'education' => 'Bachelor of Science in Cybersecurity, Bachelor of Arts in Communications',
    	'education year' => '2019-2024',
   	'school' => 'Northern Kentucky University',
   	'awards' => 'Persing Certifications',
    	'interests' => 'Hiking, Concerts, Baseball',
    	'languages' => 'English',
    	'ex1_tech1' => 'VmWare',
    	'ex1_tech2' => 'Java',
    	'ex1_tech3' => 'MicroSoft',
    	'ex1_tech4' => 'WebDesign',
    	'ex1_tech5' => '',
    	'ex2_tech1' => '',
    	'ex2_tech2' => 'Troubleshooting',
    	'ex2_tech3' => '',
	'ex2_tech4' => '',
	'ex2_tech5' => ''
	'dob' => '04/02/2002'
	
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
	'dob' =>''
	]
];
$index=$_GET['name'];

//echo $index;
//echo $data[$index]['firstname'];

function calculateAge($dateOfBirth) {
    // Convert the date of birth and current date to DateTime objects
    $dob = new DateTime($dateOfBirth);
    $currentDate = new DateTime();

    // Calculate the interval between the two dates
    $ageInterval = $currentDate->diff($dob);

    // Extract the years from the interval
    $age = $ageInterval->y;

    return $age;
}

	
?>


<!DOCTYPE html>
<html lang="en"> 
<head>

<title><?php echo $data[$index]['firstname']?><?php echo "'s Resume";?></title>

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
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary"><?php echo 'Back to index'; ?></a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $data[$index]['firstname']?></h1>
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo 'Age: '.calculateAge($data[$index]['dob']);?></h1>
							    <div class="title mb-3"><?php echo 'Your desired job title'; ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $data[$index]['email']?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $data[$index]['number']?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $data[$index]['linkedin']?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $data[$index]['github']?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $data[$index]['website']?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Summary'; ?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $data[$index]['summary'];?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Work Experience'; ?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $data[$index]['experience']?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $data[$index]['experience company'];?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo $data[$index]['experience years'];?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo $data[$index]['experience des'];?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'Achievements:'; ?></h4>
										    
										    <ul>
											    <?php if(isset($data[$index]['experienceacc1'])){
													?> <li> <?php echo $data[$index]['experienceacc1'];} ?></li>
											    <?php if(isset($data[$index]['experienceacc2'])){
													?><li> <?php echo $data[$index]['experienceacc2'];} ?></li>
											    <?php if(isset($data[$index]['experienceacc3'])){
													?> <li> <?php echo $data[$index]['experienceacc3'];} ?></li>
											    <?php if(isset($data[$index]['experienceacc4'])){
													?><li> <?php echo $data[$index]['experienceacc4'];} ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'Technologies used:';?></h4>
										    <ul class="list-inline">
											
											<li class="list-inline-item"><span class="badge bg-secondary badge-pill"> <?php if(isset($data[$index]['ex1_tech1'])){echo $data[$index]['ex1_tech1'];}?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex1_tech2'])){echo $data[$index]['ex1_tech2'];}?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex1_tech3'])){echo $data[$index]['ex1_tech3'];}?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex1_tech4'])){echo $data[$index]['ex1_tech4'];}?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex1_tech5'])){echo $data[$index]['ex1_tech5'];}?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php if(isset($data[$index]['experience2'])){echo $data[$index]['experience2'];} ?>  </h3>
										        <div class="resume-company-name ms-auto"><?php if(isset($data[$index]['experience2 company'])){echo $data[$index]['experience2 company'];}?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php if (isset($data[$index]['experience2 years'])){echo $data[$index]['experience2 years'];}?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php if(isset($data[$index]['experience2 des'])){echo $data[$index]['experience2 des'];}?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'Achievements';?></h4>
										    <p><?php echo $data[$index]['achievements']?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo 'Technologies used:';?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex2_tech1'])){echo $data[$index]['ex2_tech1'];}?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex2_tech2'])){echo $data[$index]['ex2_tech2'];}?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex2_tech3'])){echo $data[$index]['ex2_tech3'];}?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex2_tech4'])){echo $data[$index]['ex2_tech4'];}?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php if(isset($data[$index]['ex2_tech5'])){echo $data[$index]['ex2_tech5'];}?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->					    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Skills & Tools';?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'Angular';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'React';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'JavaScript';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'Node.js';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo 'HTML/CSS/SASS/LESS';?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?php echo 'Others';?></h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'DevOps';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Code Review';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Git';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Unit Testing';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Wireframing';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Sketch';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Balsamiq';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'WordPress';?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo 'Shopify';?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Education';?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree-org"><?php echo $data[$index]['education']?></div>
								        <div class="resume-degree-time"><?php echo $data[$index]['education year']?></div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"><?php echo 'BSc Maths and Physics';?></div>
								        <div class="resume-degree-org"><?php echo 'Imperial College London';?></div>
								        <div class="resume-degree-time"><?php echo '2010 - 2013';?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Awards';?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo 'Award:';?></div>
								        <div class="resume-award-desc"><?php echo $data[$index]['awards']?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo 'Award Name Ipsum';?></div>
								        <div class="resume-award-desc"><?php echo 'Award desc goes here, ultricies nec, pellentesque.';?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Languages';?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $data[$index]['languages']?></span> <small class="text-muted font-weight-normal"><?php echo '(Native)';?></small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?php echo $data[$index]['languages']?></span> <small class="text-muted font-weight-normal"><?php echo '(Professional)';?></small></li>
								    <li><span class="resume-lang-name font-weight-bold"><?php echo $data[$index]['languages']?></span> <small class="text-muted font-weight-normal"><?php echo '(Professional)';?></small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Interests';?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo $data[$index]['interests']?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Projects';?></h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'Project 1';?></h5>
									<p class="card-text"><?php echo 'Brief description of Project 1.';?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo 'Go to link';?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'Project 2';?></h5>
									<p class="card-text"><?php echo 'Brief description of Project 2.';?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo 'Go to link';?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo 'Project 3';?></h5>
									<p class="card-text"><?php echo 'Brief description of Project 3.';?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo 'Go to link';?></a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
							
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?php echo 'Designed with ';?><span class="sr-only"><?php echo 'love';?></span><i class="fas fa-heart"></i><?php echo ' Hunter, Brady, Will';?></small>
    </footer>

    

</body>
</html> 

