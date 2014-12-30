<?
// Enter your personal details here to build your online resume.

// Let's start with some basic info.  You must include your full name, but if you don't want to include your phone number or email address you can just delete those lines entirely.
$personal['first_name']= 'Nicholas';
$personal['last_name'] = 'Porter';
$personal['phone_number'] = '505.750.8362';
$personal['email_address'] = 'nick@porternick.com';

// Now let's add any social media pages you've created and want to share.  You can add whatever you want by following the format below.  The first item you add is the name of the social media site, and the second item you add is the URL to your page.
$social_media[] = array('Twitter', 'http://twitter.com/mrporterscience');
$social_media[] = array('Class Website', 'http://mrporterscience.com');

// Cool.  With that stuff out of the way, let's input your work history.  This part requires a bit more information but it's similar to adding a social media page like you did above but with more information.  The first item you enter is last year you worked at the job (or the range of time, if you prefer).  The second item is your job title, the third is the company you worked for, and the fourth is a description of the work you did there.  The description can get a little long, but that's okay.  Just be sure not to use any single quotes ('') or things will break!  You can add as many jobs as you like and the script will adapt.
$work_history[] = array('2008-Present',
						'Science and Technology Teacher',
						'Albuquerque Public Schools',
						'Facilitated project-based oportunities focusing on citizen science and the development of technologies.');
$work_history[] = array('2007',
						'Summer Program Director',
						'YMCA Camp Colman',
						'Developed curriculum and implemented summer camping program. Ensured program conformed to American Camp Association standards.');
$work_history[] = array('2004-2006',
						'Wilderness Programs & Administrative Coordinator',
						'Camp Gray',
						'Created curriculum for wilderness travel. Supervised and trained wilderness trip leaders. Studied non-profit administration of a summer camp and environmental education facility.');
$work_history[] = array('Summers 02, 03 & 04',
						'Wilderness Trip Leader & Camp Counselor',
						'Camp Gray',
						'Led wilderness canoe and hiking expeditions. Counseled campers of diverse ages, abilities and backgrounds at a traditional summer camp.');
$work_history[] = array('Summers 00, 01 & 09',
						'Lead Counselor & Science Program Counselor',
						'Lions Camp Tatiyee',
						'Created curriculum for science and nature based programs. Supervised and trained counselors. Counseled children and adults with mental and physical disabilities.');						
						
// Phew!  That was the hard part.  Now we need to enter in some other important information about you.  Let's start with your education.  You only need to enter two things: your school and a description of your degree.  If you went to Brown University you'd enter that for your school, then put your year and graduation date as the description (e.g. "BA in Social Sciences, Class of 2002").
$education[] = array('University of New Mexico', 'MA in Elementary Education');
$education[] = array('Central New Mexico Community College', 'Certificate for Teacher Licensure');
$education[] = array('Northern Arizona University', 'BS in Parks and Recreation Management');

// Presumably you learned something in school and developed a few skills over the course of your lifetime.  Let's add them here.  
$skills[] = array('Level One Initial License K-8 Elementary Education', 'State of New Mexico Public Education Department');
$skills[] = array('Wilderness First Responder / Adult and Child CPR', 'Wilderness Medicine Institute');
$skills[] = array('Outdoor Leadership Certification', 'Northern Arizona University');
$skills[] = array('Leave No Trace Trainer', 'Leave No Trace Inc');

// Finally, let's list any awards or honors you've received so you can show off your accomplishments.  To add an award, just use the format below.  (I'm sure you have the hang of this by now, but we're going to go over it anyway.)  The first item you enter is the name of the award/honor (e.g. "Advertising Gold Award" or "Published in the New Yorker") and the second item is the description of the award/honor (e.g. "2010 TV Ads Under $50,000" or "Short story about the trials of Orthodox Jews in Arkansas, May 2016").
$awards[] = array('Volunteer Service Award', 'Camp Gray');
$awards[] = array('Member', 'National Science Teacher Association');
$awards[] = array('Member', 'Albuquerque Teachers Federation');


// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)
$settings['social_media'] = false;
$settings['education'] = true;
$settings['skills'] = true;
$settings['awards'] = true;

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable'] = true;
$settings['style'] = "dark";
?>