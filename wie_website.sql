-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29 يونيو 2024 الساعة 18:17
-- إصدار الخادم: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wie_website`
--

-- --------------------------------------------------------

--
-- بنية الجدول `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `summary` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- إرجاع أو استيراد بيانات الجدول `events`
--

INSERT INTO `events` (`id`, `name`, `type`, `image`, `caption`, `date`, `time`, `place`, `summary`) VALUES
(1, 'CV Creating Workshop', 'technical', '65cb4fc860f01.png', 'Some of the participating students', '2018-11-25', '12:00 PM - 03:00 PM (UTC +03:00)', 'Zinc Platform - Prince Hussein Building - Yarmouk University, Irbid', 'A workshop focusing on how to create your CV under the supervision of Eng. Heyam Al-Khatib of the Princess Basma Center for Women&#39;s Studies. <br>All 40 attendees were handed participation certificates and knowledge to benefit them on their path to the labor market whether it was as students or as graduates!'),
(2, 'IEEE PES Day 2021 (Jordan And Lebanon Joint Event)', 'technical', '65cb509a383ce.png', '&#34;Clean Energy Debate&#34; poster, which was held on the third day of the event', '2021-04-09', '04:00 PM - 08:30 PM (UTC +03:00) (09,23,28/04)', 'Al-Hijjawi Faculty for Engineering Technology && ONLINE', 'Under the patronage of IEEE Jordan section ,a three-day event organized by IEEE PES University of Jordan, Yarmouk University, PSUT student Chapters, BAU IEEE PES/IAS Joint chapter and WIE Jordan Affinity groups in collaboration with the IEEE Lebanon section was hold with the theme of the PES day worldwide celebration &#34;Clean Energy Revolution&#34; virtually through zoom.\n<br>It included many diverse segments and was planned with the help of our affinity group. Joining forces with other universities was rather epic and such an honor!'),
(3, 'Adopting Creative Ideas Workshop', 'online', '65cb51cf36fbc.jpg', '&#34;Adopting Creative Ideas&#34; announcement', '2021-07-12', '07:00 PM - 08:00 PM (UTC +03:00)', 'ONLINE', 'Online event held on Monday July 12 at 6 pm on Zoom. This even was mainly to connect students with Shamal Start (Luminous company, Irbid), two speaker from Shamal start attended the event:<br>1- Anwar Al-zmot (a.alzomt@shamalstart.com) presented good information and talked about all services and activities provided by shamal start, and she spoke in detail about the process of applying to the company to get funding for creative ideas.\n<br>2- Eng.Karam Khris has provided a great presentation to speak about all labs and equipment used in Shamal start and their applications.'),
(4, 'WIE Table Session', 'non-technical', '65cb52d8b2a10.png', 'Our table!', '2022-01-04', '09:00 AM - 05:00 PM (UTC +03:00)', 'Al-Hijjawi Faculty for Engineering Technology - Yarmouk University, Irbid', 'An introductory booth held in our faculty to introduce students to the group and gain traction from them and get to know our future members more in person. This small event was a small step for us and a huge leap for our group, as it highlighted the start of our rise to have the highest number of members in Jordan as an affinity group!'),
(5, 'Meet Our Members - Female Exercise Series', 'online', '65cb534466d3f.png', '&#34;Meet Our Members&#34; announcement', '2022-02-26', '07:00 PM - 08:30PM (UTC +03:00)', 'ONLINE', 'For our first day of the &#34;Female Exercise Series&#34;, Dr.Yusra Obeidat, our advisor, spoke more about the IEEE community in general and the WIE branch in particular, its benefits for students of engineering technology and also the WIE community in her capacity as the branch advisor at Yarmouk University.'),
(6, 'To Be Successful - Female Exercise Series', 'online', '65cb538fe9254.png', '&#34;To Be Successful&#34; announcement', '2022-02-27', '07:00 PM - 08:30PM (UTC +03:00)', 'ONLINE', 'The second workshop of our &#34;Female Exercise Series&#34; was concerned with time management, presented by one of our members (Leen Hammouri) as she is one of the students who excelled academically, and she gave participants several pieces of advice from her experiences in and out of college.'),
(7, 'Achieving Personal and Professional Success - Female Exercise Series', 'online', '65cb53bd70110.png', '&#34;Achieving Personal And Professional Success&#34; announcement', '2022-02-28', '07:00 PM - 08:30PM (UTC +03:00)', 'ONLINE', 'The thrid part of our &#34;Female Exercise Series&#34;. It was hosted by Mr. Jaafar Shehabat and revolved around benefiting students scientifically and practically in the field of management and marketing.'),
(8, 'IEEE Day - WIE Booth', 'non-technical', '65cb5504d1bba.jpg', 'Our booth organizers', '2022-03-20', '09:00 AM - 05:00 PM (UTC +03:00)', 'Al-Hijjawi Faculty for Engineering Technology - Yarmouk University, Irbid', 'Our yearly participation in planning and celebrating IEEE Day with our fellow societies and branch, as well as introducing our new, elected team and growing our network. This annual event always helps us add more members to our group the most and harnessed the attention of students in our faculty, allowing them to know more about us, what we offer and what we do.'),
(9, 'Requirements For Harmonization Of The Labor Market', 'technical', '65cb554331062.png', 'Our participants after the workshop', '2022-03-31', '01:00 PM - 04:00 PM (UTC +03:00)', 'SAGO Coffee House, Irbid', 'A two-day workshop presented by Mr. Jaafar Shehabat in which he spoke all about the requirements of the labor market, how to meet them, how to put yourself out there and hunt for opportunities, how to write your own CV and how to start up your Linked-In account, which are all important for students to put them on the right way to pursuing their career life.'),
(10, 'Charity Dinner', 'non-technical', '65cb557aeb62e.jpg', 'Our members organizing the dinner', '2022-04-27', '02:00 PM - 09:00 PM (UTC +03:00)', 'Tarek Park, Irbid', 'Out of our belief in the importance of charity and its significant effect on society, we organized a charity feast in Tareq park in the city of Irbid for orphans in Ramadan, a holy month in Islam. It was completely (and voluntarily) planned and executed by our affinity group and we made the most out of the day with the kids as we provided multiple interactive activities for them before and after dining.<br>Seeing everyone working hand in hand for the sake of putting a smile on the children&#39;s faces was the most precious memory ever!'),
(11, 'Fab-Lab Tour', 'technical', '65cb55eab44e9.jpg', 'Our members in front of their destination', '2022-06-22', '08:00 AM - 12:00 PM (UTC +03:00)', 'FabLab Irbid, Irbid', 'Our group visited Fab Lab (Intelligent Manufacturing Lab), where we were introduced to the technology provided there as well as its future. <br>This tour was all thanks to our partners Shamal-Start which made sure we make the most of our trip with the time we had!'),
(12, 'Online Python Basics Workshop', 'online', '65cb563a0af4f.png', 'The workshop&#39;s announcement', '2022-06-30', '06:00 PM - 08:30 PM (UTC +03:00)', 'ONLINE', 'An online, free workshop concerned with Python basics, tutored by one of our student members who has expertise in the field of programming especially using Python, providing her with outreach and benefiting others as Python is such a hot topic in modern days.'),
(13, 'ESBC 2022', 'technical', '65cb566598fef.jpg', 'IEEE organizing team of ESBC 2022', '2022-07-02', '10:00 AM - 08:30 PM (UTC +03:00)', 'Yarmouk University, Irbid', 'A conference hosted in Yarmouk University, themed around the significant change of communication throughout the history and its evolution. It&#39;s one of the biggest IEEE conferences to be held. Students and professors from all over Jordan attended and speakers from various engineering disciplines were invited.\n<br>Our group was a big organizer during the conference, side by side with the entire student branch as well as our chairwoman being a moderator and the presenters were also members of our affinity group. We also made sure to include multiple workshops and seminars within the conference.'),
(14, 'Orphanage Visit', 'non-technical', '65cb56d81f04d.jpg', 'Our memebrs on their way out!', '2022-08-01', '8:00 AM - 02:30 PM (UTC +03:00)', 'Zakat Al-Kheir, Irbid', 'Stemming from our beleif in the importance of voluntary work and charity, we organized a visit to the association (Zakat Alkhier), where our group members spent a day full of various activities with the orphans living there. It was a visit full of love, passion, and enthusiasm with the children where memories were made and an impact was left.'),
(15, 'Crown Prince Foundation Trip', 'technical', '65cb753ce03ff.jpg', 'Our memebers inside the foundation', '2022-08-11', '10:00 AM - 03:20 PM (UTC +03:00)', 'Crown Prince Foundation, Amman', 'A trip in which we got acquainted with the volunteering and voluntary campaigns offered by the foundation, namely Nahno organization, followed by a tour where we were shown around Al-Hussein Technical University as well as Techworks, which is a fabrication lab open for people&#39;s use there with the help of employees and their guidance on how to handle the equipment available.\n<br>We had the opportunity of meeting wonderful, youthful minds as well as their innovative ideas and engaging with them in an open discussion as well as being allowed to start our own voluntary ideas with their help!'),
(16, 'IEEE Day - WIE Booth', 'non-technical', '65cb75b5e4d9f.jpg', 'Our committee team and our booth', '2022-10-17', '10:30 AM - 03:00 PM (UTC +03:00)', 'Al-Hijjawi Faculty for Engineering Technology - Yarmouk University, Irbid', 'A celebration of IEEE day on our university campus alongside the other societies in IEEE- Yarmouk Branch. Our main focuses were supporting females of our community with their hobbies or small businesses as well as ganining traction and making our affinity group as well as out new committee known to the faculty!\n<br>We provided fun activities, making sure everyone leaves their print at our booth, appetizers, orientation for all other students and were honored with new members added to our WIE family and more connections made with our fellow socities!'),
(17, 'Coursera Workshop', 'technical', '65cb7620b72c1.jpeg', 'The speaker at the workshop, Eng. Altayyeb Rizq', '2022-11-17', '12:30 PM - 01:30 PM (UTC +03:00)', 'Fayez Al-Khasawneh Stadium - Al-Hussein Bin Talal Library - Yarmouk University, Irbid', 'A short workshop, kindly presented to us by our fellow engineering student Al-Tayyeb Rizq to inform students on how to get skills and accredited certifications outside their curriculum using online courses such as Coursera or Udemy to boost their selves and their CVs, as well as informing them of some internships, both local and international.'),
(18, 'Online Machine Learning Workshop', 'online', '65cb7669b71d3.jpeg', 'The workshop&#39;s announcement', '2022-12-20', '08:00 PM - 10:30 PM (UTC +03:00)', 'ONLINE', 'An online workshop, presented to us by Shai for AI, and tutored by Eng. Yahea Al-Ashqar, centered around Machine Learning in today&#39;s world, its uses and benefits and importance. Attended by a large number of students from all IEEE socities, the workshop was a great success.'),
(19, 'New Year&#39;s Welcoming Session', 'non-technical', '65cb76b9d639d.jpeg', 'Our team alongside two of our attending professors', '2023-01-05', '11:30 AM - 02:30 PM (UTC +03:00)', 'Al-Hijjawi Faculty for Engineering Technology - Yarmouk University, Irbid', 'A gathering for a number of professors and our fellow students with the goal of having a good time after midterms and having open discussions, keeping the communication between students and their tutors lively as well as between the students among themselves.<br>\nTwo workshops were also included as part of the session, the first being one revolving around the basics of graphic design (by: Eng. Awes Al-Soudi) and the other around the basics of Python (By: Eng. Afnan Al-Sager).\nThe session was wrapped up with a trivia game played on Kahoot, with small gifts given to the winners with everyone having a wonderful time and making memories!'),
(20, 'Online Matlab Basics Course', 'online', '65cb772e041bd.jpg', 'The course&#39;s announcement', '2023-02-19', '09:00 PM - 10:00 PM (UTS +03:00), Twice a week', 'ONLINE', 'As Matlab is one of the most important softwares used by engineers worldwide today, we administrated a one month, online course going over all Matlab basics, presented by one of our volunteering members and fellow students! Starting in February 19th, with two classes a week (Sundays and Thusdays), the course has been such an attraction to students with 243 participants seeking this technical skill out!'),
(21, 'Time Management Workshop', 'non-technical', '65cb777940167.jpeg', 'Some attendees during the workshop', '2023-02-21', '11:00 AM - 03:00 PM (UTC +03:00)', 'Zawaya Space, Irbid', 'A practical workshop, a result of our collaboration with Riwaq Al-Ataa about the importance of time management and how to acheive it in a manner that maximizes productivity while maintaining balance. It was presented by Issa Abu-Libdeh of Riwaq&#39;s voluntary team. Practical activities given throught the workshop allowed participants to practice the skills being taught and kept everyone interactive and invested!'),
(22, 'Introductory Seminar', 'non-technical', '65cb77bb32823.jpeg', 'Our team alongside JUST&#39;s WIE team', '2023-03-08', '10:30 AM - 01:30 PM (UTC +3:00)', 'Jordan University of Science and Technology, Irbid', 'An introductory event hosted on International Women&#39;s Day with the purpose of introducing the JUST-WIE branch to students and professors, informing them of their vision and allowing new members in. It also aimed to activate their role and increase their participation in the Jordan Section, since JUST is one of the most known universities in the north.\n<br>Our branch was invited to the seminar as well as Dr. Yusra Obeidat (our advisor) was a speaker there.'),
(23, 'From Venus To Universe', 'non-technical', '65cb7817e042c.jpg', 'Our ambassador for the event (right) accompanied by attendees from our group', '2023-03-09', '9:30 AM - 2:30 PM (UTC+03:00)', 'Al-Balqaa Applied University, Amman', 'An event hosted by Al-Balqaa Applied University, in Amman, mainly concerned with integrating in the labor market and entrepreneurship when it comes to women with attendees from all across Jordan. We provided Al-Balqaa&#39;s branch with our support and were more than thrilled to be at their gathering! As we believe in female empowerment and outreach, our Media manager (Bayan Jehad) was chosen as an ambassador to represent us in this conference.'),
(24, 'Women Are the Force of Change In the World', 'non-technical', '65cb79198db79.jpeg', 'Organizing team alongside IEEE panel speakers', '2023-03-21', '10:30 AM - 4:30 PM (UTC+03:00)', 'Al-Hijjawi Faculty for Engineering Technology - Yarmouk University, Irbid', '&#34;Women Are The Force Of Change In The World&#34; is a WIE event, affiliated with IEEE, taking place on March 31st to celebrate both Women&#39;s History Month and Mother&#39;s Day with attendance from all across Jordan, with the aid of our community and sponsors. Our aim in this event is to shed light on some remarkable success stories starred by inspiring women of different ages and professions, provide outreach to the youth and put students in a fun, educational atmosphere that allows them to interact with the different speakers from different backgrounds, telling their different stories, and the WIE committee and community. We also provided different forms of media in our segments such as videos, trivia games and more, making our event start at 10:30 a.m and end at approximately 4:30 p.m, lasting for most of the day!'),
(25, 'Independence Day Booth', 'non-technical', '65cb79b9e9e4b.jpeg', 'Our team with two of the participating volunteers', '2023-05-24', '10:30 AM - 2:30 PM (UTC +03:00)', 'Al-Hijjawi Faculty for Engineering Technology - Yarmouk University, Irbid', 'As a celebration of our dear country and cherishing of this land, our group set up a booth with some little trinkets, and most importantly Arabian coffee, a symbol of our culture, to hand out to students and all staff memebers working in our faculty, reminding of the role of women in uplifting the nation through the power of knowledge or by raising generations and showing our love for the memory of our independence which will always be held close to our hearts.'),
(26, 'JEEIT - WIE Booth', 'technical', '65cb79f60ad17.jpg', 'Our representative Eng. Ahlam Zyod (left) at the conference', '2023-05-23', '09:00 AM - 06:00 PM (UTC +03:00)', 'Landmark Hotel, Amman', 'Held in the capital city, Amman, The IEEE Jordan International Joint Conference on Electrical Engineering and Information Technology was attended by two of our remarkable members, nominated by our affinity group advisor Dr. Yusra Obeidat, where they representated us through the booth placed there especially for Women In Engineering.\n<br>The conference provided a one-of-a-kind forum to discuss different approaches and findings in using applied electrical engineering and information technologies to solve national issues that face Jordan and other developing countries. The main points which JEEIT shed light on included power and drives, renewable energy, nano-tech & electronics, computer networks and other topics concerning engineers in Jordan.'),
(27, 'IEEE Jordan Section WIE Open Day', 'non-technical', '65cb7bdabce96.jpeg', 'Our organizing and volunteering team for the day!', '2023-07-09', '10:00 AM to 05:00 PM (UTC +03:00)', 'Prince Hussein Building - Yarmouk University, Irbid', 'Sponsored by the university president, Professor Islam Massad, our first-of-a-kind event titled &#34;IEEE Jordan Section WIE Open Day&#34; was concluded and hosted at Yarmouk University, as its students worked with the help of other attending universities to make this day happen. Professor Mwaffaq Al-Omoush, the vice-president of academic affairs, attended the open day on behalf of the president, given that the purpose of this event was to enforce communication and connections among the members of engineering communities as a whole, and Women in Engineering communities in specific as well as expanding our network to reach the largest number of engineers from both genders and offering them an opportunity to explore the field of engineering and the chances it holds. Including a number of scientific and recreational segments in addition to extra-curriculum activities, the open day joined all WIE groups from all over the country hand in hand in our university, and because of this collaboration, the event has proven itself to be a great success for all participating universities and colleges, namely: Yarmouk University, JUST, Mu&#39;tah University, Balqaa Applied University and Al-Husn College, under the supervision and organization of Jordan Section&#39;s WIE chairwoman Dr. Yusra Obeidat.\r\n\r\n'),
(28, 'Meeting The IEEE President', 'non-technical', '65cb7d1160443.jpeg', 'Our members alongside Professor Saifur Rahman', '2023-08-29', '09:00 AM to 11:00 AM(UTC+03:00)', 'Yarmouk University, Irbid', 'We had the honor of meeting with Professor Saifur Rahman, the president and CEO of IEEE in our university. The meeting, which was attended by a group of professors and doctors from the engineering faculty as well as the socities and affinity groups of the IEEE Yarmouk University student chapter, included open discussions regarding the chapter&#39;s achievements, future plans, impact and needs, which were all listened to and embraced by Professor Saifur.'),
(29, 'Engineering Pathways- Online Planning Meeting', 'online', '65cb833f10b9a.png', 'A screenshot from our meeting', '2023-09-16', '06:00 PM to 07:30 PM (UTC+03:00)', 'ONLINE', 'The core WIE team met up with the volunteers and speakers of the &#34;Engineering Pathways: Navigating Your Future&#34; event, where we all practiced and planned out the event under the supervision of our advisor, Dr. Yusra Obeidat and with her help.'),
(30, 'Engineering Pathways: Navigating Your Future', 'technical', '65cb84c705b13.jpeg', 'Our speakers with the attendees of the event!', '2023-09-17', '08:45 AM to 10:30 AM (UTC+03:00)', 'Model School, Irbid', 'We firmly believe in the necessity of educating Jordanian school girls about various engineering disciplines and encouraging them to prosper in such fields as well as broadening their understanding of engineering and connecting it to the real world, our WIE affinity group at Yarmouk University had a successful visit to the Yarmouk Model School in Irbid, where we delivered a detailed lecture to tenth-grade and junior school girls, in which we covered the following:\n<br>* Introduction to the Institute of Electrical and Electronics Engineers.\n\n<br>* Introduction to the Women in Engineering community.\n\n<br>*An overview of engineering and its various specialties and fields.\n\n<br>* A practical experiment presentation from the field of Electronics Engineering, where the girls were allowed to experience hands-on work with basic electronic components.\n<br><br>The interactive lecture concluded with questions from the schoolgirls about engineering, its different specialties, and opportunities for advancement and work in these fields.\n‏<br>In conclusion, we would like to thank the administration of the Model School, represented by the school&#39;s principal, Sanaa Lababneh, and the academic counselor, Maisoun Jaradat, for their cooperation in coordinating and successfully conducting this event. We also extend our gratitude to everyone who contributed to the success of this activity. ‏Stay tuned for more special events from our community that will shape goals and leave a lasting impact.'),
(31, 'Breast Cancer Awareness', 'non-technical', '65cb8670c7cff.jpg', 'The lecture attendees alongside our speaker Dr. Mohamad Kharashgah', '2023-10-16', '12:00 PM to 01:00 PM (UTC+03:00)', 'Al-Hijjawi Faculty for Engineering Technology - Yarmouk University, Irbid', 'In light of October being the month of Breast Cancer Awareness, we held a one hour lecture, given by Dr. Mohamad Kharashgah from our university, to our community of students and members.\r\n\r\nThe lecture began with our chairwoman, Tamara Alazzam, as we paid respect and gave condolenses to our neighboring countries due to the crisis they&#39;re going through before introducing the doctor who discussed the causes of breast cancer, the ways of treating it, the importance of early diagnosis and self diagnosis and checking of the disease. He also answered any questions the attendees had and helped them bust some myths regarding breast cancer.\r\n\r\nThe lecture was ended by our advisor, Dr. Yusra Obeidat, who thanked the doctor for his time and affirmed the importance of such information for women of all ages, especially young ones.\r\n');

-- --------------------------------------------------------

--
-- بنية الجدول `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `summary` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'unread',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `headline` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `news` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `submissions`
--

DROP TABLE IF EXISTS `submissions`;
CREATE TABLE IF NOT EXISTS `submissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
