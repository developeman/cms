-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2015 at 06:51 AM
-- Server version: 5.5.42-37.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoubrap_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pre` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `superman` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `pre`, `superman`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Gad', 'eng.ahmedmgad@gmail.com', '$2y$10$3/7HGB7.oJEU2Np1CFwL2eh9tD0zsKFdOgG46OsQN5nhG7a00BALG', 'brCNJOAJxzjaYNydoymwzT0g2IBNi3zxk2ROJOI6cckm3qz38Emg51IH4U8A', 'settings,users,cats,articles,pagesSys,mail', 1, '2015-09-24 21:14:40', '2015-09-26 03:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `cat_id`, `content`) VALUES
(1, '1', 1, '1111111111111111111'),
(2, 'احمد', 1, '<p>سسسسسسسسسسسسسسسسسسسسسسسسسسس</p>\r\n'),
(3, 'احمد', 1, '<p>سسسسسسسسسسسسسسسسسسسسسسسسسسس</p>\r\n'),
(4, 'احمد', 1, '<p>سسسسسسسسسسسسسسسسسسسسسسسسسسس</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE IF NOT EXISTS `cats` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ct_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `ct_id`) VALUES
(2, 'محمد ', 0),
(3, 'احمد', 0),
(4, 'احمد', 0),
(5, 'جاد', 1),
(6, 'عثمان', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_09_26_081224_create_password_resets_table', 2),
('2015_09_28_153111_settings', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  `url` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `display`, `url`, `sort`) VALUES
(1, 'الرئيسية', '<h2 style="text-align:right">&nbsp;</h2>\r\n\r\n<div>\r\n<p style="text-align:right"><strong><span style="font-size:22px"><u><span dir="ltr">رؤية المدرسة</span></u></span></strong></p>\r\n\r\n<table align="center" border="2" id="table4" style="width:98%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p dir="rtl"><strong><span style="font-size:22px">بان تلتزم مدرستنا بتعليم عالى الجودة يخاطب العقل وينمى ويواكب التطور المعرفى والعصرى واعداد اجيال قوية خلقيا وبدنيا وعمليا نافع لوطنه ومتفاعل مع مجتمعة قادرا على الاداء والتميز فى ضوء &nbsp;الاستفادة من التكنولوجيا بواسطة عناصر بشرية ممتازة &nbsp;وبمشاركة مجتمعيه فعالة.</span></strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style="clear: both; text-align: right;">&nbsp;</div>\r\n\r\n<p style="text-align:right"><strong><span style="font-size:22px"><u><span dir="ltr">-:رسالة المدرسة</span></u></span></strong></p>\r\n\r\n<div>\r\n<table border="1" id="table5" style="width:98%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style="text-align:right"><strong><span style="font-size:22px">اعداد طلاب قادرين على تحمل المسؤلية مرتبطين بمجتمعهم محافظين على عاداتهم و قيمهم الدينية</span></strong></p>\r\n\r\n			<p style="text-align:right"><strong><span style="font-size:22px">ارساء القيم الاخلاقية وروح التربية من اجل المواطنة وروح العمل الجماعى</span></strong></p>\r\n\r\n			<p style="text-align:right"><strong><span style="font-size:22px">ضمان بيئة صحية امنة للطلاب والعاملين بالمدرسة</span></strong></p>\r\n\r\n			<p style="text-align:right"><strong><span style="font-size:22px">الحرص على مقابلة اولياء الامور بصفة دورية والتواصل بكافة الطرق بهدف المتابعة والمشاركة</span></strong></p>\r\n\r\n			<p style="text-align:right"><strong><span style="font-size:22px">انشاء موقع للمدرسة على شبكة الانترنت لتقديم رؤية ورسالة المدرسة و مايستجد بها من انشطة</span></strong></p>\r\n\r\n			<p style="text-align:right"><strong><span style="font-size:22px">تكريم المتميزين من تلاميذ و معلمين واولياء امور واختيار العنصر المثالى منهم</span></strong></p>\r\n\r\n			<p style="text-align:right"><strong><span style="font-size:22px">التنويع فى استخدام المعلمين لاساليب وطرق التدريس التى هدفها تعليم التلاميذ التفكير وحل المشكلات وربط ذلك بالحياة اليومية</span></strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style="text-align:right">&nbsp;</p>\r\n\r\n<table border="1" id="table8" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style="margin-left:156.2pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">&nbsp;يلا نحب بلدنا بجد</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">يلا نحب بلدنا بجد&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; والخير فيها يفوق الحد</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">نبني نعمر للمستقبل&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ولاولادنا الخير يمتد</span></span></strong></p>\r\n\r\n			<p style="margin-left:156.2pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">**************</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">ايد عل ايد مليانه احساس&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الخير&nbsp; يملا&nbsp; قلوب الناس</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">احمد جرجس محمود مرقس&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ميرنا وفاطمة هناء وايناس</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">&nbsp;هٌم وغيرهم وبمجهودهم&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; يبقي الحب في مصر اساس</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">وبا خلاصنا نعلم غيرنا&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ان نجاحنا طريقة الكد</span></span></strong></p>\r\n\r\n			<p style="margin-left:156.2pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">&nbsp;يالا نحب بلدنا بجد</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">مصرنا حب وخير وسلام&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; مصرنا حق وعدل تمام</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">وبايدنا مصر هتتقدم&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; بالافعال مش بس كلام</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">ياشباب بلدي انتو املنا&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; انتوا الواقع والاحلام</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">انتو صمام الامن في بلدي&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; انتوا النيل والسيل والسد</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">يلا نحب بلدنا بجد والخير&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; والخير فيها يفوق الحد</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px"><span dir="RTL">نبني نعمر للمستقبل&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ولأولادنا الخير يمتد</span></span></strong></p>\r\n\r\n			<p style="margin-left:7.1pt; text-align:right"><strong><span style="font-size:22px">ا/ اشرف شحاتة</span></strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n', 1, 'http://cms.ahram/الرئيسية', 1),
(5, 'قسم فريق الجودة', '<h2 dir="rtl" style="text-align: justify;"><span style="font-size:20px">قسم فريق الجودة</span></h2>\r\n\r\n<p dir="rtl" style="text-align: justify;"><span style="font-size:20px">اعلم عزيزى الطالب انك تنتمى الى مدرسة معروفة بالجدية و الانضباط و عدم السماح بالتسيب بأى صورة من الصور وعليك ان تتجاوب مع هذه التعليمات منذ اللحظة الاولى لدخولك المدرسة و تحرص كل الحرص على مكانتك فيها وسوف يتم مكافأة الطلاب الملتزمين بالتعليمات التالية من الادارة المدرسية وأعطائهم شهادة تقدير لانضباطهم داخل المدرسة والتعليمات كالتالى :</span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">1-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">عدم الخروج من الفصل الا للضرورة و لا يجب الخروج بتاتا الا بعد إذن مدرس الحصة و المشرف و استخدام الكارت المخصص لخروج الطالب من الفصل و عدم استخدام الكارت يعرض الطالب للعقاب .</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">2-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">تجنب إتلاف النباتات و المشى على المساحات الخضراء فالطالب المثالى يحافظ على مدرسته و ينصح زملائه بذلك .</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">3-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">تجنب إثارة الضجيج و الشغب و التهريج بالايدى و ضرب زملائك فقد يؤدى زملائك ...فقد يؤدى ذلك الى إصابة احدهم ويعرضه للخطر</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">4-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">موعد الطابور المدرسى الصباحى هو الساعة 8:00 ويجب على الطالب التواجد قبل الموعد بخمس دقائق و عدم الانتظار طويلا والتجمع قبل الطابور بوقت كبير يعرض الطالب للاذى كما ان حضور الطالب بعد موعد الطابور يعرضه للعقاب .</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">5-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">عدم الصعود للفصول قبل بداية الطابور لأى سبب من الاسباب</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">6-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">الالتزام بالهدوء التام خلال اداء مراسم الطابور بما يتضمن من تدريبات رياضية وفقرات الاذاعة المدرسية و أداء تحية العلم مع ترديد الهتاف بمنتهى القوة والحماس</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">7-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">المدرسة لا تغلق ابوابها امام الطلبة .... وكل طالب يتأخر عن الحضور فى الموعد الرسمى يجب عليه الانتظار مع زملائه المتأخرين لحين الانتهاء من الطابور حيث يسمح لهم بالدخول و عرض اسباب التأخير و التعهد بعدم تكرار ذلك مرة اخرة و كتابة ذلك فى دفتر خاص حتى يتم اطلاع ولى الامر عليه فى حالة تكرار التأخير .</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">8-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">عدم التحرك من الطابور الا بصبحة مدرس الحصة الاولى</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">9-&nbsp;&nbsp;&nbsp;&nbsp;<span dir="RTL">عدم اصطحاب اية ممنوعات الى داخل المدرسة مثل الصور و الفيديو وشرائط الكاسيت و اسطوانات الكمبيوتر و الفلاشات و كروت الميمورى و الآلات الحادة بكافة اكالها .. وكل من يضبط معه احد هذه الاصناف يتعرض للفصل</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">10-<span dir="RTL">الطاعة اتامة لجميع الاساتذة وعدم الاخلال بالنظام المدرسى السائد فى المدرسة .</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">11-<span dir="RTL">المحافظة على المقاعد واثاث المدرسة وعدم الكتابة على التخت و المناضد و الجدران و كذلك عدم العبث بمفاتيح الكهرباء مع مراعاة حسن استخدام دورات المياه</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">12-<span dir="RTL">يتم حرمان الطالب الغير منضبط من حصص التربية الرياضية كما لا يحق له الاشتراك فى اى نشاط داخل المدرسة مثل الرحلات و فريق المدرسة لكرة القدم و السلة و الطائرة</span></span></p>\r\n\r\n<p dir="RTL" style="text-align: justify;"><span style="font-size:20px">13-<span dir="RTL">&nbsp;يتم ابلاغ ولى امر الطالب المشاغب اولا بأول ... و توثيق ذلك .</span></span></p>\r\n', 1, 'http://cms.ahram/قسم_فريق_الجودة', 3),
(6, 'الانشطة المدرسية', '<p style="text-align: right;"><span style="font-size:28px"><strong>الانشطة المدرسية</strong></span></p>\r\n\r\n<p style="text-align: right;"><span style="font-size:22px"><em><u><strong>النشاط الفنى</strong></u></em></span></p>\r\n\r\n<p style="text-align: right;"><span style="font-size:22px"><strong>اتقدم بكلمتي هذه لجميع احبابي من محبين الفن الذين لديهم احاسيس مرهفه لانفعالاتنا وافاقنا وسيلة لتكامل شخصييتنا فاتحدث باِعتباري رئيس قسم مادة التربية الفنية بمدرسة شبرا الاعدادية بنين&nbsp;&nbsp;<u>ا/ علياء عبد المنعم</u>&nbsp;وعن اسرتنا واساتذه قسم التربية الفنية فالقسم يضم مجموعة من المعلمين الاوائل الحاصلين علي بكالريوس ورسالات ماجيستير ولهم خبره عالية في مجال الفن حيث قمنا جميعا بتبني التلاميذ الموهوبين من خلال تنمية احاسيسهم الفنية حيث التجريب والممارسة والروْية فثيعلمهم كيفية روْية الطبيعة من حولنا التي خلقها الله في اجمل صورة والتي تنمي لدي الفرد حاسة تجعله يستجيب استجابة انفضالية ذات طابع جمالي .. فالتربية الفنية تلعب دورا كبيرا في شغل اوقات الفراغ بعد انتهاء اليوم المدرسي واثناء العطلات فالفن يغرس وينمي سلوكيات حميدة . وقد انتج القسم بالاشتراك مع التلاميذ في مدار السنوات السابقة اعمال فنية رائعة واقمنا معارض كبيرة واشتركنا باللوحات الفنية بمعارضة الادارة وكان هناك تنوع في استخدام الخامل من البيئة.ينمي لدي الفرد عاطفة في تقدير الخامات .&nbsp;&nbsp; ان التربية الفنية مادة محبوبة في نفوس طلابنا ولقد حازت التعبيرات الفنية التي رسمها التلاميذ اعجاب وتقدير المحافل الدولية وحصل الكثير منهم علي جوائز دولية لتميز انتاجهم الفني علي انتاج سائر ابناء الشعوب لاخري وهذه مفخرة لنل جميعا . التربية الفنية منارا لعقائدنا وافكارنا وهاديا لاخلاقنا وسندا مفسرا لانفعالتنا لنستكمل بناء حضارة مصر وتقدمها بفكرنا النتطور المبدع وآدائنا المتقن المتميز</strong></span></p>\r\n\r\n<p style="text-align: right;"><span style="font-size:22px"><strong>&nbsp;والله ولي التوفيق</strong></span></p>\r\n', 1, 'http://cms.ahram/الانشطة_المدرسية', 4),
(7, 'المدرسة المنتجة', '<h2 style="text-align:right">المدرسة المنتجة</h2>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong><u>تعريف المدرسة المنتجة</u></strong></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>ومن خلال فكرة إضافة لإنتاج إلى المدرسة لن نبخس العملية التعليمية حقهافهى الأساس وجاءت فكرة المدرسة المنتجة لدعم العملية التعليمية وتحقيق المزيد من ارتباط الطالب بمدرسته وزيادة انتمائه لها مما يؤدى إلى نتائج إيجابية تنعكس على كل من ذات الطالب والعملية التعليمية ذاتها</strong></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>الوحدة المنتجة هى عملية إرساء نظرة حديثة مختلفة ومتطورة لدور المدرسة فى المجتمع لنضمن من خلالها ربط المدرسة بالمجتمع ودمج المجتمع فى المدرسةوكذلك تعميق ولاء الطالب وإنتمائه للمدرسة</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>والمجتمع والعمل على جعل المدرسة بيئة تربوية تجذب الطلاب اليها بدلاً من ان تبتعد عنها وكذلك البحث عن اساليب جديدة يمكن من خلالها مواجهة مشكلات تسرب الطلاب من التعليم وعلاج مشكلات عماله الأطفال بطرق عملية غير تقليدية وكذلك خلق أليه جديدة لمستقبل</strong></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>التعليم فى مصر من خلال توفير فرص حقيقة لتعويد الطلاب على ادوارهم المستقلبية</strong></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>ينصح مفهوم الوحدة المنتجة فى تحويل المدرسة إلى كيان فعال فى الاقتصاد الوطنى وتشجيع</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>الأجيال القادمة على اقتحام عالم الأعمال بإقدام وفكر علمى وعلمى متطور وكذلك تحويل المدارس إلى حضانات لرجال الأعمال للمستقبل مما يساعد على خلق مجتمع من المستثمرين صغار السن تكون لديهم القدرات والمهارات التى تساعدهم على التعامل بذكاءووعى مع اقتصاد عالمى معقد من إبرز سماته سرعة التبديل والتغير</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>يمثل بناء الشخصية المنتجة هدفا اساسيا تسعى الوزارة إلى تحقيقه انطلاقا من رؤيتها المستقبلية التى تتمحور حول تحقيق مبدأ((التعليم للتميز والتميز للجميع)) بما يستوجبه ذلك من ترسيخ نوعية تربوية جديدة يتم من خلالها:-</strong></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>التحول من تعليم ينمى ثقافة الاستهلاك إلى أخرينمى ثقافة الانتاج</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>التحول من تعليم ينمى ثقافة الحد الادنى إلى أخر ينمى ثقافة الاتقان والجودة</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>التحول من التعليم محدود الامد الى تعليم مدى الحياة</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>ربط مفهوم التعليم بالعمل</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>إكساب الطلاب مهارات التفكير واسلوب حل المشكلات بطريقة علمية وواقعية</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&nbsp;&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>تدريب الطلاب على فنون ومهارات الأعمال التجارية كالتفاوض والتسويق ودراسات الجدوى والتعامل مع ديناميات العرض والطلب فى السوق وإدارة المشروعات الصغيرة...الخ الامر الذى يمكنهم من بدء مشروعات صغيرة بعد تخرجهم</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>تدريب الطلاب قيم التخطيط والتنظيم,الدقة والامانة,احترام العمل وتقدير العمل اليدوىالصبر وتحمل المسؤولية ,تقدير العمل التعاونى والعمل ضمن فريق الانتاج والادخار, احترام جهد الاخرين ,الشجاعة فى مواجهة الصعاب,الابداع والابتكار,التفكرفى العواقب والتحسب للاحتمالات المختلفة,تقدير الربح ومواجهة مخاطر الخسارة</strong></span></span></p>\r\n\r\n<p dir="RTL" style="text-align:justify"><span style="font-size:20px"><strong>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="RTL"><strong>الإفادة من الارباح التى يمكن ان تحققها المدرسة فى تطوير ذاتها بذاتها</strong></span></span></p>\r\n\r\n<p dir="rtl" style="text-align:justify"><span style="font-size:20px"><strong>اهداف المدرسة المنتجة<br />\r\n<br />\r\n1. خلق جيل مبدع ومبتكر من رجال الأ واصحاب الفكر الصناعى التجارى الحديث<br />\r\n2. إكساب الطلاب مهارة عمل مشروع مدر للربح والقدرة على إدارته وعمل دراسة الجدوى الناجحة للمشروع ودون انتظار الوظيفة الحكومية.<br />\r\n3. تنمية المهارات العلمية والعملية من خلال مشاركة الطلاب ابتداء من التفكير فى المشروع وإعداد دراسات الجدوى وتنفيذ المشروع وتقييمه ومتابعة نجاح المشروع<br />\r\n5. تسليح ابنائنا بالقدرات والخبرتا العلمية للتعامل مع سوق العمل<br />\r\n6.القضاء على الفجوة بين المدرسة وسوق العمل<br />\r\n8.إعطاء ابناءنا التقة فى قدرتهم على المبادرة ولأعتماد على الذات.<br />\r\n9. توفير موارد ذاتية للمدرسة تحقق تطوير المدرسة وإجراء بعض الاصلاحات الأساسية وشراء بعض الأجهزة ومنح حوافز للقائمين علىالمشروع<br />\r\n11. معالجة مشاكل عمالة الاطفال والتسرب الدراسى بطريقة عملية وغير تقليدية<br />\r\n12 .التحول من ثقافة الاستهلاك الى ثقافة الانتاج<br />\r\n13 .إكساب الطلاب قيم التخطيط والتنظيم والدقة والامانة وإحترام جهد الاخرين والشجاعة فى مواجهة الصعاب والابداع والابتكار</strong></span></p>\r\n', 1, 'http://cms.ahram/المدرسة_المنتجة', 5),
(8, 'إدارة المدرسة', '<h2 style="text-align:center"><img alt="" src="/kcfinder/upload/images/Untitled%20Diagram%20(1).png" style="height:355px; width:500px" /></h2>\r\n', 1, 'http://cms.ahram/إدارة_المدرسة', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `status_msg` text COLLATE utf8_unicode_ci NOT NULL,
  `copy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instegram` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`title`, `description`, `meta_description`, `email`, `status`, `status_msg`, `copy`, `facebook`, `google`, `twitter`, `youtube`, `instegram`) VALUES
('مدرسة شبرا الإعدادية', 'شس1', 'ي', 'شسي', 1, 'شسي', 'جميع الحقوق محفوظة لمدرسة شبرا الإعدادية <br>	تصميم و تطوير <a href="http://alahram-technology.com" target="_blank">الأهرام تكنولوجى</a>', 'شس', 'يش', 'سي', 'سي', 'س');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_type_index` (`type`), ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
